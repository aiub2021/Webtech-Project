<!DOCTYPE html>
<html>
<head>
	<title> Admin LogIn </title>
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
		.login label
        {
            width: 120px;
            display: inline-block;
            text-align: left;
            margin: 3px;
        }
        input[type="text"]
        {
            overflow: hidden;
            font-size: 15px;
            padding: 5px 0;
            border: none;
            outline: none;
            background: none;
            color:black;
            border-bottom: 1px solid black;
        }
        input[type="password"]
        {
            overflow: hidden;
            font-size: 15px;
            padding: 5px 0;
            border: none;
            outline: none;
            background: none;
            color:black;
            border-bottom: 1px solid black;
        }
        input[type="submit"]
        {
            width: 100px ;
            background: none;
            border: 2px solid grey;
            padding: 5px;cursor: pointer;
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
		<center><img src="M.png" height="100px" alt="adminlogo"><br>PHP Restaurant
		</center>
	</div>

	<div id="sidebar">
		<ul>
			<a href="1.LogIn.php" style="color: black;text-decoration: none"><li>	LogIn </li></a>
			<a href="3.Registration.php" style="color: black;text-decoration: none"><li>	Registration </li></a>
		</ul>
	</div>

	<div id="data"><br>
		<center>
            <form id="forgetpass" method="get" action="4.ForgotPassword.php">
            <fieldset style="border: black 2px solid;">
                <legend><b>FORGET PASSWORD</b></legend>

                <div class="forgetpass">
                    <label for="email"><b>Email</b></label>
                    : <input type="text" id="email" name="email" size="55px" placeholder="email*"><br>

                </div><br>
                <input class="button "type="submit" value="Search" name="submit">
                
            </fieldset>
        </form>
    </center>
	</div>


</body>
</html>