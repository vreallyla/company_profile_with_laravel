<?php

namespace App\Http\Controllers\api\admin\setup;

use App\rsBrandsProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class subProductController extends Controller
{

    private $sub_product;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
       $this->sub_product= rsBrandsProduct::when($r->state, function ($query) use ($r) {
            // $q= search
            $query->when($r->q, function ($search) use ($r) {
                return $search->where('name', 'LIKE', '%' . $r->q . '%');
            })
                ->when($r->brand, function ($brand) use ($r) {
                    return $brand->where('brand_id', $r->brand);
                })
                ->when($r->product, function ($brand) use ($r) {
                    return $brand->where('product_id', $r->product);
                });
        })->orderBy('updated_at', 'desc')->paginate($r->pagination ? $r->pagination : 10);

       return $this->sub_product;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
