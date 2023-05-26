<?php
   session_start();
   include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>customer review box</title>
  <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
</head>
<body>
   <style type = "text/css">
     body{
      background-color:rgb(251,223,82);
     }
    </style>
     <div class = "container my-5">
      <h2>Reviews and Ratings</h2>
      <a class = "btn btn-primary" href="" role = "button">Customer Reviews</a>
      <br>
       <table class = "table">
          <thead>
            <tr>
            <th>Rating(/5)</th>
              <th>Review</th>
           </tr>
          </thead>
          <tbody>
            <?php
               //$dbhost = "localhost";
               //$dbuser = "root";
               //$dbpass = "";
               //$dbname = "login_sample_db";

               //if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
               //{

	                //die("failed to connect!");
               //}
        
                //$cust_name=$_SESSION['cust_name'];
                //$i = 1;
               //$rows = mysqli_query($conn, "SELECT * FROM product_upload where username='$user_name'")
               //<?php foreach ($rows as $row) : 
               $sql = "select * from give_review";
               //$result = $connection->query($sql);
               $result = mysqli_query($con,$sql);
               if(!$result){
                die("invalid query: ".$connection->error);
               }
               while($row = $result->fetch_assoc()){
                echo " 
                    <tr>
                       <td>$row[rating]</td>
                       <td>$row[review]</td>
                       
                    </tr>
                      ";
                }
               
               
            ?>
            <tr>
            </tr>
          </tbody>
       </table>
    </div>
</body>
</html>