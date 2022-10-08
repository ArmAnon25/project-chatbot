<?php

include 'config.php';

$id = $_GET["id"];

$sql = "SELECT * FROM supplies WHERE id=$id";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);

session_start();

if (!isset($_SESSION['usernameA'])) {
    header("Location: loginAdmin.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home_log_reg.css">
	<title>Edit Stock</title>

	<style>
      * {
        
        font-family: 'Montserrat', sans-serif;
      }
	  .fromStock {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 4px;
      }
      .btnReset{
        height: 39px;
        font-weight: bold;
        border-radius: 4px;
        margin: 8px 0;
      }
      .btnStock {
        border: none;
        outline: none;
        height: 39px;
        width: 86%;
        background-color: hsl(195, 100%, 48%);
        color: white;
        border-radius: 4px;
        font-weight: bold;
        margin: 8px 0;
        margin-right: 10px;
      }
      .btnStock:hover {
        background: white;
        border: 1px solid;
        color: hsl(195, 100%, 48%);
      }

    </style>
</head>
<body>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="welcomeAdmin.php"><span class="text-info">KP</span>Resident</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="welcomeAdmin.php">home</a>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="utilities.php">utility</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="welcomestock.php">parcel</a>
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

	<div class="container my-3 p-4">
	<br>
	<br>
	<br>
    <h2 class="text-left">Edit Parcel </h2>
    <hr>
		<form action ="updateStock.php" method="POST" class="login-email" enctype="multipart/form-data" id="form1" name="form1">
        <div class="form-group col-6">
           

            <input type="hidden" value="<?php echo $row["id"]; ?>" name="id">
			<div class="form-group">
            <label class="fw-bold ">Firstname</label>
				<input type="text" placeholder="Enter your Firstname" class="fromStock" name="usernameS" value="<?php echo $row["usernameS"]; ?>">
			</div>
            
			<div class="form-group">
            <label class="fw-bold ">Lastname</label>
				<input type="varchar" placeholder="Enter your Lastname" class="fromStock" name="lastnameS"  value="<?php echo $row["lastnameS"]; ?>">
            </div>

			<div class="form-group ">
            <label class="fw-bold ">Phonnumber</label>
				<input type="tel" placeholder="Enter your phonenumber" class="fromStock" name="pn"  value="<?php echo $row["pn"]; ?>">
			</div>

			<div class="form-group">
            <label class="fw-bold ">Roomnumber</label>
				<input type="text" placeholder="Enter your roomnumber"  class="fromStock" name="rm"  value="<?php echo $row["rm"]; ?>">
			</div>


			<div class="form-group">
				<label class="fw-bold ">Date the parcel arrived</label><br>
				<input type="date" name="dates" class="fromStock"  value ="<?php echo $row["dates"]; ?>">
             </div>

            <div class="form-group">
				<label class="fw-bold ">image Package Upload</label><br>
				<input type="file"  name="pic" id="image"   class="fromStock" value="<?php echo $row["pic"]; ?>">
			</div>

		
			<div class="my-3">
				<input type="submit" class="btnStock"  value="Update"></input> 
				<input type="reset" value="Reset" class="btn btn-danger btnReset">
			</div>
        </div> 
		</form>
	</div>

	<!-- Drop down button -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>