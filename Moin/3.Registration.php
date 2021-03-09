<!DOCTYPE html>
<html>
<head>
	<title> Admin Registration </title>
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
        form
        {
            width: 50%;
            margin: auto;
        }
        div.registration
        {
            font-weight: Bold;
        }
        .registration label
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
        input[type="reset"]
        {
            width: 100px ;
            background: none;
            border: 2px solid grey;
            padding: 5px;cursor: pointer;
        }
        div.date
        {
            text-align: center;
            float: left;
            margin: 2px;
        }
        div.month
        {
            text-align: center;
            float: left;
            margin: 2px;
        }
        div.year
        {
            text-align: center;
            float: left;
            margin: 2px;
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
            <form id="registration" method="POST" action="1.LogIn.php">
            
        <fieldset style="border: black 2px solid;">
                <legend><b>REGISTRATION</b></legend>
                
                <div class="registration" method="POST" action="3.Registration.php">

                <label for="name">Name</label>
                : <input type="text" id="name" name="name" size="55px" placeholder="name*" required><br>
                
                <label for="email">Email</label>
                : <input type="text" id="email" name="email" size="55px" placeholder="email*" required><br>
                
                <label for="uname">User name:</label>
                : <input type="text" id="uname" name="uname" size="55px" placeholder="user name*" required><br>
                
                <label for="password">Password:</label>
                : <input type="password" id="password" name="password" size="55px" placeholder="password*" required><br>
                
                <label for="cpassword">Confirm Pasword:</label>
                : <input type="password" id="cpassword" name="cpassword" size="55px" placeholder="confirm password*" required><br>
            
                <div class="gernder">
                
                <fieldset style="border: black 2px solid;">
                <legend><b>GENDER</b></legend>
                
                <input type="radio" name="gender" value="Male">
                <span class="radiobtn"></span>
                <label class="male"><b>Male</b></label>

                <input type="radio" name="gender" value="Female">
                <span class="radiobtn"></span>
                <label class="female">Female</label>

                <input type="radio" name="gender" value="Other">
                <span class="radiobtn"></span>
                <label class="other">Other</label>

                </fieldset>
                </div>

                <div class="dob">
                <fieldset style="border: black 2px solid;">
                <legend><b>DATE OF BIRTH</b></legend>
                
                <div class ="date">
                    <input type="text" id="date" name="dob" value="date" placeholder="date" style="text-align: center;" size="5"> / 
                </div>

                <div class="month">
                    <input type="text" id="month" name="dob" value="month" placeholder="month" style="text-align: center;" size="5"> /
                </div>

                <div class="year">
                    <input type="text" id="year" name="dob" value="year" placeholder="year" style="text-align: center;" size="6">
                </div>
                
                <pre> <i>(dd/mm/yyyy)</i></pre>

                </fieldset>
                </div><br>
                <input class="button" type="submit" value="Submit" name="submit">
                <input class="button" type="reset" value="Reset Form" name="reset">
            </div>

            </fieldset>
        </form>
    </center>
	</div>


</body>
</html>