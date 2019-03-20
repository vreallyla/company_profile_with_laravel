<?php
/**
 * Created by PhpStorm.
 * User: Osweald
 * Date: 15/03/2019
 * Time: 14:25
 */

namespace App\Http\Resources\article\added;


trait articlesHrefOptional
{
    public static function data()
    {
        return [
            'data' => [
                'href' => route('articles.index'),
                'method' => 'GET'
            ]];
    }

    public static function create()
    {
        return [
            'create' => [
                'href' => route('articles.store'),
                'method' => 'POST'
            ]];
    }

    public static function show($id)
    {
        return [
            'show' => [
                'href' => route('articles.show',['article',$id]),
                'method' => 'GET'
            ]];
    }

    public static function update($id)
    {
        return [
            'update' => [
                'href' => route('articles.update',['article',$id]),
                'method' => 'PUT'
            ]];
    }

    public static function delete($id)
    {
        return [
            'delete' => [
                'href' => route('articles.destroy',['article',$id]),
                'method' => 'DELETE'
            ]];
    }
}
