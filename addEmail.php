<?php
// Assuming you have already established a database connection
include 'data/database.php';

    $email = $_POST['email'];

    // Validate the email address
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Save the email in the database
        $query = "INSERT INTO newsletter (email) VALUES ('$email')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Email saved successfully!";
        } else {
            echo "Error saving email: " . mysqli_error($connection);
        }
    } else {
        echo "Invalid email address!";
    }

?>