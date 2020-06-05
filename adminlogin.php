<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Alegreya:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400" rel="stylesheet">

	<!-- Bootstrap -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
                        background-attachment: fixed;
                        background-repeat: no-repeat;
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
			height: 90px;
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
			  <li>
				<a href="index.php">Back</a>
			  </li>

			</ul>
		  </nav>
		</div>
	  </header>
		
	   <div class="container my-container">
		<div class="row my-rows"> </div>
		<div class="row my-rows">
		  <h1 style="font-family: lovely; color: rgb(255, 251, 251);font-size: 80px;
		  text-align: center; text-shadow: 3px 5px 2px #3d3933d5; opacity: 95%;">Dalampasigan
		  </h1>
		  <h4 style="font-family: freeS; color: rgb(255, 251, 251); font-size: 25px;
                      text-align: center; opacity: 100%; text-shadow: 3px 5px 2px #3d3933d5;">ADMIN LOGIN</h4>
                      
                      <form method="post">
					<ul class="form-style-1">
						<li>
                                                    <input type="email" name="email" class="field-long" placeholder="email" required>
                                                </li>

						<li>
                                                    <input type="password" name="password" class="field-long" placeholder="password" style="height: 35px;" required>
                                                </li>
                                                
                                                <li style="text-align: center;">
							<input type="submit" name="submit" value="Submit">
						</li>
                                        </ul>
                        </form>
<?php  $db = mysqli_connect("localhost", "root", "root", "bookingsdb");
    if(mysqli_connect_error()){
       die("Failed to connect to database");
    }else{
        if(isset($_POST['submit'])) {
            
            $_SESSION["em"] = $_POST['email'];
            $_SESSION["pw"] = $_POST['password'];

            $search = "SELECT * FROM `adminaccs` WHERE `email` = '".$_SESSION["em"]."' AND  `pword` = '".$_SESSION["pw"]."'";
                                                   
            $result = mysqli_query($db, $search);     
           
                if(mysqli_num_rows($result) > 0) {
                     while ($row = $result->fetch_assoc()){
                         $_SESSION["nm"]=$row["name"];
                        echo '<script type="text/javascript">';
                        echo 'window.location.href="admin.php" </script>';
                     }
                }
                else {
                    echo "<h6 style='color: #3FFEEF; text-align: center; text-shadow: -1px 2px 0px #992A19;'>"
                    . "Wrong credentials entered. Please try again.</h6>";
                }
        }
    } ?>
	  </div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>