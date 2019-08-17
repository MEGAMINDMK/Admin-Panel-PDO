<link rel="icon" href="images/console.png" type="image/x-icon">
<?php session_start(); /* Starts the session */
session_destroy(); /* Destroy started session */
header("location:login.php");
exit;
?>