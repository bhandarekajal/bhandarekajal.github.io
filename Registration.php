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
<body background="7.jpg">
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
    <h1>Register</h1>
    
    <hr>

    <label for="ID"><b>ID</b></label>
    <input type="text" placeholder="Enter id" name="id" ><br>

    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="name" name="name" ><br>

    <label for="gender"><b>gender</b></label>
    <input type="text" placeholder="gender" name="gender" ><br>

    <label for="age"><b>age</b></label>
    <input type="text" placeholder="age" name="age" ><br>

    <label for="village"><b>village</b></label>
    <input type="text" placeholder="village" name="village" ><br>
    
    <label for="district"><b>district</b></label>
    <input type="text" placeholder="district" name="district"><br>
    
    <label for="medical_condition"><b>medical_condition</b></label>
    <input type="text" placeholder="medical_condition" name="medical_condition"><br>
    <hr>

        <button type="submit" class="registerbtn button1" name="login">Register</button>
        <button type="submit" class="registerbtn button1" name="delete">delete</button>
        <button type="submit" class="registerbtn button1" name="update">update</button>
        <button type="submit" class="registerbtn button1" name="show">show</button>
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
$fnm=$_POST['id'];
$lnm=$_POST['name'];
$mn=$_POST['gender'];
$v=$_POST['village'];
$d=$_POST['district'];
$c=$_POST['medical_condition'];


if($con)
{
  if(isset($_POST['login']))
  {
  $sql="insert into register values ('$fnm','$lnm','$mn','$v','$d','$c')";
  $result=mysqli_query($con,$sql);
  if($result>0)
  {
    echo"record inserted successfully";
  }
  }
  if(isset($_POST['delete']))
  {
    $sql="delete from register where id='$fnm'";
    $result=mysqli_query($con,$sql);
    echo"record deleted";
  }
  if(isset($_POST['update']))
  {
    $sql="update register set name='$lnm',gender='$mn',village='$v',district='$d',medical_condition='$c' where Id='$fnm'";
    $result=mysqli_query($con,$sql);
    echo"data updated successfully";

  }
  if(isset($_POST['show']))
  {
    $result = mysqli_query($con,"SELECT * FROM register");

    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Gender</th>
    <th>village</th>
    <th>district</th>
    <th>medical_condition</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['village'] . "</td>";
    echo "<td>" . $row['district'] . "</td>";
    echo "<td>" . $row['medical_condition'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);
  }
}
?>