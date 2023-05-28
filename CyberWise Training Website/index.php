<?php

require_once("configurations/dbconfig.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CyberWise Training - Home </title>
    <link rel="stylesheet" href="./style/home.css" />
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
            <a href="./video-page.php"> <li>Videos</li> </a>
            <!--<a href="./payment.php"><li>Payment</li></a>-->
            <a href="./Contact us.php"><li>Contact us</li></a>
            <a href="./quiz.php"><li>Quiz</li></a>
            <a href="./aboutus.html"><li>About us</li></a>


             <a href="./login.php"><button class="singin-button">Sign in</button></a>
             <a href="./adminlog.php"><li>Admin</li></a>
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

    <!-- Images Sliding Section -->
    <div class="slider">
      <div class="welcome-container">
        <h3 class="welcome-title">Welcome to Master the Art of Cyber Security</h3>
        <button class="explore-button">Explore</button>
      </div>

      <div class="slides-container">
        <div class="slider-images hide-slide show-slide">
          <img
            src="images/background-images/1.jpg"
            class="slides"
            alt=""
          />
        </div>
        <div class="slider-images hide-slide">
          <img
            src="images/background-images/2.jpg"
            class="slides"
            alt=""
          />
        </div>
        <div class="slider-images hide-slide">
          <img
            src="images/background-images/3.jpg"
            class="slides"
            alt=""
          />
        </div>
      </div>
    </div>

    <div class="why-us-section">
      <h3>Why us?</h3>

      <div class="why-us-intro scroll-anim-divs scroll-hide">
        <h2>STRENGTHS AND ADVANTAGES</h2>
        <p>
          Our training programs are designed to be interactive, engaging, and practical, with real-world scenarios and hands-on exercises that help you apply what you've learned to your job or daily life.
        </p>
      </div>

      <div class="why-us-intro scroll-anim-divs scroll-hide">
        <h2 class="why-us-sub-headings">VARIETY OF CONTENT</h2>
        <p>
          Watch, listen and read high quality music, videos and articles that suits to your
          category.
        </p>
      </div>

    </div>

    <div class="music-section">
      <div class="music-headline">
        <h3>LATEST RESOURCES</h3>
      </div>

      <div class="music-cards-section">

<?php

        $sql = "SELECT * FROM music LIMIT 5;";

        $result = $conn->query($sql);


        if($result->num_rows > 0){
      
          while($row=$result->fetch_assoc()){
            echo("<a href=./music-player.php?id=" . $row['Music_Id'] . ">");
            echo("<div class='music-card scroll-anim-divs scroll-hide'>");
              echo("<img" . " ");
                echo("src=" . $row['Music_Image'] . " ");
                echo("class='music-card-image'");      
              echo("/>");
            
              echo("<div class='music-card-info'>");
                echo("<p>". $row['Music_Name'] ."</p>");
                echo("<small>" . $row['F_Name'] . " " . $row['L_Name'] . "</small>");
              echo("</div>");
            echo("</div>");
            echo("</a>");

          }

        }

        ?>


    </div>

    <div class="video-section">
      <div class="video-headline">
        <h3>VIDEO LESSONS</h3>
      </div>

      <div class="video-cards-section">

        <?php

        $sql = "SELECT * FROM video LIMIT 4;";
        $result = $conn->query($sql);
        $conn->close();

        if($result->num_rows > 0){

          while($row=$result->fetch_assoc()){
            echo("<a href=./video-inner-page.php?id=" . $row['V_Id'] . ">");
            echo("<div" . " " . "class='video-card scroll-anim-divs scroll-hide'>");        
              echo("<div" . " " . "class='video-card-image'>");
                echo("<img" . " ");
                  echo("src=" . $row['video_image'] . " ");
                  echo("alt='video-card-image'");         
                echo("/>");
              echo("</div>");
              echo("<div class='video-card-info'>");
                echo("<h5>" . $row['V_Name'] . "</h5>");
                echo("<small>" . "Date Added - 2023/ 05 /28" . "</small>");
              echo("</div>");
            echo("</div>");
            echo("</a>");

          }

        }


        ?>
      </div>

    <!-- Banner Area -->
    <div class="banner-area"></div>

    <div class="news-letter-area">
      <h3>Subscribe to our monthly newsletter!</h3>
      <form action="./configurations/newsletter.php" method="post">
        <input
          placeholder="Enter Email"
          class="newsletter-email-input"
          name="newsletter-email"
        />

        <button class="newsletter-email-submit" name="news-letter-submit">Subscribe</button>
      </form>
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
      <span class="copy-year"></span> | c | All rights reserved
    </footer>

    <script src="./js/home.js"></script>
  </body>
</html>
