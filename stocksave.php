<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
ob_start();
if($_POST) {
    $usernameS = $_POST['usernameS'];
	$lastnameS = $_POST['lastnameS'];
    $pn = $_POST['pn'];
	$rm = $_POST['rm'];
	$date = $_POST['date'];
	$image		= $_FILES['pic'];
	$imageinfo	= pathinfo($image['name']);
    $f_name		= $image['name'];

	include("config.php");
	
		
	if($image['size']!= 0 
			&& $imageinfo['extension']!='jpg' 
								&& $imageinfo['extension']!='gif'
									&& $imageinfo['extension']!='png')
	{
		echo "<script>alert('แนบไฟล์ .gif หรือ .jpg หรือ .png เท่านั้น');
		history.back();</script>";
		exit();
	}
		
	
		$sql = "insert into supplies (usernameS, lastnameS, pn,rm,date, pic)
		VALUES ('$usernameS', '$lastnameS', '$pn','$rm','$date', '$f_name')";
		echo "vy ";
		mysqli_query($conn,$sql) or die("error=$sql"); 

		move_uploaded_file($_FILES['pic']['tmp_name'],"../img/".$_FILES['pic']['name']);	
		
		mysqli_close($conn);
		echo "<script>window.location='welcomestock.php';</script>";
	
	
}
?>