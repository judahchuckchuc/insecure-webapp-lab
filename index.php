<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Insecure WebApp Lab</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome to Insecure WebApp Lab</h1>
    <p><a href="login.php">Login</a> or <a href="register.php">Register</a></p>
</body>
</html>
