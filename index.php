<?php
// Start a session
session_start();
// Set a cookie
$cookieName = "myCookie";
$cookieValue = "Hello, World!";
$cookieExpiration = time() + (86400 * 30); // 30 days
$cookiePath = "/"; // Set the cookie path to the root of the website
setcookie($cookieName, $cookieValue, $cookieExpiration, $cookiePath);

// Include the database connection file
// require_once 'data/database.php';
include 'includes/functions.php';
include 'partial_page/header.php';
// Get the page parameter from the URL
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Set the page, title, and description based on the page parameter
switch ($page) {
    case 'home':
        include 'pages/home.php';
        break;
    case 'about':
        include 'pages/about.php';
        break;
    case 'contact':
        include 'pages/contact.php';
        break;
    case 'wallets':
        include 'pages/contact.php';
        break;
    default:
        include 'pages/home.php';
        break;
}
include 'partial_page/footer.php';
?>