<?php
session_start();
if (!isset($_SESSION['husername'])) {
    header("Location: index.php");
    exit();
}

// Ensure required fields are set
$subject = isset($_POST['subject']) ? $_POST['subject'] : null;
$message = isset($_POST['message']) ? $_POST['message'] : null;
$Branch = isset($_POST['Branch']) ? $_POST['Branch'] : null;

// Validate inputs
if (!$subject || !$message || !$Branch) {
    die("<p style='color: red;'>Error: Missing subject, message, or branch information.</p>");
}

// Database connection
$link = mysqli_connect("localhost", "root", "", "revised");

if (!$link) {
    die("<p style='color: red;'>Error: Unable to connect to the database. " . mysqli_connect_error() . "</p>");
}

// Insert notification into the notifications table
$sql = "INSERT INTO notifications (subject, message, department, date_posted) VALUES ('$subject', '$message', '$Branch', NOW())";

if (mysqli_query($link, $sql)) {
    echo "<p style='color: green;'>Notification sent successfully to branch: <strong>$Branch</strong>.</p>";
    // Redirect to Notif.php
    header("Location: http://localhost/repo-main/Profilers/SProfile/Notif.php");
    exit();
} else {
    echo "<p style='color: red;'>Error: " . mysqli_error($link) . "</p>";
}

// Close connection
mysqli_close($link);
?>
