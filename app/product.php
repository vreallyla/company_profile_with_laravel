<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primaryKey = 'code';
    public $incrementing = false;
    protected $guarded = ['code', 'created_at', 'updated_at'];
    protected $hidden = [
        'code',
        'pro_name',
        'pro_img',
        'pro_desc',
    ];
    protected $appends = [
        'id',
        'name',
        'img',
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

    public function getNameAttribute()
    {
        return $this->attributes['pro_name'];
    }

    public function getImgAttribute()
    {
        return $this->attributes['pro_img'];
    }

    public function getDescAttribute()
    {
        return $this->attributes['pro_desc'];
    }

    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $set = strtolower($model->pro_name);
            $set=str_replace('&', 'and', $set);
            $set=preg_replace('/[^\p{L}\p{N}\s]/u', '', $set);
            $model->code = str_replace(' ', '-', $set);
            $model->pro_name = $set;
        });
    }

    public function brands()
    {
        return $this->belongsToMany(brand::class, rsBrandsProduct::class, 'product_id', 'brand_id');
    }
}
