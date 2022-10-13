<?php
    require 'config.php';

    $msg="";
    $u_id="";
    $u_nameD="";
    $u_comment="";
    $update=false;

    if(isset($_POST['submit'])){
        $nameD=$_POST['nameD'];
        // $building=$_POST['building'];
        $comment=$_POST['comment'];
        $date=date("Y-m-d");

        $sql="INSERT INTO comment_table(nameD,comment,cur_date) VALUES('$nameD','$comment','$date')";

    if($conn->query($sql)){
        $msg = "Posted Successfully!";
    }
    else{
        $msg = "Failed to post comment";
    }
    }
    if(isset($_GET['del'])){
        $id=$_GET['del'];
        $sql="DELETE FROM comment_table WHERE id='$id'";

        if($conn->query($sql)){
            header('location:welcomeUser.php');
        }
    }
    if(isset($_GET['edit'])){
        $id=$_GET['edit'];

        $sql="SELECT * FROM comment_table WHERE id='$id'";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();

        $u_id=$row['id'];
        $u_nameD=$row['nameD'];
        $u_comment=$row['comment'];

        $update=true;
    }
    
    if(isset($_POST['update'])){
        $id=$_POST['id'];
        $nameD=$_POST['nameD'];
        $comment=$_POST['comment'];
        $date=date("Y-m-d");

        $sql="UPDATE comment_table SET nameD='$nameD',comment='$comment',cur_date='$date' WHERE id='$id'";

        if($conn->query($sql)){
            $msg ="Edited Successfully!";
        }
    }


?>