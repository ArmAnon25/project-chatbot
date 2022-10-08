<?php

include 'config.php';
$data = $_POST["data"];

$sql = "SELECT * FROM supplies WHERE UsernameS LIKE '%$data%' OR rm LIKE '%$data%' ORDER BY UsernameS ASC "; //เลือกข้อมูลจากตาราง employee ออกมาแสดง
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);
$order = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>List Package</title>
   
</head>
<body>
<div class="container">
<h1 class="text-center mt-3">List Package found </h1>
    <form action="searchStock.php" class="form-group my-3" method="POST">
      <div class="row">
        <div class="col-6">
          <input type="text" placeholder="กรอกชื่อห้องที่ต้องการค้นหา" class="form-control" name="data" required>
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
            <td>No.</td>
            <td>Room</td>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Phonnumber</td>
            <td>Date</td>
            <td>Picture</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
    </thead>
    
    <tbody>

<?php while ($row = mysqli_fetch_assoc($query)) {?>

        <tr>
            <td><?php echo $order++;?></td>
            <td><?php echo $row["rm"]; ?></td>
            <td><?php echo $row["usernameS"]; ?></td>
            <td><?php echo $row["lastnameS"]; ?></td>
            <td><?php echo $row["pn"]; ?></td>
            <td><?php echo $row["dates"]; ?></td>
            <td><?php echo $row["pic"]; ?></td>
            <td><a href="editStock.php?id=<?php echo $row["id"] ?>" class="btn btn-success" >Edit</a></td>
            <td><a href="deletestock.php?id=<?php echo $row["id"] ?>" class="btn btn-danger" onclick="return confirm('ยืนยันการลบข้อมูล')">Delete</a></td>
          </tr>
        <?php } ?>
   
      </tbody>
    </table>
    <?php } else {?>

        <div class="alert alert-danger">
        <b>ไม่พบข้อมูลการค้นหา!!</b>
        </div>
    <?php } ?>
    
    <br>
    <a href="stock.php" class="btn btn-success">เพิ่มพัสดุ</a>
    
</div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
    
    </body>
</html>