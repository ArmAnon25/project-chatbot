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
				
				$username = "";
				$email = "";
				$frs = "";
				$last = "";
				$phone = "";
				$room = "";
				$_POST['pass'] = "";
				$_POST['cpassword'] = "";
				header("Location: loginUser.php");
				echo "<script>alert('Wow! User Registration Completed.')</script>";
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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="home_log_reg.css">
	<title>Register User</title>
	<style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        .container-form{
            padding: 100px 0;
        }
        body{
            background: "#fff";
        }
        .row{
            background: hsl(0, 0%, 95%);
            border-radius: 30px;  
            padding:0rem;    
                 
        }
        .image{
            border-bottom-right-radius: 20px;
            border-top-right-radius: 20px;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            width: 100%;
            height: 100%;
            
            

        }
        .btn{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: hsl(195, 100%, 60%);
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn:hover{
            background: white;
            border: 1px solid;
            color: hsl(195, 100%, 60%);
        }
    </style>

</head>
<body>
	<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="homepage.php"><span class="text-info">KP</span>Resident</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="homepage.php#carouselExampleCaptions">home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="homepage.php#domitory">domitory</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="homepage.php#facilities">facilities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="homepage.php#neighborhoods">neighborhoods</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="homepage.php#review">review</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="getstarted bg-info fs-6 fw-normal text-decoration-underline dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="loginUser.php">Login user</a></li>
                    <li><a class="dropdown-item" href="loginAdmin.php">Login Admin</a></li>
                </ul>
              </li>

            </ul>
          </div>
        </div>
      </nav>

	<section class="Form my-4 mx-0">  
	<div class="container-form">
	<div class="row">	

		<div class="col-lg-4">
                <img src="./project-1-img/293359828_378793381028763_5359799684334169419_n.jpg" class="image img-fluid float-ms"  alt="" >
        </div>
		
		<div class="col-lg-6 lg-2 px-5 pt-5">
		<form action="" method="POST" class="login-email">

            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register User</p>

			<div class="form-row">
				<div class="col-lg-7">
					<input class = "form-control my-4 p-2" type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
				</div>
			</div>

			<div class="form-row">
				<div class="col-lg-7">
					<input class = "form-control my-4 p-2" type="password" placeholder="Password" name="pass" value="<?php echo $_POST['pass']; ?>" required>
            	</div>
			</div>

            <div class="form-row">
				<div class="col-lg-7">
					<input class = "form-control my-4 p-2" type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
				</div>
			</div>

			<div class="form-row">
				<div class="col-lg-7">
					<input class = "form-control my-4 p-2" type="varchar" placeholder="Firstname" name="firstname" value="<?php echo $frs; ?>" required>
            	</div>
			</div>

			<div class="form-row">
				<div class="col-lg-7">
					<input class = "form-control my-4 p-2" type="varchar" placeholder="Lastname" name="lastname" value="<?php echo $last; ?>" required>
            	</div>
			</div>

			<div class="form-row">
				<div class="col-lg-7">
					<input class = "form-control my-4 p-2" type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
				</div>
			</div>

			<div class="form-row">
				<div class="col-lg-7">
					<input class = "form-control my-4 p-2" type="text" placeholder="Phone" name="phone" value="<?php echo $phone; ?>" required>
            	</div>
			</div>

			<div class="form-row">
				<div class="col-lg-7">
					<input class = "form-control my-4 p-2" type="text" placeholder="Room ID" name="room" value="<?php echo $room; ?>" required>
            	</div>
			</div>

			<div class="form-row">
				<div class="col-lg-7">
					<button name="submit" class="btn mt-2 mb-3">Register</button>
				</div>
			</div>

			
			<p class="login-register-text">Have an account? <a href="loginUser.php" class="text-info">Login Here</a>.</p>
		</form>
	</div>
	</div>
	</div>
</section>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>