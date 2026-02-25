<!DOCTYPE html>
<html>
<head>
<title>RoadWise Schedule</title>

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

/* TABLE */
.container{
width:90%;
margin:30px auto;
background:rgba(255,255,255,0.06);
padding:25px;
border-radius:18px;
box-shadow:0 0 20px rgba(0,0,0,0.4);
overflow-x:auto;
}

table{
width:100%;
border-collapse:collapse;
text-align:center;
}

th{
background:#00ffd5;
color:black;
padding:12px;
}

td{
padding:12px;
border-bottom:1px solid rgba(255,255,255,0.2);
}

tr:hover{
background:rgba(255,255,255,0.08);
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
<a href="user.php">User</a>
</div>

<!-- HEADER -->
<div class="header">
<h1>Training Schedule</h1>
<p>Select a time slot suitable for your driving practice.</p>
</div>

<!-- SCHEDULE TABLE -->
<div class="container">

<table>
<tr>
<th>Session</th>
<th>Time</th>
<th>Availability</th>
</tr>

<tr>
<td>Morning Batch</td>
<td>6:00 AM – 9:00 AM</td>
<td>Open</td>
</tr>

<tr>
<td>Midday Batch</td>
<td>11:00 AM – 2:00 PM</td>
<td>Open</td>
</tr>

<tr>
<td>Evening Batch</td>
<td>4:00 PM – 7:00 PM</td>
<td>Open</td>
</tr>

<tr>
<td>Weekend Special</td>
<td>Saturday & Sunday</td>
<td>Limited Seats</td>
</tr>

</table>

</div>

<!-- FOOTER -->
<div class="footer">
© <?php echo date("Y"); ?> RoadWise Driving School
</div>

</body>
</html>
