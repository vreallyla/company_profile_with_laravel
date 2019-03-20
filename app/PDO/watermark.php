<?php
/**
 * Created by PhpStorm.
 * User: Osweald
 * Date: 15/03/2019
 * Time: 9:39
 */

namespace App\PDO;


trait watermark
{
    public static function showIn()
    {
        return
           ['informations'=> [
               'created_by' => 'G-SMart IT Solution',
               'website' => 'https://www.gsmart-it.net/',
               'version' => 'v1'
           ]];
    }
}
