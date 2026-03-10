<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>

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

.admin-box{
    text-align:center;
    background:white;
    padding:40px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.admin-box a{
    display:block;
    width:200px;
    margin:10px auto;
    padding:10px;
    text-decoration:none;
    background:#3498db;
    color:white;
    border-radius:5px;
    font-weight:bold;
}

.admin-box a:hover{
    background:#2980b9;
}
</style>

</head>

<body>

<div class="admin-box">
    <h2>Admin Panel</h2>

    <a href="add_student.php">Add Students</a>
    <a href="view_students.php">View Students</a>
    <a href="logout.php">Logout</a>
</div>

</body>
</html>