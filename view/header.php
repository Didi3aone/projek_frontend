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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/projek_frontend/css/style.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="/projek_frontend/css/animate.css">
	<link rel="stylesheet" type="text/css" href="/projek_frontend/font-awesome/css/font-awesome.css">
</head>
<body>

	<script type="text/javascript" src="/projek_frontend/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="/projek_frontend/js/bootstrap.min.js"></script>
	<script>
		$(function () {
			$('[data-tooltip="tooltip"]').tooltip()
		});
	</script>

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
		 				<li><a href="#contact">FaQ</a></li>
		 				<li><a href="../navbar/">Log In</a></li>
		 			</ul>
		 		</div><!--/.nav-collapse -->
		 	</div>
		 </nav>
	</div>
	

	
