<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
 <style>
    body{
    margin:6px;
    font-family: Arial, Helvetica, sans-serif;
    background-image: url('');
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

h2{	font-family: Rockwell;
      font-size: 30px;	
      color:wheat;
  }

  h3{	font-family: Rockwell;
   font-size: 25px;	
   color:lightblue;
}

/*display payment*/
.rec-container {
   height: 300px;    
   overflow-y: scroll;
   background-color: #c0bebe;
   border: 1px solid #ccc;
   padding: 10px;
   border-radius: 10px;
}

.delete {
   
   width: 100px;
   height: 30px;
   background: #0b4566;
   color: #ffffff;
   font-weight: bold;
   border: none;
   cursor: pointer;
   border-radius: 3px;
   font-size: 14px;
   border: 2px solid transparent;
   transition: 0.3s ease;
   
 }
 
 .delete:hover {
   color: #000000;
   border-color: #2222228c;
   background: rgb(255, 255, 255);
 }

 .details{
   color: #353030;
   font-size: 14px;
   font-family: Georgia, 'Times New Roman', Times, serif;
 }

 /*Search*/
.textbox {
   width: 300px;
   padding: 12px 20px;
   margin: 8px 0;
   display: inline-block;
   border: 1px solid #ccc;
   border-radius: 4px;
   outline: none;
 }

 .textbox:hover {
   box-shadow: 0 0 8px #41555a;
   border: 1px solid #000000;
 }
.textbox:focus{
   border: 2px solid #000000;
}

.search{ padding: 6px 10px;
   border: 1px solid #ccc; 
   cursor: pointer;
}

/*Table*/

#customers {
   font-family: Arial, Helvetica, sans-serif;
   border-collapse: collapse;
   width: 100%;
 }
 
 #customers td, #customers th {
   border: 1px solid #ddd;
   padding: 8px;
 }
 
 #customers tr:nth-child(even){background-color: #f2f2f2;}
 
 #customers tr:hover {background-color: #ddd;}
 
 #customers th {
   padding-top: 12px;
   padding-bottom: 12px;
   text-align: left;
   background-color: #0b0e46;
   color: white;
 }

 .vl {
  border-left: 6px solid rgb(154, 161, 154);
  height: 350px;
  position: absolute;
  left: 50%;
  margin-left: -3px;
  margin-top: 120px;
  top: 0;
}

form{
  margin-top: 10px;
}

.user{
   font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
   color: rgb(187, 15, 15);
   font-size: 16px;
   margin-left: 50px;
   font-weight: bold;
   align: right;
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

   

</div><br>
</div>
</br></br>

<div class="vl"></div>

<table width="100%">
  <tr><td>
<h3>&nbsp;&nbsp;Enter Your Full Name and Employee ID to View PaySheet<br>&nbsp;&nbsp;of Current Month</h3><br>
<form action="{{url('/payf')}}" method="GET">
  @csrf
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="fullname" id="fullname" class="textbox" placeholder="Enter your name..." required><br><br>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="EmployeeID" id="EmployeeID" class="textbox" placeholder="Enter your EmployeeID..." required>
  <br><br>&nbsp;&nbsp;&nbsp;&nbsp;
  <button type="submit" name="submit" class="search"><img src="Images/search.png" width="18px" height="15px"></i></button>
</form>
</td>
<td>
  <h3 align="right">&nbsp;&nbsp;Enter Your Full Name and Employee ID to View PaySheet<br>&nbsp;&nbsp;of Previous Month</h3><br>
<form action="{{url('/payO')}}" method="GET" align="right">
  @csrf
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="fullname" id="fullname" class="textbox" placeholder="Enter your name..." required><br><br>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="EmployeeID" id="EmployeeID" class="textbox" placeholder="Enter your EmployeeID..." required>
  <br><br>&nbsp;&nbsp;&nbsp;&nbsp;
  <button type="submit" name="submit" class="search"><img src="Images/search.png" width="18px" height="15px"></i></button>
</form>

</td>
</tr>
</table>

</br></br>
@if(isset($users))
@if($users->isNotEmpty())
<table id="customers">
  <tr>
    <th>Name</th>
    <th>ID</th>
    <th>Address</th>
    <th>Department</th>
    <th>Month</th>
    <th>Basic Salary</th>
    <th>Hourly Pay</th>
    <th>Work Days</th>
    <th>Attendance Pay</th>
    <th>Overtime Pay</th>
    <th>Bonus</th>
    <th>Loan Deduction</th>
    <th>No Pay Deductions</th>
    <th>EPF Contributers</th>
    <th>Total Net Pay</th>
  </tr>

  @foreach($users as $users)

  <tr>
      <td>{{$users->fullname}}</td>
      <td>{{$users->EmployeeID}}</td>
      <td>{{$users->address}}</td>
      <td>{{$users->department}}</td>
      <td>{{$users->month}}</td>
      <td>{{$users->basicSalary}}</td>
      <td>{{$users->hourlyPay}}</td>
      <td>{{$users->workDays}}</td>
      <td>{{$users->attendancePay}}</td>
      <td>{{$users->overtimePay}}</td>
      <td>{{$users->bonus}}</td>
      <td>{{$users->loans}}</td>
      <td>{{$users->noPay}}</td>
      <td>{{$users->epf}}</td>
      <td>{{$users->totalPay}}</td>
  </tr>

  @endforeach
</table>
@else
<div class="user">{{session('error')}}</div>
@endif

@else
<div class="user">{{session('error')}}</div>
@endif

</br></br>


</br></br>
@if(isset($employe))
@if($employe->isNotEmpty())
<table id="customers">
  <tr>
    <th>Month</th>
    <th>Name</th>
    <th>ID</th>
    <th>Address</th>
    <th>Department</th>
    <th>Basic Salary</th>
    <th>Hourly Pay</th>
    <th>Work Days</th>
    <th>Attendance Pay</th>
    <th>Overtime Pay</th>
    <th>Bonus</th>
    <th>Loan Deduction</th>
    <th>No Pay Deductions</th>
    <th>EPF Contributers</th>
    <th>Total Net Pay</th>
  </tr>

  @foreach($employe as $employe)

  <tr>
      <td>{{$employe->month}}</td>
      <td>{{$employe->fullname}}</td>
      <td>{{$employe->EmployeeID}}</td>
      <td>{{$employe->address}}</td>
      <td>{{$employe->department}}</td>
      <td>{{$employe->basicSalary}}</td>
      <td>{{$employe->hourlyPay}}</td>
      <td>{{$employe->workDays}}</td>
      <td>{{$employe->attendancePay}}</td>
      <td>{{$employe->overtimePay}}</td>
      <td>{{$employe->bonus}}</td>
      <td>{{$employe->loans}}</td>
      <td>{{$employe->noPay}}</td>
      <td>{{$employe->epf}}</td>
      <td>{{$employe->totalPay}}</td>
  </tr>

  @endforeach
</table>
@else
<div class="user">{{session('error')}}</div>
@endif

@else
<div class="user">{{session('error')}}</div>
@endif

</br></br>







</body>
</html>