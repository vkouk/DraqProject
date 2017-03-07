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
	<header>
		<a href="index.php"><img class="img-responsive" src="images/logo.png" alt="Draq Logo"></a>
	</header>

	<div class="login-main">
		<div class="page">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<form class="form-horizontal login-form" method="post" action="login.php">
							<div class="form-group">
								<label for="username" class="col-sm-2 control-label">Username</label>
								<div class="col-sm-10 input-group">
								 	<div class="input-group-addon"><i class="fa fa-user-o" aria-hidden="true"></i></div>
									<input type="name" id="username">
								</div>
							</div>
							<div class="form-group">
							    <label for="pswd" class="col-sm-2 control-label">Password</label>
							    <div class="col-sm-10 input-group">
								    <div class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></div>
								    <input type="password" id="pswd">
							    </div>
  							</div>
  							<div class="form-group">
							    <div class="col-sm-offset-2 col-sm-10">
							      <button type="submit" class="btn btn-lg btn-login"><i class="fa fa-check" aria-hidden="true"></i> Sign in</button>
							    </div>
  							</div>
						</form> <!-- form -->
					</div>
				</div> <!-- row -->
			</div> <!-- container -->
		</div> <!-- page -->
	</div> <!-- login-main -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>