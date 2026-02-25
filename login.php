<?php
session_start();
include("database.php");

$error="";

if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1)
{
$_SESSION['admin']=$username;
header("Location: interface.php");
}
else
{
$error="Invalid Username or Password!";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>RoadWise Admin Login</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

<style>

*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}

body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:linear-gradient(120deg,#141e30,#243b55);
color:white;
}

.card{
background:rgba(255,255,255,0.07);
padding:40px;
border-radius:20px;
width:330px;
text-align:center;
box-shadow:0 0 30px rgba(0,0,0,0.5);
}

h2{
margin-bottom:25px;
color:#00ffd5;
}

input{
width:100%;
padding:12px;
margin:10px 0;
border:none;
border-radius:8px;
outline:none;
}

button{
width:100%;
padding:12px;
margin-top:15px;
border:none;
border-radius:10px;
background:linear-gradient(45deg,#00ffd5,#00aaff);
color:black;
font-weight:600;
cursor:pointer;
transition:.3s;
}

button:hover{
transform:scale(1.05);
}

.error{
margin-top:15px;
color:#ff6b6b;
font-size:14px;
}

.footer{
margin-top:15px;
font-size:13px;
opacity:.7;
}

</style>
</head>

<body>

<div class="card">

<h2>Admin Login</h2>

<form method="POST">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>
</form>

<?php
if($error!="")
echo "<div class='error'>$error</div>";
?>

<div class="footer">
RoadWise Driving School
</div>

</div>

</body>
</html>
