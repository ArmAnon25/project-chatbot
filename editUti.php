<?php

include 'config.php';

$id = $_GET["id"];

$sql = "SELECT * FROM add_util WHERE id=$id";
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

	<title>Edit Utillitie</title>
</head>
<body>
	<div class="container">
		<form action="updateUti.php" method="POST" class="login-email" enctype="multipart/form-data" id="form1" name="form1">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit Utillitie</p>

            <input type="hidden" value="<?php echo $row["id"]; ?>" name="id">
			<div class="input-group">
				<input type="text" placeholder="Username" name="usernameU" value="<?php echo $row["usernameU"]; ?>">
			</div>
            
			<div class="input-group">
				<input type="varchar" placeholder="Lastname" name="lastnameU" value="<?php echo $row["lastnameU"]; ?>">
            </div>

            <div class="input-group">
				<label>image Utillitie Upload</label><br>
				<input type="file"  name="picU" id="image" value="<?php echo $row["picU"]; ?>">
			</div>

            <div class="input-group">
				<input type="integer" placeholder="total cost" name="cost"  value="<?php echo $row["cost"]; ?>"><label> Bath </label>
			</div>


			<div class="input-group">
				<input type="text" placeholder="room" name="rn"  value="<?php echo $row["rn"]; ?>">
			</div>
		
			<div class="input-group">
				<input type="submit" value="Update" ></input> <input type="reset" value="Reset" class="btn btn-danger">
			</div>
			 <a href="utilities.php">Cancel</a>
		</form>
	</div>
</body>
</html>