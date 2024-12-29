<?php
$connect = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
mysqli_select_db($connect,"revised"); // Selecting Database from Server

if(isset($_POST['submit']))
{ 
    // Getting form data
    $usn = $_POST['usn'];
    echo "$usn";
    $name = $_POST['sname'];
    $comname = $_POST['comname'];
    $date = $_POST['Date'];
    $attend = $_POST['Attendance'];
    $wt = $_POST['WrittenTest'];
    $gd = $_POST['GD'];
    $tech = $_POST['Tech'];
    $placed = $_POST['Placed'];

    // Check if the combination of CompanyName and Date exists in addpdrive
    $checkQuery = "SELECT * FROM addpdrive WHERE CompanyName = '$comname' AND Date = '$date'";
    $checkResult = mysqli_query($connect, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // If the combination exists, proceed with inserting into updatedrive
        $query = "INSERT INTO updatedrive(USN, Name, CompanyName, Date, Attendence, WT, GD, Techical, Placed)
                  VALUES('$usn', '$name', '$comname', '$date', '$attend', '$wt', '$gd', '$tech', '$placed')";

        if(mysqli_query($connect, $query)) {
            echo "<center>Data Inserted successfully...!!</center>";
        } else {
            echo "<center>FAILED</center>";
        }
    } else {
        // If the combination does not exist, show an error message
        echo "<center>Error: The CompanyName and Date combination does not exist in addpdrive.</center>";
    }
}
?>
