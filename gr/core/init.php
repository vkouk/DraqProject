<?php

/**
 * Created by PhpStorm.
 * User: Athanassia Oikonomou
 * Date: 4/4/2017
 * Time: 11:42
 */

session_start();

error_reporting(1);

$GLOBALS['config'] = array(
    'mysql' => array(
        'host'=>'127.0.0.1',     //db24.papaki.gr:3306
        'username'=>'nassia',    //n9126_diabadmin
        'password'=>'test1234',  //diab9#ad2Cq5&
        'db'=>'diabetesdb'       // n91264atha_diabetesdb
    ),

    'session'=> array(
        'session_name'=>'user',
        'session_draqname'=> session_name()

    ),
);


spl_autoload_register(function($class){
    require_once '../classes/'.$class.'.php';
});

require_once '../functions/sanitize.php';

?>