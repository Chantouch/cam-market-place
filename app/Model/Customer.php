<?php

namespace App\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use Notifiable;
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'phone_number', 'status', 'username',
        'verified_by', 'verified_code', 'mobile', 'temp_enroll', 'enrollment_id', 'verified_at',
        'city_id', 'commune_id', 'country_id', 'cus_code','addresses'
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

    //Verified employee after register

    /**
     * verified employer
     */
    public function verified()
    {
        $this->status = 1;
        $this->verified_code = null;
        $this->save();
    }
}