<?php
session_start();

if(!isset($_SESSION['admin']))
{
header("Location: login.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>RoadWise Admin Panel</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

<style>

*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}

body{
background:linear-gradient(120deg,#141e30,#243b55);
color:white;
}

/* TOPBAR */
.topbar{
display:flex;
justify-content:space-between;
align-items:center;
padding:15px 30px;
background:black;
}

.topbar h2{
color:#00ffd5;
}

.logout{
background:#00ffd5;
color:black;
padding:8px 15px;
text-decoration:none;
border-radius:8px;
font-weight:600;
}

/* DASHBOARD */
.container{
width:90%;
margin:40px auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:25px;
}

.card{
background:rgba(255,255,255,0.07);
padding:30px;
border-radius:18px;
text-align:center;
box-shadow:0 0 20px rgba(0,0,0,0.5);
transition:.3s;
}

.card:hover{
transform:translateY(-8px);
box-shadow:0 0 25px rgba(0,255,213,0.4);
}

.card h3{
color:#00ffd5;
margin-bottom:15px;
}

.card a{
display:inline-block;
margin-top:15px;
padding:10px 18px;
background:#00ffd5;
color:black;
text-decoration:none;
border-radius:8px;
font-weight:600;
}

.footer{
text-align:center;
margin-top:50px;
padding:20px;
background:black;
font-size:14px;
opacity:.8;
}

</style>
</head>
<body>

<!-- TOPBAR -->
<div class="topbar">
<h2>Admin Dashboard</h2>
<a class="logout" href="logout.php">Logout</a>
</div>

<!-- CARDS -->
<div class="container">

<div class="card">
<h3>View Reports</h3>
<p>Check registered student records.</p>
<a href="Report.php">Open</a>
</div>

<div class="card">
<h3>Change Password</h3>
<p>Update admin login credentials.</p>
<a href="PasswordChange.php">Open</a>
</div>

<div class="card">
<h3>Delete Account</h3>
<p>Remove student accounts from database.</p>
<a href="AccountDeletion.php">Open</a>
</div>

<div class="card">
<h3>Attendance</h3>
<p>Manage student attendance.</p>
<a href="attendence.php">Open</a>
</div>

</div>

<!-- FOOTER -->
<div class="footer">
© <?php echo date("Y"); ?> RoadWise Admin Panel
</div>

</body>
</html>
