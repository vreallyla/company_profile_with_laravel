<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PascalDeVink\ShortUuid\ShortUuid;

class article extends Model
{
    protected $primaryKey='code';
    public $incrementing = false;
    protected $guarded = ['code', 'created_at', 'updated_at'];
    protected $hidden = [
        'code',
        'art_title',
        'art_img',
        'art_by',
        'art_desc',
        'art_category_id',
    ];
    protected $appends = [
        'id',
        'title',
        'img',
        'by',
        'description',
        'category_id',
    ];

    public function getIdAttribute()
    {
        return $this->attributes['code'];
    }

    public function getTitleAttribute()
    {
        return $this->attributes['art_title'];
    }

    public function getImgAttribute()
    {
        return $this->attributes['art_img'];
    }

    public function getByAttribute()
    {
        return $this->attributes['art_by'];
    }

    public function getDescriptionAttribute()
    {
        return $this->attributes['art_desc'];
    }

    public function getCategoryIdAttribute()
    {
        return $this->attributes['art_category_id'];
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

    public function checkMultiRs()
    {
        return $this->hasMany(rsCategoriesNArticle::class, 'article_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class,'art_by');
    }

    public function articleCategory()
    {
        return $this->belongsTo(categoryArticle::class,'art_category_id');
    }
}
