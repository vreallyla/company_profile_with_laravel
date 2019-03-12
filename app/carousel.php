<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PascalDeVink\ShortUuid\ShortUuid;

class carousel extends Model
{
    public $incrementing = false;
    protected $guarded = ['id','created_at', 'updated_at'];

    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = (string)ShortUuid::uuid4();
        });
    }
}
