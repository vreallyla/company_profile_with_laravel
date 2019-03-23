<?php

namespace App\Http\Resources\categoryArticle;

use Illuminate\Http\Resources\Json\JsonResource;

class listCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if (strlen($this->description)>134){
            $desc=substr($this->description,0,119).'...';
        }else{
            $desc=$this->description;
        }
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $desc,
        ];
    }
}
