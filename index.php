<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Draq - Diabetes Risk Assessment Questionnaire</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
	<header>
		<nav class="nav navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>                        
	      			</button>
					<a href="index.php"><img class="img-responsive" src="images/logo.png" alt="Draq Logo"></a>
					<p class="draq-text">Diabetes Risk Assessment Questionnaire</p>
				</div>
			</div> <!-- container -->
			<div class="collapse navbar-collapse" id="navBar">
					<ul class="nav navbar nav-pills menu">
						<!-- 2/3/2017 Bill: Fixed dropdown menu redirect link. -->
						<li class="dropdown">
							<a href="index.php?page=questonnaire.php">The Questionnaire<span class="caret"></span></a>
							<ul class="dropdown-menu nav-subtab">
							  <li><a href="index.php?page=about-questionnaire.php">About Questionnaire</a></li>
							  <li class="divider"></li>
					          <li><a href="index.php?page=do-test.php">Do The Test</a></li>
					        </ul>
						</li>
						<li class="dropdown">
							<a href="#">Diabetes<span class="caret"></span></a>
							<ul class="dropdown-menu nav-subtab">
							  <li><a href="index.php?page=about-diabetes.php">What Is</a></li>
							  <li class="divider"></li>
					          <li><a href="index.php?page=prediabetes.php">Prediabetes</a></li>
					          <li class="divider"></li>
					          <li><a href="index.php?page=living-with.php">Living With</a></li>
					        </ul>
						</li>
						<li><a href="index.php?page=about-us.php">About Us</a></li>
						<li><a href="index.php?page=contact.php">Contact</a></li>
						<li><a href="index.php?page=useful-links.php">Useful Links</a></li>
					</ul>
			</div>
		</nav> <!-- nav -->
	</header> <!-- header -->

	<div class="main">
		<div class="page">
			<div class="container">
				<?php  
					if (isset($_GET['page']))
					{
						$page_name = $_GET['page'];
						include($page_name);
					}
				?>
			</div> <!-- container -->
		</div> <!-- page -->
	</div> <!-- main -->
	<a href="#" id="back-to-top" title="Back to top">&uarr;</a> <!-- 2/3/2017 Bill:Added back-to-top option. -->

	<footer class="footer">
	    <div class="container">
	    	<div class="row">
	      		<div class="col-md-6">
	      			<span>DISCLAIMER</span>
	      			<p>
	      				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci exercitationem eligendi provident autem qui quia.
	      			</p>
	      		</div> <!-- col-md-6 -->
	      		<div class="col-md-4">
	      			<a href="#"><img class="img-responsive" src="images/credits-logo.png" alt="College-Uni Logo"></a>
	      		</div> <!-- col-md-4 -->
	    	</div> <!-- row -->
	    </div> <!-- container -->
  	</footer> <!-- footer -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>