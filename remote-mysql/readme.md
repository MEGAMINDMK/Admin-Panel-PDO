To test remote connection try below script<br>
$db_host = "some.com"; // your remote domain or ip<br>
$db_user = "player";<br>
$db_pass = "random";<br>
$db_name = "pubg";<br>
$db_port = "3306"; // 3306 for mysql<br>

// Create connection<br>
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name, $db_port);<br>

// Check connection<br>
if (!$conn) {<br>
    die("Connection failed: " . mysqli_connect_error());<br>
}<br>
echo "Connected successfully";

