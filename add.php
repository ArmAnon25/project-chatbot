<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['usernameAA'])) {
    header("Location: welcomeadd.php");
}
// กด Submit แล้วจะเช็คข้อมูลที่ลงทะเบียนไป

if (isset($_POST['submitAAA'])) {
	$usernameAA = $_POST['usernameAA'];
	$lastnameAA = $_POST['lastnameAA'];
	$addressAA = $_POST['addressAA'];
	$phoneAA = $_POST['phoneAA'];
	$roomAA = md5($_POST['roomAA']);


	// การเช็ครหัสผ่านถ้ารหัสผ่าน 2 อันตรงกัน ก็ไปต่อได้

	if ($password == $cpassword) {
		$sql = "SELECT * FROM add_user WHERE usernameAA = '$usernameAA' "; //โดยเช็ตจาก Username
		$result = mysqli_query($conn, $sql);

		// กาารนำข้อมูลเข้าฐาน Database 
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO add_user (usernameAA, lastnameAA, addressAA, phoneAA,roomAA)
					VALUES ('$usernameAA', '$lastnameAA', '$addressAA' , '$phoneAA' , '$roomAA')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$usernameAA = "";
				$lastnameAA = "";
				$addressAA = "";
				$phoneAA = "";
				$roomAA = "";
				header("Location: welcomeadd.php");
			} else {
				echo "<script>alert('Woops! Acces Denine.')</script>";
			}
		} 
	} 
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

	<title>Add information</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Add information</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="usernameAA" value="<?php echo $usernameAA; ?>" required>
			</div>
            
			<div class="input-group">
				<input type="varchar" placeholder="Lastname" name="lastnameAA" value="<?php echo $lastnameAA; ?>" required>
            </div>

            <div class="input-group">
				<input type="address" placeholder="Address" name="addressAA" value="<?php echo $addressAA; ?>" required>
			</div>

			<div class="input-group">
				<input type="text" placeholder="Phone" name="phoneAA" value="<?php echo $phoneAA; ?>" required>
            </div>

            <div class="input-group">
				<input type="text" placeholder="Room" name="roomAA" value="<?php echo $roomAA; ?>" required>
            </div>
			<div class="input-group">
				<button name="submitAAA" class="btn">Add information</button>
			</div>
			 <a href="welcomeadd.php">Back</a>.</p>
		</form>
	</div>
</body>
</html>