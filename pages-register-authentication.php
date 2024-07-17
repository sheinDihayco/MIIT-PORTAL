<?php
session_start();

// Include database connection
require_once 'db.connection.php'; // Adjust this path according to your setup

// Check if all required fields are filled
if (
    !isset($_POST['mem_type'], $_POST['yourEmail'], $_POST['yourUsername'], $_POST['yourPassword']) ||
    ($_POST['mem_type'] === 'Student' && !isset($_POST['studentID']))
) {
    exit('Please fill all the required fields!');
}

// Validate and sanitize inputs
$mem_type = filter_input(INPUT_POST, 'mem_type', FILTER_SANITIZE_STRING);
$studentID = $mem_type === 'Student' ? filter_input(INPUT_POST, 'studentID', FILTER_SANITIZE_STRING) : null;
$yourEmail = filter_input(INPUT_POST, 'yourEmail', FILTER_SANITIZE_EMAIL);
$yourUsername = filter_input(INPUT_POST, 'yourUsername', FILTER_SANITIZE_STRING);
$yourPassword = $_POST['yourPassword'];

// Example validation for student ID
if ($mem_type === 'Student' && !ctype_alnum($studentID)) {
    exit('Invalid student ID format!');
}

// Validate email format
if (!filter_var($yourEmail, FILTER_VALIDATE_EMAIL)) {
    exit('Invalid email format!');
}

// Check for existing email or student ID
$sqlCheck = $mem_type === 'Student'
    ? "SELECT * FROM accounts WHERE yourEmail = ? OR studentID = ?"
    : "SELECT * FROM accounts WHERE yourEmail = ?";
$stmtCheck = $con->prepare($sqlCheck);
if ($mem_type === 'Student') {
    $stmtCheck->bind_param('ss', $yourEmail, $studentID);
} else {
    $stmtCheck->bind_param('s', $yourEmail);
}
$stmtCheck->execute();
$resultCheck = $stmtCheck->get_result();

if ($resultCheck->num_rows > 0) {
    exit('Student ID or email already exists!');
}

// Hash the password
$hashed_password = password_hash($yourPassword, PASSWORD_BCRYPT);

// Prepare SQL statement to insert user data into the database
if ($mem_type === 'Student') {
    $sql = "INSERT INTO accounts (mem_type, studentID, yourEmail, yourUsername, yourPassword) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('sssss', $mem_type, $studentID, $yourEmail, $yourUsername, $hashed_password);
} else {
    $sql = "INSERT INTO accounts (mem_type, yourEmail, yourUsername, yourPassword) VALUES (?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('ssss', $mem_type, $yourEmail, $yourUsername, $hashed_password);
}

// Execute the query
if ($stmt->execute()) {
    header('Location: pages-login.php');
    exit();
} else {
    echo 'Signup failed. Please try again later.';
}

$stmt->close();
$con->close();
