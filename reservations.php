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

	<title>Reservations</title>

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
			height: 65px;
		}
		.my-col {
			border: 3px dashed aqua;
		}
                #customers {
                        font-family: 'Open Sans', sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                        box-shadow: 3px 5px 2px #3D352E;
                        text-align: center;
                }

                #customers td, #customers th {
                        
                        padding: 8px;
                }
                #customers tr:nth-child(odd){background-color: #f2f2f2;}
                
                #customers tr:nth-child(even){background-color: #E8E8F2;}

                #customers tr:hover {background-color: #ddd;}

                #customers th {
                  padding-top: 12px;
                  padding-bottom: 12px;
                  text-align: left;
                  background-color: #EBA865;
                  text-transform: uppercase;
                  text-align: center;
                  color: white;
                }
                .button {
                  background-color: #4b99ad;
                  border-radius: 18px;
                  border: none;
                  color: white;
                  text-align: center;
                  display: inline-block;
                  font-size: 12px;
                  margin: 2px 2px;
                  cursor: pointer;
                  font-family: 'Open Sans', sans-serif;
                  text-transform: uppercase;
                  padding: 8px 8px;
                }
                .open-button {
                background-color: #555;
                color: white;
                padding: 16px 20px;
                border: none;
                cursor: pointer;
                opacity: 0.8;
                position: fixed;
                bottom: 23px;
                right: 28px;
                width: 280px;
                font-family: 'Open Sans', sans-serif;
              }
              /* The popup form - hidden by default */
              .form-popup {
                display: none;
                position: fixed;
                bottom: 0;
                right: 15px;
                z-index: 9;
                box-shadow: 0 0 15px #FFB76B, 0 0 10px #FFB76B;
                font-family: 'Open Sans', sans-serif;
              }

              /* Add styles to the form container */
              .form-container {
                max-width: 300px;
                padding: 10px;
                background-color: white;
              }

              /* Full-width input fields */
              .form-container input[type=text], .form-container input[type=date] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                border: none;
                background: #f1f1f1;
              }

              /* When the inputs get focus, do something */
              .form-container input[type=text]:focus, .form-container input[type=password]:focus {
                background-color: #ddd;
                outline: none;
              }

              /* Set a style for the submit/login button */
              .form-container .btn {
                background-color: #91581C;
                color: white;
                padding: 16px 20px;
                border: none;
                cursor: pointer;
                width: 100%;
                margin-bottom:10px;
                opacity: 0.8;
              }

              /* Add a red background color to the cancel button */
              .form-container .cancel {
                background-color: red;
              }

              /* Add some hover effects to buttons */
              .form-container .btn:hover, .open-button:hover {
                opacity: 1;
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
                          
			  <li>
				<a href="accounts.php">Accounts</a>
			  </li>
			   
			  <li class="active">
                              <a href="reservations.php">Reservations</a>
			  </li>
                          
                          <li>
                              <a href="logout.php">Logout</a>
			  </li>
			</ul>
		  </nav>
		</div>
	  </header>
		
	   <div class="container my-container">
		<div class="row my-rows"> </div>
		<div class="row my-rows">
		  <h1 style="font-family: lovely; color: rgb(255, 251, 251);font-size: 60px;
		  text-align: center; text-shadow: 3px 5px 2px #644030; opacity: 95%;">Reservations
		  </h1>

<?php  $db = mysqli_connect("localhost", "root", "root", "bookingsdb");
    if(mysqli_connect_error()){
       die("Failed to connect to database");
    }else{
            $search = "SELECT * FROM `bookings` ORDER BY `checkin` ASC";                                       
            $result = mysqli_query($db, $search);     
            
                if(mysqli_num_rows($result) > 0) { 

                   echo "<center><table id='customers'>"              
                    . "<tr style='font-weight: bold';>"
                    . "<th align='center'>Name</th>"
                    . "<th align='center'>E-mail</th>"
                    . "<th align='center'>Contact No.</th>"
                    . "<th align='center'>Check-In</th>"
                    . "<th align='center'>Check-Out</th>"
                    . "<th align='center'>Room</th>"
                    . "</tr>";

                        while ($row = $result->fetch_assoc()){
                            $name = $row["name"];
                            $email = $row["email"];
                            $num = $row["contactnum"];
                            $checkin = $row["checkin"];
                            $checkout = $row["checkout"]; 
                            $room = $row["room"]; 
                            
                             echo "<tr>"
                            ."<td>".$name."</td>"
                            ."<td>".$email."</td>"
                            ."<td>".$num."</td>"
                            ."<td>".$checkin."</td>"
                            ."<td>".$checkout."</td>"
                            ."<td>".$room."</td>"
                            ."</tr>";
                        }
                   echo "</center></table>"; ?>
            <button class="open-button" onclick="openForm()">CANCEL RESERVATION</button>

            <div class="form-popup" id="myForm">
            <form method="post" action="reservations.php" class="form-container">

              <label for="name"><b>Client Name</b></label>
              <input type="text" name="name" required>
              
              <label for="checkin"><b>Check-in Date</b></label>
              <input type="date" name="checkin" required>

              <input name="submit" type="submit" class="btn" value="Cancel Reservation"></button>
              <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
            </div>    
              <script>
                    function openForm() {
                      document.getElementById("myForm").style.display = "block";
                    }

                    function closeForm() {
                      document.getElementById("myForm").style.display = "none";
                    }
              </script>
<?php 
if(isset($_POST['submit'])) {
        global $dname, $dcheckin;
        $dname = $_POST['name'];
        $dcheckin = $_POST['checkin'];
        $delete = "DELETE FROM `bookings` WHERE `name` = '".$dname."' AND `checkin` = '".$dcheckin."'";                                       
        mysqli_query($db, $delete);
        echo "<br><h5 style='color: #D0FE58; text-shadow: 0px 4px 10px black;'>".$dname."'s reservation has been cancelled. Please inform client immediately.<br>"
                . "Refresh page for updated table.";
    }
}
                else {
                    echo "<h2 style='color: white; text-align: center; text-shadow: -1px 2px 0px #000000;'>"
                    . "NO RESERVATIONS WERE MADE.</h2>";
                }
    } ?>
	  </div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>