<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['husername'])) {
    header("location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Favicon -->
    <link rel="shortcut icon" href="image/favicon.ico" type="image/icon">
    <link rel="icon" href="favicon.ico" type="image/icon">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>HOD Profile</title>
    
    <!-- Stylesheets -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    
    <!-- Support for IE9 and lower -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>  
    <!-- Main Layout Container -->
    <div class="templatemo-flex-row">
        
        <!-- Sidebar -->
        <aside class="templatemo-sidebar">
            <header class="templatemo-site-header">
                <div class="square"></div>
                <?php
                echo "<h1>Welcome<br>" . $_SESSION['husername'] . "</h1>";
                echo "<h2>(" . $_SESSION['department'] . ")</h2>";
                ?>
            </header>
            
            <div class="profile-photo-container">
                <img src="images/cse-hod.jpg" alt="Profile Photo" class="img-responsive">  
                <div class="profile-photo-overlay"></div>
            </div>      
            
            <!-- Search Box -->
            <form class="templatemo-search-form" role="search">
                <div class="input-group">
                    <button type="submit" class="fa fa-search"></button>
                    <input type="text" class="form-control" placeholder="Search" name="srch-term">
                </div>
            </form>
            
            <!-- Navigation Menu -->
            <nav class="templatemo-left-nav">          
                <ul>
                    <li><a href="#" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
                    <li><a href="manage-student.php"><i class="fa fa-users fa-fw"></i>Manage Students</a></li>
                    
                    <li><a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
                </ul>
            </nav>
        </aside>
        
        <!-- Main Content Area -->
        <main class="templatemo-content col-1 light-gray-bg">
            
            <!-- Top Navigation -->
            <div class="templatemo-top-nav-container">
                <nav class="templatemo-top-nav">
                    <ul class="text-uppercase">
                        <li><a href="../../Homepage/index.php">Home PESITM-PP</a></li>
                        <li><a href="../../Drives/index.php">Drives</a></li>
                        <li><a href="Notif.php">Notification</a></li>
                        <li><a href="Change Password.php">Change Password</a></li>
                    </ul>
                </nav> 
            </div>
            
            <!-- Welcome Section -->
            <section class="templatemo-content-container">
                <div class="templatemo-flex-row flex-content-row">
                    <div class="templatemo-content-widget white-bg col-2">
                        <h2>Welcome to PESITM</h2><hr>
                        <p><a href="manage-student.php">Approve Students</a></p>
                        <p><a href="manage-student.php">View Student Details</a></p>
                        <p><a href="Change Password.php">Change Password</a></p>
                    </div>
                </div>
                
                <!-- News and Events Section -->
                <div class="templatemo-flex-row flex-content-row">
                    <div class="col-1">
                        <div class="templatemo-content-widget orange-bg">
                            <h2 class="media-heading text-uppercase">Latest News</h2>
                            <p>Stay updated with the latest placement news.</p>
                        </div>
                        
                        <div class="templatemo-content-widget white-bg">
                            <h2 class="media-heading text-uppercase">Upcoming Events</h2>
                            <p>Find information about upcoming campus events.</p>
                        </div>
                    </div>
                    
                    <!-- Faculty List Section -->
                    <div class="col-1">
                        <div class="panel panel-default templatemo-content-widget white-bg">
                            <div class="panel-heading">
                                <h2 class="text-uppercase">Faculty List</h2>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>First Name</th>
                                            <th>Designation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $faculty = [
                                            "Dr. Manu A P" => "Professor",
                                            "Dr. Chethan L S" => "Associate Professor",
                                            "Mr. Raghavendra K" => "Assistant Professor",
                                            "Mrs. Prathibha S" => "Assistant Professor",
                                            "Mr. Sunilkumar H R" => "Assistant Professor",
                                            "Mr. Pradeep K" => "Assistant Professor",
                                            "Mr. Rajesh T H" => "Assistant Professor"
                                        ];
                                        $i = 1;
                                        foreach ($faculty as $name => $designation) {
                                            echo "<tr><td>{$i}</td><td>{$name}</td><td>{$designation}</td></tr>";
                                            $i++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>
            
            <!-- Footer -->
            <footer class="text-right">
                <p>&copy; 2024 PESITM | Developed by <a href="#" target="_parent">A4</a></p>
            </footer>
        </main>
    </div>
    
    <!-- JavaScript Files -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://www.google.com/jsapi"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>
