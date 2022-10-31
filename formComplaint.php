<?php

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
    <title>Complaint  page</title>

    <style>
        * {
          
          font-family: 'Montserrat', sans-serif;
        }
        .fromStock {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
          border-radius: 4px;
        }
        .btnReset{
          height: 39px;
          font-weight: normal;
          border-radius: 4px;
          margin: 8px 0;
        }
        .btnStock {
          border: none;
          outline: none;
          height: 39px;
          width: 86%;
          background-color: hsl(195, 100%, 48%);
          color: white;
          border-radius: 4px;
          font-weight: normal;
          margin: 8px 0;
          margin-right: 10px;
        }
        .btnStock:hover {
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
        <a class="navbar-brand" href="welcomeAdmin.php"><span class="text-info">KP</span>Resident</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
           
            </ul>
        </div>
        </div>
    </nav>

    <div class="container my-3 p-4">
    <br>
	<br>
	<br>
    <p class="text-left" style="font-size: 2rem; font-weight: 400;">Complaint Form</p>
    <hr>
       
        <form action="https://formsubmit.co/16d49aee88e658a2243a3bc9122114ec" method="POST" class="login-email_user">
            <div class="form-group col-6">

                <div class="form-group">
                    <input type="text" name="Name" class = "form-control my-4 p-2" placeholder="Fullname" required>
                </div>
        

        
            <div class="form-group">
                <input type="email" name="Email" class = "form-control my-4 p-2" placeholder="Your Email" required>
             </div>
         

         
            <div class="form-group">
                <input type="text" name="room" class = "form-control my-4 p-2" placeholder=" Your Room" required>
            </div>
            

            
                <div class="form-group">
                <select name="build" placeholder=" Your build" class = "form-control my-4 p-2" >
                    <option>Choose Building</option>
                    <option>Orange Building</option>
                    <option>Green Building</option>
                    
                </select>
                </div>
            
            
                <div class="form-group">
                <textarea name="Message" placeholder="Message" class = "form-control my-4 p-2"  placeholder="Detail" required></textarea>
                </div>
                
                
                    <div class="form-group">
                <button type="submit" class = "btn btn-info" style="width: 100%;">Send</button>
                </div>
                


            </div>
        </form>
</div>

<!-- Drop down button -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>