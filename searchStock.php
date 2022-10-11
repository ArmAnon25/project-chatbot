<?php

include 'config.php';
$data = $_POST["data"];

$sql = "SELECT * FROM supplies WHERE UsernameS LIKE '%$data%' OR rm LIKE '%$data%' ORDER BY UsernameS ASC "; //เลือกข้อมูลจากตาราง employee ออกมาแสดง
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);
$order = 1;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home_log_reg.css">
    <title>List Package</title>
   
    <style>
      * {
        
        font-family: 'Montserrat', sans-serif;
      }

      /* Full-width input fields */
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
        margin-right: 12px;
      }
      .btnStock:hover {
        background: white;
        border: 1px solid;
        color: hsl(195, 100%, 48%);
      }

      /* Center the image and position the close button */
      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
      }

      .containerStock {
        padding: 24px;
      }

      .spanClose.psw {
        float: right;
        padding-top: 16px;
      }

      /* The Modal (background) */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0, 0, 0); /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        padding-top: 60px;
      }

      /* Modal Content/Box */
      .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 50%; /* Could be more or less, depending on screen size */
      }

      /* The Close Button (x) */
      .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus {
        color: red;
        cursor: pointer;
      }

      /* Add Zoom Animation */
      .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s;
      }

      @-webkit-keyframes animatezoom {
        from {
          -webkit-transform: scale(0);
        }
        to {
          -webkit-transform: scale(1);
        }
      }

      @keyframes animatezoom {
        from {
          transform: scale(0);
        }
        to {
          transform: scale(1);
        }
      }

      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        .spanClose.psw {
          display: block;
          float: none;
        }
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
                <a class="nav-link fs-6 fw-normal" href="utilities.php">Add Public utility</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="welcomestock.php">Add parcel</a>
              </li>
              <li class="nav-item dropdown">
                <a class="getstarted bg-info fs-6 fw-normal dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo  $_SESSION['usernameA'] ?></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item bi bi-box-arrow-right" href="logout.php">&ensp;Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<div class="container">
<h1 class="text-center mt-3 p-3">-</h1>
<h1 class="text-left mt-3 font-weight-bold " style="font: weight 600;">List Package found </h1>
    <form action="searchStock.php" class="form-group my-3" method="POST">
      <div class="row">
        <div class="col-6">
          <input type="text" placeholder="Type to search for room number or firstnname." class="form-control" name="data" required>
        </div>
        <div class="col-6">
          <input type="submit" value="Search" class="btn btn-info">
        </div>
      </div>

    </form>
    <?php if ($count > 0) { ?>
    <table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <td class="text-center">No.</td>
            <td class="text-center">Room</td>
            <td class="text-center">Firstname</td>
            <td class="text-center">Lastname</td>
            <td class="text-center">Phonnumber</td>
            <td class="text-center">Date</td>
            <td class="text-center">Picture</td>
            <td class="text-center">Edit</td>
            <td class="text-center">Delete</td>
        </tr>
    </thead>
    
    <tbody>

<?php while ($row = mysqli_fetch_assoc($query)) {?>

        <tr>
            <td class="text-center"><?php echo $order++;?></td>
            <td class="text-center"><?php echo $row["rm"]; ?></td>
            <td class="text-center"><?php echo $row["usernameS"]; ?></td>
            <td class="text-center"><?php echo $row["lastnameS"]; ?></td>
            <td class="text-center"><?php echo $row["pn"]; ?></td>
            <td class="text-center"><?php echo $row["dates"]; ?></td>
            <td class="text-center"><img src = "img/<?php echo $row["pic"]; ?>"width="26%"></td>
            <td><a href="editStock.php?id=<?php echo $row["id"] ?>" class="btn btn-success" >Edit</a></td>
            <td><a href="deletestock.php?id=<?php echo $row["id"] ?>" class="btn btn-danger" onclick="return confirm('Confirm data delete?')">Delete</a></td>
          </tr>
        <?php } ?>
   
      </tbody>
    </table>
    <?php } else {?>

        <div class="alert alert-danger">
        <b>Search data not found!!!!</b>
        </div>
    <?php } ?>
    
    <br>
    <a class="btn btn-success" style="width: 100%;" onclick="document.getElementById('id04').style.display='block'">Add parcel</a>
    
</div>
    
  <!-- Popup Add -->
  <?php

  include 'config.php';

  // $id = $_GET["id"];

  $sql = "SELECT * FROM supplies ";
  $query = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($query);

  ?>
    <div id="id04" class="modal">
          <form class="modal-content animate login-email"  action="stocksave.php"  method="post" enctype="multipart/form-data" id="form1" name="form1">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id04').style.display='none'"  class="close spanClose"  title="Close Modal"  >&times;</span>
            </div>

            <div class="containerStock">
              <h3 class  = "text-center fw-bold">Add package</h3>
              <label ><b>First name</b></label>
              <input class="fromStock" type="text" placeholder="Username" name="usernameS" required>

              <label ><b>Last name</b></label>
              <input class="fromStock" type="varchar" placeholder="Lastname" name="lastnameS"  required>
              
              <label ><b>Phone number</b></label>
              <input class="fromStock" type="tel" placeholder="Tel" name="pn"  required>

              <label ><b>Room number</b></label>
              <input class="fromStock" type="text" placeholder="room" name="rm"  required>

              <label ><b>Arrival date</b></label>
              <input class="fromStock" type="date" name="dates" value="" />

              <label ><b>Image Upload</b></label>
              <input class="fromStock" type="file"  name="pic" id="image" />
              
              <input type="submit" class="btnStock"   id="add"  value="Add"></input> 
              <input type="reset" value="Reset" class="btn btn-danger btnReset">
            </div>
          </form>
        </div>
        
    <!-- javascript popup -->
      <script>
        // Get the modal
        var modal = document.getElementById('id04');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
      <!-- Popup Add -->
     <!-- Drop down button -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
    
    </body>
</html>