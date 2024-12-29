<?php
session_start();
if (isset($_SESSION['husername'])) {
} else {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approval Form</title>
    <style>
        /* General Body Styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9fafc;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Centered Form Container */
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        /* Form Styling */
        .form-box {
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 30px 40px;
            max-width: 400px;
            width: 100%;
        }

        /* Form Header */
        .form-box h2 {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Labels */
        .form-box label {
            font-size: 14px;
            font-weight: 500;
            color: #34495e;
            margin-bottom: 8px;
            display: block;
        }

        /* Input Fields */
        .form-box input[type="text"],
        .form-box input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 14px;
            transition: border-color 0.3s ease-in-out;
        }

        .form-box input[type="text"]:focus,
        .form-box input[type="date"]:focus {
            border-color: #42a5f5;
            outline: none;
        }

        /* Submit Button */
        .form-box input[type="submit"] {
            background: #0078d7;
            color: #ffffff;
            font-size: 14px;
            font-weight: 600;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s ease;
            width: 100%;
        }

        .form-box input[type="submit"]:hover {
            background: #005bb5;
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .form-box {
                padding: 20px;
            }

            .form-box h2 {
                font-size: 20px;
            }

            .form-box input[type="text"],
            .form-box input[type="date"] {
                font-size: 12px;
            }

            .form-box input[type="submit"] {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form-box">
            <h2>Approval Form</h2>
            <form action="approve.php" method="post">
                <label for="id">Enter the USN:</label>
                <input type="text" name="id" id="id" placeholder="Enter USN" required>

                <label for="DOB">Enter the Date:</label>
                <input type="date" name="DOB" class="form-control" id="DOB" required>

                <input type="submit" value="Approve">
            </form>
        </div>
    </div>
</body>
</html>
