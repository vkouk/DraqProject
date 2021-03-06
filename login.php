<!--6/4/2017 Nassia: Inserted back-end validation code.-->

<?php

/**
 * Created by PhpStorm.
 * User: Athanassia Oikonomou
 * Date: 6/4/2017
 * Time: 13:15
 */


require_once 'core/init.php';

if (input::exists()) {

        $validate = new Validate();

        $validation = $validate->check($_POST, array(
            'username' => array('required' => true),
            'password' => array('required' => true),

        ));

        if ($validation->passed()) {
            $user = new User();

            $login = $user->login(input::get('username'), input::get('password'));

            if ($login) {
                header("Location:dashboard.php");
            } else {
                echo 'Login failed';
            }

        } else {
            foreach ($validation->errors() as $error) {
                echo "<p class='alert-p'>" . $error . '</br>' . "</p>";
            }
        }
}
?>

<!-- 7/3/2017 Bill:Made Login Page. -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Draq - Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="login-main">
				<div class="login-logo-container">
					<a href="index.php"><img class="img-responsive" src="images/logo.png" alt="Draq Logo"></a>
				</div>
				<div class="col-sm-12 col-md-10 col-md-offset-1">
					<form method="post" action="login.php">
						<div class="form-group input-group">
					        <div class="input-group-addon"><i class="fa fa-user-o" aria-hidden="true"></i></div>
					        <input class="form-control" id="username" type="text" name='username' placeholder="username"/>          
	          			</div>
						<div class="form-group input-group">
					        <div class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></div>
					        <input class="form-control" id="password" type="password" name='password' placeholder="password"/>
	          			</div>
	  					<div class="form-group">
	            			<button type="submit" class="btn btn-block btn-login"><i class="fa fa-check" aria-hidden="true"></i> Sign in</button>
	          			</div>
					</form> <!-- form -->
				</div> <!-- col-sm-12 col-md-10 col-md-offset-1 -->
			</div> <!-- login-main -->
		</div> <!-- row -->
	</div> <!-- container -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>