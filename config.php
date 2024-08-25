<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bca_co-ed";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
