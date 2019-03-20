<?php

namespace App\Http\Resources\categoryArticle;

use App\PDO\common;
use App\PDO\watermark;
use Illuminate\Http\Resources\Json\JsonResource;

const NAME_CAT_RE='article categories';

class getCategoryResource extends JsonResource
{
    use watermark,common;

//remove wraaping
    public function __construct($resource)
    {
        static::$wrap = null;
        $this->resource = $resource;
    }


    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $data = ['data' => [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
        ]];
        return array_merge($data, self::showIn(),self::CREATED_WITHOUT(NAME_CAT_RE));
    }


}
