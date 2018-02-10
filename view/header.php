<!DOCTYPE html>
<html>
<head>
	<title>Desain Layout</title>
	  <meta charset="UTF-8">
	  <meta name="description" content="Free Web tutorials">
	  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
	  <meta name="author" content="John Doe">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	  <!-- Latest compiled and minified CSS -->
	  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	  <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.css">

</head>
<body>

	<!-- JavaScript -->
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script>
		$(function () {
			$('[data-tooltip="tooltip"]').tooltip()
		});
	</script>
	<!-- end ./ -->

	<!-- container body -->
	<div class="container">
		 <!-- Fixed navbar -->
		 <nav class="navbar navbar-default navbar-fixed-top">
		 	<div class="container">
		 		<div class="navbar-header">
		 			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		 				<span class="sr-only">Toggle navigation</span>
		 				<span class="icon-bar"></span>
		 				<span class="icon-bar"></span>
		 				<span class="icon-bar"></span>
		 			</button>
		 			<div class="nav-navbar navbar-brand"></div>
		 		</div>
		 		<div class="col-md-4"></div>
		 		<div id="navbar" class="navbar-collapse collapse">
		 			<form class="navbar-form navbar-left">
		                <div class="input-group stylish-input-group">
		                    <input type="text" class="form-control"  placeholder="Search" >
		                    <span class="input-group-addon">
		                        <button type="submit">
		                            <span class="glyphicon glyphicon-search"></span>
		                        </button>  
		                    </span>
		                </div>
					</form>
		 			<ul class="nav navbar-nav">
		 				<li class=""><a href="#">Products</a></li>
		 				<li><a href="#about">How it works</a></li>
		 				<li>
		 					<a href="#contact" aria-controls="contact" role="tab" data-toggle="tab" style="background:#0D69B7;" >FaQ</a>
		 				</li>
		 				<li>
		 					<a href="#loginIn" aria-controls="loginIn" role="tab" data-toggle="tab" style="background:#0D69B7;">Log In</a>
		 				</li>
		 			</ul>
		 		</div><!--/.nav-collapse -->
		 	</div>
		</nav>
		<!-- end </nav> -->
	</div>
	<!-- / end container -->
	
	

	
