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
  <title>custuserdata</title>
  <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
</head>
<body>
   <style type = "text/css">
     body{
      background-color:rgb(251,223,82);
     }
    </style>
     <div class = "container my-5">
      <h2>list of customers</h2>
      <a class = "btn btn-primary" href="" role = "button">Slot Booked Customers</a>
      <br>
       <table class = "table">
          <thead>
            <tr>
              <th>customer id</th>
              <th>customer name</th>
              <th>mobile number</th>
              <th>address</th>
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
               $sql = "select * from book_slot";
               //$result = $connection->query($sql);
               $result = mysqli_query($con,$sql);
               if(!$result){
                die("invalid query: ".$connection->error);
               }
               while($row = $result->fetch_assoc()){
                echo " 
                    <tr>
                       <td>$row[cust_id]</td>
                       <td>$row[cust_name]</td>
                       <td>$row[phone_no]</td>
                       <td>$row[address]</td>
                       <td>
                          <a class = 'btn btn-primary btn-sm' href = 'custuserdatadel.php?cust_id = $row[cust_id]'>Delete</a>
                
                       </td>
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