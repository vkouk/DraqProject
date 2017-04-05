<?php
session_start();

$GLOBALS['config'] = array(
    'mysql' => array(
        'host'=>'db24.papaki.gr:3306',
        'username'=>'n9126_diabadmin',
        'password'=>'diab9#ad2Cq5&',
        'db'=>'n91264atha_diabetesdb'
    ),

    'session'=> array(
        'session_name'=>'user',
        'token_name'=>'token'
    ),
    'draqtest'=>array(



    )

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