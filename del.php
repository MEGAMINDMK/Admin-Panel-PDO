<?php include 'header.php';?>
<?php include 'footer.php';?>
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

 <center>
 <form action="dels.php" method="POST">
<h4>Give id to delete the user data</h4>
 ID: <input type="text" name="id">
<input type="submit" name="submit" class="btn btn-sm-default" value="Delete Data">
</form>
</center>
</div>

</body>
</html>