<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Main Home</title>
    
</head>

<body>
  <header>
    <div id="navbar">
      <img src="logo.png" style="padding-top: 7px; padding-left: 20px; height: 35px; width: 60px;">
      <a id="logo" >Vtravellers.in</a>
      <nav role="navigation">
        <div id="menuToggle">
          <input type="checkbox" />
          <span class = "menuTogglesign"></span>
          <span class = "menuTogglesign"></span>
          <span class = "menuTogglesign"></span>
          <ul id="menu">
            <a><li><span onclick="document.getElementById('id02').style.display='block'" ;>Sign In</span></li></a>
            <a><li ><span onclick="document.getElementById('id01').style.display='block'" ;>Sign Up</span></li></a>
            <a href="places.html"><li>Places</li></a>
            <a href="booking.html"><li>Booking</li></a>
            <a href="#"><li>About</li></a>
            <a href="contact.html"><li>Contact Us</li></a>
          </ul>
        </div>
      </nav>
    </div>
   </header>
<br>
<br>
      <div class="mySlides" style = "background-image: url(fpage1.jpg);">
        <div class="content">
          <span> Explore , Discover , Travel </span>
          <h3> Travel around the world </h3>
          <a href = "places.html" class="btn"> Discover More </a>
        </div>
      </div>
    
      <div class="mySlides" style = "background-image: url(fpage2.jpg);">
        <div class="content">
          <span> Explore , Discover , Travel </span>
          <h3> Travel around the world </h3>
          <a href = "places.html" class="btn"> Discover More </a>
        </div>
      </div>
  
      <div class="mySlides" style = "background-image: url(fpage3.jpg);">
        <div class="content">
          <span> Explore , Discover , Travel </span>
          <h3> Travel around the world </h3>
          <a href = "places.html" class="btn"> Discover More </a>
        </div>
      </div>

      <div class="mySlides" style = "background-image: url(fpage4.jpg);">
        <div class="content">
          <span> Explore , Discover , Travel </span>
          <h3> Travel around the world </h3>
          <a href = "places.html" class="btn"> Discover More </a>
        </div>
      </div>

      <div class="mySlides" style = "background-image: url(fpage5.jpg);">
        <div class="content">
          <span> Explore , Discover , Travel </span>
          <h3> Travel around the world </h3>
          <a href = "places.html" class="btn"> Discover More </a>
        </div>
      </div>
<br>
<br>

<section class = "sevices">
  <h1 style="padding-left: 695px; padding-bottom: 3rem; font-size: 1.5rem;"> Our Services </h1>
  <div class="box-container">
    <div class="service-box">
      <img src = "adventure.png">
      <h3>Adventure</h3>
    </div>
    <div class="service-box">
      <img src = "tour.png" >
      <h3>Tour Guide</h3>
    </div>
    <div class="service-box">
      <img src = "treck.png" >
      <h3>Trekking</h3>
    </div>
    <div class="service-box">
      <img src = "campfire.png" >
      <h3>Camp Fire</h3>
    </div>
    <div class="service-box">
      <img src = "offroad.png" >
      <h3>Off Road</h3>
    </div>
    <div class="service-box">
      <img src = "camping.png" >
      <h3>Camping</h3>
    </div>
  </div>
</section>
<br>
<br>
<br>
<p style="text-align: center; padding-left: 100px; padding-right: 100px; padding-bottom: 3rem; font-size: 1.5rem;"><i>"Ready to embark on your next adventure? Escape to breathtaking destinations with unbeatable deals from <strong>Vtravellers</strong>. From sun-soaked beaches to cultural treasures, we've got your dream getaway covered. Book now and unlock a world of unforgettable experiences!" </i></p>

<div class="button">
  <a href="booking.html" style="text-decoration: none; margin-right: 0px;">BOOK NOW</a>
</div>
<br>
<br>

<?php

