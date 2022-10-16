<?php
    require 'config.php';

    $msg="";
    $detail_g="";
    $update=false;

    if(isset($_POST['submit_g'])){
        $detail_g=$_POST['detail_g'];
        $date_g=date("Y-m-d");

        $sql="INSERT INTO detail_dormitory_g(detail_g,cur_date_g) VALUES('$detail_g','$date_g')";

    if($conn->query($sql)){
        $msg = "Posted Successfully!";
    }
    else{
        $msg = "Failed to post comment";
    }
    }
    if(isset($_GET['del_g'])){
        $id_g=$_GET['del_g'];
        $sql="DELETE FROM detail_dormitory_g WHERE id_g='$id_g'";

        if($conn->query($sql)){
            header('location:welcomeAdmin.php');
        }
    }
    if(isset($_GET['edit_g'])){
        $id_g=$_GET['edit_g'];

        $sql="SELECT * FROM detail_dormitory_g WHERE id_g='$id_g'";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();

        $g_id=$row['id_g'];
        $detail_g=$row['detail_g'];

        $update=true;
    }
    
    if(isset($_POST['update_g'])){
        $id_g=$_POST['id_g'];
        $detail_g=$_POST['detail_g'];
        $date_g=date("Y-m-d");

        $sql="UPDATE detail_dormitory_g SET detail_g='$detail_g',cur_date_g='$date_g' WHERE id_g='$id_g'";

        if($conn->query($sql)){
            $msg ="Edited Successfully!";
        }
    }


?>