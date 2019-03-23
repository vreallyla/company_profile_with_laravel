<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rsBrandsProduct extends Model
{
    protected $guarded = ['code', 'created_at', 'updated_at'];
    public $incrementing = false;
    protected $primaryKey = 'code';
    protected $appends = [
        'id',
        'title',
        'img',
        'desc',
    ];
    protected $hidden = [
        'code',
        'list_title',
        'list_img',
        'list_desc',
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
        return $this->attributes['list_title'];
    }
    public function getImgAttribute()
    {
        return $this->attributes['list_img'];
    }
    public function getDescAttribute()
    {
        return $this->attributes['list_desc'];
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $set=strtolower($model->list_title);
            $set=str_replace('&', 'and', $set);
            $set=preg_replace('/[^\p{L}\p{N}\s]/u', '', $set);
            $model->code = str_replace(' ', '-', $set);
            $model->list_title = $set;
        });
    }
}
