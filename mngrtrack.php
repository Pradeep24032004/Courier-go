<?php
  session_start();

  include("connection.php");
  include("custfunction.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
      //something was posted
      $courier_id = $_POST['courier_id'];
      $curr_loc = $_POST['curr_loc'];
	  $status = $_POST['status'];
      if(!empty($curr_loc))
	   {

		   //save to database
		   //$cust_id = random_num(10);
		   $query = "update booking_table set curr_loc = '$curr_loc' ,status = '$status' where courier_id = '$courier_id' ";

		   mysqli_query($con, $query);

		   header("Location: mngrlog.php");
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
	<title>mngrtrack</title>
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
		border: white;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 150px;
		color: black;
		background-color: lightblue;
		border: none;
	}

	#box{
        color:black;
		font-size:10px;
		background-color: rgb(251, 223, 82);
		margin: auto;
		width: 450px;
		padding: 45px;
		height:700px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 60px;margin: 10px;color:black;">Update Location</div><br><br><br><br><br><br>
            <h1>courier id</h1>
			<input id="text" type="text" name="courier_id"><br><br>
			<h1>update current location</h1>
			<input id="text" type="text" name="curr_loc"><br><br>
			<h1>update courier status</h1>
			<input id="text" type="text" name="status"><br><br>

			<input id="button" type="submit" value="submit"><br><br>

			<br><br>
		</form>
	</div>
</body>
</html>