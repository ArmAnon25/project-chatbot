<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: loginUser.php");
}
// กด Submit แล้วจะเช็คข้อมูลที่ลงทะเบียนไป

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$frs = $_POST['firstname'];
	$last = $_POST['lastname'];
	$phone = $_POST['phone'];
	$room = $_POST['room'];
	$password = md5($_POST['pass']);
	$cpassword = md5($_POST['cpassword']);


	// การเช็ครหัสผ่านถ้ารหัสผ่าน 2 อันตรงกัน ก็ไปต่อได้

	if ($password == $cpassword) {
		$sql = "SELECT * FROM user WHERE username = '$username' "; //โดยเช็ตจาก Username
		$result = mysqli_query($conn, $sql);

		// กาารนำข้อมูลเข้าฐาน Database 
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user (username, email, pass, firstname, lastname, phone, room)
					VALUES ('$username', '$email', '$password' , '$frs' , '$last' , '$phone' , '$room')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$frs = "";
				$last = "";
				$phone = "";
				$room = "";
				$_POST['pass'] = "";
				$_POST['cpassword'] = "";
				header("Location: loginUser.php");
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

	<title>Register User</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register User</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="pass" value="<?php echo $_POST['pass']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<input type="varchar" placeholder="Firstname" name="firstname" value="<?php echo $frs; ?>" required>
            </div>
			<div class="input-group">
				<input type="varchar" placeholder="Lastname" name="lastname" value="<?php echo $last; ?>" required>
            </div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Phone" name="phone" value="<?php echo $phone; ?>" required>
            </div>
			<div class="input-group">
				<input type="text" placeholder="Room ID" name="room" value="<?php echo $room; ?>" required>
            </div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button> <input type="reset" value="Reset" class="btn btn-danger">
			</div>
			
			<p class="login-register-text">Have an account? <a href="loginUser.php" class="text-info">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>