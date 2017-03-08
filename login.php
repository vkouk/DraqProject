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
				<a href="index.php"><img class="img-responsive" src="images/logo.png" alt="Draq Logo"></a>
				<div class="col-sm-12 col-md-10 col-md-offset-1">
					<form class="login-form" method="post" action="login.php">
						<div class="form-group input-group">
					        <div class="input-group-addon"><i class="fa fa-user-o" aria-hidden="true"></i></div>
					        <input class="form-control" id="username" type="text" name='username' placeholder="username"/>          
	          			</div>
						<div class="form-group input-group">
					        <div class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></div>
					        <input class="form-control" id="pswd" type="password" name='pswd' placeholder="password"/>          
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