<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
 
    body{
        margin:6px;
        font-family: Arial, Helvetica, sans-serif;
        background-image: url('');
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
        box-sizing: border-box
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

.container {
  border-radius: 5px;
  background-color: #bcbebe;
  padding: 20px;
  width:40%;
}


  </style>
</head>
<body >

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
  @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
          {{Session::get('success')}}
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        </div>
    @endif
</center>

<br>
<h2 align="center"><b>Enter Monthly Employees Payment Details Here</b></h2>
<br>
<div class="container">
    <form action="{{url('/admin')}}"  method="POST">
    @csrf
    
    <p>
    <label for="name">Full Name :</label>
    <input type="text" id="name" name="fullname" placeholder="" required></p>

    <p>
    <label for="EmpId">Employee ID : </label>
    <input type="text" id="EmpId" name="EmployeeID" placeholder="" required></p>

    <p>
    <label for="address">Address :</label>
    <input type="text" id="address" name="address" required></p>

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
      <label for="month">Month : </label>
      <input type="text" id="month" name="month" placeholder="" required></p>

    <p>
      <label for="salary">Basic Salary : </label>
      <input type="text" id="salary" name="basicSalary" placeholder="" required></p>

    <p>
      <label for="hpay">Hourly Pay : </label>
      <input type="text" id="hpay" name="hourlyPay" placeholder="" required></p>

    <p>
      <label for="wdays">Work Days : </label>
      <input type="text" id="wdays" name="workDays" placeholder="" required></p>

    <p>
      <label for="apay">Attendance Pay : </label>
      <input type="text" id="apay" name="attendancePay" placeholder="" required></p>

    <p>
      <label for="opay">Overtime Pay : </label>
      <input type="text" id="opay" name="overtimePay" placeholder="" required></p>

    <p>
      <label for="bonus">Bonus : </label>
      <input type="text" id="bonus" name="bonus" placeholder="" required></p>

    <p>
      <label for="loans">Loans Deductions : </label>
      <input type="text" id="loans" name="loans" placeholder="" required></p>

    <p>
      <label for="nopay">No Pay Deductions : </label>
      <input type="text" id="nopay" name="noPay" placeholder="" required></p>

    <p>
      <label for="epf">EPF Contributers : </label>
      <input type="text" id="epf" name="epf" placeholder="" required></p>

      <p>
        <label for="totalpay">Total Net Pay : </label>
        <input type="text" id="totalpay" name="totalPay" placeholder="" required></p>

        <p>
          <center><button class="submit">Enter</button></center></p>

   </form>
  </div>
      

  </body>
  </html>
  