<?php
//เชื่อมต่อฐานข้อมูล
include('config.php');

//รับค่าที่มาจากฟอร์มแก้ไข

$id = $_POST["id"];
$usernameS = $_POST["usernameS"];
$lastnameS = $_POST["lastnameS"];
$pn = $_POST["pn"];
$rm = $_POST["rm"];
$dates = $_POST["dates"];
$image	= $_FILES['pic'];
$imageinfo = pathinfo($image['name']);
$f_name	= $image['name'];


$sql = "UPDATE supplies SET usernameS ='$usernameS', lastnameS ='$lastnameS', 
pn='$pn',rm='$rm', dates='$dates', pic='$f_name' WHERE id=$id; ";

$query = mysqli_query($conn, $sql);

if ($query) {
  header("location:welcomestock.php");
  exit(0);
} else {
  echo "ไม่สามารถแก้ไขข้อมูลได้" . mysqli_error($conn);
}
