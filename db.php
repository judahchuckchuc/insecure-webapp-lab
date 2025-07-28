<?php
$conn = new mysqli("localhost", "root", "", "vulnerable_lab");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
