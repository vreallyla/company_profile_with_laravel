<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PascalDeVink\ShortUuid\ShortUuid;

class brand extends Model
{
    public $incrementing = false;
    protected $primaryKey='code';
    protected $guarded = ['code', 'created_at', 'updated_at'];
    protected $hidden = [
        'code',
        'brand_logo',
        'brand_name',
    ];
    protected $appends=[
        'id',
        'logo',
        'name',
    ];

    public function getIdAttribute()
    {
        return $this->attributes['code'];
    }
    public function getLogoAttribute()
    {
        return $this->attributes['brand_logo'];
    }
    public function getNameAttribute()
    {
        return $this->attributes['brand_name'];
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

    public function products()
    {
        return $this->belongsToMany(product::class, rsBrandsProduct::class, 'brand_id', 'product_id');
    }
}
