<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PascalDeVink\ShortUuid\ShortUuid;

class carousel extends Model
{
    protected $primaryKey='code';
    public $incrementing = false;
    protected $guarded = ['code', 'created_at', 'updated_at'];
    protected $hidden = [
        'code',
        'car_title',
        'car_img',
        'car_desc'
    ];

    protected $appends = [
        'id',
        'title',
        'img',
        'desc'
    ];

    /**
     * data appends
     * @return mixed
     */
    public function getIdAttribute()
    {
        return $this->attributes['code'];
    }

    public function getTitleAttribute()
    {
        return $this->attributes['car_title'];
    }

    public function getImgAttribute()
    {
        return $this->attributes['car_img'];
    }

    public function getDescAttribute()
    {
        return $this->attributes['car_desc'];
    }

    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->code = (string)ShortUuid::uuid4();
        });
    }
}
