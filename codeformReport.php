<?php
   if(isset($_POST['send'])){


        $username = $_POST['username'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $room = $_POST['room'];
        $detail = $_POST['detail'];

        $to = "anon.peteang@gmail.com";

        $header = "From : ". $email ."\r\n";
        $header .= "MINE-Version: 1.0 \r\n";
        $header .= "Content-type: text/html\r\n";

        $retval = mail($to,$room , $header );

        if($retval){

            echo "Send email Successfully";
        }else{

            echo "Error !!!Send email Successfully";
        }

        
        
   }
        ?>