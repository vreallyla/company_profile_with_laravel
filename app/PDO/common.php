<?php
/**
 * Created by PhpStorm.
 * User: Osweald
 * Date: 15/03/2019
 * Time: 9:11
 */

namespace App\PDO;


use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

trait common
{

    protected static function validates($r, $rule, $notice)
    {
        $validator = Validator::make($r, $rule, $notice);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                'message' => 'Form need changes'
            ], 422);
        }
    }

    private function conditionImg($img)
    {
        return File::exists($img) ? asset($img) : false;
    }

    protected static function NOT_FOUND($name)
    {
        return response()->json(['message' => 'The ' . $name . ' not found'], 404);
    }

    protected static function UNEXPECTED()
    {
        return response()->json(['message' => 'Server unexpected condition'], 500);

    }

    protected static function DELETED($name)
    {
        return response()->json(['message' => 'The ' . $name . ' deleted'], 201);
    }

    protected static function UPDATED($name)
    {
        return response()->json(['message' => 'The ' . $name . ' updated'], 404);
    }

    protected static function CREATED($name)
    {
        return response()->json(['message' => 'The ' . $name . ' created'], 201);
    }

    protected static function CREATED_WITHOUT($name)
    {
        return ['message' => 'The ' . $name . ' created'];
    }

    /**
     * get public to find in storage
     * @param $url
     * @return string
     */
    protected static function slice_storage($url)
    {
        return substr($url,7);
    }

    /**
     * make storage available on public
     * @param $url
     * @return string
     */
    protected static function slice_public($url)
    {
        return 'storage'.substr($url,6);

    }
}
