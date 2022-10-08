<?php

include 'config.php';

$sql = "SELECT * FROM  add_util ";
$query = mysqli_query($conn,$sql);
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
  
    <div class="container">
    <h1 class="text-center mt-3">ข้อมูลสาธาณูปโภคของแต่ละห้อง</h1>
    <form action="searchUti.php" class="form-group my-3" method="POST">
      <div class="row">
        <div class="col-6">
          <input type="text" placeholder="กรอกชื่อหรือนามสกุลที่ต้องการค้นหา" class="form-control" name="dataU" required>
        </div>
        <div class="col-6">
          <input type="submit" value="Search" class="btn btn-info">
        </div>
      </div>

    </form>
   
    <table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <td>No</td>
            <td>Room</td>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Picture</td>
            <td>Total Cost</td>
            <td>Edit</td>
            <td>Delete</td>
           
        </tr>
    </thead>
    
    <tbody>

<?php while ($row = mysqli_fetch_assoc($query)){?>

    <tr>
            <td><?php echo $order++;?></td>
            <td><?php echo $row["rn"]; ?></td>
            <td><?php echo $row["usernameU"]; ?></td>
            <td><?php echo $row["lastnameU"]; ?></td>
            <td><?php echo $row["picU"]; ?></td>
            <td><?php echo $row["cost"]; ?></td>
            <td><a href="editUti.php?id=<?php echo $row["id"] ?>" class="btn btn-success" >Edit</a></td>
            <td><a href="deleteutil.php?id=<?php echo $row["id"] ?>" class="btn btn-danger" onclick="return confirm('ยืนยันการลบข้อมูล')">Delete</a></td>
     </tr>
    <br>
<?php } ?>
   
</tbody>
    </table>
    <br>
    <a href="utilitiesformadd.php" class="btn btn-success">เพิ่มข้อมูล</a>
    <a href="welcomeAdmin.php">Back</a>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
    
   
    

</html>