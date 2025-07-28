<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $conn->query("INSERT INTO comments (name, comment) VALUES ('$name', '$comment')");
}
$result = $conn->query("SELECT * FROM comments");
while ($row = $result->fetch_assoc()) {
    echo "<b>{$row['name']}:</b> {$row['comment']}<br>";
}
?>
<form method="POST">
  Name: <input name="name"><br>
  Comment: <textarea name="comment"></textarea><br>
  <input type="submit" value="Post">
</form>
