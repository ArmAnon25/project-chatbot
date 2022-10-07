<?php 

session_start();

if (!isset($_SESSION['usernameA'])) {
    header("Location: loginAdmin.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home_log_reg.css">
    <title>Homepage Admin</title>
    
    <style>
        *{
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-info">KP</span>Resident</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="#">home</a>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="utilities.php">เพิ่มสาธารณูปโภค</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="welcomestock.php">เพิ่มพัสดุ</a>
              </li>
              <li class="nav-item dropdown">
                <a class="getstarted bg-info fs-6 fw-normal text-decoration-underline dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo  $_SESSION['usernameA'] ?></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item bi bi-box-arrow-right" href="logout.php">&ensp;Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <a href="utilities.php">เพิ่มสาธารณูปโภค</a>
      <a href="stock.php">เพิ่มพัสดุ</a>
</body>
</html>