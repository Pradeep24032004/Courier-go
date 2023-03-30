<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>about</title>
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
    <div class="px-4 py-5 my-5 text-center">
    <img  src="courier-go-logo.png" alt="" class = "type1"><br><br><br><br><br><br><br>
    <h1 class="display-5 fw-bold">About us</h1><br><br><br>
    <div class="col-lg-6 mx-auto">
      <h1>SERVICES</h1><br><br>
      <p class="lead mb-4">
Delhivery’s aim is to build the operating system for commerce. We provide express parcel transportation, PTL and TL freight, cross-border and supply chain services to over 26000 customers, including large & small e-commerce participants, SMEs, and other leading enterprises & brands. Our supply chain platform and logistics operations bring flexibility, breadth, efficiency and innovation to our customers’ supply chain and logistics. Our operations, infrastructure and technology enable our customers to transact with us and our partners at low costs.

</p><br><br><br><br><br>
<h1>PARTNER</h1><br><br>
   <p class ="lead mb-4">As a part of our vision, we extend our logistics ecosystem by enabling network partners, such as franchisees, retail partners and delivery agents, to onboard their physical assets and resources and participate in our platform. We have partnered with over 6000 vendors and network partners who provide pickup, delivery services, and truckload capacity. Our network partners are supported by our technology systems, empowering them to grow their business by offering multiple Delhivery services in their catchment areas.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center"></div>
    </div>
  </div><br><br>
  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">SUPPLY CHAIN SERVICES</h1>
        <p class="lead">Our supply chain solutions combine the strength of our warehousing and transportation operations, infrastructure, network and technology with deep data-science and business intelligence capabilities. This enables us to provide comprehensive and integrated multi-channel order fulfillment solutions that improve the reliability, speed, and cost-efficiency of our customers’ supply chains. Additionally, We acquired Primaseller Inc. to enable D2C e-commerce brands and omnichannel retailers to integrate their online and offline channels with our logistics network. This allows us to provide a reliable order-to-delivery promise to consumers.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Register Now</button>
          
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="couriergo2.png" alt="" width="400">
      </div>
    </div>
  </div><br><br>
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