<?php
/**
 * Created by PhpStorm.
 * User: Osweald
 * Date: 15/03/2019
 * Time: 10:08
 */

namespace App\Http\Resources\about\added;


trait aboutHrefOptional
{
    public static function data()
    {
        return [
            'data' => [
                'href' => route('adminAboutGet'),
                'method' => 'GET'
            ]];
    }

    public static function update_info()
    {
        return [
            'update' => [
                'href' => route('adminAboutPut'),
                'method' => 'PUT'
            ]];
    }

    public static function update_img()
    {
        return [
            'image_changes' => [
                'href' => route('adminAboutImg'),
                'method' => 'PUT'
            ]];
    }

    public static function update_ico()
    {
        return [
            'icon_changes' => [
                'href' => route('adminAboutIcon'),
                'method' => 'PUT'
            ]];
    }
}
