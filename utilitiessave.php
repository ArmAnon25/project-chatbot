<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
ob_start();
if($_POST) {
    $usernameU = $_POST['usernameU'];
	$lastnameU = $_POST['lastnameU'];
    $cost = $_POST['cost'];
	$rn = $_POST['rn'];
	$dateu = $_POST['dateu'];
	$monthb = $_POST['monthb'];
	$elecb = $_POST['elecb'];
	$waterb = $_POST['waterb'];
	$roomb = $_POST['roomb'];
	$image		= $_FILES['picU'];
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
		
	
		$sql = "insert into add_util (usernameU, lastnameU, cost,rn,dateu,monthb,elecb,waterb,roomb, picU)
		VALUES ('$usernameU', '$lastnameU', '$cost', '$rn','$dateu','$monthb','$elecb','$waterb','$roomb','$f_name')";
		echo "vy ";
		mysqli_query($conn,$sql) or die("error=$sql"); 

		move_uploaded_file($_FILES['pic']['tmp_name'],"../img/".$_FILES['picU']['name']);	
		
		mysqli_close($conn);
		echo "<script>window.location='utilities.php';</script>";
	
	
}
?>