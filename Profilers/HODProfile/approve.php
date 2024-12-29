<?php
session_start();
if (!isset($_SESSION['husername'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approval Status</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/icon">
    <link rel="icon" href="favicon.ico" type="image/icon">
    <style>
        /* General Styling */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #4CAF50, #2E7D32);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 30px 50px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
        }

        .success {
            color: #4CAF50;
            font-weight: bold;
        }

        .error {
            color: #FF5252;
            font-weight: bold;
        }

        .redirect {
            margin-top: 20px;
            font-size: 14px;
            color: #ddd;
        }

        .btn {
            margin-top: 20px;
            display: inline-block;
            background: #FFD700;
            color: #333;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #FFA000;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    // Retrieve data from POST request
    $id = $_POST["id"];
    $dob = $_POST["DOB"];

    // Database connection
    $link = mysqli_connect("localhost", "root", "", "revised");

    if ($link === false) {
        die("<p class='error'>Connection Error: " . mysqli_connect_error() . "</p>");
    }

    // Update query
    $sql = "UPDATE `basicdetails` SET Approve='1', ApprovalDate='$dob' WHERE USN = '$id'";

    if (mysqli_query($link, $sql)) {
        echo "<h1>Approval Successful</h1>";
        echo "<p>USN: <strong>$id</strong></p>";
        echo "<p class='success'>Status: Approved</p>";
        echo "<p class='redirect'>Redirecting to preferences page in 3 seconds...</p>";
        header("Refresh: 3; URL=http://localhost/repo-main/Profilers/HODProfile/manage-student.php");
    } else {
        echo "<h1>Approval Failed</h1>";
        echo "<p class='error'>Error: " . mysqli_error($link) . "</p>";
        echo "<a href='http://localhost/repo-main/Profilers/HODProfile/manage-student.php' class='btn'>Go Back</a>";
    }

    // Close database connection
    mysqli_close($link);
    ?>
</div>

</body>
</html>
