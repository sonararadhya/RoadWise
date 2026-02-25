<script>
document.addEventListener('contextmenu', event => event.preventDefault());
</script>

<!DOCTYPE html>
<html>
<head>
<title>RoadWise Driving School</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:linear-gradient(120deg,#0f2027,#203a43,#2c5364);
color:white;
}

/* NAVBAR */
.navbar{
display:flex;
justify-content:center;
background:rgba(0,0,0,0.7);
backdrop-filter:blur(6px);
padding:15px;
box-shadow:0 2px 15px rgba(0,0,0,0.4);
}

.navbar a{
color:white;
text-decoration:none;
margin:0 18px;
font-size:16px;
transition:.3s;
}

.navbar a:hover{
color:#00ffd5;
transform:scale(1.1);
}

/* HEADER */
.header{
text-align:center;
padding:40px 20px;
}

.header h1{
font-size:45px;
background:linear-gradient(to right,#00ffd5,#00aaff);
-webkit-background-clip:text;
color:transparent;
}

.header p{
opacity:.85;
margin-top:10px;
}

/* SECTION CARDS */
.container{
width:90%;
margin:auto;
margin-top:40px;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:25px;
}

.card{
background:rgba(255,255,255,0.07);
padding:25px;
border-radius:18px;
text-align:center;
box-shadow:0 0 15px rgba(0,0,0,0.4);
transition:.3s;
}

.card:hover{
transform:translateY(-8px);
box-shadow:0 0 25px rgba(0,255,213,0.4);
}

.card h2{
margin-bottom:15px;
color:#00ffd5;
}

.card p{
font-size:15px;
opacity:.9;
}

/* FOOTER */
.footer{
text-align:center;
margin-top:60px;
padding:25px;
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
<a href="Time_Table.php">Time Table</a>
<a href="Driving_rules.php">Rules</a>
<a href="Report.php">Report</a>
<a href="login.php">Admin</a>
<a href="user.php">User</a>
</div>

<!-- HEADER -->
<div class="header">
<h1>RoadWise Driving School</h1>
<p>Professional Driving Training & Road Safety Education</p>

<?php
$hostname = gethostname();
echo "<p style='margin-top:15px;font-size:18px;'>Welcome $hostname</p>";
?>
</div>

<!-- SERVICES -->
<div class="container">

<div class="card">
<h2>Driving Lessons</h2>
<p>Structured training programs designed for beginners and experienced learners.</p>
</div>

<div class="card">
<h2>RTO Assistance</h2>
<p>Support for license tests, forms, documentation and approvals.</p>
</div>

<div class="card">
<h2>Video Classes</h2>
<p>Interactive learning materials for road rules and safety awareness.</p>
</div>

<div class="card">
<h2>Vehicle Training</h2>
<p>Hands-on training with modern vehicles and expert instructors.</p>
</div>

</div>

<!-- ABOUT -->
<div class="container" style="margin-top:50px;">
<div class="card" style="grid-column:1/-1;">
<h2>About RoadWise</h2>
<p>
RoadWise Driving School is dedicated to building confident, responsible and safe drivers. 
Our mission is to make roads safer by providing professional instruction, modern training methods 
and practical experience that prepares students for real-world driving situations.
</p>
</div>
</div>

<!-- CONTACT -->
<div class="container" style="margin-top:50px;">
<div class="card" style="grid-column:1/-1;">
<h2>Contact Us</h2>
<p>Email: info@roadwise.com</p>
<p>Phone: +91 XXXXXXXXXX</p>
<p>Location: Pune, Maharashtra</p>
</div>
</div>

<!-- FOOTER -->
<div class="footer">
© <?php echo date("Y"); ?> RoadWise Driving School | All Rights Reserved
</div>

</body>
</html>
