<?php

namespace App\Http\Resources\about;

use App\Http\Resources\about\added\aboutHrefOptional;
use App\PDO\watermark;
use Illuminate\Http\Resources\Json\JsonResource;

class imgAboutResource extends JsonResource
{
    use watermark, aboutHrefOptional;

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
        $data = ['data' => $this->only('img')];
        $links = ['links' => array_merge(
            [
                self::data(),
                self::update_info(),
                self::update_ico()
            ])];

        return array_merge([
            $data,
            $links,
            self::showIn()
        ]);
    }
}
