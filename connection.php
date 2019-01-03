<?php
//==php new pdo sqlite google it===
try
{
    //open the database
    $db = new PDO('sqlite:userdata.db');
 $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}   catch (Exception $e) {
    echo "Unable to connect";
    echo $e->getMessage();
    exit;
}
//echo "Connected to the database";
    //create the database
	
/*
   $db->exec("CREATE TABLE `data` (
    `id` INTEGER PRIMARY KEY,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
)");   */

    
