<?php
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>custrack</title>
	<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
</head>
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
    .datain{
		color:black;
		font-size:10px;
		background-color: rgb(251, 223, 82);
		margin: auto;
		width: 450px;
		padding: 45px;
		height:700px;
	}
	.container{
		position:absolute;
		color:black;
		font-size:25px;
		background-color: rgb(251, 223, 82);
		margin: auto;
		width: 450px;
		padding: 0 60px;
		height:1400px;
		left:820px;
		top:280px;
		column-gap:40px;
		
		
	}
	</style>

   
		<form method="post">
			
            <h1 style = "position:absolute;left:870px;top:80px;">courier ID</h1>
			<input  style="position:absolute;left:870px;top:153px;width:400px;height:30px;" type="text" placeholder="Enter Courier ID" name="courier_id"><br>
			

			<button class = "btn btn-dark " style="position:absolute;left:870px;top:200px;width:200px;"name = "submit">Search</button>
</form>
	
   
	<div class = "container">
		<table class = "table">
		<?php
		   session_start();

		   include("connection.php");
		   include("custfunction.php");
		  if(isset($_POST['submit'])){
			$courier_id = $_POST['courier_id'];
			$sql = "SELECT source,curr_loc,dest,status from booking_table where courier_id = '$courier_id'";
			$result = mysqli_query($con,$sql);
			if($result){
				if(mysqli_num_rows($result)>0){
					echo '<thead>
					<tr>
				    <th>Source</th>
					<th>Current location</th>
					<th>Destination</th>
					<th>Status</th>
					
					</tr>
					</thead>';
					$row = mysqli_fetch_assoc($result);
					echo '<tbody>
					<tr>
					<td>'.$row['source'].'</td>
					<td>'.$row['curr_loc'].'</td>
					<td>'.$row['dest'].'</td>
					<td>'.$row['status'].'</td>
					</tr>
					</tbody>';
				}
				else{
					echo '<h2 class=text-danger>No courier id is matching incorrect</h2>';
				}
			}
		  } 
		?>
		
		</table>
	</div>
	<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248756.13131202172!2d80.04419860854908!3d13.047473316498955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265ea4f7d3361%3A0x6e61a70b6863d433!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1682793678764!5m2!1sen!2sin" width="720" height="690" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
</body> 
</html>