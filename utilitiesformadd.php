<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

	<title>Add Utillitie</title>
</head>
<body>
	<div class="container">
		<form action="utilitiessave.php" method="POST" class="login-email" enctype="multipart/form-data" id="form1" name="form1">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Add Utillitie</p>


			<div class="input-group">
				<input type="text" placeholder="Username" name="usernameU" " required>
			</div>
            
			<div class="input-group">
				<input type="varchar" placeholder="Lastname" name="lastnameU"  required>
            </div>

            <div class="input-group">
				<label>image Utillitie Upload</label><br>
				<input type="file"  name="picU" id="image" />
			</div>

            <div class="input-group">
				<input type="integer" placeholder="total cost" name="cost"  required><label> Bath </label>
			</div>
		
			<div class="input-group">
				<input type="submit" name="addU" id="addU"  value="Add"></input> <input type="reset" value="Reset" class="btn btn-danger">
			</div>
			 <a href="utilities.php">Cancel</a>
		</form>
	</div>
</body>
</html>