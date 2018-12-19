<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "trang-web-nghe-nhac";
$conn = mysqli_connect($servername, $username, $password, $database );
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_query($conn, "utf8");
?>