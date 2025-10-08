<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>

<?php include 'header.inc'; ?>

<h3>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h3>
<p>You have successfully logged in using PHP sessions.</p>


<?php include 'footer.inc'; ?>
