<?php

/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 24/08/17
 * Time: 20:22
 */
class Log
{
    public static function info($resource){
        print "<pre style='padding: 10px; padding: 10px; border-radius:10px; background-color:#BBDEFB ;color:#0D47A1;'>";
        print_r($resource);
        print "</pre>";
    }

    public static function debug($resource){
        print "<pre style='padding: 10px; padding: 10px; border-radius:10px; background-color:#F0F4C3 ;color:#827717;'>";
        print_r($resource);
        print "</pre>";
    }

    public static function error($resource){
        print "<pre style='padding: 10px; padding: 10px; border-radius:10px; background-color:#F8BBD0 ;color:#880E4F;'>";
        print_r($resource);
        print "</pre>";
    }



}