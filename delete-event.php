<?php
// Database connection info
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'miit-portal';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Create a connection
$conn = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete event from database
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_event']) && isset($_POST['id'])) {
    $eventId = intval($_POST['id']);

    // Prepare SQL statement
    $sql = "DELETE FROM events WHERE id = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute statement
    $stmt->bind_param("i", $eventId);
    if ($stmt->execute()) {
        // Redirect to a confirmation page or back to the dashboard
        header("Location: index.php");
        exit();
    } else {
        // Error message
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
