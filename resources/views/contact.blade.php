<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
 <style>
    body{
    margin:6px;
    font-family: Arial, Helvetica, sans-serif;
    background-image: url('images/w_04.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
    box-sizing: border-box;
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

input[type=text], select, textarea {
  width: 60%;
  padding: 8px;
  border: 1px solid #c5c3c3;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  
}

.container {
  border-radius: 5px;
  background-color: #c8caca;
  padding: 20px;
  width:30%;
  position: absolute;
 
  right:35%;
}

/*.contact {
  border-radius: 5px;
  background-color: #c8caca;
  padding: 20px;
  width:30%;
  position: absolute;
  bottom: 5%;
  left:10%;
}*/

.submit {
  border: none;
  outline: none;
  padding: 7px;
  border-radius: 10px;
  color: #fff;
  font-size: 16px;
  background-color:rgb(11, 11, 138);
  width:25%;
  position: absolute;
  bottom: 20%;
  right:10%;
}

img{
  width: 30px;
  height: 30px;
  margin: 0% 6% 0% 6%;
}

footer{
      background-color: rgb(14, 14, 68);
      margin-top: 390px;
    }
    .font {
      color: white;
      font-size:14px;
      padding: 0px 20px;
      
    }
    .foot{
      width: 100%;
      padding: 70px 30px 20px;
    }
    .icon{
      display: flex;
      justify-content: center;
    }
    .icon a{
      text-decoration: none;
      padding: 10px;
      background-color: white;
      margin: 10px;
      border-radius: 50%;
    }
    
    .icon a i{
      font-size: 2em;
      color: black;
      opacity: 0.9;
    }
    .icon a.hover{
      background-color: #111;
      transition: 0.5s;
    }
    .icon a:hover i{
      color: white;
      transition: 0.5s;
    }
    .footnav{
      margin: 30px 0;
    }
    .footnav ul{
      display: flex;
      justify-content: center;
      list-style-type: none;
    }
    .footnav ul li a{
      color: white;
      margin: 20px;
      text-decoration: none;
      font-size: 1.3em;
      opacity: 0.7;
      transition: 0.5s;
    }
    .footnav ul li a:hover{
      opacity: 1;
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

   
</div>



<br><br><center>
    <h2 style="color: wheat"><b><u> CONTACT US </u></b></h2><br>
 
<p style="color:#f2f2f2">This contact us page serves as a bridge between My Pay web system and its users,
     providing them with a direct means of communication. This page acts as a central hub for inquiries, 
     feedback, support requests, or any other form of interaction between users and the website administrators
     .This page is designed to be easily accessible and user-friendly, 
     fostering open communication and building trust between the website and its visitors.</p></center>

     <br>

     <div class="container">
        <form action="{{url('/contact')}}"  method="POST">


          @csrf
            <label for="department">Department </label><br>
            <select id="department" name="department" required>
                <option value="hr">HR</option>
                <option value="packing">Packing</option>
                <option value="operator">Machine Operator</option>
                <option value="cut">Cutting</option>
                <option value="machanic">Machanism</option>
                <option value="transport">Transport</option>
              </select><br>

              <label for="EmpId">Employee ID : </label><br>
    <input type="text" id="EmpId" name="EmployeeID" placeholder="Your Employee id" required>

    <textarea rows="3" cols="15" name="comment" >
        </textarea>

        <button class="submit">Send</button>

        </form>
     </div>

     <footer>
      <div class="foot">
      <p class="p">Social Media</p>
        <div class="icon">
        <a href="https://web.facebook.com"><img src="/images/fb.png"></a>
        <a href="https://web.whatsapp.com"><img src="/images/whatsapp.png"></a>
        <a href="https://www.instagram.com"><img src="/images/insta.png"></a>
        <a href="https://www.twitter.com"><img src="/images/twitter.png"></a>
        </div>
        
      <div class="footnav">
      <ul>
            <li class="font"><i class="fa fa-envelope" aria-hidden="true"></i> Email : mypayweb@gmail.com</li>
            <li class="font" ><i class="fa fa-phone" aria-hidden="true"></i> Phone : +94 74 052 4327</li>
            <li class="font"><i class="fa fa-map-marker" aria-hidden="true"></i> Address : NO.34 ,
              <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Colombo road ,
              <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Homagama</li>
          </ul>
        </div>
      </div>
      </footer>

</body>
</html>