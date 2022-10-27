<?php
session_start();
   if(isset($_POST['sendmail'])){


        $username =addslashes($_POST['username']) ;
        $lastname = addslashes($_POST['lastname']);
        $email = $_POST['email'];
        $room = addslashes($_POST['room']);
        $detail =addslashes ($_POST['detail']);

        $to = "anon@domaintestdeveloper.com";
        
        $message = $detail;

        $header = "From : ". $email ."\r\n";
        $header .= "MINE-Version: 1.0 \r\n";
        $header .= "Content-type: text/html\r\n";

        $retval = mail($to ,$room, $message, $header );
        
        if($retval){

            $_SESSION['success'] = "ส่งข้อมูลสำเร็จ";
            header("Location: formReport.php");
        }else{
    
            $_SESSION['error'] = "ส่งข้อมูลไม่สำเร็จ";
            header("Location: formReport.php");
        }

        
        
   }
        ?>