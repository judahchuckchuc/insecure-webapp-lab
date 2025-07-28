<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Insecure WebApp Lab</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <ul>
        <li><a href="comment.php">Comments</a></li>
        <li><a href="upload.php">File Upload</a></li>
        <li><a href="csrf.php">Change Password (CSRF Demo)</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>
