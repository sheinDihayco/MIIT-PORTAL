<?php
session_start();

// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'miit-portal';

// Create a connection
$conn = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//update the user information
if (isset($_POST['update_user'])) {

    // Sanitize and validate input (assuming you have validation logic here)
    $fullName = $conn->real_escape_string($_POST['full_name']);
    $course = $conn->real_escape_string($_POST['course']);
    $year = $conn->real_escape_string($_POST['year']);
    $country = $conn->real_escape_string($_POST['country']);
    $address = $conn->real_escape_string($_POST['address']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);

    // Update the user's profile in the database
    $sql = "UPDATE profile SET
        full_name = ?,
        course = ?,
        year = ?,
        country = ?,
        address = ?,
        phone = ?,
        email = ?
        WHERE id = ?";

    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $id = 1; // Replace with the actual user ID
        $stmt->bind_param("sssssssi", $fullName, $course, $year, $country, $address, $phone, $email, $id);

        if ($stmt->execute()) {
            // Redirect to the profile page after successful update
            header("Location: ../MIIT-PORTAL/Profile/users-profile.php");
            exit();
        } else {
            echo "Error updating profile: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    // Close connection
    $conn->close();
}
