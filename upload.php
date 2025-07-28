<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
    $target = "uploads/" . basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $target);
    echo "Uploaded to: $target";
}
?>
<form method="POST" enctype="multipart/form-data">
  <input type="file" name="file"><br>
  <input type="submit" value="Upload">
</form>
