<?php
require('config.php');

$id = $_GET["id"];

$sql = "DELETE FROM supplies WHERE id=$id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("location:welcomestock.php");
  exit(0);
} else {
  echo "ไม่สามารถลบได้ หรือ มีข้อผิดพลาดเกิดขึ้น";
}
