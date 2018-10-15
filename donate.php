<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}
.nav
{
  float: right;
  margin-top: 2%;
}
.content {
    position: fixed;
    bottom: 500px;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 4px;
}
</style>

<style type="text/css">
  * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 150px;
  max-width: 40%;
  max-height: 40%;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
label
{
  color: #000000;
  font-weight: bold;
  font-size: 15px;
}
.button1
{
  padding: center;
height: 50px;
width: 150px;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="">
<div class="content">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">NGO
      </a>
    </div>
    <div class="nav">
    <ul class="nav navbar-nav" margin-left="20px">
      <li><a href="homesample.html">Home</a></li>
      <li><a href="AboutUs.html">About Us</a></li>
      <li><a href="Registration.php">Registration</a></li>
      <li><a href="donate.php">donate</a></li>
      <li><a href="gallery.html">Gallery</a></li>
      <li><a href="contactus.html">Contact Us</a></li>

    </ul>
    <a href="login.html"><button class="btn btn-danger navbar-btn">login</button></a>
  </div>

  </div>
  </nav>
  </div>

 <form method="post">
  <div class="container">
    <h1>Donate Now</h1>
    
    <hr>

    

    <label for="Name"><b>First Name</b></label>
    <input type="text" placeholder="enter first name" name="fname" required><br>

    <label for="last name"><b>Last name</b></label>
    <input type="text" placeholder="Last Name" name="lname" required><br>

    <label for="mobile"><b>Mobile no</b></label>
    <input type="text" placeholder="mobile number" name="mobile" required><br>

    <label for="village"><b>Village</b></label>
    <input type="text" placeholder="enter village" name="village" required><br>
    
    <label for="district"><b>District</b></label>
    <input type="text" placeholder="enter district" name="district" required><br>
    
    <label for="card no"><b>card no</b></label>
    <input type="text" placeholder="enter card number" name="card" required><br>

    <label for="amount"><b>Amount</b></label>
    <input type="text" placeholder="enter amount" name="amount" required><br>
    <hr>

        <button type="submit" class="registerbtn button1" name=login>Donate Now</button>
        
  </div>

     
</form> 




 
</body>
</html>
<?php
$server="localhost";
$username="root";
$password="";
$db="ngo";



$con=mysqli_connect($server,$username,$password,$db);
$fnm=$_POST['fname'];
$lnm=$_POST['lname'];
$mn=$_POST['mobile'];
$v=$_POST['village'];
$d=$_POST['district'];
$c=$_POST['card'];
$am=$_POST['amount'];
if($con)
{
  

  if(isset($_POST['login']))
  {
  $sql="insert into donate values ('$fnm','$lnm','$mn','$v','$d','$c','$am')";
  $result=mysqli_query($con,$sql);
  if($result>0)
  {
    echo"record inserted successfully";
  }
  else
  {
    echo"try again";
  }
  }

  
}
?>
