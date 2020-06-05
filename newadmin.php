<?php
session_start();
if ($_SESSION['em'] == null){
header("Cache-Control: no-cache, must revalidate");
header('Location: /TOPACIO_PROJECT/adminlogin.php');}
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
                              <a href="admin.php">Home</a>
			  </li>
                          
			  <li class="active">
				<a href="accounts.php">Accounts</a>
			  </li>
			   
			  <li>
                              <a href="reservations.php">Reservations</a>
			  </li>
                          
                          <li>
                              <a href="logout.php">Logout</a>
			  </li>
			</ul>
		  </nav>
		</div>
	  </header>
		
	  <div class="outer">
		  <div class="middle">
			  <div class="inner">
                              <form method="post" action="newadmin.php">
                                    <h2 style="font-family: 'Open Sans', sans-serif; text-align: center">Register a New Admin Account</h2>
					<ul class="form-style-1">
						<li>
                                                    <label>Full Name <span class="required">*</span></label>
                                                    <input type="text" name="name" class="field-long" placeholder="Name" required>
                                                </li>
						<li>
							<label>Email <span class="required">*</span></label>
							<input type="email" name="email" class="field-long" required>
						</li>
						<li>
							<label>Password <span class="required">*</span></label>
							<input type="password" name="password" class="field-long" required>

					
						<li style="text-align: center;">
							<input type="submit" name="add" value="Add Admin">
						</li>
					</ul>

					</form>
<?php


  $db = mysqli_connect("localhost", "root", "root", "bookingsdb");
    if(mysqli_connect_error()){
       die("Failed to connect to database");
    }else{
        if(isset($_POST['add'])) {
            
            global $nm, $em, $pw;
            
            $nm = $_POST['name'];
            $em = $_POST['email'];
            $pw = $_POST['password'];

            $search = "SELECT * FROM `bookings` WHERE `email` = '".$em."'";                                                  
            $result = mysqli_query($db, $search);     
           
                if(mysqli_num_rows($result) > 0) {
                    echo "<center><h6 style='color: red;'>E-mail is already registered.";
                }
                else {
                    $query = "INSERT INTO `adminaccs`(`name`, `email`, `pword`) VALUES ('".$nm."','".$em."','".$pw."')";
                    mysqli_query($db, $query);
                    echo "<h6 style='color: green; text-align: center;'> Admin ".$nm." is now registered</h6>";
                }
        }
    }

?>
			  </div>
		  </div>
	  </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>