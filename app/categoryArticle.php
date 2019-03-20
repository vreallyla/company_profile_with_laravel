<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PascalDeVink\ShortUuid\ShortUuid;

class categoryArticle extends Model
{
    protected $primaryKey='code';
    public $incrementing = false;
    protected $guarded = ['code','created_at', 'updated_at'];
    protected $hidden=[
        'code',
'cat_name',
'cat_desc',
    ];
    protected $appends = [
        'id',
        'name',
        'description',
    ];


    public function getIdAttribute()
    {
        return $this->attributes['code'];
    }

    public function getNameAttribute()
    {
        return $this->attributes['cat_name'];
    }
    public function getDescriptionAttribute()
    {
        return $this->attributes['cat_desc'];
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

    public function articles()
    {
        return $this->hasMany(article::class,'art_category_id');
    }
}
