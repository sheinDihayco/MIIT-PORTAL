<?php
session_start();

// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'miit-portal';

// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if (!isset($_POST['yourUsernameOrEmail'], $_POST['yourPassword'])) {
    // Could not get the data that should have been sent.
    exit('Please fill both the ID/Email and password fields!');
}

$yourUsernameOrEmail = $_POST['yourUsernameOrEmail'];
$yourPassword = $_POST['yourPassword'];

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($yourUsernameOrEmail != '' && $yourPassword != '') {
    $query = "SELECT yourEmail, yourUsername, yourPassword, mem_type, studentID FROM accounts WHERE yourEmail = ? OR studentID = ? LIMIT 1";
    $stmt = $con->prepare($query);
    $stmt->bind_param('ss', $yourUsernameOrEmail, $yourUsernameOrEmail);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $hashed_password = $user['yourPassword'];

        // Verify the password
        if (password_verify($yourPassword, $hashed_password)) {
            // Verification success! User has logged-in!
            // Create sessions to store user data
            session_regenerate_id();
            $_SESSION['loggedin'] = true;
            $_SESSION['yourEmail'] = $user['yourEmail'];
            $_SESSION['yourUsername'] = $user['yourUsername'];
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
            echo 'Incorrect password!';
        }
    } else {
        // Incorrect ID or email
        echo 'Incorrect ID or email!';
    }

    $stmt->close();
} else {
    echo 'Please fill both the ID/Email and password fields!';
}

$con->close();
