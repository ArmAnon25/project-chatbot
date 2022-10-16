<?php
    require 'config.php';

    $msg="";
    $detail_o="";
    $update=false;

    if(isset($_POST['submit_o'])){
        $detail_o=$_POST['detail_o'];
        $date_o=date("Y-m-d");

        $sql="INSERT INTO detail_dormitory_o(detail_o,cur_date_o) VALUES('$detail_o','$date_o')";

    if($conn->query($sql)){
        $msg = "Posted Successfully!";
    }
    else{
        $msg = "Failed to post comment";
    }
    }
    if(isset($_GET['del_o'])){
        $id_o=$_GET['del_o'];
        $sql="DELETE FROM detail_dormitory_o WHERE id_o='$id_o'";

        if($conn->query($sql)){
            header('location:welcomeAdmin.php');
        }
    }
    if(isset($_GET['edit_o'])){
        $id_o=$_GET['edit_o'];

        $sql="SELECT * FROM detail_dormitory_o WHERE id_o='$id_o'";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();

        $o_id=$row['id_o'];
        $detail_o=$row['detail_o'];

        $update=true;
    }
    
    if(isset($_POST['update_o'])){
        $id_o=$_POST['id_o'];
        $detail_o=$_POST['detail_o'];
        $date_o=date("Y-m-d");

        $sql="UPDATE detail_dormitory_o SET detail_o='$detail_o',cur_date_o='$date_o' WHERE id_o='$id_o'";

        if($conn->query($sql)){
            $msg ="Edited Successfully!";
        }
    }


?>