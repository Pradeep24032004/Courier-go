<?php
    session_start();

    include("connection.php");
    //include("custfunction.php");
 
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $courier_id= $_POST['courier_id'];
        $cust_id= $_POST['cust_id'];
        $details = $_POST['details'];
        $weight = $_POST['weight'];
        $curr_loc = $_POST['curr_loc'];
        $dest = $_POST['dest'];
 
        if(!empty($courier_id) && !empty($cust_id))
        {
 
            //save to database
            //$cust_id = random_num(10);
            $query = "insert into booking_table(courier_id,cust_id,details,weight,curr_loc,dest) values ('$courier_id','$cust_id','$details','$weight','$curr_loc','$dest')";
 
            mysqli_query($con, $query);
 
            header("Location: bookingconfirmed.php");
            die;
        }else
        {
            echo "Please enter some valid information!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Courier Details</title>
</head>
<body>
    <style type = "text/css">
                        :root {
  --color-primary: #0073ff;
  --color-white: #e9e9e9;
  --color-black: #141d28;
  --color-black-1: #212b38;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-color:rgb(251,223,82);
  font-family: sans-serif;
 
}

.logo {
  color: white;
  font-size: 30px;
}

.logo span {
  color: var(--color-primary);
}

.menu-bar {
  background-color: var(--color-black);
  height: 80px;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 5%;

  position: relative;
}

.menu-bar ul {
  list-style: none;
  display: flex;
}

.menu-bar ul li {
  /* width: 120px; */
  padding: 10px 30px;
  /* text-align: center; */

  position: relative;
}

.menu-bar ul li a {
  font-size: 20px;
  color: var(--color-white);
  text-decoration: none;

  transition: all 0.3s;
}

.menu-bar ul li a:hover {
  color: var(--color-primary);
}

.fas {
  float: right;
  margin-left: 10px;
  padding-top: 3px;
}

/* dropdown menu style */
.dropdown-menu {
  display: none;
}

.menu-bar ul li:hover .dropdown-menu {
  display: block;
  position: absolute;
  left: 0;
  top: 100%;
  background-color: var(--color-black);
}

.menu-bar ul li:hover .dropdown-menu ul {
  display: block;
  margin: 10px;
}

.menu-bar ul li:hover .dropdown-menu ul li {
  width: 150px;
  padding: 10px;
}

.dropdown-menu-1 {
  display: none;
}

.dropdown-menu ul li:hover .dropdown-menu-1 {
  display: block;
  position: absolute;
  left: 150px;
  top: 0;
  background-color: var(--color-black);
}

.hero {
  height: calc(100vh - 80px);
  background-image: url(./bg.jpg);
  background-position: center;
}
        .type2{
  height:65px;
  width:65px;
  border-radius:400px;
}
label.navhead{
  position:absolute;
  left:160px;
  font-size:50px;
  color:white;
  top:6px;
}
.type1{
    height: 200px;
  width: 200px;
  position:absolute;
  top : 125px;
  left: 670px;
  border-radius: 50%; 
}
.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      #text{
		height: 25px;
		border-radius: 25px;
		padding: 25px;
		border: solid thin #aaa;
		width: 500px;
        font-size:15px;
	}

	#button{

		padding: 15px;
		width: 200px;
		color: black;
		background-color: lightblue;
		border: none;
        font-size:15px;
	}

	#box{
        color:black;
        font-family: sans-serif;
		font-size: 8px;
		background-color:rgb(251, 223, 82);
		margin: auto;
		width: 600px;
		padding: 45px;
		height: 800px;
	}
        </style>
    <div class="menu-bar">
    <img src="courier-go-logo.png" alt="" class = "type2">
      <label class = "navhead">courier go</label>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="#">register<i class="fas fa-caret-down"></i></a>
            <div class="dropdown-menu">
                <ul>
                  <li><a href="signup.php">user</a></li>
                  <li><a href="managersignup.php">manager</a></li>
                  <li><a href="customersignup.php">customer</a></li>
                </ul>
              </div>
        </li>
        <li><a href="#">login<i class="fas fa-caret-down"></i></a>
            <div class="dropdown-menu">
                <ul>
                  <li><a href="login.php">user</a></li>
                  <li><a href="managerlogin.php">manager</a></li>
                  <li><a href="customerlogin.php">customer</a></li>
                </ul>
              </div>
        </li>
        <li><a href="#">Contact us</a></li>
      </ul>
    </div>
    <div id="box">
		
		<form method="post">
			<div style="font-size: 80px;margin: 20px;color: black;">Courier Booking</div>
            <h1>Courier id</h1>
			<input id="text" type="number" name="courier_id"><br><br>
			<h1>Customer id</h1>
			<input id = "text" type = "number" name = "cust_id"><br><br>

			<h1>Details</h1>
			<input id="text" type="text" name="details"><br><br>   
			
			<h1>Weight</h1>
			<input id="text" type="number" name="weight"><br><br> <br><br>  
            <h1>Location</h1>
			<input id="text" type="text" name="curr_loc"><br><br>   
            <h1>Destination Address</h1>
			<input id="text" type="text" name="dest"><br><br>   
			<input id="button" type="submit" value="Confirm Booking"><br><br>

			<a href="custnext.php">Back to cusomers page</a><br><br>
		</form>
	</div>
</body>
</body>
</html>