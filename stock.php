<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

	<title>Add Stock</title>
</head>
<body>
	<div class="container">
		<form action="stocksave.php" method="POST" class="login-email" enctype="multipart/form-data" id="form1" name="form1">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Add package</p>


			<div class="input-group">
				<input type="text" placeholder="Username" name="usernameS" required>
			</div>
            
			<div class="input-group">
				<input type="varchar" placeholder="Lastname" name="lastnameS"  required>
            </div>

			<div class="input-group">
				<input type="tel" placeholder="Tel" name="pn"  required>
			</div>

			<div class="input-group">
				<input type="text" placeholder="room" name="rm"  required>
			</div>

				<!-- date -->
			<div class="input-group">
				<label>วันที่ของมาถึง</label><br>
				<input type="date" name="dates" value="" />

            <div class="input-group">
				<label>image Package Upload</label><br>
				<input type="file"  name="pic" id="image" />
			</div>

		
			<div class="input-group">
				<input type="submit" name="add" id="add"  value="Add"></input> <input type="reset" value="Reset" class="btn btn-danger">
			</div>
			 <a href="welcomestock.php">Cancel</a>
		</form>
	</div>
</body>
</html>