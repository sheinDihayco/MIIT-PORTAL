<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database connection
    $con = new mysqli('localhost', 'root', '', 'miit-portal');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Check if file was uploaded
    if (isset($_FILES['schedule_file']) && $_FILES['schedule_file']['error'] == 0) {
        $file = $_FILES['schedule_file']['tmp_name'];

        // Open the file
        if (($handle = fopen($file, 'r')) !== FALSE) {
            // Skip the header
            fgetcsv($handle);

            // Prepare the SQL statement
            $stmt = $con->prepare("INSERT INTO schedules (code, subject, instructor, date, time) VALUES (?, ?, ?, ?, ?)");

            // Bind parameters
            $stmt->bind_param("sssss", $code, $subject, $instructor, $date, $time);

            // Read each line of the CSV
            while (($data = fgetcsv($handle)) !== FALSE) {
                list($code, $subject, $instructor, $date, $time) = $data;
                $stmt->execute();
            }

            fclose($handle);
            echo "Schedule uploaded successfully!";
            header("Location: components-badges.php");
        } else {
            echo "Error opening the file.";
        }
    } else {
        echo "Error uploading file.";
    }

    $stmt->close();
    $con->close();
}
