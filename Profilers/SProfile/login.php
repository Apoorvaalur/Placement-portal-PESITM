<?php
  session_start();
  if (!isset($_SESSION["username"])) {
    header("location: index.php");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Profile Home</title>
  <meta name="description" content="">
  <meta name="author" content="templatemo">

   

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/icon">
  <link rel="icon" href="favicon.ico" type="image/icon">

  <!-- Fonts and Stylesheets -->
  
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js for IE8 support -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <div class="templatemo-flex-row">
    <!-- Sidebar -->
    <div class="templatemo-sidebar">
      <header class="templatemo-site-header">
        <div class="square"></div>
        <?php
          echo "<h1>Welcome<br>" . htmlspecialchars($_SESSION['username']) . "</h1>";
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

      <!-- Navigation -->
      <nav class="templatemo-left-nav">
        <ul>
          <li><a href="" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
          <li><a href="http://localhost/repo-main/Drives/products.php"><i class="fa fa-bar-chart fa-fw"></i>Placement Drives</a></li>
          <li><a href="preferences.php"><i class="fa fa-sliders fa-fw"></i>Preferences</a></li>
          <li><a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
        </ul>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="templatemo-content col-1 light-gray-bg">
      <!-- Top Navigation -->
      <div class="templatemo-top-nav-container">
        <nav class="templatemo-top-nav col-lg-12 col-md-12">
          <ul class="text-uppercase">
            <li><a href="../../Homepage/index.php">Home PESITM-PP</a></li>
            <li><a href="../../Drives/index.php">Drives Homepage</a></li>
            
            <li><a href="Change Password.php">Change Password</a></li>
          </ul>
        </nav>
      </div>

      <!-- Welcome Section -->
      <div class="templatemo-content-container">
        <div class="templatemo-flex-row flex-content-row">
          <div class="templatemo-content-widget white-bg col-2">
            <h2 class="templatemo-inline-block">Welcome to PESITM Placement Portal</h2>
            <hr>
            <p>Work is magic and it defines you in every aspect of your life. Hard work combined with smart work leads to success.
              <a href="preferences.php" target="_parent">Go and fill your details in the Preferences Tab</a>
            </p>
            <p>We have numerous partnerships with companies tied to our college, and the number is increasing. As students, it is your responsibility to stay proactive.</p>
          </div>
        </div>

        <!-- Latest Drive & Upcoming Events -->
        <div class="templatemo-flex-row flex-content-row">
          <div class="col-1">
            <div class="templatemo-content-widget orange-bg">
              <h2 class="text-uppercase">Latest Drive</h2>
              <p>Click to view the latest and upcoming drive details.</p>
            </div>

            <div class="templatemo-content-widget white-bg">
              <h2 class="text-uppercase">Upcoming Events</h2>
              <p>Get ready for upcoming events. Be a part of the PESITM Placement Family!</p>
            </div>
          </div>

          <!-- Recently Placed Students -->
          <div class="col-1">
            <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
            <div class="panel-heading">
              <h2 class="text-uppercase">Recently Placed Students</h2>
</div>
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <td>No.</td>
                      <td>First Name</td>
                      <td>Last Name</td>
                      <td>USN</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr><td>1</td><td>John</td><td>Smith</td><td>@jS</td></tr>
                    <tr><td>2</td><td>Bill</td><td>Jones</td><td>@bJ</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- Footer -->
        <footer class="text-right">
          <p>&copy; 2024 PESITM | Developed by A4</p>
        </footer>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/jquery-migrate-1.2.1.min.js"></script>
  <script src="js/templatemo-script.js"></script>
</body>

</html>
