<?php
session_start();
if (!isset($_SESSION["pusername"])) {
    header("location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/icon">
    <link rel="icon" href="favicon.ico" type="image/icon">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Placement - Home</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>  
    <!-- Sidebar -->
    <div class="templatemo-flex-row">
        <div class="templatemo-sidebar">
            <header class="templatemo-site-header">
                <div class="square"></div>
                <?php
                $Welcome = "Welcome! ";
                echo "<h1>" . $Welcome .  "</h1>";
                ?>
            </header>
            <div class="profile-photo-container">  
                <div class="profile-photo-overlay"></div>
            </div>      

            <!-- Search Box -->
            <form class="templatemo-search-form" role="search">
                <div class="input-group">
                    <button type="submit" class="fa fa-search"></button>
                    <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
                </div>
            </form>

            <div class="mobile-menu-icon">
                <i class="fa fa-bars"></i>
            </div>

            <nav class="templatemo-left-nav">          
                <ul>
                    <li><a href="#" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a></li> 
                    <li><a href="Placement Drives.php"><i class="fa fa-briefcase fa-fw"></i>Placement Drives</a></li>
                    <li><a href="manage-users.php"><i class="fa fa-users fa-fw"></i>View Students</a></li>
                    <li><a href="queries.php"><i class="fa fa-comments fa-fw"></i>Queries</a></li>
                    <li><a href="Students Eligibility.php"><i class="fa fa-check fa-fw"></i>Students Eligibility Status</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Sign Out</a></li>
                </ul>  
            </nav>
        </div>

        <!-- Main Content -->
        <div class="templatemo-content col-1 light-gray-bg">
            <div class="templatemo-top-nav-container">
                <div class="row">
                    <nav class="templatemo-top-nav col-lg-12 col-md-12">
                        <ul class="text-uppercase">
                            <li><a href="../../Homepage/index.php">Home PESITM-PP</a></li>
                            <li><a href="../../Drives/index.php">Drives Home</a></li>

                            <li><a href="Change Password.php">Change Password</a></li>
                        </ul>  
                    </nav> 
                </div>
            </div>

            <div class="templatemo-content-container">
                <div class="templatemo-flex-row flex-content-row">
                    <div class="templatemo-content-widget white-bg col-2">
                        <i class="fa fa-times"></i>
                        <h2>Welcome to PESITM-PP</h2>
                        <p>Hello Officer! Have a great day with us! With your PESITM-PP account, you can add placement drives, send notifications, and view students' eligibility criteria.</p>
                        <p><a href="PlacementDrives.php">Manage Placement Drives</a></p>
                        <p><a href="manage-users.php">View Student Details</a></p>
                        <p><a href="preferences.php">Update Profile</a></p>
                    </div>

                    <div class="templatemo-content-widget white-bg col-1 text-center">
                        <i class="fa fa-times"></i>
                        <h2>Our Motto</h2>
                        <h5>Working with Confidence</h5>
                    </div>
                </div>

                <div class="templatemo-flex-row flex-content-row">
                    <div class="col-1">
                        <div class="templatemo-content-widget orange-bg">
                            <i class="fa fa-times"></i>
                            <h2>Updates</h2>
                            <p>View the latest updates and ensure everything is on track.</p>
                        </div>
                        <div class="templatemo-content-widget white-bg">
                            <i class="fa fa-times"></i>
                            <h2>Upcoming Events</h2>
                            <p>Stay updated with campus events. You can also add new events to notify users.</p>
                        </div>
                    </div>

                    <div class="col-1">
                        <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                            <i class="fa fa-times"></i>
                            <div class="panel-heading"><h2>Other PO Details</h2></div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>1</td><td>Dr. Prasanna</td><td>Head</td><td>@head</td></tr>
                                        <tr><td>2</td><td>Pooja</td><td>Placement Coordinator</td><td>@pooja</td></tr>
                                    </tbody>
                                </table>
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>

            <footer class="text-right">
                <p>&copy; 2024 PESITM | Developed by A4</p>
            </footer>
        </div>
    </div>

    <!-- JS Scripts -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>
