<?php
session_start();
require('config.php');

if(isset($_POST['delete_multiple_btn']))
{
    $all_id = $_POST['_delete_id'];
    $extract_id = implode(',' , $all_id);
   //   echo $extract_id;

    $query = "DELETE FROM supplies WHERE id IN($extract_id) ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
      header("location:welcomestock.php");
      echo "ลบข้อมูลสำเร็จ";
      exit(0);
    } else {
      echo "ไม่สามารถลบได้ หรือ มีข้อผิดพลาดเกิดขึ้น";
    }
}
?>