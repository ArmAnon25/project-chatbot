<?php
require('config.php');

$id = $_GET["id"];

$sql = "DELETE FROM add_util WHERE id=$id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("location:utilities.php");
  echo "ลบข้อมูลสำเร็จ";
  exit(0);
} else {
  echo "ไม่สามารถลบได้ หรือ มีข้อผิดพลาดเกิดขึ้น";
}
