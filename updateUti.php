<?php
//เชื่อมต่อฐานข้อมูล
include('config.php');

//รับค่าที่มาจากฟอร์มแก้ไข
$id = $_POST["id"];
$usernameU = $_POST["usernameU"];
$lastnameU = $_POST["lastnameU"];
$cost = $_POST["cost"];
$rn = $_POST["rn"];
$dateu = $_POST['dateu'];
$monthb = $_POST['monthb'];
$elecb = $_POST['elecb'];
$waterb = $_POST['waterb'];
$roomb = $_POST['roomb'];
$image	= $_FILES['picU'];
$imageinfo = pathinfo($image['name']);
$f_name	= $image['name'];


$sql = "UPDATE add_util SET usernameU ='$usernameU', lastnameU ='$lastnameU', 
cost='$cost',rn='$rn',dateu='$dateu',monthb='$monthb',elecb='$elecb',waterb='$waterb',roomb='$roomb', picU='$f_name' WHERE id=$id; ";

$result = mysqli_query($conn, $sql);

if ($result) {
  header("location:utilities.php");
  exit(0);
} else {
  echo "ไม่สามารถแก้ไขข้อมูลได้" . mysqli_error($conn);
}
