 <?php
$db_host = "wno-host.ddns.net"; // your remote domain or ip
$db_user = "megamind";
$db_pass = "pakarmy";
$db_name = "gsb_status";
$db_port = "3306"; // 3306 for mysql

// Create connection
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name, $db_port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?> 
