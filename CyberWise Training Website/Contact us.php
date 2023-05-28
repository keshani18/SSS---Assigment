
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

   

.main1{
background-attachment: fixed;
background-position: center;
background-size: cover;
margin-top:20px;
color:white; 
border: 2px solid orange;
width:804px;
margin:auto;
height: 650px;
background-color: rgb(0,0,0,0.5);
padding-left: 40px;
padding-top: 50px;
margin-bottom: 50px;
 
}
button:hover{
       background-color: orange;
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


/*contactus hover*/
button:hover{
       background-color: orange;
}
/* contactus*/   
       
.firstname{
   position:relative;
   left:130px;
   top:-33px;
   line-height:40px;
   border-radius:6px;
   padding:0 22px;
   font-size:16px;

}
.lastname{
   position:relative;
   left:400px;
   top:-102px;
   line-height:40px;
   border-radius:6px;
   padding:0 22px;
   font-size:16px;
   color:#555;

}

.firstlabel{
   position:relative;
   color:#E5E5E5;
   text-transform: capitalize;
   font-size: 14px;
   left:203px;
   top:-50px;
}

.lastlabel{
   position:relative;
   color:#E5E5E5;
   text-transform: capitalize;
   font-size: 14px;
   left:190px;
   top:-50px;
}

.phonenumber{
  position:relative;
   color:black;  
   left:250px;
   font-size: 16px;
   top:-30px;
   line-height:40px;
   width:480px;
   border-radius: 6px;
   padding:0 22px;


}

.email{
   position:relative;
   color:black;  
   left:250px;
   font-size: 16px;
   top:-20px;
   line-height:40px;
   width:480px;
   border-radius: 6px;
   padding:0 22px;
   text-transform: 100px;

 
}
.message{
  position:relative;
   color:black;  
   left:250px;
   font-size: 16px;
   top:-30px;
   line-height:100px;
   width:480px;
   border-radius: 6px;
   padding:0 22px;


}
   .contactform{
    width:804px;
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

.footer{
  margin-bottom :50px;
  border-radius:12px;
  text-align: center;
  margin: 40px;
  margin-top: 100px;
  position: absolute;
  
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
          
            
            <a href="./resource.php"><li>Resources</li></a>
            <a href="./video-page.php"> <li>Vedios</li> </a>
            <!--<a href="./payment.php"><li>Payment</li></a>-->
            <a href="./Contact us.php"><li>Contact us</li></a>
            <a href="./aboutus.html"><li>About us</li></a>


            <a href="./login.php"><button class="singin-button">Sign in</button></a>
          </ul>
        </div>

        
          <a href="search-page.php"><div class="search-icon-wrapper"><img
            src="images/nav-images/search-icon.png"
            class="nav-search-icon"
            alt="search-icon"
          /></a>
        </div>
      </nav>

    </div>

 <div class="contactform"><h1> Contact us </h1></div>
      <div class ="main1">

      <form>
            <div id = "name">
            	<h2 class="name"> Name </h2>
            	<input class ="firstname" type = "text" placeholder="Enter your first name " required name = "first_name"><br>
            	<label class = "firstlabel">first name</label>
            	<input class = "lastname" type = "text" placeholder="Enter your last  name " required name="last_name">
            	<label class = "lastlabel">last name</label> 
            </div>

            <h2 class="name"> Email </h2>
            <input class="email" type="text" placeholder="Enter your email " required name = "email">

            <h2 class="name"> Phone number </h2>
            <input class="phonenumber" type="text" placeholder="Enter your Phone number " required name = "phonenumber">

            <h2 class="name"> Your message </h2>
            <input class="message" type="text" placeholder="Enter your message " required name = "message">

            <button class = button1 type ="submit"> Send Us Your Message </button>


      </form>
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

