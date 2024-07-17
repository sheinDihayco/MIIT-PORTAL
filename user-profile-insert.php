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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize and validate input
    $fullName = $conn->real_escape_string($_POST['full_name']);
    $course = $conn->real_escape_string($_POST['course']);
    $year = $conn->real_escape_string($_POST['year']);
    $country = $conn->real_escape_string($_POST['country']);
    $address = $conn->real_escape_string($_POST['address']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);

    // Handle profile image upload
    if (isset($_FILES['profileImage']) && $_FILES['profileImage']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['profileImage']['tmp_name'];
        $fileName = $_FILES['profileImage']['name'];
        $fileSize = $_FILES['profileImage']['size'];
        $fileType = $_FILES['profileImage']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Generate a unique name for the image
        $newFileName = uniqid() . '.' . $fileExtension;

        // Set the upload directory
        $uploadDir = 'uploads/';

        // Check if the upload directory exists, create it if not
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Set the final path for the uploaded file
        $destPath = $uploadDir . $newFileName;

        // Move the uploaded file to the destination path
        if (move_uploaded_file($fileTmpPath, $destPath)) {
            // Prepare SQL statement for inserting or updating user's profile
            if (isset($_POST['create_profile'])) {
                $sql = "INSERT INTO profile (full_name, course, year, country, address, phone, email, image) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            } elseif (isset($_POST['update_user'])) {
                $sql = "UPDATE profile SET 
                            full_name = ?, 
                            course = ?, 
                            year = ?, 
                            country = ?, 
                            address = ?, 
                            phone = ?, 
                            email = ?, 
                            image = ?
                        WHERE id = ?";
            }

            $stmt = $conn->prepare($sql);
            if ($stmt) {
                if (isset($_POST['create_profile'])) {
                    $stmt->bind_param("ssssssss", $fullName, $course, $year, $country, $address, $phone, $email, $newFileName);
                } elseif (isset($_POST['update_user'])) {
                    $id = 1; // Replace with the actual user ID
                    $stmt->bind_param("sssssssi", $fullName, $course, $year, $country, $address, $phone, $email, $newFileName, $id);
                }

                if ($stmt->execute()) {
                    header("Location: users-profile.php");
                    exit();
                } else {
                    echo "Error inserting/updating profile: " . $stmt->error;
                }

                // Close statement
                $stmt->close();
            } else {
                echo "Error preparing statement: " . $conn->error;
            }
        } else {
            echo "Error moving uploaded file.";
        }
    } else {
        echo "Error uploading file.";
    }

    // Close connection
    $conn->close();
}
