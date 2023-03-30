<?php
    session_start();

	include("connection.php");
	include("mngrfunction.php");
 
 
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$mngr_name = $_POST['mngr_name'];
		$password = $_POST['password'];
 
		if(!empty($mngr_name) && !empty($password) && !is_numeric($mngr_name))
		{
 
			//read from database
			$query = "select * from manager where mngr_name = '$mngr_name' limit 1";
			$result = mysqli_query($con, $query);
 
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
 
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
 
						$_SESSION['mngr_id'] = $user_data['mngr_id'];
						header('location: mngrlog.php');
						die;
					}
				}
			}
			
			echo "wrong username or password1!";
		}else
		{
			echo "wrong username or password2!";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	body{
		background-color:rgb(251, 223, 82);
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
		font-size:10px;
		background-color: #282727;
		margin: auto;
		width: 450px;
		padding: 45px;
		height:700px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 60px;margin: 10px;color: white;">Login</div>
            <h1>manager name</h1>
			<input id="text" type="text" name="mngr_name"><br><br>
			<h1>password</h1>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>