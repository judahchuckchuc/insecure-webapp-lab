<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Your password was changed to: " . $_POST['new_pass'];
}
?>
<form method="POST" action="csrf.php">
  New Password: <input name="new_pass">
  <input type="submit" value="Change Password">
</form>
