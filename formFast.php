<?php

session_start();


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
    <title>Contact admin</title>
   
</head>
<body>
   

    <div class="container-form">
		<div class="row">
		    

			<div class="col-lg-6 lg-2 px-5 pt-5">
		        <form action="codeformFast.php" method="POST" class="login-email_user">
                    <?php if(isset($_SESSION['success'])) {?>

                            <div class="alert alert-success" role="alert">
                               <?php 

                                    echo $_SESSION['success'];
                                    unset ($_SESSION['success']);
                               ?>
                            </div>
                    <?php }?>
                     <?php if(isset($_SESSION['error'])) {?>

                            <div class="alert alert-error" role="alert">
                               <?php 

                                    echo $_SESSION['error'];
                                    unset ($_SESSION['error']);
                               ?>
                            </div>
                    <?php }?>
                    <h1 class="font-weight-bold py-2" style="font-weight: 600;">KP Resident</h1>
					<p class="login-text" style="font-size: 2rem; font-weight: 400;">Contact Admin </p>
					
            <div class="form-row">
				<div class="col-lg-7">
					<input type="text" class = "form-control my-4 p-2"  placeholder="Subject" name="subject">
						</div>
					</div>

					<div class="form-row">
						<div class="col-lg-7">
							<input type="text"  class = "form-control my-4 p-2"  placeholder="Username" name="username" >
						</div>
					</div>

                    <div class="form-row">
						<div class="col-lg-7">
							<input type="text" class = "form-control my-4 p-2"  placeholder="Lastname" name="lastname" >
						</div>
					</div>

                    <div class="form-row">
						<div class="col-lg-7">
							<input type="text" class = "form-control my-4 p-2"  placeholder="Room" name="room" >
						</div>
					</div>

                    <div class="form-row">
						<div class="col-lg-7">
                        <textarea type="text"  name="detail"  class = "form-control my-4 p-2"  placeholder="Detail" ></textarea>
					</div>

					<div class="form-row">
						<div class="col-lg-7">
								<button type="submit" name="submit" class = "btn btn-info" >Submit</button>
						</div>
					</div>

			
		</form>
	</div>
	</div>
	</div>	
</body>
</html>