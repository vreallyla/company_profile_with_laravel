<?php

namespace App\Http\Resources\article;

use App\Http\Resources\article\added\articlesHrefOptional;
use const App\Http\Resources\categoryArticle\NAME_CAT_RE;
use App\PDO\common;
use App\PDO\watermark;
use Illuminate\Http\Resources\Json\JsonResource;

const NAME_ART_RE='articles';

class getArticleResource extends JsonResource
{
    use watermark, articlesHrefOptional, common;

//remove wraaping
    public function __construct($resource)
    {
        static::$wrap = null;
        $this->resource = $resource;
    }

    /**
     * Transform the resource into an array.
     * @TODO:: add href user
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $user = $this->createdBy;
        $cat = $this->articleCategory;

        $data = [
            'data' => [
                'id' => $this->id,
                'title' => $this->title,
                'img' => url($this->img),
                'by' => [
                    'id' => $user->id,
                    'name' => $user->name
                ],
                'description' => $this->description,
                'category' => [
                    'id' => $cat->id,
                    'name' => $cat->name,
                    'href' => route('articles.index', ['state' => true, 'cat' => $cat->id])
                ],
            ]];
        return array_merge($data, self::showIn(),self::CREATED_WITHOUT(NAME_ART_RE));
    }
}
