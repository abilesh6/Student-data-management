<?php
session_start();
include "db.php";

if(isset($_POST['login']))
{

$role = $_POST['role'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='$role'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1)
{

$row = mysqli_fetch_assoc($result);

$_SESSION['username']=$row['username'];
$_SESSION['role']=$row['role'];

if($role=="admin")
{
header("Location:admin.php");
}
else
{
header("Location:student.php");
}

}
else
{
$error="Invalid Login Details";
}

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Login</title>

<style>

body{
background:#e9f3ff;
font-family:Arial;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.container{
background:white;
padding:40px;
width:350px;
border-radius:10px;
box-shadow:0px 0px 10px #ccc;
}

h2{
text-align:center;
color:#1f5fa6;
}

input,select{
width:100%;
padding:12px;
margin:10px 0;
border-radius:6px;
border:1px solid #ccc;
}

button{
width:100%;
padding:12px;
background:#1f5fa6;
color:white;
border:none;
border-radius:6px;
font-size:16px;
cursor:pointer;
}

button:hover{
background:#174a83;
}

</style>

</head>

<body>

<div class="container">

<h2>Login</h2>

<?php if(isset($error)){ echo "<p style='color:red'>$error</p>"; } ?>

<form method="post">

<label>Login As *</label>

<select name="role" required>
<option value="">Select Role</option>
<option value="admin">Admin</option>
<option value="student">Student</option>
</select>

<label>Username *</label>

<input type="text" name="username" placeholder="Enter Username">

<label>Password *</label>

<input type="password" name="password" placeholder="Enter Password">

<br>

<button type="submit" name="login">Login</button>

</form>

</div>

</body>
</html>