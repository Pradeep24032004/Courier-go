<?php
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>custprice</title>
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
		padding: 50px;
		height:1400px;
		left:400px;
		top:400px;
		column-gap:40px;
		
		
	}
	</style>

   
		<form method="post">
			
            <h1 style = "position:absolute;left:475px;top:80px;">Check Service Charges</h1>
			<input  style="position:absolute;left:475px;top:153px;width:400px;height:30px;" type="text" placeholder="Enter Source City" name="source"><br>
			<input  style="position:absolute;left:475px;top:200px;width:400px;height:30px;" type="text" placeholder="Enter Destination City" name="dest"><br>
      <input  style="position:absolute;left:475px;top:250px;width:400px;height:30px;" type="text" placeholder="Enter Weight in Kg" name="weight"><br>
			<button class = "btn btn-dark " style="position:absolute;left:475px;top:300px;width:200px;"name = "submit">Search</button>
</form>
	
   
	<div class = "container">
		<table class = "table">
		<?php
		   session_start();

		   include("connection.php");
		   include("custfunction.php");
		  if(isset($_POST['submit'])){
			$source = $_POST['source'];
      $dest = $_POST['dest'];
      $weight = $_POST['weight'];
			$sql = "SELECT * from pricedetails where source = '$source' and dest = '$dest' ";
			$result = mysqli_query($con,$sql);
			if($result){
				if(mysqli_num_rows($result)>0){
					echo '<thead>
					<tr>
				    <th>Source</th>
					<th>Destination</th>
					<th>Delivery Charges(per kg)</th>
					<th>DoortoDoor Service charges</th>
					
					</tr>
					</thead>';
					$row = mysqli_fetch_assoc($result);
					echo '<tbody>
					<tr>
					<td>'.$row['source'].'</td>
					<td>'.$row['dest'].'</td>
					<td>'.$row['priceperdist'].'</td>
					<td>'.$row['atdoorprice'].'</td>
					</tr>
					</tbody>';
          echo "weight:";
          echo  $weight;
          echo "kg";
				}
				else{
					echo '<h2 class=text-danger>No courier service is availabale</h2>';
				}
			}
		  } 
      
		?>
		
		</table>
	</div>
	
</body> 
</html>