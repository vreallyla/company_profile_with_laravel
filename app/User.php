<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PascalDeVink\ShortUuid\ShortUuid;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'code', 'created_at', 'updated_at',
    ];

    public $incrementing = false;
    protected $primaryKey = 'code';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','user_name','user_ava','code'
    ];

    /**
     * The attributes that should be append for arrays.
     *
     * @var array
     */
    protected $appends=[
        'name','ava','id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->code = (string)ShortUuid::uuid4();
        });
    }

    /**
     * data appends
     * @return mixed
     */
    public function getIdAttribute()
    {
        return $this->attributes['code'];
    }
    public function getNameAttribute()
    {
        return $this->attributes['user_name'];
    }
    public function getAvaAttribute()
    {
        return $this->attributes['user_ava'];
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
