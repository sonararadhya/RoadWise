<?php
session_start();
include("database.php");

if(!isset($_SESSION['admin']))
{
header("Location: login.php");
exit();
}

$msg="";

if(isset($_POST['change']))
{
$old=$_POST['old'];
$new=$_POST['new'];

$q="SELECT * FROM admin WHERE password='$old'";
$res=mysqli_query($conn,$q);

if(mysqli_num_rows($res)>0)
{
mysqli_query($conn,"UPDATE admin SET password='$new'");
$msg="Password Updated Successfully!";
}
else
{
$msg="Old Password Incorrect!";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>

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
border-radius:18px;
width:350px;
text-align:center;
box-shadow:0 0 25px rgba(0,0,0,0.5);
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
}

.msg{
margin-top:15px;
font-size:14px;
color:#00ffd5;
}

.back{
display:block;
margin-top:15px;
color:white;
text-decoration:none;
font-size:14px;
}

</style>
</head>
<body>

<div class="card">

<h2>Change Password</h2>

<form method="POST">

<input type="password" name="old" placeholder="Old Password" required>

<input type="password" name="new" placeholder="New Password" required>

<button name="change">Update Password</button>

</form>

<?php if($msg!="") echo "<div class='msg'>$msg</div>"; ?>

<a class="back" href="interface.php">← Back to Dashboard</a>

</div>

</body>
</html>
