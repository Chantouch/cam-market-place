<?php

namespace App\Model;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Request;
use Vinkla\Hashids\Facades\Hashids;

class Customer extends Authenticatable
{
    use Notifiable;
    use Sluggable;

    protected $dates = ['dob'];
    protected $appends = ['hashid'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'phone_number', 'status', 'username',
        'verified_by', 'verified_code', 'mobile', 'temp_enroll', 'enrollment_id', 'verified_at',
        'city_id', 'commune_id', 'country_id', 'cus_code', 'dob', 'private_note'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'username' => [
                'source' => 'first_name' . 'last_name'
            ]
        ];
    }

    //-----------get and set attribute-----------/

    /**
     * @return string
     */
    public function getVerificationStatusAttribute()
    {
        $name = "";
        if ($this->verified_by === null) {
            return "Need Verified";
        } else {
            try {
                $verified = Admin::find($this->verified_by);
                $name = $verified->name;
            } catch (ModelNotFoundException $exception) {

            }
            return $name;
        }
    }

    /**
     * @return mixed
     */
    public function getHashidAttribute()
    {
        return Hashids::encode($this->attributes['id']);
    }

    /**
     * @param $value
     * @return string
     */
    public function getDobAttribute($value)
    {
        return ($value !== null ? Carbon::parse($this->attributes['dob'])->format('d-m-Y') : null);
    }

    //Verified customer after register

    /**
     * verified employer
     */
    public function verified()
    {
        $this->status = 1;
        $this->verified_code = null;
        $this->save();
    }

    //-------------Validation----------------//

    /**
     * @param $id
     * @return array
     */
    public static function rules($id)
    {

        switch (Request::method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'first_name' => 'required',
                    'email' => 'required|email|unique:customers,email',
                    'password' => 'required|same:confirm_password|min:6',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'first_name' => 'required|string',
                    'last_name' => 'required|string',
                    'email' => 'required|email|unique:customers,email,' . $id,
                    'password' => 'sometimes|same:confirm_password',
                    'confirm_password' => 'sometimes|same:password',
                ];
            }
            default:
                break;
        }
        return self::rules($id);
    }

    public static function messages()
    {
        return [

        ];
    }

    //------------Relationship-------------//

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function addresses()
    {
        return $this->hasMany(Address::class, 'customer_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'customer_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function social()
    {
        return $this->belongsTo(SocialAccount::class, 'customer_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function avatar()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tempDb()
    {
        return $this->hasOne(TempData::class);
    }
}