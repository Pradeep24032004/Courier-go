<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <title>user main</title>
</head>
<body>
    <style type = "text/css" >
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

        body{
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
    </div><main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        
        
      </a>
    </header>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Book Corier Now </h1>
        <p class="col-md-8 fs-4">Courier go is a shipping logistics solution and a courier service aggregator that helps in delivering products to customers with the help of 17+ courier partners.Courier go  is associated with multiple courier partners through which it offers courier services at affordable prices. Through Shiprocket you get to choose between multiple courier partners and compare delivery prices. For every order and pincode, see live rates and make an informed decision</p>
        <button class="btn btn-primary btn-lg" type="button" ><a href = "courier.php" class = "btn btn-outline-light btn-lg px-4 me-mid-2">Book Courier</a></button>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-bg-dark rounded-3">
          <h2>Customer Slot Booking Details</h2>
          <p>Parcel Delivery is also now made easy with the revolutionizing approach of courier go, it is now just a few clicks away and will not waste your time with a need to look at your local contacts and directory to find a reliable and fast courier service.</p>
          <button class="btn btn-outline-light" type="button"><a href = "custuserdata.php" class = "btn btn-outline-light btn-lg px-4 me-mid-2">Check slot bookings</a></button>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Courier go  family</h2>
          <p>Courier go is one of the most significant services that most people need because there are just times that you can’t do it yourself, and distance is also an issue for some people. There are also reasons, such as being too busy to do it themselves, or sometimes the parcel may be a surprise to the recipient and somewhat brings a hint of excitement as well to the receiver by delivering the parcel via courier.</p>
          <button class="btn btn-outline-secondary" type="button">Know More</button>
        </div>
      </div>
    </div>

    <footer class="pt-3 mt-4 text-muted border-top">
      &copy; 2022
    </footer>
  </div>
</main>

</body>
</html>