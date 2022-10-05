<?php

include 'config.php';

$sql = "SELECT * FROM  add_util ";
$query = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Admin</title>
    
    <style>
        
        body{
            background: hsl(170, 33%, 79%);
            display: flex;
            align-items: center;
            justify-items: center;
            margin: auto;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <h1>Welcome Add utilities</h1>
   
    
    
    <a href="utilitiesformadd.php">Add Utillitie</a>
    <a href="welcomeAdmin.php">Back</a> 
    

</html>