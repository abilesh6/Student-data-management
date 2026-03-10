<!DOCTYPE html>
<html>
<head>
<title>Student Dashboard</title>

<style>
body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:Arial, sans-serif;
    background:#f4f6f8;
}

.student-box{
    text-align:center;
    background:white;
    padding:40px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.student-box a{
    display:block;
    width:220px;
    margin:12px auto;
    padding:10px;
    text-decoration:none;
    background:#2ecc71;
    color:white;
    border-radius:5px;
    font-weight:bold;
}

.student-box a:hover{
    background:#27ae60;
}
</style>

</head>

<body>

<div class="student-box">

<h2>Student Dashboard</h2>

<a href="view_students.php">View Student Details</a>

<a href="logout.php">Logout</a>

</div>

</body>
</html>