<?php
$servername = "localhost";
$username = "nguyentr_test";
$password = "Nhan123456";
$dbname = "nguyentr_fff";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (!$conn->set_charset("utf8")) { }
