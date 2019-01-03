<?php
//error_reporting(0);
require 'connection.php';
if($_POST){
		$id 	= $_POST['id'];
$db->exec("DELETE FROM data WHERE id = '$id'");
}
header("Location: index.php");
 ?>