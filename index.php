<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Dalampasigan Home Page</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Alegreya:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<style>
		
		body, html {
			background-image: url(img/beach2.jpg);
			background-size: cover;
			background-position: center;
		}

		@font-face {
			font-family: tomatoes;
			src: url(fonts/Tomatoes-O8L8.ttf);
			}
		@font-face {
			font-family: freeS;
			src: url(fonts/FreeSerif-4aeK.ttf);
			}
		@font-face {
			font-family: lovely;
			src: url(fonts/LovelyHome-9aBZ.ttf);
			}
			
		.my-container{
			width: 100%;
			height: 100%;
		}
		.my-rows {
			height: 275px;
		}
		.my-col {
			border: 3px dashed aqua;
		}

		</style>
</head>

<body>
	<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner"">
		<div class="container">
		  <div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			  <span class="sr-only">Toggle navigation</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
			<a href="./" class="navbar-brand" style="font-family: century gothic;">Dalampasigan</a>
		  </div>
		  <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
			<ul class="nav navbar-nav navbar-right">
			  <li class="active">
				<a href="index.php">Home</a>
			  </li>
                          
			  <li>
                              <a href="rooms.php">Rooms</a>
			  </li>
			  <li>
				<a href="amenities.php">Amenities</a>
			  </li>
			   
			  <li>
				<a href="booking.php">Booking</a>
			  </li>
                          
                          <li>
                              <a href="adminlogin.php">Admin Login</a>
			  </li>
			 
			</ul>
		  </nav>
		</div>
	  </header>
	  <div class="container my-container">
		<div class="row my-rows"> </div>
		<div class="row my-rows">
		  <h1 style="font-family: lovely; color: rgb(255, 251, 251);font-size: 100px;
		  text-align: center; text-shadow: 3px 5px 2px #3d3933d5; opacity: 95%;">Dalampasigan
		  </h1>
		  <h5 style="font-family: freeS; color: rgb(255, 251, 251); font-size: 20px; text-align: center; opacity: 80%;">ESCAPE TO PARADISE.</h5>
	  </div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>