<?php

include 'config.php';

$id = $_GET["id"];

$sql = "SELECT * FROM supplies WHERE id=$id";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

	<title>Edit Stock</title>
</head>
<body>
	<div class="container">
		<form action ="updateStock.php" method="POST" class="login-email" enctype="multipart/form-data" id="form1" name="form1">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit package</p>

            <input type="hidden" value="<?php echo $row["id"]; ?>" name="id">
			<div class="input-group">
				<input type="text" placeholder="Username" name="usernameS" value="<?php echo $row["usernameS"]; ?>">
			</div>
            
			<div class="input-group">
				<input type="varchar" placeholder="Lastname" name="lastnameS"  value="<?php echo $row["lastnameS"]; ?>">
            </div>

			<div class="input-group">
				<input type="tel" placeholder="Tel" name="pn"  value="<?php echo $row["pn"]; ?>">
			</div>

			<div class="input-group">
				<input type="text" placeholder="room" name="rm"  value="<?php echo $row["rm"]; ?>">
			</div>


			<div class="input-group">
				<label>วันที่ของมาถึง</label><br>
				<input type="date" name="dates"  value ="<?php echo $row["dates"]; ?>">

             </div>

            <div class="input-group">
				<label>image Package Upload</label><br>
				<input type="file"  name="pic" id="image"  value="<?php echo $row["pic"]; ?>">
			</div>

		
			<div class="input-group">
				<input type="submit"   value="Update"></input> <input type="reset" value="Reset" class="btn btn-danger">
			</div>
			 <a href="welcomestock.php">Cancel</a>
		</form>
	</div>
</body>
</html>