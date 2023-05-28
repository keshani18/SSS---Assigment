
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
width:500px;
margin:auto;
height: 500px;
background-color: rgb(0,0,0,0.5);
padding-left: 40px;
padding-top: 50px;
margin-bottom: 50px;


}
button:hover{
       background-color: orange;
}

.regform{
    width:500px;
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

#card {
  text-align: center;
  font-size: 1.8rem;
  padding-top: 1rem;
  color: white;
  padding-bottom: 1.2rem;
}


.signin-button {
  width: 70px;
  height: 30px;
  border-radius: 8px;
  border: none;
  outline: none;
  background-color: rgb(230, 230, 255, 0.4);
  color: white;
  cursor: pointer;
}


nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100vw;
  height: 8vh;
  color: white;
  z-index: 2;
  position: sticky;
  background-color: rgba(0, 19, 20, 1);
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
            <a href="./payment.php"><li>Payment</li></a>
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

      
      <div class="regform"><h1> Payment </h1></div>
      <div class ="main">

      <form>
            
            <h2 class="name"> Total price </h2>
            <input class="totalprice" type="text" placeholder="Total price " required name = "total price">

            <h2 class="name"> Card Number</h2>
            <input class="cardnumber" type="text" placeholder="Enter your cardnumber " required name = "cardnumber">

            <h2 class="name"> Expiry Date </h2>
        
              <div class = "selection">
          <input type = "date">
          <select name = "monthe" id = "months">
            <option value = "Jan"> JAN </option>
            <option value = "Feb"> Feb </option>
            <option value = "Mar"> Mar </option>
            <option value = "Apr"> Apr </option>
            <option value = "May"> May</option>
            <option value = "Jun"> Jun </option>
            <option value = "Jul"> Jul </option>
            <option value = "Aug"> Aug </option>
            <option value = "Sep"> Sep </option>
            <option value = "Oct"> Oct </option>
            <option value = "Nov"> Nov </option>
            <option value = "Dec"> Dec </option>
          </select>
          <select name = "Years" id ="years">
            <option value="2021"> 2021 </option>
            <option value="2020"> 2020 </option>
            <option value="2019"> 2019 </option>
            <option value="2018"> 2018 </option>
            <option value="2017"> 2017 </option>
          </select>
        </div>

            <h2 class="name"> Card Holder</h2>
            <input class="cardholder" type="text" placeholder="Enter your card holder " required name = "cardholder">

           <button class = "button1" type ="submit"> Submit </button>




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

