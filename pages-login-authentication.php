<?php
session_start();

// Database connection
require_once 'db.connection.php';

// Check if form submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate input fields
    if (!empty($_POST['yourIdentifier']) && !empty($_POST['yourPassword'])) {
        $yourIdentifier = $_POST['yourIdentifier'];
        $yourPassword = $_POST['yourPassword'];

        // Prepare our SQL statement based on the type of login
        if (strpos($yourIdentifier, 'MIIT') === 0) {
            // Student login
            $query = "SELECT * FROM accounts WHERE studentID = ? LIMIT 1";
        } else {
            // Admin login
            $query = "SELECT * FROM adminacctbl WHERE yourEmail = ? LIMIT 1";
        }

        // Prepare statement
        $stmt = $con->prepare($query);
        if ($stmt) {
            // Bind parameters and execute query
            $stmt->bind_param('s', $yourIdentifier); // Assuming only one parameter needed for both queries
            $stmt->execute();
            $result = $stmt->get_result();

            // Check if user exists and verify password
            if ($result->num_rows == 1) {
                $user = $result->fetch_assoc();
                $hashed_password = $user['yourPassword'];

                // Verify the password
                if (password_verify($yourPassword, $hashed_password)) {
                    // Password is correct, set session variables and redirect
                    session_regenerate_id();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['yourIdentifier'] = $user['yourIdentifier'];
                    $_SESSION['mem_type'] = $user['mem_type'];

                    if ($user['mem_type'] == 'Student') {
                        $_SESSION['studentID'] = $user['studentID'];
                        header('Location: index.php');
                    } elseif ($user['mem_type'] == 'Admin') {
                        header('Location: admin-dashboard.php');
                    }
                    exit();
                } else {
                    // Incorrect password
                    $error_message = 'Incorrect password!';
                }
            } else {
                // Incorrect ID or email
                $error_message = 'Incorrect ID or email!';
            }

            $stmt->close();
        } else {
            // Database error
            $error_message = 'Database error. Please try again later.';
        }
    } else {
        // Fields not filled
        $error_message = 'Please fill both the ID/Email and password fields!';
    }
} else {
    // Invalid request method
    $error_message = 'Invalid request method!';
}

// Display error message if any
if (isset($error_message)) {
    echo $error_message;
}

$con->close();
