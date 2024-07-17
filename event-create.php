<?php
// database connection info.
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

// Insert event into database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming form fields are validated and sanitized
    $date = $_POST['date'];
    $title = $_POST['eventTitle'];
    $description = $_POST['eventDescription'];


    // Prepare SQL statement
    $sql = "INSERT INTO events (date, eventTitle, eventDescription) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute statement
    $stmt->bind_param("sss", $date, $title, $description);
    if ($stmt->execute()) {
        // Success message or redirect
        echo "Event added successfully!";
        // Redirect to a confirmation page or back to the dashboard
        header("Location: index.php");
        // exit();
    } else {
        // Error message
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}
