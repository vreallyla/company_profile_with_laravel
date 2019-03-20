<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PascalDeVink\ShortUuid\ShortUuid;

class about extends Model
{
    protected $primaryKey='code';
    public $incrementing = false;
    protected $guarded = ['code', 'created_at', 'updated_at'];
    protected $hidden = [
        'code',
        'company_img',
        'company_logo',
        'company_quote',
        'company_short_info',
        'company_history',
        'company_intro',
        'company_vision',
        'company_mission',
    ];
    protected $appends = [
//        'id',
        'img',
        'logo',
        'quote',
        'short_info',
        'history',
        'intro',
        'vision',
        'mission'];

//    public function getIdAttribute()
//    {
//        return $this->attributes['code'];
//    }

    public function getImgAttribute()
    {
        return $this->attributes['company_img'];
    }

    public function getLogoAttribute()
    {
        return $this->attributes['company_logo'];
    }

    public function getQuoteAttribute()
    {
        return $this->attributes['company_quote'];
    }

    public function getShortInfoAttribute()
    {
        return $this->attributes['company_short_info'];
    }

    public function getHistoryAttribute()
    {
        return $this->attributes['company_history'];
    }

    public function getIntroAttribute()
    {
        return $this->attributes['company_intro'];
    }

    public function getVisionAttribute()
    {
        return $this->attributes['company_vision'];
    }

    public function getMissionAttribute()
    {
        return $this->attributes['company_mission'];
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->code = (string)ShortUuid::uuid4();
        });
    }
}
