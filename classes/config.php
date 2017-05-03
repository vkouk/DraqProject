<?php

/**
 * Created by PhpStorm.
 * User: Athanassia Oikonomou
 * Date: 4/4/2017
 * Time: 11:42
 */

class config{
    public static function get($path=null){
        if($path){
            $config=$GLOBALS['config'];
            $path=explode('/', $path);

            foreach($path as $bit){
                if(isset($config[$bit])){
                    $config=$config[$bit];
                }
            }
            return $config;
        }
        return false;
    }
}

?>