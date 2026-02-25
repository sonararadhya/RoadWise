<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "driving_school";

/* CREATE CONNECTION */
$conn = mysqli_connect($host, $user, $pass, $dbname);

/* CHECK CONNECTION */
if(!$conn)
{
die("Database Connection Failed: " . mysqli_connect_error());
}

/* SET UTF-8 */
mysqli_set_charset($conn, "utf8");

?>
