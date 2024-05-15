<?php
session_start();
// Check if the user is already logged in, if yes then redirect them to the dashboard
if (isset($_COOKIE["username"])) {
    header("Location: dashboard.php");
    exit();
}
// Process the login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {s
    $username = $_POST["username"];
    $password = $_POST["password"];
    // Include the database connection file
s    include "../data/database.php";
    // Prepare and execute the SQL query
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' order by id desc limit 1";
    $result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
      $name = $row["username"];
      $pass = $row["password"];
}
      // Check if the username and password match the database records
if ( $username == $name && $password == $pass) {
    // Check if the user exists in the database
    if ($result == 1) {
        setcookie("username", $name, time() + (86400 * 7), "/"  );
        // User is authenticated, redirect to the dashboard or any other page
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid credentials, display an error message
        echo "Invalid username";
    }
} else {
    // Invalid credentials, display an error message
    echo "Invalid username or password";
    // Close the database connection
    $conn->close();
}
}
?>