<?php

/**
 * Created by PhpStorm.
 * User: Athanassia Oikonomou
 * Date: 4/4/2017
 * Time: 11:42
 */

class input
{
    public static function exists($type = 'post')
    {
        switch ($type) {
            case'post':
                return (!empty($_POST)) ? true : false;
                break;
            case'get':
                return (!empty($_GET)) ? true : false;
                break;
            default:
                return false;
                break;
        }

    }

    public static function get($item)
    {
        if (isset($_POST[$item])) {
            return $_POST[$item];
        } else if (isset($_GET[$item])) {
            return $_GET[$item];
        }
        return '';

    }
}

?>