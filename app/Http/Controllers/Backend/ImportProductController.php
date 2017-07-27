<?php

namespace App\Http\Controllers\Backend;

use App\Model\Category;
use App\Model\Currency;
use App\Model\Image;
use App\Model\Product;
use App\Model\TempProduct;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PHPExcel_Worksheet_MemoryDrawing;
use PHPExcel_Cell;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Exception;
use Intervention\Image\ImageManagerStatic as Images;

class ImportProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function auth()
    {
        return auth()->guard('admin')->user();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function formImport()
    {
        return view('backend.pages.catalog.product.import');
    }

    /**
     * @param Request $request
     * @return ProductController|bool|\Illuminate\Http\RedirectResponse
     */
    public function postImport(Request $request)
    {
        ini_set('max_execution_time', -1);
        try {
            $rules = [
                'file' => 'required|file|mimes:csv,xls,xlsx,|max:2048'
            ];
            $message = [
                'file.required' => 'Please choose a file to import products!'
            ];
            $code = Product::with('city')->pluck('code')->toArray();
            $validator = Validator::make($request->all(), $rules, $message);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            if ($request->hasFile('file')) {
                $path = $request->file('file')->getRealPath();
                $data = Excel::load($path, function ($reader) {

                })->get();
                if (!empty($data) && $data->count()) {
                    $inserts = [];
                    foreach ($data->toArray() as $key => $value) {
                       if(!empty($value['product_code'])){
                            $trimmed_array = explode(',', $value['category']);
                            $category = array_map('trim', $trimmed_array);
                            $currency_id = Currency::whereStatus(1)
                                ->whereCode(strtoupper($value['currency_code']))
                                ->first()->id;
                            $category_id = Category::whereStatus(1)
                                ->whereIn('name', $category)
                                ->pluck('id')->toArray();
                            if (in_array($_code = $value['product_code'], $code)) {
                                $product = Product::whereCode($_code)->firstOrFail();
                                if (is_null($product)) {
                                    return false;
                                }
                                $insert = [
                                    'name' => $value['product_name'],
                                    'code' => $value['product_code'],
                                    'cost' => $value['cost'],
                                    'price' => $value['price'],
                                    'qty' => $value['qty'],
                                    'description' => $value['description'],
                                    'short_description' => $value['short_description'],
                                    'user_id' => $this->auth()->id,
                                    'img_path' => "uploads/product/img/",
                                    'updated_at' => Carbon::now(),
                                    'status' => 1,
                                    'currency_id' => $currency_id,
                                    'discount_type' => $value['discount_type'],
                                    'discount' => $value['discount'],
                                    'can_order' => true
                                ];
                                $update_product = $product->update($insert);
                                if ($update_product) {
                                    if (isset($value['category'])) {
                                        $product->categories()->sync($category_id);
                                    } else {
                                        $product->categories()->sync(array());
                                    }
                                }
                                continue;
                            }
                            $inserts[] = [
                                'name' => $value['product_name'],
                                'code' => $value['product_code'],
                                'cost' => $value['cost'],
                                'price' => $value['price'],
                                'qty' => $value['qty'],
                                'slug' => str_slug($value['product_name'], '-'),
                                'description' => $value['description'],
                                'short_description' => $value['short_description'],
                                'user_id' => $this->auth()->id,
                                'img_path' => "uploads/product/img/",
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                                'status' => 1,
                                'currency_id' => $currency_id,
                                'discount_type' => $value['discount_type'],
                                'discount' => $value['discount'],
                                'can_order' => true
                            ];
                            $code[] = $value['product_code'];
                       }
                    }
                    if (!empty($inserts)) {
                        $insert_success = Product::with('city')->insert($inserts);
                        if (!$insert_success) {
                            redirect()->back()->with('error', 'Unable to process your request right now, Please contact to System admin @070375783');
                        }
                        return redirect()->route('admin.catalogs.products.index')->with('success', 'Product added/updated successfully');
                    }
                }
            }
            return redirect()->route('admin.catalogs.products.index')->with('success', 'Product added/updated successfully');
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact to System admin @070375783');
        }
    }

    /**
     * @return string
     */
    public function getSample()
    {
        try {
            $file = Storage::disk('public')->get('product-upload-sample.xlsx');
            return (new Response($file, 200))
                ->header('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', 'File not found or deleted from server.');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function formImg()
    {
        return view('backend.pages.catalog.product.import_img');
    }


    /**
     * @return string
     */
    public function getImageUploadSample()
    {
        try {
            $file = Storage::disk('public')->get('product-upload-image-sample.xlsx');
            return (new Response($file, 200))
                ->header('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', 'File not found or deleted from server.');
        }
    }

    public function importImg(Request $request)
    {
        ini_set('max_execution_time', -1);
        try {
            //Check the validation for file
            $rules = [
                'file' => 'required|file|mimes:csv,xls,xlsx,|max:2048'
            ];
            $message = [
                'file.required' => 'Please choose a file to import products!'
            ];
            $validator = Validator::make($request->all(), $rules, $message);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            if ($request->hasFile('file')) {
                //Create folder if not exist
                $path = 'uploads/product/img/';
                $destinationPath = public_path($path);
                $path_large = public_path($path . 'large/');
                $path_small = public_path($path . 'small/');
                $path_thumb = public_path($path . 'thumb/');
                if (!file_exists($destinationPath) || !file_exists($path_large)) {
                    mkdir($destinationPath, 0777, true);
                    mkdir($path_large, 0777, true);
                    mkdir($path_small, 0777, true);
                    mkdir($path_thumb, 0777, true);
                }
                //Get product code to compare
                $code = Product::pluck('code')->toArray();
                $path_file = $request->file('file')->getRealPath();
                $data = Excel::load($path_file, function ($reader) {

                });
                $drawing = $data->getExcel()->getActiveSheet()->getDrawingCollection();
                $i = 0;
                $j = 1;
                foreach ($drawing as $value) {
                    $string = $value->getCoordinates();
                    $coordinate = PHPExcel_Cell::coordinateFromString($string);
                    $column_name = "A" . $coordinate[1];
                    $name_of_img = $data->getExcel()->getActiveSheet()->getCell($column_name)->getValue();
                    if (!empty($name_of_img)) {
                        if ($value instanceof PHPExcel_Worksheet_MemoryDrawing) {
                            ob_start();
                            call_user_func(
                                $value->getRenderingFunction(), $value->getImageResource()
                            );
                            ob_end_clean();
                            $extension = 'png';
                        } else {
                            $zipReader = fopen($value->getPath(), 'r');
                            $imageContents = '';
                            while (!feof($zipReader)) {
                                $imageContents .= fread($zipReader, 1024);
                            }
                            fclose($zipReader);
                            $extension = $value->getExtension();
                        }
                        /* Check double image
                         *
                         * Just want to make this work first.
                         * Will refactor it later.
                         */
                        if ($name_of_img != $code) {
                            $code = $name_of_img;
                            $image_name = $name_of_img;
                            $j = 1;
                        } else {
                            $image_name = $name_of_img . "_" . $j;
                            $j++;
                        }
                        

                        /***check exist image name***/
                        $image_exist = Image::where("img_name","like","%".$name_of_img."%")->select("img_name")->get();
                        $count_image = count($image_exist);
                        if($count_image>0){
                            $image_name = $name_of_img."_".$count_image;
                        }

                        $product = Product::whereCode($name_of_img)->first();
                        if (is_null($product)) {
                            TempProduct::with('admin')
                                ->firstOrCreate([
                                    'product_code' => $name_of_img,
                                    'user_id' => $this->auth()->id,
                                ]);
                            continue;
                        } else {
                            TempProduct::with('admin')->whereProductCode($name_of_img)->delete();
                        }

                        $fileName = $image_name . "." . strtolower($extension);
                        $insert = [
                            'img_path' => $path,
                        ];
                        $product->update($insert);
                        $images = Image::FirstOrNew(['img_name' => $fileName]);
                        $product->images()->save($images);
                        $image_large = Images::make(fopen($value->getPath(), 'r'))->resize(1024, 1024);
                        $image_small = Images::make(fopen($value->getPath(), 'r'))->resize(500, 500);
                        $image_thumb = Images::make(fopen($value->getPath(), 'r'))->resize(100, 100);
                        $fileName = $image_name . "." . strtolower($extension);
                        $image_large->save($destinationPath . '/large/' . $fileName, 100);
                        $image_small->save($destinationPath . '/small/' . $fileName, 100);
                        $image_thumb->save($destinationPath . '/thumb/' . $fileName, 100);
                    }
                    
                }
            }
            return redirect()->route('admin.catalogs.products.index')->with('success', 'Product images added/updated successfully');
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact to System admin @070375783');
        }
    }
}
