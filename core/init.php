<?php

/**
 * Created by PhpStorm.
 * User: Athanassia Oikonomou
 * Date: 4/4/2017
 * Time: 11:42
 */

session_start();

error_reporting(0);

$GLOBALS['config'] = array(
    'mysql' => array(
        'host'=>'127.0.0.1',     //db24.papaki.gr:3306
        'username'=>'diabetesadmin',    //n9126_diabadmin
        'password'=>'test1234',  //diab9#ad2Cq5&
        'db'=>'diabetesdb'       // n91264atha_diabetesdb
    ),

    'session'=> array(
        'session_name'=>'user',
        'session_draqname'=> session_name()

    ),
);


spl_autoload_register(function($class){
    require_once 'classes/'.$class.'.php';
});

require_once 'functions/sanitize.php';

//if(Cookie::exists(config::get('remember/cookie_name')) && !Session::exists(config::get('session/session_name'))){
//    $hash = Cookie::get(config::get('remember/cookie_name'));
//    $hashCheck = DB::getInstance()->get('user_session', array('hash','=', $hash));
//
//    if($hashCheck->count()){
//
//        $user = new User($hashCheck->first()->user_id);
//        $user->login();
//    }
//
//}


?>