<!DOCTYPE html>
<html lang="en">
<head>
	<title>Database</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" action="<?php $currentFile = $_SERVER["PHP_SELF"];$parts = Explode('/', $currentFile);echo $parts[count($parts) - 1];?>" method="post">
					<span class="login100-form-title p-b-51">
					 <img src="logo_right.png" width="300" height="100"><br>
					 Database Setup
					</span>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" name="databasename" type="text" placeholder="Your Database Name" required>
						<span class="focus-input100"></span>
					</div>				
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" name="dbpass" type="text" placeholder="Your Database Password" required>
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div>
							<a href="http://wno-host.ddns.net:90/phpmyadmin/" class="txt1">
								Already have a Phpmyadmin account?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="submit" type="submit">
							Create Database
						</button>
					</div>

				</form>
				<?php
error_reporting(0);
//*********************** CONFIG SETUP ************************************//
// Created by kierzo@kierzo.com
//
// set the admin pass for the page
$adminpass = "urphpmyadminrootpass";   // change ******* with your page pass
//
// set mysql root pass
$mysqlRootPass = "urphpmyadminrootpass";  // change ******* with your mysql root pass
//
//
//*********************** CONFIG SETUP ************************************//


// if isset set the varibables

if(isset($_POST["databasename"])){


$databasename = $_POST["databasename"];
$password = "urphpmyadminrootpass";
$dbpass = $_POST["dbpass"];

}
else { exit;}

if(($password) == ($adminpass)) {


}
else {

echo "Incorrect Password!";

exit;}

// store connection info...

$connection=mysqli_connect("localhost","root","$mysqlRootPass");


// check connection...

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


  // Create database
#echo "$sql";
$sql="CREATE DATABASE $databasename";

if (mysqli_query($connection,$sql))
  {
  echo "<h2>Database <b>$databasename</b> created successfully!</h2>";
  }
else
  {
  echo "Error creating database: " . mysqli_error($con);
  }


    // Create user

$sql='grant usage on *.* to ' . $databasename . '@localhost identified by ' . "'" . "$dbpass" . "'";
#echo "$sql";
if (mysqli_query($connection,$sql))
  {
  echo "<h2>User Created... <b>$databasename</b> created successfully!</h2>";
  }
else
  {
  echo "Error creating database user: " . mysqli_error($con);
  }


      // Create user permissions

//$sql="grant all privileges on $databasename.* to $databasename@localhost";
$sql="GRANT SELECT, INSERT, UPDATE, DELETE on $databasename.* to $databasename@localhost";
#echo "$sql";
if (mysqli_query($connection,$sql))
  {
  echo "<h2>User permissions Created... <b>$databasename</b> created successfully!</h2>";
  }
else
  {
  echo "Error creating database user: " . mysqli_error($con);
  }

  echo "<p>Database Name: $databasename</p>";
  echo "<p>Database Username: $databasename</p>";
  echo "<p>Database Password: $dbpass</p>";
  echo "<p>Database Host: localhost</p>";
?>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
