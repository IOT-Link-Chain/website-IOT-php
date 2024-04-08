<?php
session_start();

// Check if session is not active
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Replace "login.php" with the actual login page URL
    exit();
} else {
    header("Location: dashboard.php"); // Replace "dashboard.php" with the actual dashboard page URL
    exit();
}
// Your code for the index page goes here

?>