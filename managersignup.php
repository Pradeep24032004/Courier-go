<?php
   session_start();

   include("connection.php");
   include("mngrfunction.php");


   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
	   //something was posted
	   $mngr_name = $_POST['mngr_name'];
	   $email = $_POST['email'];
	   $password = $_POST['password'];
	   $mgr_pin = $_POST['mgr_pin'];
	   

	   if(!empty($mngr_name) && !empty($password))
	   {

		   //save to database
		   $mngr_id = random_num(10);
		   $query = "insert into manager(mngr_id,mngr_name,email,password,mgr_pin) values ('$mngr_id','$mngr_name','$email','$password','$mgr_pin')";

		   mysqli_query($con, $query);

		   header("Location: managerlogin.php");
		   die;
	   }else
	   {
		   echo "Please enter some valid information!";
	   }
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	body{
		background-color: rgb(251, 223, 82);
	}
	#text{
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 150px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{
        color:white;
		font-size: 10px;
		background-color: #282727;
		margin: auto;
		width: 450px;
		padding: 45px;
		height: 650px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 60px;margin: 10px;color: white;">Signup</div>
            <h1>manager name</h>
			<input id="text" type="text" name="mngr_name"><br><br>
			<h1>email</h1>
			<input id = "text" type = "text" name = "email"><br><br>
			
			<h1>password</h1>
			<input id="text" type="password" name="password"><br><br> 
			<h1>manager pin</h1>
			<input id="text" type="number" name="mgr_pin"><br><br>   
            
			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>