<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$token    = $_POST['token'] ?? '';

// Example check: replace with your real name and student ID
if ($username === 'naveed' && $password === 'j25044443') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit();
} else {
    header('Location: login.php?error=1');
    exit();
}
?>
