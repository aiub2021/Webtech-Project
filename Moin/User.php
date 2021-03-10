<!DOCTYPE html>
<html>
<head>
	<title> Admin Panel </title>
	<style type="text/css">
		body{
			margin: 0px;
			border: 0px;
		}
		#header{
			width: 100%;
			height: 120px;
	        background: black;
	        color: white;
		}
		#sidebar{
			width: 300px;
			height: 400px;
			background: lightblue;
			float: left;
		}
		#data{
			height: 700px;
			background: white;
			
		}
		#adminlogo{
			background: white;
			border-radius: 50px;
		}
		ul li{
			padding: 20px;
			border-bottom: 2px solid white;
		}
		ul li:hover{
			background: black;
			color: white;
		}
	</style>
</head>
<body>
	<div id="header">
		<center><img src="K.png" height="100px" alt="adminlogo"><br>This is an Admin Panel,Please proceed with caution!
		</center>
	</div>

	<div id="sidebar">
		<ul>
			<a href="User.php"><li>	User List	</li> </a>
			<li>	Order List	</li>
			<li>	Supplier List	</li>
			<a href="https://github.com/Kazi1998" style="color: black;text-decoration: none"><li> Delivery Team </li></a>
			<a href="1.LogIn.php" style="color: black;text-decoration: none"><li> LogOut </li></a>

		</ul>
	</div>

	<div id="data"><br>
		<center>
			<?php include('User_List.php'); 
			?>
		</center>
	</div>


</body>
</html>