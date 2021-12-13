<?php 
session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

?>
<!DOCTYPE html>

<head>


<style>
body {
  font-family: Comic Sans MS;
  margin: 0;
}

.header {
  background: black;
  color: white;
  padding: 45px;
  text-align: center;
}

.header h1 {
  font-size: 40px;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 13px 21px;
  text-decoration: none;
}

.navbar a.right {
  float: right;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.logout {
    background-color: #333;
    overflow: hidden;
}

.logout a {
  float: right;
  color: white;
  text-align: center;
  padding: 13px 21px;
  text-decoration: none;
  font-size: 17px;
}

.logout a:hover {
  background-color: white;
  color: black;
}

.logout a.active {
  background-color: white;
  color: Black;
}

.logout-right {
  float: right;
}


<style>
table, th, td {
  border: 1px solid black;
}

body {
  background-image: url('http://localhost/img/uniimage.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
h1 {
font-family: comicsans;
}
</style>
</style>




</head>


<div class="header">
  <h1>My Website</h1>
  <p>A website created by me DAN.</p>
</div>

<div class="navbar">
  <a href="http://localhost/login/index.php">Homepage</a>
  <a href="http://localhost/navbar/expansion/index.php">Student and Contact Information</a>
  <a href="http://localhost/navbar/expansion2/index.php">Staff and Contact Information</a>
  <a href="http://localhost/navbar/expansion3/index.php">Course Information</a>
  <a href="http://localhost/test/moduleinfo.html">Module's</a>
  <a href="http://localhost/navbar/studentmarks/index.php">Student Marks</a>
  
</div>

<body>
  <div class="logout">
  <a href="logout.php"><style=text-align: right;>Logout</a>

  </div>
    
 </body>
 <body> 

  <p style="padding: 10px;width: 200px; background: white;border: 2px solid white;">Welcome, <?php echo $user_data['user_name']; ?></p>
</body>

<body>

</body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Comic Sans MS, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 51%;
  width: auto;
  padding: 15px;
  margin-top: -21px;
  color: white;
  font-weight: bold;
  font-size: 17px;
  transition: 0.5s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  right: 0;
  border-radius: 4px 0 0 4px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.text {
  color: #f2f2f2;
  font-size: 16px;
  padding: 7px 13px;
  position: absolute;
  bottom: 7px;
  width: 100%;
  text-align: center;
}

.numbertext {
  color: #f2f2f2;
  font-size: 11px;
  padding: 7px 13px;
  position: absolute;
  top: 0;
}

.dot {
  cursor: pointer;
  height: 14px;
  width: 14px;
  margin: 0 3px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.5s ease;
}

  background-color: #717171;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.4s;
  animation-name: fade;
  animation-duration: 1.4s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@media only screen and (max-width: 299px) {
  .prev, .next,.text {font-size: 12px}
}
</style>
<body> 

  <p style="padding: 9px;width: 549px; background: white;border: 3px solid white;">You have now accessed Anglia University Staff access page</p>
    <p style="padding: 9px;width: 549px; background: white;border: 3px solid white;">Here you can find out more information about Student, Staff and update Course detail's</p>

</body>

</head>
<body>

<div class="slideshow-container">

<div class="unislideshow fade">
  <div class="numbertext">1 / 3</div>
  <img src="http://localhost/img/window.jpg" style="width:100%">
  <div class="text">Our University</div>
</div>

<div class="unislideshow fade">
  <div class="numbertext">2 / 3</div>
  <img src="http://localhost/img/owen.jpg" style="width:100%">
  <div class="text">Happy Student</div>
</div>

<div class="unislideshow fade">
  <div class="numbertext">3 / 3</div>
  <img src="http://localhost/img/davmap.png" style="width:100%">
  <div class="text">Where we are based</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("unislideshow");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 