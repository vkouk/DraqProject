<?php
require_once 'core/init.php';
/**
* Created by PhpStorm.
* User: Dragoness_crysta
* Date: 6/4/2017
* Time: 1:02
* Under construction...
*/

$user = new User();

if(!$user->isLoggedIn())
{
    header("Location:403.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <style>
        .centered{
            text-align:center;
            margin-top:10%;
        }
        h1.centered{
            font-size:5em;
        }
        
        body{
            background: url("images/da-background.jpg") no-repeat center center fixed;
            background-size:cover;
        }

        .size2{
            font-size:2em;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
<div class="row">
    <nav class="navbar">
        <div class="container-fluid">

        <ul class="nav navbar-nav navbar-right">
            <li style="margin-right:50px;"class="size2"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
        </ul>
        </div>
    </nav>
    <h1 class="centered animated flipInX">Dashboard Under construction.</h1>
</div>
</body>

</html>