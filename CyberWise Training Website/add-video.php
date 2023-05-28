<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CyberWise - Add new video</title>
    <link rel="stylesheet" href="./style/add-video.css" />
<style>
  

.button1{

   background-color: black;
   
   border-radius:12px;
   border:2px solid orange;
   padding: 5px 50px;
   outline:none;
   color: white;
   cursor:pointer;
   transition: 0.25px;
   font-size: 20px;
   text-align: right;
    margin-right: 50px;
   
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
            
            <a href="./music.php"><li>Products</li></a>
            <a href="./video-page.php"> <li>Resources</li> </a>
            <!--<a href="./payment.php"><li>Payment</li></a>-->
            <a href="./Contact us.php"><li>Contact us</li></a>
            <a href="./aboutus.html"><li>About us</li></a>

            <button class="signin-button">Profile</button>
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

    <hr />

    <div class="add-music-container">
      <div class="add-music-healine">
        <h1>Add New Video</h1>
      <div style="text-align: right;">
      <a href="./update.php"><button class= "button1">Back</button></a>
       </div>

      </div>

      <div class="form-container">
        <form action="./configurations/add-video.php" method="post" enctype="multipart/form-data">
          <div>
            <label for="name">New Video Name: </label>
            <input id="name" name="video-name" type="text" />
          </div>

          <div>
            <label for="art_f">Artist First Name:</label>
            <input id="art_f" name="artist_f_name" type="text" />

            <label for="art_l">Artist Last Name:</label>
            <input id="art_l" name="artist_l_name" type="text" />
          </div>

          <div>
            <label for="art_l">Video Duration:</label>
            <input id="art_l" name="video_duration" type="number" />
          </div>

          <div>
            <label for="img">Select Video Thumbnail:</label>
            <input id="img" name="video-image" type="file" />
          </div>

          <div>
            <label for="music">Select Video:</label>
            <input id="music" name="video" type="file" />
          </div>

          <button type="submit">Upload New Video</button>
        </form>
      </div>
    </div>

    <hr class="footer-hr" />

    <footer>
      <span class="copy-year"></span> | CyberWise Training | All rights reserved
    </footer>

    <script src="./js/add-video.js"></script>
  </body>
</html>
