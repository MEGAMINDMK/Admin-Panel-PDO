<?php
//==php new pdo sqlite google it===
//require 'newdb.php';
if($_POST){
	$dbname 	= $_POST['dbname'];
	$tbname 	= $_POST['tbname'];
	$field1     = $_POST['field1'];
	$field2 	= $_POST['field2'];
	$field3 	= $_POST['field3'];
	$field4 	= $_POST['field4'];
}
try
{
    //open the database
    $db = new PDO('sqlite:'.$dbname.'');	
 $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
  catch (Exception $e) {
    echo "Unable to connect";
    echo $e->getMessage();
    exit;
}
//echo "Connected to the database";
    //create the database
	

   $db->exec("CREATE TABLE ".$tbname." (
    `id` INTEGER PRIMARY KEY,
  `".$field1."` varchar(50) NOT NULL,
  `".$field2."` varchar(50) NOT NULL,
  `".$field3."` varchar(50) NOT NULL,
  `".$field4."` varchar(50) NOT NULL
)");   
header("Location: index.php");
?>
    
