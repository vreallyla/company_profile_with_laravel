<?php

namespace App\Http\Controllers\api\admin\setup;

use App\brand;
use App\PDO\common;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class brandController extends Controller
{
    use common;

    private $brands;

    /**
     * Display a listing of the resource.
     * @TODO:: add resource
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        try {
            $this->brands = brand::when($r->state, function ($query) use ($r) {
                // $q= search
                $query->when($r->q, function ($search) use ($r) {
                    return $search->where('name', 'LIKE', '%' . $r->q . '%');
                })
                    ->when($r->brand, function ($brand) use ($r) {
                        return $brand->where('brand_id', $r->brand);
                    });
            })->when(!isset($r->pagination) > 0, function ($query2) use ($r) {
                return $query2->orderBy('updated_at', 'desc')->get();
            })->when($r->pagination > 0, function ($query2) use ($r) {
                return $query2->orderBy('updated_at', 'desc')->paginate($r->pagination);
            });
        } catch (\Exception $e) {
            return self::UNEXPECTED();
        }

        return $this->brands;
    }


    /**
     * Store a newly created resource in storage.
     * @TODO:: check img ico and upload img
     * @TODO:: add resource
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $validate = [
            'brand_logo' => $r->img,
            'brand_name' => $r->name,
        ];

        if ($errors = self::validates($r->toArray(), $validate, [])) {
            return $errors;
        }

        try {
            $this->brand = brand::create(
                [
                    'brand_logo' => $r->logo,
                    'brand_name' => $r->name,
                ]
            );
        } catch (\Exception $e) {
            return self::UNEXPECTED();
        }

        return $this->brands;
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
            $this->brands = brand::findOrFail($id);
        } catch (\Exception $e) {
            if ($e instanceof ModelNotFoundException) {
                return response()->json([
                    'error' => 'Resource not found'
                ], 404);
            }

        }

        return $this->brands;
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
        $this->brands = brand::findOrFail($id);
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
