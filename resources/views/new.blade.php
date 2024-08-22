<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
  <style>
    
    body{
      margin:6px;
      font-family: Arial, Helvetica, sans-serif;
      background-image: url('images/uu.jpg');
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

.container{
width: 80vmin;
transform: translate(-50%,-50%);
top:60%;
left:50%;
overflow:hidden; 
margin: 12% 0% 0% 50%;
}

.wrapper{
width:100%;
display:flex;
animation:slide 15s infinite;
}

@keyframes slide{
0%{
  transform: translateX(0);
}
25%{
  transform: translateX(-50);
}
30%{
  transform: translateX(-100%);
}
50%{
  transform: translateX(-150%);
}
55%{
  transform: translateX(-200%);
}
75%{
  transform: translateX(-250%);
}
80%{
  transform: translateX(-300%);
}
100%{
  transform: translateX(-350%);
}
}

img{
width:100%;
}

button {
padding: 1.3em 5em;
font-size: 12px;
text-transform: uppercase;
letter-spacing: 2.5px;
font-weight: 500;
color: #000;
background-color: #fff;
border: none;
border-radius: 45px;
box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
transition: all 0.3s ease 0s;
cursor: pointer;
outline: none;
}

button:hover {
background-color: rgb(11, 11, 138);
box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
color: #fff;
transform: translateY(-7px);
}

button:active {
transform: translateY(-1px);
}

.logo{
    width:50px;
    height: 50px;
    align:right;
}

  </style>
</head>
<body>

<div class="topnav">
    <a href="contact">Contact us</a>
    <a href="about">About us</a>
    <a href="pay">My Pay</a>
    <a href="profile">Account</a>
    <a href="intro">Instructions</a>
    <a href="signup">Sign up</a>
    <a href="new">Home</a>

<div class="logo">
  <img src="/images/logo.png">
</div>
    
</div>

   <br><br>
   
  <center><p style="color:white">A payroll management system website, like "My Pay" serves as an online platform for employees
    to access their payroll information and manage related<br> tasks conveniently.It typically offers features such as viewing pay
     stubs, Updating personal information, tracking hours worked, requesting time off and<br> it streamlines the payroll process,
     automating tasks that were traditionally done manually. Overall, My Pay website offer employees a user-friendly <br>
    and efficient way to interact with their payroll information, enhancing their experience and reducing administrative
    burdens for both<br> employees and HR deparments.</p></center>
  

<br><br>
    
    <div class="container">
      <div class="wrapper">

        <img src="/images/slide1.jpg">
        <img src="/images/slide2.jpg">
        <img src="/images/slide3.jpg">
        <img src="/images/slide4.jpg">
        <img src="/images/slide5.png">
        <img src="/images/slide6.jpg">
      </div>
    </div>

<center>
  <button><a href="signup">Sign up</a>  or  <a href="login">Log in</a>
  </button>
</center>

</body>
</html>
