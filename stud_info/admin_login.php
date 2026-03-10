<?php
session_start();
include "db.php";

if(isset($_POST['login']))
{
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='admin'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1)
{
$_SESSION['admin']=$username;
header("Location:admin.php");
}
else
{
$error="Invalid Admin Login";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>

<style>
body{
background-color: lightblue;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
font-family:Arial;
}

.box{
background:white;
padding:40px;
border-radius:10px;
box-shadow:0 0 10px gray;
text-align:center;
}
</style>

</head>

<body>

<div class="box">

<h2>Admin Login</h2>

<?php if(isset($error)){ echo "<p style='color:red'>$error</p>"; } ?>

<form method="post">

<input type="text" name="username" placeholder="Admin Username"><br><br>

<input type="password" name="password" placeholder="Password"><br><br>

<button type="submit" name="login">Login</button>

</form>

</div>

</body>
</html>