<?php

namespace App\Http\Resources\article;

use Illuminate\Http\Resources\Json\JsonResource;

class listArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $user = $this->createdBy;
        $cat = $this->articleCategory;


        return [
            'id' => $this->id,
            'title' => $this->title,
            'img' => url($this->img),
            'by' => [
                'id' => $user->id,
                'name' => $user->name
            ],
            'category' => [
                'id' => $cat->id,
                'name' => $cat->name,
                'href' => route('articles.index', ['state' => true, 'cat' => $cat->id])
            ],
            'date'=>[
                'created_at'=>$this->created_at,
                'updated_at'=>$this->updated_at,
            ]
        ];
    }
}
