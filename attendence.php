<?php
session_start();
include("database.php");

if(!isset($_SESSION['admin']))
{
header("Location: login.php");
exit();
}

$msg="";

if(isset($_POST['submit']))
{
$id=$_POST['id'];
$status=$_POST['status'];

$sql="UPDATE register SET attendance='$status' WHERE id='$id'";

if(mysqli_query($conn,$sql))
$msg="Attendance Updated Successfully!";
else
$msg="Error updating attendance!";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Attendance Panel</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:linear-gradient(120deg,#141e30,#243b55);
color:white;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.card{
background:rgba(255,255,255,0.07);
padding:40px;
border-radius:18px;
width:360px;
text-align:center;
box-shadow:0 0 25px rgba(0,0,0,0.5);
}

h2{
margin-bottom:20px;
color:#00ffd5;
}

input,select{
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

<h2>Mark Attendance</h2>

<form method="POST">

<input type="number" name="id" placeholder="Student ID" required>

<select name="status" required>
<option value="">Select Status</option>
<option>Present</option>
<option>Absent</option>
</select>

<button name="submit">Update Attendance</button>

</form>

<?php
if($msg!="")
echo "<div class='msg'>$msg</div>";
?>

<a class="back" href="interface.php">← Back to Dashboard</a>

</div>

</body>
</html>
