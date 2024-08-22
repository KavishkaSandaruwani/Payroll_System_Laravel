<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
  <style>
    
    body{
      margin:6px;
      font-family: Arial, Helvetica, sans-serif;
      background-image: url('');
      background-repeat: no-repeat;
      background-attachment: fixed;  
      background-size: cover;
  }

  .topnav{
      overflow: hidden;
      background-color:rgb(14, 14, 68);
  }

  .topnav a{
      float: right;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 16px;
  }

  topnav a.active{
      background-color: #04aa6d;
      color:white;
     
  }

.pa {
  text-align-last: left;
  margin-left: 5%;
}

ul.b {
  list-style-position: inside;
  color:white;
}


/*image*/
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
  
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
  
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}



</style>
</head>
<body style="background-color: rgb(2, 2, 48)">
<i class="bi bi-yin-yang"></i>
<div class="topnav">
    <a href="contact">Contact us</a>
    <a href="about">About us</a>
    <a href="pay">My Pay</a>
    <a href="profile">Account</a>
    <a href="intro">Instructions</a>
    <a href="signup">Sign up</a>
    <a href="new">Home</a>

    
</div>
    
<br>
 <center>
   <h1 style="color: wheat"><b><u> MY PAY </u></b></h1>
 

 <br>
 
    <p style="color: white">A web-based payroll management system is like an online tool that
      businesses use to handle their employees' pay-related tasks. Instead of doing everything manually, <br>
      like calculating wages or figuring out taxes, this system does it for you automatically. It's all done 
      over the internet, so you can access it from anywhere,<br> whether you're in the office or working remotely.
       It helps businesses save time, reduce errors, and make sure everyone gets paid accurately and on time.<br> 
       Plus, it often comes with extra features like letting employees check their pay stubs or request time 
       off online. So basically, it's like having a smart, <br>
      online assistant to take care of all your payroll needs!</p>
 </center>

      <br>
      <div class="pa">
      <p style="color: white"><b>Web-based payroll management systems like MY PAY offer several advantages for users   :</b>
  
     <ul class="b">
        <li>Users can access the system from anywhere with an internet connection, allowing for remote work and flexibility.</li>
    <li>The system automates repetitive tasks such as calculating wages, deductions, and taxes, saving time and reducing errors.</li>
    <li> Many systems offer self-service portals where employees can view their pay stubs, update personal information, and 
    request time off, reducing administrative burden for users.</li>
  </p>
      
    </ul>
      
</div>


<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/about1.jpg" style="width:100%"  >
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/about2.jpg" style="width:100%"  >
    
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/img2.png" style="width:100%"  >
    
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/about5.jpg" style="width:100%"  >
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/img1.png" style="width:100%"  >
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/ll.jpg" style="width:100%"  >
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/about1.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/about2.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/img2.png" style="width:100%" onclick="currentSlide(3)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/about5.jpg" style="width:100%" onclick="currentSlide(4)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/img1.png" style="width:100%" onclick="currentSlide(5)" alt="">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/ll.jpg" style="width:100%" onclick="currentSlide(6)" alt="">
    </div>
  </div>
</div>

<script>
let slideIndepx = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    


</body>
</html>
