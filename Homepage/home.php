<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico" type="image/icon">
    <link rel="icon" href="favicon.ico" type="image/icon">
    <title>PESITM-PP Home</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans|Merriweather' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <style>
        /* General Styling */
body {
    margin: 0;
    font-family: 'Open Sans', sans-serif;
    background-color: #f9f9f9;
}

/* Navbar Styling */
#mainNav {
    background: #10104b;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.navbar a {
    color: #fff !important;
}

.navbar a:hover {
    color: #ff6f61 !important;
}

.navbar-toggle .icon-bar {
    background-color: #fff;
}

/* Header Section Styling */
.header-content {
    display: flex;
    height: 100vh;
    overflow: hidden;
    justify-content: center;
    align-items: center;
}

.header-left {
    flex: 1;
    background: url('img/la.jpg') no-repeat center center;
    background-size: cover;
    position: relative;
}

.header-left::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
}

/* Right Section: Text Content */
.header-right {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px;
    text-align: center;
    background: #fff;
}

.header-right h1 {
    font-size: 3em;
    font-weight: bold;
    color: #10104b;
    margin-bottom: 20px;
    text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2);
}

.header-right p {
    font-size: 1.2em;
    color: #555;
    margin-bottom: 30px;
    line-height: 1.6;
}

.header-right .btn-primary {
    background: #0077cc;
    border: none;
    padding: 12px 25px;
    font-size: 1em;
    border-radius: 5px;
    transition: background 0.3s ease;
}

.header-right .btn-primary:hover {
    background: #005fa3;
}

/* Footer Section */
.footer {
    background: #10104b;
    color: #fff;
    padding: 20px 0;
    text-align: center;
    font-size: 14px;
}

.footer h3 {
    font-size: 18px;
    margin-bottom: 15px;
    font-weight: bold;
}

.footer ul {
    list-style: none;
    padding: 0;
}

.footer ul li {
    margin: 5px 0;
}

.footer ul li a {
    color: #fff;
    text-decoration: none;
}

.footer ul li a:hover {
    text-decoration: underline;
}

.footer p {
    margin: 5px 0;
    font-size: 14px;
}

.ftr-logo p {
    font-size: 16px;
}

.ftr-logo a {
    color: #ff6f61;
}

    </style>
</head>

<body id="page-top">
    <!-- Navbar -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="https://pestrust.edu.in/pesitm/">PES Institute of Technology and Management</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../Profilers/SProfile/index.php">Student Login</a></li>
                    <li><a href="../Profilers/HODProfile/index.php">HOD Login</a></li>
                    <li><a href="../Profilers/PProfile/index.php">Placement Login</a></li>
                    <li><a href="../Profilers/PriProfile/index.php">Administrative Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <header>
        <div class="header-content">
            <!-- Left Section: Image -->
            <div class="header-left"></div>
            
            <!-- Right Section: Text Content -->
            <div class="header-right">
                <div>
                    <h1>PLACEMENT PORTAL</h1>
                    <hr>
                    <p>We are here to build your skills and career with our driven passion and reality.<br>Click below to get our current drive details.</p>
                    <a href="../Drives/index.php" class="btn btn-primary">Current Drives</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Footer Section -->
    <div class="footer">
        <div class="container">
            <div class="col-md-3 ftr_navi ftr">
                <h3>NAVIGATION</h3>
                <ul>
                    <li><a href="../Homepage/index.php">Home</a></li>
                    <li><a href="../Profilers/SProfile/index.php">Student Login</a></li>
                    <li><a href="../Profilers/PProfile/index.php">Placement Login</a></li>
                    <li><a href="../Profilers/HODProfile/index.php">HOD Login</a></li>
                    <li><a href="../Profilers/Priprofile/index.php">Administrative Login</a></li>
                </ul>
            </div>

            <div class="col-md-3 get_in_touch ftr">
                <h3>GET IN TOUCH</h3>
                <p>+91 8296317636</p>
                <a href="mailto:pesitmoffice@pestrust.edu.in">pesitmoffice@pestrust.edu.in</a><br><br>
                <p>PES Campus</p>
                <p>NH-206, Sagar Road</p>
                <p>Shivamogga- 577204</p>
            </div>

            <div class="col-md-3 ftr-logo">
                <p>&copy; 2024 PES Institute of Technology and Management | Developed by <a href="#">A4</a></p>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</body>
</html>
