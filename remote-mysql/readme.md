
$db_host = "some.com"; // your remote domain or ip
$db_user = "player";
$db_pass = "random";
$db_name = "pubg";
$db_port = "3306"; // 3306 for mysql

// Create connection
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name, $db_port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

