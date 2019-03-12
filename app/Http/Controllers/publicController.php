<?php

namespace App\Http\Controllers;

use App\about;
use App\article;
use App\brand;
use App\categoryArticle;
use App\contact;
use App\testimonial;
use Illuminate\Http\Request;
use PascalDeVink\ShortUuid\ShortUuid;
use Ramsey\Uuid\Uuid;

class publicController extends Controller
{
    public function index()
    {
        $brands = brand::all();
        $data = $this->dataGen();

        return view('users.index', compact('data', 'brands'));
    }

    public function about()
    {
        $testi = testimonial::all();
        $brands = brand::all();
        $data = $this->dataGen();


        return view('users.about', compact('data', 'brands', 'testi'));
    }

    public function news(Request $r)
    {
        $data = $this->dataGen();
        if (isset($r->state)){
            $articles = article::when($r->q, function ($query) use ($r) {
                return $query->where('title', 'LIKE', '%' . $r->q . '%');
            })
                ->when($r->category, function ($query2) use ($r) {
                    return $query2->where('category_id', 'LIKE', '%' . $r->category . '%');
                })
                ->orderBy('updated_at', 'desc')->paginate(5);

        }else {
            $articles = article::orderBy('updated_at', 'desc')->paginate(5);
        }
        $categories = categoryArticle::orderBy('name', 'asc')->get();
        $rands = article::orderByRaw('RAND()')->take(3)->get();
        return view('users.news', compact('data', 'articles', 'categories','rands'));
    }

    public function newSingle(Request $r)
    {
        $data = $this->dataGen();
        $article=article::findOrFail($r->id);
        $categories = categoryArticle::orderBy('name', 'asc')->get();
        $rands = article::orderByRaw('RAND()')->take(3)->get();

        return view('users.new_details', compact('data', 'article', 'categories','rands'));

    }

    /**
     * general data
     * @return mixed
     */
    public function dataGen()
    {
        $data['contact'] = contact::first();
        $data['about'] = about::first();

        return $data;
    }
}
