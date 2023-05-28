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
        </div>

        <div class="nav-items-wrapper">
          <ul class="nav-items-list">
             
            <a href="./music.php"><li>Products</li></a>
            <a href="./video-page.php"> <li>Resources</li> </a>
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

    <div class="user-profile-container">
      <div class="user-profile-form-container">
        <div class="headline"><h1>Enter New Details</h1></div>

        <form action="" method="post">
          <div class="user-id">
            <label for="u_id">User ID: </label>
            <input type="text" id="u_id" readonly />
          </div>

          <div class="first_name">
            <label for="f_name">First Name: </label>
            <input type="text" id="f_name" />
          </div>

          <div class="first_name">
            <label for="l_name">Last Name: </label>
            <input type="text" id="l_name" />
          </div>

          <div class="first_name">
            <label for="email">Email: </label>
            <input type="text" id="email" />
          </div>

          <button type="button">Submit</button>
        </form>
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
