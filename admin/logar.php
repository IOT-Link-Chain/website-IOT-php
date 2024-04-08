<?php
// Process the login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    include "../data/database.php";

    // Prepare and execute the SQL query
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows == 1) {
        // User is authenticated, redirect to the dashboard or any other page
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid credentials, display an error message
        echo "Invalid username or password";
    }

    // Close the database connection
    $conn->close();
}
?>