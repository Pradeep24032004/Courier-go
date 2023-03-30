<?php
   session_start();

   include("connection.php");
   include("custfunction.php");


   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
	   //something was posted
	   $cust_name = $_POST['cust_name'];
	   $email = $_POST['email'];
	   $password = $_POST['password'];
	   $phone_no = $_POST['phone_no'];
	   $pin_code = $_POST['pin_code'];
	   $city = $_POST['city'];
	   $address = $_POST['address'];

	   if(!empty($cust_name) && !empty($password))
	   {

		   //save to database
		   $cust_id = random_num(10);
		   $query = "insert into customers(cust_id,cust_name,cust_email,cust_password,phone_no,pin_code,city,address) values ('$cust_id','$cust_name','$email','$password','$phone_no','$pin_code','$city','$address')";

		   mysqli_query($con, $query);

		   header("Location: customerlogin.php");
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
		height: 800px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 60px;margin: 10px;color: white;">Signup</div>
            <h1>customer name</h1>
			<input id="text" type="text" name="cust_name"><br><br>
			<h1>email</h1>
			<input id = "text" type = "text" name = "email"><br><br>
			<h1>password</h1>
			<input id="text" type="password" name="password"><br><br>   
			<h1>mobile number</h1>
			<input id="text" type="number" name="phone_no"><br><br>   
			<h1>pin code</h1>
			<input id="text" type="number" name="pin_code"><br><br>   
            <h1>city</h1>
			<input id="text" type="text" name="city"><br><br>   
			<h1>address</h1>
			<input id="text" type="text" name="address"><br><br>   

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="customerlogin.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>