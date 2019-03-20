<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PascalDeVink\ShortUuid\ShortUuid;

class feedback extends Model
{
    protected $primaryKey='code';
    public $incrementing = false;
    protected $guarded = ['code', 'created_at', 'updated_at'];
    protected $appends = [
        'code',
        'feed_name',
        'feed_email',
        'feed_msg',
    ];
    protected $hidden = [
        'id',
        'name',
        'email',
        'msg',
    ];

    public function getIdAttribute()
    {
        return $this->attributes['code'];
    }

    public function getNameAttribute()
    {
        return $this->attributes['feed_name'];
    }

    public function getEmailAttribute()
    {
        return $this->attributes['feed_email'];
    }

    public function getMsgAttribute()
    {
        return $this->attributes['feed_msg'];
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
