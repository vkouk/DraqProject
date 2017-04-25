<?php
/**
 * Created by PhpStorm.
 * User: Athanassia Oikonomou
 * Date: 6/4/2017
 * Time: 12:54
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>403 Error Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="error-page">
				<div class="error-logo-container">
					<a href="index.php"><img class="img-responsive animated slideInLeft" src="images/logo.png" alt="Draq Logo"></a>
				</div>
				<div style = "text-align:center;" class="col-md-10 col-md-offset-1 animated slideInLeft">
					<p class="animated slideInLeft">HTTP Error 403</p>
                        Oops... It seems that you are not logged in. Please <a href="login.php">Login</a>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>