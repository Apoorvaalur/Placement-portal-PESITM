<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Department Portal</title>
  <style>/* General Reset */
body {
    margin: 0;
    font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display: flex;
    flex-direction: column;
    background-color: #f9fafc;
}

/* Sidebar Navigation */
.tem {
    width: 100%;
    background-color: #2c3e50;
    color: #ecf0f1;
    text-align: center;
    padding: 20px 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.tem h2 {
    font-size: 28px;
    margin: 0;
    font-weight: 600;
}

.tem p {
    font-size: 16px;
    margin-top: 5px;
    color: #bdc3c7;
}

/* Main Content */
.content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    margin-top: 10px;
    
}

/* Heading */
.content h1 {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #2c3e50;
}

/* Department List */
.department-list {
    list-style: none;
    padding: 0;
    margin: 0;
    width: 80%;
    max-width: 700px;
}

.department-list li {
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #ffffff;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.department-list li:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.department-list li a {
    display: block;
    padding: 15px 20px;
    font-size: 18px;
    font-weight: 500;
    color: #2c3e50;
    text-decoration: none;
    transition: background-color 0.3s, color 0.3s;
}

.department-list li a:hover {
    background-color: #1abc9c;
    color: #ffffff;
}

/* Responsive Design */
@media (max-width: 768px) {
    .content h1 {
        font-size: 28px;
    }

    .department-list li a {
        font-size: 16px;
    }
}

@media (max-width: 480px) {
    .content h1 {
        font-size: 24px;
    }

    .tem h2 {
        font-size: 22px;
    }

    .tem p {
        font-size: 14px;
    }

    .department-list li a {
        font-size: 14px;
    }
}
 </style>
 
</head>
<body>
  <nav class="tem">          
  <h2> PES Institute Of Technology And Management</h2>
    <p>Select The Department To View the Approved Students List</p>
  </nav>
  
  <main class="content">
    <h1>Department List</h1>
    <ul class="department-list">
      <li><a href="cse.php"></i>Computer Science and Engineering</a></li>
      <li><a href="ise.php"></i>Information Science and Engineering</a></li>
      <li><a href="ise.php"></i>Artifical Intelligence and Machine Learning Engineering</a></li>
      <li><a href="cse.php">Computer Science and Design Engineering</a></li>
      <li><a href="cse.php"></i>Computer Science and Data Science Engineering</a></li>
      <li><a href="cse.php">Computer Engineering</a></li>
      <li><a href="ece.php">Electronics and Communication Engineering</a></li>
      <li><a href="eee.php">Electrical and Electronics Engineering</a></li>
      <li><a href="cve.php">Civil Engineering</a></li>
      <li><a href="me.php"> Mechanical Engineering</a></li>
    </ul>
  </main>
</body>
</html>
