<?php
/**
 * Created by PhpStorm.
 * User: Osweald
 * Date: 15/03/2019
 * Time: 15:45
 */

namespace App\Http\Resources\categoryArticle\added;


trait categoryHrefOpsional
{
    public static function data()
    {
        return [
            'data' => [
                'href' => route('article-categories.index'),
                'method' => 'GET'
            ]];
    }

    public static function create()
    {
        return [
            'create' => [
                'href' => route('article-categories.store'),
                'method' => 'POST'
            ]];
    }

    public static function show($id)
    {
        return [
            'show' => [
                'href' => route('article-categories.show',['article',$id]),
                'method' => 'GET'
            ]];
    }

    public static function update($id)
    {
        return [
            'update' => [
                'href' => route('article-categories.update',['article',$id]),
                'method' => 'PUT'
            ]];
    }

    public static function delete($id)
    {
        return [
            'delete' => [
                'href' => route('article-categories.destroy',['article',$id]),
                'method' => 'DELETE'
            ]];
    }
}
