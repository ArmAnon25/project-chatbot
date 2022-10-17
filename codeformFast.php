<?php

session_start();

if(isset($_POST['submit'])){

    $subject = $_POST['subject'];
    $username = $_POST['username'];
    $lastname = $_POST['lastname'];
    $room = $_POST['room'];
    $detail = $_POST['detail'];

    $sToken = "rsGposfOE6RHlvjakxUC4ax1Hcym7GUZXKGtpECFiu3";
	$sMessage = "Contact Admin\n";
    $sMessage .= "Subject:". $subject."\n";
    $sMessage .= "Username:". $username."\n";
    $sMessage .= "Lastname:". $lastname."\n";
    $sMessage .= "Room:". $room."\n";
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
        header("Location: formFast.php");
    }else{

        $_SESSION['success'] = "ส่งข้อมูลไม่สำเร็จ";
        header("Location: formFast.php");
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