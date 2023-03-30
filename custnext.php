<?php
session_start();
include("custconnection.php");
include("custfunction.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>customer</title>
    
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
        .custid{
            font-family: sans-serif;
            margin-left:15px auto;
            position: absolute;
            left:650px;
            top:100px;
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
    <p class="custid">Customer id:<?php echo  $_SESSION['cust_id']; ?></p><br><br><br><br>
    <div class="container marketing">

<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="col-lg-4">
    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="rgb(247, 164, 81)"/><text x="50%" y="50%" fill="rgb(247, 164, 81)" dy=".3em">140x140</text></svg>
    <h2 class="fw-normal">Book Your Slot</h2>
    <p>Courier go provides best courier services of picking courier from door and delivers the courier at door.Book your slot for to pick courier at door</p>
    <p><a class="btn btn-secondary" href="bookslot.php">Book Slot</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="rgb(102, 255, 47)"/><text x="50%" y="50%" fill="rgb(102, 255, 47)" dy=".3em">140x140</text></svg>
    <h2 class="fw-normal">Track Courier</h2>
    <p>Courier go is one of best courier service platform which provides time to time updates on courier details and location.Here is tracking option to track couriers.</p>
    <p><a class="btn btn-secondary" href="#">Track Now</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="rgb(0, 128, 105)"/><text x="50%" y="50%" fill="rgb(0, 128, 105)" dy=".3em">140x140</text></svg>
    <h2 class="fw-normal">Complaint Box</h2>
    <p>Here is complaint box which solves the customers problems with in short time and detects the faults during courier if happen.</p>
    <p><a class="btn btn-secondary" href="#">Complaint</a></p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->


<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading fw-normal lh-1">Courier go. <span class="text-muted">Fast go!</span></h2>
    <p class="lead">When you require an urgent courier service, why waste time with long-winded delivery networks when you don’t need to? With DeliveryApp, you’ll have a nationwide network of professional courier drivers at your fingertips ready for collection and delivery of your goods on the very same day. With an in-app messaging system, quick bookings for repeat orders, and the ability to rate your driver, we make managing your deliveries a breeze for both individuals and businesses alike.</p>
  </div>
  <div class="col-md-5">
    <img src = "home3.jpg" alt = "" width = "400" height = "300">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading fw-normal lh-1">Courier go Products. <span class="text-muted">Order Now!</span></h2>
    <p class="lead">We’re not your average courier company, and we’re focused on disrupting an outdated industry in dire need of innovative technological advancements. At Courier go, we leverage the most advanced technologies to provide an expansive range of fully traceable on-demand courier services. Leave those complicated tracking codes in the past, simply create an account, book your delivery online or via the app, and track your driver from start to finish.DeliveryApp offers an extensive suite of features tailored to suit everyone’s needs, regardless of whether you need a one-off delivery or make regular bookings. Our features are purpose-built to solve even the most complex of logistical problems to offer a hassle-free courier service when you need it most.Rapid collection within 2 hours for those requiring an urgent solution.Broad range of vehicle options with full day /half day booking available.Book your job in minutes using our app or online via our website.</p>
  </div>
  <div class="col-md-5 order-md-1">
    <img src = "couriergo1.png" alt = "" width = "350" height = "500">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading fw-normal lh-1">At Door Courier Services .<span class="text-muted">Courier go!</span></h2>
    <p class="lead"> Courier go was created to solve long standing problems that exist in the logistics industry. Combining technology with a strong focus on ethical driver treatment and a more transparent customer experience, DeliveryApp provides a solution which connects couriers and customers – providing all the delivery information at their fingertips.

Now a fully integrated tech pform with a large network of fully vetted drivers across the UK and growing rapidly everyday, Courier go is quickly revolutionising and offering a scalable dynamic solution to the ever growing on demand logistics space.We want to see a greener future and have our bit to play in reducing our impact on the planet. That’s why we’re actively rewarding our drivers who use hybrid and electric vehicles. We’re also doing our bit in other ways to help reduce our carbon footprint such as using green energy suppliers. We’re dedicated to our colleagues and want to see them realise their potential. Our inclusive recruitment policy celebrates individuality and strives for a diverse workplace. Our vibrant culture inspires future innovators and we want to see our people have bright futures within the business.</p>
</div>
  <div class="col-md-5">
    <img src = "home9.jpg" alt = "" width = "600" height = "500">
  </div>
</div>

<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

</div><!-- /.container --><br><br><br>
<div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-white">Courier go Services</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">The service is ideal for movement of products not having industrial packing. This service offers door to door delivery and pick up of goods of above 10kg in all sizes from and to any pincode all over India with over 614 destinations and 22023 Pincodes served. Free 20 kg ‘Easy to Move' Box is provided with a simple flat rate per box for any destination. This specialized door to door service covers every square inch of the country including major cities like Delhi-NCR, Bangalore, Chennai, Mumbai, Pune, Hyderabad, Ahmedabad and many more.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Contact Us</button>
      
        </div>
      </div>
    </div>
  </div>
 </div>
</body>
</html>


