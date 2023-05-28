<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CyberWise Training</title>
    <link rel="stylesheet" href="./style/home.css" />
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
            <li>Categories</li>
            
            <a href="./resource.php"><li>Resources</li></a>
            <a href="./video-page.php"> <li>Vedios</li> </a>
            <!--<a href="./payment.php"><li>Payment</li></a>-->
            <a href="./Contact us.php"><li>Contact us</li></a>
            <a href="./aboutus.html"><li>About us</li></a>


            <button class="singin-button">Sign in</button>
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

<style>

  body, html {
  height: 100%;
  margin: 0;
}



body{

background-image: url("images/background-images/1.jpg");
background-attachment: fixed;
background-position: center;
background-size: cover;
margin-top: 0px;
color:white; 

}


button:hover{
       background-color: orange;
}


/* Style all input fields */
input {
  
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 20px;
  margin-right: 15px;
}

/* Style the submit button */

input[type=submit] {
  background-color: #4CAF50;
  color: white;
}
.login {
  

  /*border: 3px solid black;*/
  width: 400px;
 
  margin:  auto;
  border-radius: 10px;
 
  box-shadow: 0 0 30px rgba(72,95,87, 0.6);
  padding: 25px;

  margin-bottom: 20px;

  border:3px solid orange;
}



/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
  width: 400px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
.lable{

margin-right: 10px;

}
.email{

  margin-right: 10px;
  margin-left: 20px;
}
#prof{
 
           float: right;
           display: inline-block;
           width: 80px;
           height: 100%;
            background-size: cover;
            border-radius: 0.5em;
           
              cursor: pointer;

  }


</style>
</head>
<body>

   

<div class="login">
  <form action="login.php" method = "POST">
    <table>
      <tr>
        <td>
    <label for="usrname" class ="lable" style="color: white;">User name</label>
  </td>
  <td>
    <input type="text" id="username" name="username" required>
  </td>
 
    </tr>
    <tr>
    <td>
      <label for="email" class ="lable" style="color: white;">  E
      - mail     </label>
    </td>
    <td>
    <input type="text" id="email" name="email" required>
  </td>
</tr>
<tr>
  <td>
    <label for="psw" class ="lable" style="color: white;">Password</label>
  </td>
  <td>
    <input type="password" id="psw" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
  </td>
</tr>
</table>


    <h4 style="color: white;">By registeting , I acknowlage that I 
have read and agree to all Terms of Use and 
Privacy Statement</h4> 
    <br>
    <input type="submit" value="Submit">
  </form>
</div>

<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letters" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capitall" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="numbers" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
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

    <script src="./js/home.js"></script>
  </body>
</html>
