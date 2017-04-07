<?php
/**
 * Created by PhpStorm.
 * User: Dragoness_crysta
 * Date: 6/4/2017
 * Time: 13:17
 */

require_once 'core/init.php';

$user = new User();


if($user->isLoggedIn()){

    $user->logout();
    header("Location:login.php");
}