<?php
include("database.php");

$msg="";

if(isset($_POST['reset']))
{
$username=$_POST['username'];
$newpass=$_POST['newpass'];

$sql="UPDATE admin SET password='$newpass' WHERE username='$username'";

if(mysqli_query($conn,$sql))
$msg="Password Reset Successful!";
else
$msg="Error resetting password!";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Reset Password</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

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
margin-bottom:20px;
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

<h2>Reset Password</h2>

<form method="POST">

<input type="text" name="username" placeholder="Admin Username" required>

<input type="password" name="newpass" placeholder="New Password" required>

<button name="reset">Reset Password</button>

</form>

<?php
if($msg!="")
echo "<div class='msg'>$msg</div>";
?>

<a class="back" href="login.php">← Back to Login</a>

</div>

</body>
</html>
