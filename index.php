<?php include 'header.php';?>
<html>
<head>
<style>
body{
	margin: 0px;
	border: 0px;
}
#header{
width: 100%px;
height: 150;
background: #000000;
color: white;
}
#sidebar{
	width: 150;
	height: 400;
	background: #000000;	
	float: left;
}
#Data{
	height: 700px;
	background: #ffffff; 
}
#adminlogin{
background: white;
border-radius: 50px;
}

ul li{
padding: 20px;
}

ul li:hover{
background: #ffffff;
color: grey;
}
a{
	text-decoration: none;
	color: white;
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 10%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<div id="header">
<center><img src="adminlogo.png" id="adminlogo" width="100" height="100" class="responsive"><br><br>This is admin panel pls proceed
</center>
</div>

<div id="sidebar">
<ul>
 <a href="index.php" style="color: white; text-decoration: none;"><li>Home</li></a>
 <a href="add.php" style="color: white; text-decoration: none;"><li>Add Data</li></a>
 <a href="del.php" style="color: white; text-decoration: none;"><li>Delete Data</li></a>
</ul>
</div>

<div id="data">
<br><br>
<?php
//error_reporting(0);
require 'connection.php';
 $result = $db->query('SELECT * FROM data');
 echo "
	<center>
      <table>
        <tr>
		<th>id</th>
          <th>Name</th>
		  <th>Email</th>
          <th>Pass</th>
        </tr>
      ";
    foreach($result as $row)
    {
   
        echo  "
          <tr>
		   <td>" . $row["id"]. "</td>
            <td>" . $row["fname"]. "</td>
			<td>" . $row["email"]. "</td>
            <td>" . $row["pass"]. "</td>
          </tr>
          ";
    }
?>
</div>

</body>
</html>
<?php include 'footer.php';?>

