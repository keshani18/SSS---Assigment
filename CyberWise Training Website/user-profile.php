

<?php

include_once("./configurations/dbconfig.php");

?>

<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
  header('Location: login.php');
  exit();
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'music-store';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt = $con->prepare('SELECT password, email FROM register WHERE id = ?');

$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<style>
.button1{
   
   background-color: black;
   display: block;
   margin: 40px 0px 0px 40px;
   border-radius:12px;
   border:2px solid orange;
   padding: 5px 40px;
   outline:none;
   color: white;
   cursor:pointer;
   transition: 0.25px;
   font-size: 15px;
   text-align: center;
   margin: auto;
   margin-right: 50px;


}
</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CyberWise Training</title>
    <link rel="stylesheet" href="./style/user-profile.css" />
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
          </a>
        </div>

        <div class="nav-items-wrapper">
          <ul class="nav-items-list">
           
            
            <a href="./resource.php"><li>Resources</li></a>
            <a href="./video-page.php"> <li>Vedios</li> </a>
            <!--<a href="./payment.php"><li>Payment</li></a>-->
            <a href="./Contact us.php"><li>Contact us</li></a>
            <a href="./aboutus.html"><li>About us</li></a>

            <a href="./login.php"><button class="signin-button">Profile</button></a>
          </ul>
        </div>

        <div class="search-icon-wrapper">
           <a href="search-page.php"><img
            src="images/nav-images/search-icon.png"
            class="nav-search-icon"
            alt="search-icon"/></a>
            

        </div>
        <div>
          <a href="logout.php"><button class="button1">Logout</button></a>
        </div>
      </nav>
    </div>

    <div class="user-profile-container">
      <img src="./images/user-profilr-images/girl.png" alt="" />

      <div class="user-profile-form-container">
        <div class="headline"><h1>Your Account</h1></div>
        <div class="first_name">
          <label for="f_name">User Name: </label>
          <input type="text" id="f_name" value = "<?=$_SESSION['name']?>" readonly />
        </div>


        <div class="first_name">
          <label for="email">Email: </label>
          <input type="text" id="email" value = "<?=$email?>" readonly />
        </div>

        <div class="user-id">
          <label for="u_id">Password: </label>
          <input type="text" id="u_id" value = "<?=$password?>" readonly />
        </div>

        

        

        

        <a href="./edit-user-profile.php">
          <button type="button">Edit Profile</button>    
        </a>

      </div>
    </div>

    <!-- Footer -->
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

    <script src="./js/user-profile.js"></script>
  </body>
</html>
