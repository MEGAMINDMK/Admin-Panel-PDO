<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<!--stuff below-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="https://www.baylintech.com/wp-content/uploads/2018/07/globe-2.png" type="image/x-icon" />
<link rel="icon" href="https://www.baylintech.com/wp-content/uploads/2018/07/globe-2.png" type="image/x-icon" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<title>Webnet Official</title>
<style>
body{
background-color: #00ff99;
}
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4d79ff;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #668cff;
}
</style>
</head>
<br><br>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" action="<?php $currentFile = $_SERVER["PHP_SELF"];$parts = Explode('/', $currentFile);echo $parts[count($parts) - 1];?>" method="post">
					<span class="login100-form-title p-b-51">
					 <img src="https://raw.githubusercontent.com/MEGAMINDMK/Admin-Panel-PDO/master/create_database_with_user_privellages_in_phpmyadmin/logo_right.png" width="300" height="100"><br>
					Welcome to Mysql Remote Database Setup
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
							<a href="http://wno-host.ddns.net:92/phpmyadmin/" target="_blank" class="txt1">
								Already have a Phpmyadmin account?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="btn btn-danger" name="submit" type="submit">
							Create Database
						</button>
						<a href="logout.php" class="btn btn-danger"> Logout </a>
					</div>

				</form>
				<?php
error_reporting(0);
//*********************** CONFIG SETUP ************************************//
// Created by kierzo@kierzo.com
//
// set the admin pass for the page
$adminpass = "password";   // change ******* with your page pass
//
// set mysql root pass
$mysqlRootPass = "password";  // change ******* with your mysql root pass

$host = "wno-host.ddns.net";
$port = "3306";
//
//
//*********************** CONFIG SETUP ************************************//
// if isset set the varibables
if(isset($_POST["databasename"])){
$databasename = $_POST["databasename"];
$password = "pakarmy";
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
  echo "You have successfully created a new database.The details are below";
  }
else
  {
  echo "Error creating database: " . mysqli_error($connection);
  }
    // Create user
//$sql='grant usage on *.* to ' . $databasename . '@% identified by ' . "'" . "$dbpass" . "'";
$sql="GRANT USAGE ON *.* TO '$databasename'@'%' IDENTIFIED BY '$dbpass'";
#echo "$sql";
if (mysqli_query($connection,$sql))
  {
 // echo "<br>$databasename created successfully!";
  }
else
  {
  echo "Error creating database user: " . mysqli_error($connection);
  }
      // Create user permissions

$sql="GRANT SELECT , INSERT , UPDATE , DELETE ON " . $databasename . " . * TO '" . $databasename . "'@'%'";

if (mysqli_query($connection,$sql))
  {
 // echo "User permissions $databasename created successfully";
  }
else
  {
  echo "Error creating database user: " . mysqli_error($connection);
  }
  echo "<br>Username: $databasename<br>Database name: $databasename<br>Password: $dbpass<br>Server: $host<br>Port: $port";
  echo "<br>These are the username and password to log in to your database and phpMyAdmin<hr>";
  echo "Make sure your keep your password secure. Ensure you keep backups of your database incase it gets deleted";
?>
			</div>
		</div>
	</div>

</body>
</html>
