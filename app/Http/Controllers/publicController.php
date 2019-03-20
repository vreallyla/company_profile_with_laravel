<?php

namespace App\Http\Controllers;

use App\about;
use App\article;
use App\brand;
use App\categoryArticle;
use App\contact;
use App\product;
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
                return $query->where('art_title', 'LIKE', '%' . $r->q . '%');
            })
                ->when($r->cat, function ($query2) use ($r) {
                    return $query2->where('art_category_id', 'LIKE', '%' . $r->cat . '%');
                })
                ->orderBy('updated_at', 'desc')->paginate(5);

        }else {
            $articles = article::orderBy('updated_at', 'desc')->paginate(5);
        }
        $categories = categoryArticle::orderBy('cat_name', 'asc')->get();
        $rands = article::orderByRaw('RAND()')->take(3)->get();
        return view('users.news', compact('data', 'articles', 'categories','rands'));
    }

    public function newSingle(Request $r)
    {
        $data = $this->dataGen();
        $article=article::findOrFail($r->id);
        $categories = categoryArticle::orderBy('cat_name', 'asc')->get();
        $rands = article::orderByRaw('RAND()')->take(3)->get();

        return view('users.new_details', compact('data', 'article', 'categories','rands'));

    }

    public function contact()
    {
        $data = $this->dataGen();

        return view('users.feedback', compact('data'));
    }

    /**
     * general data
     * @return mixed
     */
    public function dataGen()
    {
        $data['contact'] = contact::orderBy('created_at','asc')->first();
        $data['about'] = about::orderBy('created_at','asc')->first();
        $data['product']=product::orderBy('pro_name','asc')->get();

        return $data;
    }

    public function products()
    {
                $data = $this->dataGen();

        return view('users.product.index',compact('data'));
    }public function productDetails()
    {
                $data = $this->dataGen();

        return view('users.product.details',compact('data'));
    }public function subProduct()
    {
                $data = $this->dataGen();

        return view('users.product.sub',compact('data'));
    }
}
