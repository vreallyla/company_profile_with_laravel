<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use PascalDeVink\ShortUuid\ShortUuid;

class contact extends Model
{
    protected $primaryKey = 'code';
    public $incrementing = false;
    protected $guarded = ['code', 'created_at', 'updated_at'];
    protected $appends = [
//        'id',
        'address',
        'email',
        'phone',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'pinterest',
        'google_plus',
    ];
    protected $hidden = [
        'code',
        'contact_address',
        'contact_email',
        'contact_phone',
        'contact_facebook',
        'contact_twitter',
        'contact_instagram',
        'contact_linkedin',
        'contact_pinterest',
        'contact_google_plus',
    ];

//    public function getIdAttribute()
//    {
//        return $this->attributes['code'];
//    }

    public function getAddressAttribute()
    {
        return $this->attributes['contact_address'];
    }

    public function getEmailAttribute()
    {
        return $this->attributes['contact_email'];
    }

    public function getPhoneAttribute()
    {
        return $this->attributes['contact_phone'];
    }

    public function getFacebookAttribute()
    {
        return $this->attributes['contact_facebook'];
    }

    public function getTwitterAttribute()
    {
        return $this->attributes['contact_twitter'];
    }

    public function getInstagramAttribute()
    {
        return $this->attributes['contact_instagram'];
    }

    public function getLinkedinAttribute()
    {
        return $this->attributes['contact_linkedin'];
    }

    public function getPinterestAttribute()
    {
        return $this->attributes['contact_pinterest'];
    }

    public function getGooglePlusAttribute()
    {
        return $this->attributes['contact_google_plus'];
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->code = (string)ShortUuid::uuid4();
        });
    }
}
