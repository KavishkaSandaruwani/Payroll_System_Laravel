<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
 <style>
    body{
    margin:6px;
    font-family: Arial, Helvetica, sans-serif;
    background-image: url('images/po1.jpg');
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

/*form*/
input[type=text], select, textarea {
  width: 150%;
  padding: 8px;
  border: 1px solid #c5c3c3;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  
}


p{
  display: table-row; 
}

label{display:table-cell;}
input{display: table-cell; width: 100%;}


input[type=submit] {
  background-color: #04AA6D;
  color:white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.submit {
  border: none;
  outline: none;
  padding: 10px;
  border-radius: 10px;
  color: #fff;
  font-size: 16px;
  background-color:rgb(11, 11, 138);
  width:25%;
}

.clear {
  border: none;
  outline: none;
  padding: 10px;
  border-radius: 10px;
  color: #fff;
  font-size: 16px;
  background-color:rgb(172, 9, 9);
  width:25%;
}


.container {
  border-radius: 5px;
  background-color: #bcbebe;
  padding: 20px;
  width:40%;
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

<br>

<div class="container">
    <form action="{{url('/profile')}}"  method="POST">
    @csrf
    <center><h3 style="color: white"><b>CREATE ACCOUNT</h3></b></center><br>
    
    <p>
    <label for="fname">Full Name :</label>
    <input type="text" id="fname" name="fullname" placeholder="Your name.."  required ></p>

    <p>
    <label for="EmpId">Employee ID : </label>
    <input type="text" id="EmpId" name="EmployeeID" placeholder="Your Employee id" required></p>

    <p>
    <label for="birthday">Date of Birth :</label>
    <input type="date" id="birthday" name="birthday" required></p>

    <p>
    <label for="department">Department :</label>
    <select id="department" name="department" required>
      <option value="hr">HR</option>
      <option value="packing">Packing</option>
      <option value="operator">Machine Operator</option>
      <option value="cut">Cutting</option>
      <option value="machanic">Machanism</option>
      <option value="transport">Transport</option>
    </select></p>


    <p>
      <label for="starting_date">Start Date :</label>
      <input type="date" id="starting_date" name="starting_date" required></p>
  
    <p>
      <label for="gender">Gender : </label>
      <select id="gender" name="gender" required>
        <option>male</option>
        <option>female</option>
      </select></p>
  
      <p>
        <label for="phone">Phone number: </label>
        <input type="int" id="phone" name="phone" placeholder="phone number" required></p>

        <p>
          <label for="address">Address : </label>
          <input type="text" id="address" name="address" placeholder="Your address" required></p>
    
          <p>
            <label for="email">Email : </label>
            <input type="text" id="email" name="email" placeholder="Your email address" required></p>
    
            <p>
              <label for="passw">Password : </label>
              <input type="password" id="passw" name="passw" placeholder="password" required></p>
      

            <p>
              <label for="bank">Account number : </label>
              <input type="text" id="bank" name="bank" placeholder="Your bank account number" required></p>

              <p>
                <label for="acc_type">Account Type : </label>
                <select id="acc_type" name="acc_type" required>
                  <option>Visa</option>
                  <option>Debit card</option>
                  <option>Credit card</option>
                  <option>Master card</option>
                </select></p>
        
                
<p>
   <center><button class="submit">Submit</button>
   </center></p>
    
  
  </form>
</div>

</body>
</html>