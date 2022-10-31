<?php

session_start();

if(isset($_POST['send'])){

    
    $username = $_POST['username'];
    $lastname = $_POST['lastname'];
    $build = $_POST['build'];
    $room = $_POST['room'];
    $phone = $_POST['phone'];
    $detail = $_POST['detail'];

    $sToken = "lRcn8kNHchZMzYLBB8BBbY41th8HkzIVrzcdUTVnGUi";
	// $sMessage = "Contact Admin\n";
    $sMessage .= "Username:". $username."\n";
    $sMessage .= "Lastname:". $lastname."\n";
    $sMessage.= "Build:". $build."\n";
    $sMessage .= "Room:". $room."\n";
    $sMessage.= "Phone:". $phone."\n";
    $sMessage .= "Detail:". $detail."\n";
    

	
	$chOne = curl_init(); 
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
	curl_setopt( $chOne, CURLOPT_POST, 1); 
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
	$result = curl_exec( $chOne ); 


    if($result){

        $_SESSION['success'] = "ส่งข้อมูลสำเร็จ";
        header("Location: formRepair.php");
    }else{

        $_SESSION['success'] = "ส่งข้อมูลไม่สำเร็จ";
        header("Location: formRepair.php");
    }
	//Result error 
	// if(curl_error($chOne)) 
	// { 
	// 	echo 'error:' . curl_error($chOne); 
	// } 
	// else { 
	// 	$result_ = json_decode($result, true); 
	// 	echo "status : ".$result_['status']; echo "message : ". $result_['message'];
	// } 
	// curl_close( $chOne );   
}

?>