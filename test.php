<?php 
$servername = "localhost";
$username = "jaysenhenderson";
$password = "Quickdraw42";
$dbname = "eotdsurvey";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
 ?>