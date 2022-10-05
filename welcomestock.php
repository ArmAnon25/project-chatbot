<?php

include 'config.php';

$sql = "SELECT * FROM  supplies ";
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
    <title>Homepage Admin</title>
   
</head>
<body>
    
<h1 class="text-center mt-3">List Package</h1>
    <form action="" class="form-group my-3" method="POST">
      <div class="row">
        <div class="col-6">
          <input type="text" placeholder="กรอกชื่อหรือนามสกุลที่ต้องการค้น" class="form-control" name="UsernameS" required>
        </div>
        <div class="col-6">
          <input type="submit" value="Search" class="btn btn-info">
        </div>
      </div>

    </form>
   
    <table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <td>No.</td>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Phonnumber</td>
            <td>Date</td>
            <td>Picture</td>
        </tr>
    </thead>
    </table>
    <tbody>

<?php while ($row = mysqli_fetch_assoc($query)){?>

    <tr>
            <td><?php echo $order++;?></td>
            <td><?php echo $row["usernameS"]; ?></td>
            <td><?php echo $row["lastnameS"]; ?></td>
            <td><?php echo $row["pn"]; ?></td>
            <td><?php echo $row["date"]; ?></td>
            <td><?php echo $row["pic"]; ?></td>
            <td><a href="deletestock.php?id=<?php echo $row["id"] ?>" class="btn btn-danger" onclick="return confirm('ยืนยันการลบข้อมูล')">Delete</a></td>
     </tr>
    <br>
<?php } ?>
   
</tbody>
    </table>
    <br>
    <a href="stock.php" class="btn btn-success">เพิ่มพัสดุ</a>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <a href="welcomeAdmin.php">Back</a>
</html>