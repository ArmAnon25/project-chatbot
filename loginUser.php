<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcomeUser.php");

}
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$pass = md5($_POST['pass']);

	$sql = "SELECT * FROM user WHERE username = '$username' and pass = '$pass'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
    $_SESSION['pass'] = $row['pass'];
    $_SESSION['firstname'] = $row['firstname'];
    $_SESSION['lastname'] = $row['lastname'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['phone'] = $row['phone'];
    $_SESSION['room'] = $row['room'];
		header("Location: welcomeUser.php");
	} else {
		echo "<script>alert('Woops! email_user or Password is Wrong.')</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login Page</title>
	<style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background: hsl(170, 33%, 79%);
        }
        .row{
            background: white;
            border-radius: 30px;
        }
        img{
            border-bottom-right-radius: 30px;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            border-top-right-radius: 30px;
        }
        .btn{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn:hover{
            background: white;
            border: 1px solid;
            color: black;
        }
    </style>
</head>
<body>
<section class="Form my-3 mx-5">
	
	<div class="container">
		<div class="row no-gutters">
		<div class="col-lg-5">
                    <img src="./vacation-brown-youth-room-sleeping.jpg" class="img-fluid" alt=" ">
                </div>

				<div class="col-7 lg-2 px-5 pt-4">
				 <h1 class="font-weight-bold py-2">KP Resident</h1>
                 <h4>Sign into your account</h4>


		<form action="" method="POST" class="login-email_user">

					<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login User </p>
					<div class="form-row">
						<div class="col-lg-7">
					<input class = "form-control my-4 p-2" type="username" placeholder="username" name="username" value="<?php echo $username; ?>" required>
						</div>
					</div>

					<div class="form-row">
						<div class="col-lg-7">
							<input  class = "form-control my-4 p-2" type="password" placeholder="password"  name="pass" value="<?php echo $_POST['pass']; ?>" required>
						</div>
					</div>

					<div class="form-row">
						<div class="col-lg-7">
								<button class = "btn mt-2 mb-3" name="submit">Login</button>
						</div>
					</div>

			
			<p class="login-register-text">Don't have an account User? <a href="registerUser.php">Click Here</a>.</p>
			<p class="login-register-text">Back to Homepage<a href="homepage.php"> Homepage </a></p>
		</form>
	</div>
	</div>
	</div>
		
</section>

</body>
</html>