if(isset($_POST["email"])){
    $conn = mysqli_connect("localhost","root","","travel");
	  if (!$conn){
        die("Failed to connect to MySQL: " . mysqli_connect_error());
	  }
    $email= $_POST["email"];
    $password=$_POST["psw"];
    $psw_repeat= $_POST["psw_repeat"];
    $exists=false;
    if(($password==$psw_repeat) && ($exists==false)){
      $sql="INSERT INTO `sign up`(`email`,`password`)VALUES('$email','$password');";
      $result=mysqli_query($conn,$sql);
    } 
    mysqli_close($conn);
  }
?>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close">x</span>
  <form class="modal-content" action="" method="post">
    <div class="contain">
      <h1 style="text-align: center; font-size: 1.5rem;">Sign Up</h1>
      <p style="text-align: center;">Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw_repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw_repeat" required>
      
      <p><a href="#" style="color:dodgerblue; text-decoration: none;">Terms & Conditions</a>.</p>
      <br>
      <p>Do you agree ?? &nbsp; <input type="radio" id="yes" name="fav_language" value="Yes"><label for="yes">Yes &nbsp;</label> <input type="radio" id="no" name="fav_language" value="No"><label for="no">No</label></p>
      <br>
      <div class="clearfix">
        <button type="submit" class="signup">Sign Up</button>
      </div>
    </div>
  </form>
</div>
<?php

if(isset($_POST["email1"])){
$email= $_POST["email1"];
$password= $_POST["psw1"];

$conn = mysqli_connect("localhost","root","","travel");

if($conn->connect_error){
  die("connection_failed:$conn->connect_error");
  
}
$query = "SELECT * FROM `sign up` WHERE `email`='$email' AND `password`='$password'";
$result=$conn->query($query);
 if($result->num_rows == 1){
  $_SESSION['signin'] = $email;
 }
 else{
  exit();
 }
 $conn->close();

}

?>

<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close">x</span>
  <form class="modal-content" action="" method="post">
    <div class="contain">
      <h1 style="text-align: center; font-size: 1.5rem;">Sign In</h1>
      <hr>
      <label for="email1"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email1" required>

      <label for="psw1"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw1" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <div class="clearfix">
        <button type="submit" class="signup">Sign In</button>
      </div>
    </div>
  </form>
</div>
  <script src="script.js"></script>
  <br>
  <section class = "footer">
    <div class="Box-container">

      <div class = "bottom">
        <h3>Quick Links</h3>
        <a href="home.html"><i class="fa fa-angle-right"></i> Home </a>
        <a href="places.html"><i class="fa fa-angle-right"></i> Places </a>
        <a href="booking.html"><i class="fa fa-angle-right"></i> Booking </a>
      </div>
      <div class = "bottom">
        <h3>External Links</h3>
        <a href="about.html"><i class="fa fa-angle-right"></i> About Us </a>
        <a href="contact.html"><i class="fa fa-angle-right"></i> Contact Us </a>
        <a href="#"><i class="fa fa-angle-right"></i> Privacy policy </a>
        <a href="#"><i class="fa fa-angle-right"></i> Terms and Conditions </a>
      </div>
      <div class = "bottom">
        <h3>Contact info</h3>
        <a href="#"><i class="fa fa-phone"></i> +123-456-7890 </a>
        <a href="#"><i class="fa fa-phone"></i> +011-435-2874 </a>
        <a href="#"><i class="fa fa-envelope"></i> vtravellers0111@gamil.com </a>
        <a href="#"><i class="fa fa-map"></i> Pune,India - 411038 </a>
      </div>
      <div class = "bottom">
        <h3>Follow Us</h3>
        <a href="#"><i class="fa fa-facebook"></i> Facebook </a>
        <a href="#"><i class="fa fa-twitter"></i> Twitter </a>
        <a href="#"><i class="fa fa-instagram"></i> Instagram </a>
        <a href="#"><i class="fa fa-linkedin"></i> Linkedin </a>
      </div>

    </div>
  </section>
  <footer>Made with &hearts;by Vtravellers<br>
    &#169; 2024-&infintie;
  </footer>
</body>
</html>
