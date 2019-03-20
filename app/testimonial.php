<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PascalDeVink\ShortUuid\ShortUuid;

class testimonial extends Model
{
    protected $primaryKey='code';
    public $incrementing = false;
    protected $guarded = ['code', 'created_at', 'updated_at'];
    protected $hidden = [
        'code',
        'testi_ava',
        'testi_name',
        'testi_as',
        'testi_desc',
    ];
    protected $appends = [
        'id',
        'ava',
        'name',
        'as',
        'desc',
    ];

    /**
     * data appends
     * @return mixed
     */
    public function getIdAttribute()
    {
        return $this->attributes['code'];
    }

    public function getAvaAttribute()
    {
        return $this->attributes['testi_ava'];
    }

    public function getNameAttribute()
    {
        return $this->attributes['testi_name'];
    }

    public function getAsAttribute()
    {
        return $this->attributes['testi_as'];
    }

    public function getDescAttribute()
    {
        return $this->attributes['testi_desc'];
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
