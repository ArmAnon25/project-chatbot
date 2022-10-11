<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['usernameA'])) {
    header("Location: welcomeAdmin.php");

}
if (isset($_POST['submitA'])) {
	$usernameA = $_POST['usernameA'];
	$passwordA = md5($_POST['passA']);

    // การเช็คจากฐานข้อมูลจาก Database
	$sql = "SELECT * FROM admins WHERE usernameA = '$usernameA' and passA = '$passwordA'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['usernameA'] = $row['usernameA'];
        $_SESSION["passA"] = $row["passA"];
        $_SESSION["firstnameA"] = $row["firstnameA"];
        $_SESSION["lastnameA"] = $row["lastnameA"];
        $_SESSION["emailA"] = $row["emailA"];
        $_SESSION["phoneA"] = $row["phoneA"];
		header("Location: welcomeAdmin.php");
	} else {
		echo "<script>alert('Woops! username or Password is Wrong.')</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home_log_reg.css">
    <title>Login Admin</title>

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
            height: 80%;
        }
        .btn{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: hsl(195, 100%, 48%);
            color: white;
            border-radius: 4px;
            font-weight: normal;
        }
        .btn:hover{
            background: white;
            border: 1px solid;
            color: hsl(195, 100%, 48%);
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
              <!-- <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li> -->
              <li class="nav-item dropdown">
                <a class="getstarted bg-info fs-6 fw-normal dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="loginUser.php">Login user</a></li>
                    <li><a class="dropdown-item" href="#">Login Admin</a></li>
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
		        <form action="" method="POST" class="login-email_user">
                    <h1 class="font-weight-bold py-2" style="font-weight: 600;">KP Resident</h1>
					<p class="login-text" style="font-size: 2rem; font-weight: 400;">Login to your account Admin </p>
					
                    <div class="form-row">
						<div class="col-lg-7">
					<input class = "form-control my-4 p-2" type="username" placeholder="username" name="usernameA" value="<?php echo $usernameA; ?>" required>
						</div>
					</div>

					<div class="form-row">
						<div class="col-lg-7">
							<input  class = "form-control my-4 p-2" type="password" placeholder="password"  name="passA" value="<?php echo $_POST['passA']; ?>" required>
						</div>
					</div>

					<div class="form-row">
						<div class="col-lg-7">
								<button class = "btn mt-2 mb-3" name="submitA">Login</button>
						</div>
					</div>

			
			<p class="login-register-text">Don't have an account Admin? <a href="registerAdmin.php" class="text-info">Click Here</a>.</p>
		</form>
	</div>
	</div>
	</div>	
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>