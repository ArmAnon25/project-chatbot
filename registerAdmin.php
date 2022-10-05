<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['usernameA'])) {
    header("Location: loginAdmin.php");
}
			// กด Submit แล้วจะเช็คข้อมูลที่ลงทะเบียนไป
if (isset($_POST['submitA'])) {
	$usernameA = $_POST['usernameA'];
	$emailA = $_POST['emailA'];
	$frsA = $_POST['firstnameA'];
	$lastA = $_POST['lastnameA'];
	$phoneA = $_POST['phoneA'];
	$passwordA = md5($_POST['passA']);
	$cpasswordA = md5($_POST['cpasswordA']);

		// การเช็ครหัสผ่านถ้ารหัสผ่าน 2 อันตรงกัน ก็ไปต่อได้
	if ($passwordA == $cpasswordA) {
		$sql = "SELECT * FROM admins WHERE usernameA = '$usernameA'"; //โดยเช็ตจาก Username
		$result = mysqli_query($conn, $sql);

			// กาารนำข้อมูลเข้าฐาน Database 
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO admins (usernameA, emailA, passA, firstnameA, lastnameA, phoneA)
					VALUES ('$usernameA', '$emailA', '$passwordA' , '$frsA' , '$lastA' , '$phoneA' )";
			$result = mysqli_query($conn, $sql);
			 	
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$usernameA = "";
				$emailA = "";
				$frsA = "";
				$lastA = "";
				$phoneA = "";
				$_POST['passA'] = "";
				$_POST['cpasswordA'] = "";
				header("Location: loginAdmin.php");
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
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

	<title>Register Admin</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register Admin</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="usernameA" value="<?php echo $usernameA; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="passA" value="<?php echo $_POST['passA']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpasswordA" value="<?php echo $_POST['cpasswordA']; ?>" required>
			</div>
			<div class="input-group">
				<input type="varchar" placeholder="Firstname" name="firstnameA" value="<?php echo $frsA; ?>" required>
            </div>
			<div class="input-group">
				<input type="varchar" placeholder="Lastname" name="lastnameA" value="<?php echo $lastA; ?>" required>
            </div>
            <div class="input-group">
				<input type="email" placeholder="Email" name="emailA" value="<?php echo $emailA; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Phone" name="phoneA" value="<?php echo $phoneA; ?>" required>
            </div>
			<div class="input-group">
				<button name="submitA" class="btn">Register</button> <input type="reset" value="Reset" class="btn btn-danger">
			</div>
			<p class="login-register-text">Have an account? <a href="loginAdmin.php" class="text-info">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>