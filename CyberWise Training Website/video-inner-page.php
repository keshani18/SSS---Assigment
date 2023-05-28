<?php
     session_start();
if(!$_SESSION['loggedin'] == TRUE){
  echo "<script> alert('You haven't logged in! Please log in to continue.'); </script>";
  echo "<script> window.location.href='./login.php' </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Video Player</title>
    <link rel="stylesheet" href="./style/video.css" />
  </head>
  <body>
    <div class="nav-wrapper">
      <nav>
        <div class="logo-wrapper">
        <a href="./">
          <img
            src="./images/logo/logo1.png"
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

            
            <a href="./login.php"><button class="signin-button">Profile</button></a>
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

   
    

    <?php
$severname="localhost";
$username="root";
$password="";
$db="cyber-store";

// Create connection
$conn = new mysqli($severname, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id = $_GET["id"];
$sql = "SELECT V_Name,F_name,L_name, Video FROM video WHERE V_Id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $link = $row["Video"];
    ?>
    <div class="video-wrapper">
    <video class="music-video" controls autoplay>
    <source src="<?php echo $link;  ?>" type="video/mp4">
    </video>

    <div class="video-details">
    <h3><?php  echo $row["V_Name"]; ?></h3>
              <p><?php  echo $row["F_name"].' '.$row["L_name"]; ?></p>
    </div>
  </div>
</div>
   
<?php
    }
}
$conn->close();
?>



    <!-- Footer -->
    <div class="footer-items">
      <ul class="footer-list">
        <img
          src="./images/logo/logo.png"
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

    <script src="./js/video.js"></script>
  </body>
</html>
