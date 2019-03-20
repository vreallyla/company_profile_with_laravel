<?php

namespace App\Http\Controllers\api\admin\setup;

use App\categoryArticle;
use App\Http\Resources\categoryArticle\getCategoryResource;
use App\Http\Resources\categoryArticle\listCategoryResource;
use App\PDO\common;
use App\PDO\watermark;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

const NAME_FUNC_C = 'article categories';

class categoryController extends Controller
{
    use common, watermark;

    private $category_articles;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {

//        try {
            $this->category_articles = categoryArticle::when(!is_null($r->state), function ($q) use ($r) {
                $q->when(!is_null($r->state), function ($query) use ($r) {
                    return $query->where('cat_name', 'LIKE', '%' . $r->q . '%');
                });

            })->when(!isset($r->pagination) > 0, function ($query2) use ($r) {
                return $query2->orderBy('updated_at', 'desc')->get();
            })->when($r->pagination > 0, function ($query2) use ($r) {
                return $query2->orderBy('updated_at', 'desc')->paginate($r->pagination);
            });
//        } catch (\Exception $e) {
//            return response()->json(['msg' => 'load data failed'], 500);
//        }

        return listCategoryResource::collection($this->category_articles)->additional(self::showIn());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        if ($error = $this->validation($r->toArray(), true)) {
            return $error;
        }

        $this->category_articles = categoryArticle::create([
            'cat_name' => $r->name,
            'cat_desc' => $r->description,
        ]);


        return new getCategoryResource($this->category_articles);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
        $this->category_articles = categoryArticle::findOrFail($id);

        return new getCategoryResource($this->category_articles);
        } catch (\Exception $e) {
            return self::NOT_FOUND(NAME_FUNC_C)->additional(self::showIn());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        if ($error = $this->validation($r->data, true)) {
            return $error;
        }
        try {
            $this->category_articles = categoryArticle::findOrFail($id);
        } catch (\Exception $e) {
            return self::NOT_FOUND(NAME_FUNC_C)->additional(self::showIn());
        }

        $this->category_articles->update([
            'cat_name' => $r->data['name']? $r->data['name']: $this->category_articles->cat_name,
            'cat_desc' => $r->data['description']? $r->data['description']: $this->category_articles->cat_desc,
        ]);

        return response()->json(self::UPDATED(NAME_FUNC_C));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->category_articles = categoryArticle::findOrFail($id);
        } catch (\Exception $e) {
            return self::UNEXPECTED();
        }

        foreach ($this->category_articles->articles as $row) {
            if ($this->conditionImg($row->img)) {
                Storage::delete('public/' . self::slice_storage($row->img));
            }

        }

        $this->category_articles->delete();

        return self::DELETED(NAME_FUNC_C);
    }

    /**
     * validation form
     * @param $r
     * @return \Illuminate\Http\JsonResponse
     */
    private
    function validation($r, $required)
    {

        $rules = [
            'name' => ($required ? 'required|' : '') . 'min:3|max:50',
            'description' => ($required ? 'required|' : '') . 'min:10|max:191',
        ];
        if ($error = self::validates($r, $rules, [])) {
            return $error;
        }
    }

}
