<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    body{
        margin:6px;
        font-family: Arial, Helvetica, sans-serif;
        background-image: url('images/k2.jpg');
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

 .text-danger{
      color: rgb(145, 15, 15);
      font-size: 12px;
 }

.alert{
  position:relative;
  padding:1rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  font-family: arial, sans-serif;
}

.alert-success{
  color: #0f5132;
  background-color: #d1e7dd;
  border-color: #badbcc;
}

.alert-danger{
  color: #721c24;
  background-color: #d1e7dd;
  border-color: #f5c6cb;
}

.closebtn {
  margin-left: 15px;
  color: #383233;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

    /*form*/
.form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 350px;
  padding: 20px;
  border-radius: 20px;
  position: relative;
  background-color: #1a1a1a;
  color: #fff;
  border: 1px solid #333;
  margin: 8% 0% 0% 0%;
}

.title {
  font-size: 28px;
  font-weight: 600;
  letter-spacing: -1px;
  display: flex;
  align-items: center;
  padding-left: 100px;
  color: #00bfff;
 
}


.signin {
  text-align: center;
}

.signin a:hover {
  text-decoration: underline royalblue;
}

.signin a {
  color: #00bfff;
}

.flex {
  display: flex;
  width: 100%;
  gap: 6px;
}

.form label {
  position: relative;
}

.form label .input {
  background-color: #333;
  color: #fff;
  width: 100%;
  padding: 20px 05px 05px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 10px;
}

.form label .input + span {
  color: rgba(255, 255, 255, 0.5);
  position: absolute;
  left: 10px;
  top: 0px;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input:placeholder-shown + span {
  top: 12.5px;
  font-size: 0.9em;
}

.form label .input:focus + span,
.form label .input:valid + span {
  color: #00bfff;
  top: 0px;
  font-size: 0.7em;
  font-weight: 600;
}

.input {
  font-size: medium;
}

.submit {
  border: none;
  outline: none;
  padding: 10px;
  border-radius: 10px;
  color: #fff;
  font-size: 16px;
  transform: .3s ease;
  background-color: #00bfff;
}

.submit:hover {
  background-color: #00bfff96;
}

@keyframes pulse {
  from {
    transform: scale(0.9);
    opacity: 1;
  }

  to {
    transform: scale(1.8);
    opacity: 0;
  }
}



 
</style>
</head>
<body >
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


  
<center>
    <form class="form" action="{{url('/login')}}"  method="POST">

      @if(Session::has('success'))
          <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
          </div>
      @endif

      @if(Session::has('fail'))
          <div class="alert alert-danger" role="alert">
            {{Session::get('fail')}}
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
          </div>
      @endif
    
@csrf

     <p class="title">Log in </p>
     
           <label>
              <input class="input" type="text" name="email" value="{{old('email')}}" placeholder="" required="">
              <span>Enter your email</span>
           </label>
           <span class="text-danger">@error('email'){{$message}} @enderror</span>
              
      <label>
          <input class="input" type="password" name="passw" placeholder="" required="">
          <span>Enter your password</span>
      </label>
      <span class="text-danger">@error('passw'){{$message}} @enderror</span>
      
      <button class="submit">Submit</button>
      <p class="signin">Click here to<a href="profile"> Cretae account</a> </p>
  </form>
</center>



</body>
</html>