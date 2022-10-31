<?php
    require 'config.php';

    $msg="";
    $info_i="";
    $update=false;

    if(isset($_POST['submit_i'])){
        $info_i=$_POST['info_i'];
        $date_i=date("Y-m-d");

        $sql="INSERT INTO info_table(info_i,cur_date_i) VALUES('$info_i','$date_i')";

    if($conn->query($sql)){
        $msg = "Posted Successfully!";
    }
    else{
        $msg = "Failed to post comment";
    }
    }
    if(isset($_GET['del_i'])){
        $id_i=$_GET['del_i'];
        $sql="DELETE FROM info_table WHERE id_i='$id_i'";

        if($conn->query($sql)){
            header('location:welcomeAdmin.php');
        }
    }
    if(isset($_GET['edit_i'])){
        $id_i=$_GET['edit_i'];

        $sql="SELECT * FROM info_table WHERE id_i='$id_i'";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();

        $i_id=$row['id_i'];
        $info_i=$row['info_i'];

        $update=true;
    }
    
    if(isset($_POST['update_i'])){
        $id_i=$_POST['id_i'];
        $info_i=$_POST['info_i'];
        $date_i=date("Y-m-d");

        $sql="UPDATE info_table SET info_i='$info_i',cur_date_i='$date_i' WHERE id_i='$id_i'";

        if($conn->query($sql)){
            $msg ="Edited Successfully!";
        }
    }


?>