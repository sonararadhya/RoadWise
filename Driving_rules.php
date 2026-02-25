<!DOCTYPE html>
<html>
<head>
<title>RoadWise Driving Rules</title>

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

/* RULES CONTAINER */
.container{
width:85%;
margin:30px auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
gap:25px;
}

.rule{
background:rgba(255,255,255,0.07);
padding:25px;
border-radius:18px;
box-shadow:0 0 15px rgba(0,0,0,0.4);
transition:.3s;
}

.rule:hover{
transform:translateY(-8px);
box-shadow:0 0 25px rgba(0,255,213,0.4);
}

.rule h3{
color:#00ffd5;
margin-bottom:12px;
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
<a href="Time_Table.php">Time Table</a>
<a href="Driving_rules.php">Rules</a>
<a href="Report.php">Report</a>
<a href="login.php">Admin</a>
<a href="user.php">User</a>
</div>

<!-- HEADER -->
<div class="header">
<h1>Driving Rules & Safety Guide</h1>
<p>Learn the essential rules every responsible driver must follow.</p>
</div>

<!-- RULES -->
<div class="container">

<div class="rule">
<h3>Always Wear Seatbelt</h3>
<p>Seatbelts reduce risk of injury during accidents and are mandatory for driver and passengers.</p>
</div>

<div class="rule">
<h3>Follow Speed Limits</h3>
<p>Speed limits are designed for safety. Overspeeding is one of the major causes of accidents.</p>
</div>

<div class="rule">
<h3>Do Not Drink & Drive</h3>
<p>Alcohol slows reaction time and impairs judgement. Strictly prohibited while driving.</p>
</div>

<div class="rule">
<h3>Obey Traffic Signals</h3>
<p>Traffic signals regulate road movement. Violating signals can cause serious accidents.</p>
</div>

<div class="rule">
<h3>Maintain Safe Distance</h3>
<p>Always keep a safe distance from the vehicle ahead to allow proper braking time.</p>
</div>

<div class="rule">
<h3>Use Indicators</h3>
<p>Indicators help other drivers understand your movement intentions and prevent collisions.</p>
</div>

</div>

<!-- FOOTER -->
<div class="footer">
© <?php echo date("Y"); ?> RoadWise Driving School
</div>

</body>
</html>
