<?php
//Part 1 
//Lesliy Eghaghe 11/10/23
//The code defines the connection parametres. The timezone is set to Dublin to make sure the data is stored in the right timezone. The script makes a connection to MySQL. The code inserts a new member called John Doe into the member table.
$servername = "localhost";
$username = "root"
$password = "No ...*/";
$dbname = "TenisClub";
$port = 3307;

//set the default timezone - this is necessary since MySQL 8. This is an effort to store all dates and times together with their timezones. 
//This is particularly important where there is a timestamp indicating when something happened.
date_default_timezone_set('Europe/Dublin');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO member (firstname, surname) VALUES ('john', 'doe')";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>
