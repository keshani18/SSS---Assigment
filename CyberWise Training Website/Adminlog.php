<?php

require_once("configurations/dbconfig.php");

?>
<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'cyber-store';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if ($stmt = $con->prepare('SELECT id, password FROM admin WHERE username = ?')) {
   
  $stmt->bind_param('s', $_POST['username']);
  $stmt->execute();
  
  $stmt->store_result();
}
$stmt->store_result();
if ($stmt->num_rows > 0) {
  $stmt->bind_result($id, $password);
  $stmt->fetch();
  
  if ($_POST['password'] === $password) {
    session_regenerate_id();
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['name'] = $_POST['username'];
    $_SESSION['id'] = $id;
    header('Location:update.php');
  } 
  else {
    echo "<script>alert('ERROR:Incorect password')</script>";
  }
} 
$stmt->close();

 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CyberWise Training</title>

      <link rel="stylesheet" href="./style/home.css" />
    
<style>


body{

background-image: url("images/background-images/1.jpg");
background-attachment: fixed;
background-position: center;
background-size: cover;
margin-top:0px;
color:white;
width: 100vw;
overflow-x: hidden;




}
input {
  
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 20px;
  margin-right: 15px;
}

   

.main{

background-attachment: fixed;
background-position: center;
background-size: cover;
margin-top:20px;
color:white; 
border: 2px solid orange;
width:700px;
margin:auto;
height: 400px;
background-color: rgb(0,0,0,0.5);
padding-left: 40px;
padding-top: 50px;
margin-bottom: 50px;


}
button:hover{
       background-color: orange;
}

.regform{
    width:700px;
    margin:auto;
    background-color:black;
    padding:10px 0px 10px 0px;
    text-align:center;
    text-align:fixed;
    color:white;
    border-radius:15px 15px 0px 0px;
    border:2px solid orange;
    height: 70px;
    margin-top: 100px;
}

.username{
   position:relative;
   color:black;  
   left:230px;
   font-size: 16px;
   top:-33px;
   line-height:40px;
   width:350px;
   border-radius: 6px;
   padding:0 22px;

}

.password{
   position:relative;
   color:black;  
   left:230px;
   font-size: 16px;
   top:-40px;
   line-height:40px;
   width:350px;
   border-radius: 6px;
   padding:0 22px;

}


.button1{
   
   background-color: black;
   display: block;
   margin: 40px 0px 0px 40px;
   border-radius:12px;
   border:2px solid orange;
   padding: 10px 50px;
   outline:none;
   color: white;
   cursor:pointer;
   transition: 0.25px;
   font-size: 20px;
   text-align: center;
   margin: auto;


}
.footer{
  margin-bottom :50px;
  border-radius:12px;
  text-align: center;
  margin: 40px;
  margin-top: 100px;
  position: absolute;
  
}



 </style>     

  </head>
  <body>
    <div class="nav-wrapper">
      <nav>
        <div class="logo-wrapper">
        <a href="./">
          <img
            src="./images/logo/logo2.png"
            alt="mvh-store-logo"
            class="logo-img"
          />
          </a>
        </div>

        <div class="nav-items-wrapper">
          <ul class="nav-items-list">
           
             <a href="./resource.php"><li>Resources</li></a>
            <a href="./video-page.php"> <li>Vedios</li> </a>
            <!--<a href="./payment.php"><li>Payment</li></a>-->
            <a href="./Contact us.php"><li>Contact us</li></a>
            <a href="./aboutus.html"><li>About us</li></a>


            <a href="./login.php"><button class="singin-button">Sign in</button></a>
          </ul>
        </div>

        <div class="search-icon-wrapper">
          <a href="search-page.php"><div class="search-icon-wrapper"><img
            src="images/nav-images/search-icon.png"
            class="nav-search-icon"
            alt="search-icon"
          /></a>
        </div>
      </nav>

    </div>

      
      <div class="regform"><h1> AdminLogin </h1></div>
      <div class ="main">

       <form action = "" method = "post">
            
            <h2 class="name"> User name </h2>
            <input class="username" type="text" placeholder="Enter your username " required name = "username">

            <h2 class="name"> password </h2>
            <input class="password" type="password" placeholder="Enter your password " required name = "password">
           <button class = "button1" type ="submit"> Login </button>




      </form>

   </div>

  <div class="footer-items">
      <ul class="footer-list">
        <img
          src="./images/logo/logo2.png"
          class="logo-footer"
          alt="mvh-store-logo"
        />
      </ul>

      <ul class="footer-list">
        <h3>Store</h3>
        <li>About us</li>
        <li>Contact us</li>
      </ul>

      <ul class="footer-list">
        <h3>Useful Links</h3>
        <li>Support</li>
        <li>Payments & Refunds</li>
        <li>Privacy Policy</li>
      </ul>
    </div>

    <hr class="footer-hr" />

    <footer>
      <span class="copy-year"></span> | CyberWise Training | All rights reserved
    </footer>

    <script src="./js/home.js"></script>
  </body>
</html>

