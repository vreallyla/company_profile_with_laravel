<?php

namespace App\Http\Controllers\api\admin\setup;

use App\article;
use App\Http\Resources\article\getArticleResource;
use App\Http\Resources\article\listArticleResource;
use App\PDO\common;
use App\PDO\watermark;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

const NAME_FUNC = 'articles';

class articlesController extends Controller
{
    use common, watermark;

    private $articles;

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {

        $this->articles = article::when(!is_null($r->state), function ($q) use ($r) {
            $q->when(!is_null($r->state), function ($query) use ($r) {
                return $query->where('art_title', 'LIKE', '%' . $r->q . '%');
            })
                ->when($r->cat, function ($query2) use ($r) {
                    return $query2->where('art_category_id', 'LIKE', '%' . $r->cat . '%');
                });
        })
            ->orderBy('updated_at', 'desc')->paginate($r->paginate ? $r->paginate : 8);

        return listArticleResource::collection($this->articles)->additional(self::showIn());
    }

    /**
     * Store a newly created resource in storage.
     * @TODO:: id user
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        return $r;
        $rules = [
            'title' => 'required|min:6|max:50',
            'img' => 'required|image|max:1000',
            'description' => 'required|min:10|max:1500',
            'category' => 'required|exists:category_articles,code',
        ];
//
        if ($error = self::validates($r->toArray(), $rules, [])) {
            return $error;
        }

        try {
            $new = $r->file('img');

            if ($new->isValid()) {
                $name = Storage::disk('local')->put('public/article-photos', $new);
                $url = self::slice_public($name);
            }
        } catch (\Exception $e) {
            return self::UNEXPECTED();
        }


        $this->articles = article::create([
            'art_title' => $r->title,
            'art_img' => $url,
            'art_by' => auth()->user()->id,
            'art_desc' => $r->description,
            'art_category_id' => $r->category,
        ]);

        return new getArticleResource($this->articles);
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
            $this->articles = article::findOrFail($id);
        } catch (\Exception $e) {
            return response()->json(['msg' => 'Data not found'], 404);
        }

        return new getArticleResource($this->articles);
    }


    /**
     * Update the specified resource in storage.
     * @TODO:: image change
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        $rules = [
            'title' => 'required|min:6|max:50',
            'img' => 'image|max:2500',
            'description' => 'required|min:10|max:10000',
            'category' => 'required|exists:category_articles,code',
        ];


        if ($error = self::validates($r->toArray(), $rules, [])) {
            return $error;
        }

        try {
            $this->articles = article::findOrFail($id);
        } catch (\Exception $e) {
            return self::NOT_FOUND('article');
        }

        try {
           if ($r->has('img')) {
               $new = $r->file('img');

               if ($new->isValid()) {
                   if ($this->conditionImg($this->articles->img)) {
                       Storage::delete('public/' . self::slice_storage($this->articles->img));
                   }

                   $name = Storage::disk('local')->put('public/article-photos', $new);
                   $url = self::slice_public($name);

                   $thumbnailpath = $url;
                   ini_set('memory_limit','180M');

                   $img = Image::make($thumbnailpath)->resize(1600, null, function ($constraint) {
                       $constraint->aspectRatio();
                       $constraint->upsize();
                   });

                   $img->encode('jpg', 100)->save($thumbnailpath);

                   if (!file_exists($url)) {
                       return response()->json(['msg' => 'upload gambar gagal'], 400);
                   }
               }
           }
        } catch (\Exception $e) {
            return self::UNEXPECTED();
        }

        try {
            $this->articles = $this->articles->update([
                'art_title' => $r->title ? $r->title : $this->articles->art_title,
                'art_img' => isset($url) ? $url : $this->articles->art_img,
                'art_by' => auth()->user()->id,
                'art_desc' => $r->description ? $r->description : $this->articles->art_desc,
                'art_category_id' => $r->category ? $r->category : $this->articles->art_category_id,
            ]);
        } catch (\Exception $e) {
            return response()->json(self::UNEXPECTED(), 500);
        }

        return response()->json(['message' => 'Success updated']);


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
            $this->articles = article::findOrFail($id);

            if ($this->conditionImg($this->articles->img)) {
                Storage::delete('public/' . self::slice_storage($this->articles->img));
            }

            $this->articles->delete();

            return self::DELETED(NAME_FUNC);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Data not found'], 404);
        }
    }
}
