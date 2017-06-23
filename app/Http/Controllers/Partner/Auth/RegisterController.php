<?php

namespace App\Http\Controllers\Partner\Auth;

use App\Http\Controllers\BaseController;
use App\Mail\CustomerAccountActivation;
use App\Model\Category;
use App\Model\City;
use App\Model\Commune;
use App\Model\Country;
use App\Model\Customer;
use DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = "partners/dashboard";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('guest');
    }

    //===========For user register===========//


    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegisterForm()
    {
        $countries = Country::where('status', 1)->whereNull('country_id')->pluck('name', 'id');
        $cities = City::where('status', 1)->whereNotNull('country_id')->whereNull('city_id')->pluck('name', 'id');
        $communes = Commune::where('status', 1)->whereNotNull('country_id')->whereNotNull('city_id')->pluck('name', 'id');
        $categories = Category::with('sub_category', 'products')->where('status', 1)->whereNull('category_id')->get();
        return view('partner.auth.register', compact('categories', 'countries', 'cities', 'communes'));
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return Customer
     */
    protected function create(array $data)
    {
        //Generate Temp enrollment ID Job id
        $records = Customer::all()->count();
        $current_id = 1;
        if (!$records == 0) {
            $current_id = Customer::all()->last()->id + 1;
        }
        $enroll_id = 'TMP_CM' . date('Y') . str_pad($current_id, 5, '0', STR_PAD_LEFT);
        $cus_code = 'C' . date('mY') . str_pad($current_id, 5, '0', STR_PAD_LEFT);
        $array_data = [
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'verified_code' => str_random(50),
            'temp_enroll' => $enroll_id,
            'cus_code' => $cus_code,
            'country_id' => $data['country_id'],
            'city_id' => $data['city_id'],
            'commune_id' => $data['commune_id'],
            'addresses' => $data['addresses'],

        ];
        return Customer::create($array_data);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  request $request
     * @return string
     */
    protected function saveCustomerRegister(Request $request)
    {
        $data = $request->all();
        $messages = array(
            'first_name.required' => 'Please enter first name',
            'last_name.required' => 'Please enter last name',
            'phone_number.required' => 'Please enter mobile phone',
            'email.required' => 'Please enter email',
            'email.unique' => 'This email is already taken. Please input a another email',
            'password.required' => 'Please enter password',
            //'terms.required' => 'Please accept to our term and condition',
            'country_id.required' => 'Please select your country',
            'city_id.required' => 'Please select your city',
            'commune_id.required' => 'Please share us your commune location',
        );

        $rules = array(
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone_number' => 'required|max:14',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'country_id' => 'required|integer',
            'city_id' => 'required|integer',
            'commune_id' => 'required|integer',
            'addresses' => 'required|string',
        );
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();
        try {
            $customer = $this->create($data);
            $email = new CustomerAccountActivation(new Customer([
                'first_name' . ' ' . 'last_name' => $customer->first_name . ' ' . $customer->last_name,
                'verified_code' => $customer->verified_code,
            ]));
            Mail::to($customer->email)->send($email);
            DB::commit();
            if ($customer->id) {
                if ($this->guard()->attempt($credentials)) {
                    return redirect()->route('partners.dashboard')
                        ->with('success', 'Please check your email to activate your account.');
                } else {
                    DB::rollback();
                    return back()
                        ->withInput()
                        ->with('error', 'Error while registering in our website, Please contact to our Teach Support');
                }
            } else {
                return redirect('partners/register')
                    ->withInput()
                    ->with('error', 'Employer not register. Please try again');
            }
        } catch (ModelNotFoundException $e) {
            DB::rollback();
            return back()
                ->withInput()
                ->with('error', 'Error while registering in our website, Please contact to our Teach Support');
        }
    }


    /**
     * @param $token
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verify($token)
    {
        try {
            Customer::where('verified_code', $token)->firstOrFail()->verified();
        } catch (ModelNotFoundException $exception) {
            return back()->with('status', 'The token already used, or broken.');
        }
        return redirect()->route('partners.login')
            ->withInput()
            ->with('success', 'Your account is activated successfully, Plz login to post your job.');
    }

    /**
     * @return mixed
     *
     * Get partner guard
     */
    public function guard()
    {
        return auth()->guard('partner');
    }
}
