<?php
session_start();
include "db.php";

if(isset($_POST['add']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$roll=$_POST['roll'];
$dept=$_POST['dept'];
$email=$_POST['email'];

$sql="INSERT INTO users(username,password,role,rollno,department,email)
VALUES('$username','$password','student','$roll','$dept','$email')";

mysqli_query($conn,$sql);

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>

<style>

body{
font-family: Arial, sans-serif;
background-color:#f2f2f2;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.container{
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.2);
width:350px;
}

h2{
text-align:center;
margin-bottom:20px;
}

input{
width:100%;
padding:8px;
margin-top:5px;
margin-bottom:15px;
border:1px solid #ccc;
border-radius:5px;
}

button{
width:100%;
padding:10px;
background:#007BFF;
color:white;
border:none;
border-radius:5px;
font-size:16px;
cursor:pointer;
}

button:hover{
background:#0056b3;
}

.back{
text-align:center;
margin-top:15px;
}

</style>

</head>

<body>

<div class="container">

<h2>Add Student</h2>

<form method="post">

Username
<input type="text" name="username" required>

Password
<input type="password" name="password" required>

Roll No
<input type="text" name="roll" required>

Department
<input type="text" name="dept" required>

Email
<input type="email" name="email" required>

<button type="submit" name="add">Add Student</button>

</form>

<div class="back">
<a href="admin.php">Back to Admin Panel</a>
</div>

</div>

</body>
</html>