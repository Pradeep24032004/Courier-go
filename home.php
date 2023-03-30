<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <title>courier go</title>
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
.type1{
  height: 600px;
  width: 600px;
  position:absolute;
  top : 175px;
  left: 475px;
  border-radius: 50%;
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
.swiper{
    width:61%;
    height:70%;
}
.swiper-slide img{
    width:100%;
}

    </style>
    <div class="menu-bar">
    <img src="courier-go-logo.png" alt="" class = "type2">
      <label class = "navhead">courier go</label>
      <ul>
        <li><a href="#">Home</a></li>
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
    <img src="courier-go-logo.png" alt="couriergologo"  class = "type1">
    <div class="hero">
      &nbsp;
    </div>
  </div><br><br><br><br><br><br><br>
  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">Door to Door Services</h1>
        <p class="lead">Fastway’s door to door service is a testimony of our care and concern to ensure your convenience and comfort. A professionally managed service, we assure extreme care of every door picked delivery with utmost safety and security of the transfer, on-time every time. Our trained staff ensures right packaging and aids efficiency in handling all kinds of parcels and consignments.Most of our cargo pick up have an added benefit of not just free door to door delivery but packaging too. Our industry associates and wide network ensure reduced cost, wide geographic coverage and prompt door to door services across the world. </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Register Now</button>
          
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="home2.jpg" alt="" width="400" height = "300">
      </div>
    </div>
  </div><br><br><br>
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="home4.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="600" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Fast Courier Delivery Services</h1>
        <p class="lead">At Couriergo, we’ve helped more than a thousand customers win the delivery race, and we want to help you get a head start . we’ve learned from working with food, product, and service delivery teams all over the world. We have track record of delivering couriers for short span of time , increase your delivery efficiency, and much more.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2"><a href = "about.php" class = "btn btn-outline-light btn-lg px-4 me-mid-2">About</a></button>
        </div>
      </div>
    </div>
  </div><br><br><br><br>
  <img src = "home5.png" alt = "" height = "500" width = "1520"><br><br>
  <div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold">At Door Courier Services</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Couriergo is an unparalleled door-to-door delivery solution offered by Safexpress. This service is customized for SMEs and individuals having smaller loads to be shipped anywhere in the country. These could be small business shipments, samples, promotional items or even personal goods and gifts for family and friends..</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Register Now</button>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="home3.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="" width="400" height="900" loading="lazy">
      </div>
    </div>
  </div>
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
  </body>
</html>


