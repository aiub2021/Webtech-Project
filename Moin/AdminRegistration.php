<?php
    session_start();

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repass = $_POST['con_pass'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];

        if( $name == "" ||$username == "" || $email == "" || $password == "" || $repass == "" || $gender == "" || $birthday=="")

        {
            echo "null submission...";
        }else{

            if($password == $repass){

                $user = [   
                            'username'=>$username, 
                            'password'=>$password, 
                            'email'=> $email
                        ];

    
                $_SESSION['current_user'] = $user;

                header('location: login.html');
            }else{
                echo "password & confirm password mismatch..";
            }
        }

    }
?>




<!DOCTYPE html>
<html>
<head>
	<title>Public Home</title>
</head>
<body>
	<table align="center" width="790px" >
		<tr>
			<td>
	
	<table border="1" align="center" width="790px">
		<tr>
			<td colspan="2">
             <center><img src="M.png" height="100px" width="150px">
<table  align="center"  ><br> PHP RESTAURENT</center>

	<tr>
</td>
</tr>
	</table>
			</td>
		</tr>

		<tr>
			<td width="35%">
				<label><b><center>Menubar</center></b></label>
<hr>
				<table>	
				<tr>
					<td>
				<ul>
					<ol>
	<li><a href="AdminLogin.php">Login</a></li>
	<li><a href="AdminRegistration.php">Registration</a></li>
</ol>
</ul>
</td>
</table>
			<td colspan="2"  height="190px" align="center">
				<table>
					<tr>
						<td>
							<form method="POST" action="AdminLogin.php" >
		<fieldset >
			<legend >REGISTRATION</legend>
			 
			 <table>
				
						<tr>
						<td>Name</td>
						<td><input type="text" name="name">
						</td>
                         </tr>

                         <tr>
                         	<td>E-mail</td>
                         	<td><input type="email" name="email"></td>
                         </tr>

                         <tr>
                         	<td>Username</td>
                         	<td><input type="text" name="username" value="" pattern="[A-Za-z0-9]+" required="">
                         	</td>
                         </tr>

                         <tr>
                         	<td>Password</td>
                         	<td><input type="Password" name="password" value=""></td>
                         </tr>
                         <tr>
                         	<td>Conform Password</td>
                         	<td><input type="Password" name="con_pass" value=""></td>
                         </tr>
                         <tr>
                         	 <td colspan="2">
                      <fieldset> <legend>Gender</legend>
                        
                         	<input type="radio" id="male" name="gender" value="male"><label>Male</label>
                         	
                            <input type="radio" id="female" name="gender" value="female"><label>Female</label>
                            
                            <input type="radio" id="other" name="gender" value="other"><label>Other</label>
                        </fieldset>
            


<tr>
	<td colspan="2">
		 <fieldset> <legend>Birthday</legend>
                       

  <input type="date" id="birthday" name="birthday">
  
                            </td>
                        </tr>

                   
                        	<tr>
                        		<td>
                        		<input type="submit" name="submit">
                        		<input type="reset" name="reset">
                        	</td>
                        	</tr>
                        	</td>
</tr>
                        </fieldset>
                    </form>

</table>
</td>
</tr>

</td>
</tr>	
</table>
</td>
</tr>
 <tr>

	<td colspan="2" align="center" height="30px">

				Copyright@2021

			</td>
		</tr>





</td>
</tr>
</table>


</body>
</html>