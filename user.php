<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>RoadWise User Panel</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

<style>

*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}

body{
background:linear-gradient(120deg,#0f2027,#203a43,#2c5364);
color:white;
}

/* NAVBAR */
.navbar{
display:flex;
justify-content:center;
background:rgba(0,0,0,0.7);
padding:15px;
}

.navbar a{
color:white;
text-decoration:none;
margin:0 18px;
transition:.3s;
}

.navbar a:hover{
color:#00ffd5;
}

/* HEADER */
.header{
text-align:center;
padding:40px 20px;
}

.header h1{
font-size:40px;
background:linear-gradient(to right,#00ffd5,#00aaff);
-webkit-background-clip:text;
color:transparent;
}

/* DASHBOARD */
.container{
width:90%;
margin:auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:25px;
margin-top:20px;
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

.card h2{
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

/* FOOTER */
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

<!-- NAVBAR -->
<div class="navbar">
<a href="Main.php">Home</a>
<a href="register.php">Register</a>
<a href="Time_Table.php">Schedule</a>
<a href="Driving_rules.php">Rules</a>
<a href="Report.php">Reports</a>
<a href="login.php">Admin</a>
</div>

<!-- HEADER -->
<div class="header">
<h1>User Dashboard</h1>
<p>Welcome to RoadWise Driving School Portal</p>
</div>

<!-- CARDS -->
<div class="container">

<div class="card">
<h2>Register</h2>
<p>Apply for driving training.</p>
<a href="register.php">Open</a>
</div>

<div class="card">
<h2>View Schedule</h2>
<p>Check available training time slots.</p>
<a href="Time_Table.php">Open</a>
</div>

<div class="card">
<h2>Driving Rules</h2>
<p>Learn traffic rules and safety.</p>
<a href="Driving_rules.php">Open</a>
</div>

<div class="card">
<h2>Reports</h2>
<p>Check registration records.</p>
<a href="Report.php">Open</a>
</div>

</div>

<!-- FOOTER -->
<div class="footer">
© <?php echo date("Y"); ?> RoadWise Driving School
</div>

</body>
</html>
