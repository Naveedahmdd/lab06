<?php include 'header.inc'; ?>

<form action="process.php" method="POST">
  <label for="username">Username:</label>
  <input type="text" name="username" id="username" required><br><br>

  <label for="password">Password:</label>
  <input type="password" name="password" id="password" required><br><br>

  <!-- Hidden field -->
  <input type="hidden" name="token" value="Y123456"> <!-- Example: first initial + student ID -->

  <input type="submit" value="Login">
</form>

<?php 
// Show error message if redirected back
if (isset($_GET['error'])) {
  echo "<p style='color:red;'>Invalid login, please try again.</p>";
}
?>

<?php include 'footer.inc'; ?>
