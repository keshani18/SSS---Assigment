<?php 

require 'configurations/dbconfig.php';
$sql="SELECT * FROM music";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CyberWise Training - Home </title>
    <link rel="stylesheet" href="style/music.css" />
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
          </a>
        </div>

        <div class="nav-items-wrapper">
          <ul class="nav-items-list">
           
            <a href="./resource.php"><li>Resources</li></a>
            <a href="./video-page.php"> <li>Vedios</li> </a>
            <!--<a href="./payment.php"><li>Payment</li></a>-->
            <a href="./Contact us.php"><li>Contact us</li></a>
            <a href="./aboutus.html"><li>About us</li></a>


            <a href="./user-profile.php"><button class="signin-button">Profile</button></a>
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

    <div class="music-page-container">
      <div class="music-headline-container">
        <hr />
        <h1 class="music-healine">Resources</h1>
      </div>

      <div class="music-cards-section">
        <!-- Music Card -->
		<?php
		$music = $conn->query($sql);
		
		if($music->num_rows>0){
			while($row=$music->fetch_assoc()){
				echo("<a href=music-player.php?id=" . $row['Music_Id'] . ">");
				echo("<div class='music-card'>");
					echo("<img src=" . $row['Music_Image'] . " " . "alt='song-cover-photo' />");
					echo ("<div class='music-card-details'>");
						echo("<h3>". $row['Music_Name'] ."</h3>");
						echo("<p>". $row['F_Name'] . " " . $row['L_Name'] ."</p>");
					echo("</div>");
				echo("</div>");
				echo("</a>");
			}
		}		
       
          
		?>
          
            
            
          
        

       
      </div>
    </div>

    <!-- Footer -->
    <div class="footer-items">
      <ul class="footer-list">
        <img
          src="./images/logo/logo1.png"
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
      <span class="copy-year"></span> | CyberWise Training - Home  | All rights reserved
    </footer>

    <script src="music.js"></script>
  </body>
</html>
