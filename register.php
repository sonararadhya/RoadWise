<?php
include("database.php");

$msg="";

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$vehicle=$_POST['vehicle'];
$timing=$_POST['timing'];

$sql="INSERT INTO register(name,email,phone,vehicle,timing)
VALUES('$name','$email','$phone','$vehicle','$timing')";

if(mysqli_query($conn,$sql))
$msg="Registration Successful!";
else
$msg="Error occurred!";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>RoadWise Registration</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

<style>

*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}

body{
background:linear-gradient(120deg,#0f2027,#203a43,#2c5364);
color:white;
display:flex;
justify-content:center;
align-items:center;
min-height:100vh;
}

.formbox{
background:rgba(255,255,255,0.07);
padding:35px;
border-radius:18px;
width:350px;
box-shadow:0 0 25px rgba(0,0,0,0.5);
}

h2{
text-align:center;
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
transition:.3s;
}

button:hover{
transform:scale(1.05);
}

.msg{
margin-top:15px;
text-align:center;
font-size:14px;
color:#00ffd5;
}

.nav{
position:absolute;
top:20px;
left:20px;
}

.nav a{
color:white;
text-decoration:none;
background:black;
padding:8px 15px;
border-radius:8px;
}

</style>
</head>

<body>

<div class="nav">
<a href="Main.php">Home</a>
</div>

<div class="formbox">

<h2>Student Registration</h2>

<form method="POST">

<input type="text" name="name" placeholder="Full Name" required>

<input type="email" name="email" placeholder="Email Address" required>

<input type="text" name="phone" placeholder="Phone Number" required>

<select name="vehicle" required>
<option value="">Select Vehicle Type</option>
<option>Car</option>
<option>Bike</option>
<option>Scooter</option>
</select>

<select name="timing" required>
<option value="">Preferred Timing</option>
<option>Morning</option>
<option>Afternoon</option>
<option>Evening</option>
</select>

<button name="submit">Register</button>

</form>

<?php
if($msg!="")
echo "<div class='msg'>$msg</div>";
?>

</div>

</body>
</html>
