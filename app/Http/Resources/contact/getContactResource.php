<?php

namespace App\Http\Resources\contact;

use App\PDO\watermark;
use Illuminate\Http\Resources\Json\JsonResource;

class getContactResource extends JsonResource
{
    use watermark;

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
        $data = ['data' => $this->all()];
        $links = ['links' => [
            'data' => [
                'href' => route('adminAboutGet'),
                'method' => 'GET'
            ],
            'update' => [
                'href' => route('adminAboutPut'),
                'method' => 'PUT'
            ]]];

        return array_merge([
            $data,
            $links,
            self::showIn()
        ]);
    }
}
