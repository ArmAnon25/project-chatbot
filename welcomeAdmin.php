<?php 

session_start();

if (!isset($_SESSION['usernameA'])) {
    header("Location: loginAdmin.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Admin</title>
    
</head>
<body>
    <h1>Welcome Homepage Admin</h1>
    <?php echo "<h1>Welcome " . $_SESSION['usernameA'] . "</h1>"; ?>
    
    
    
    <a href="utilities.php">เพิ่มข้อมูลสาธาณูปะโภค</a>
    <a href="welcomestock.php">อัพเดทพัสดุ</a> 
    <a href="logout.php">Logout</a>
</html>