<?php

	if(isset ($_POST['submitemail']))
	{	
	
	$subject1 =$_POST['Subject'];
	$pesan1	 = $_POST['Message'];		
//	$subject = $_POST['subject'];
//	$pesan	 =  $_POST['pesan'];
	if(($subject1=="")||($pesan1==""))
	{
	echo '<script type="text/javascript">alert("Please complate a form.");</script>';
	echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=trouble'</script>";
	}
	else
	{	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	date_default_timezone_set('Etc/UTC');

	require 'C:\xampp\htdocs\NotificationEmail\phpmail/PHPMailerAutoload.php';	
	
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 2;
	$mail->Debugoutput = 'html'; 
	$mail->Host = 'mail.taka.co.id'; 
	$mail->Port = 587; 
	$mail->SMTPSecure = 'tls'; 
	$mail->SMTPAuth = true; 
	$mail->Username = "firman@taka.co.id";
	$mail->Password = "firman20"; 	
	$mail->setFrom('firman@taka.co.id', 'Firman Brilian');
	$mail->addReplyTo('firman@taka.co.id', 'Firman Brilian');
	$mail->Subject =$subject1;
	$link = mysqli_connect("localhost", "root", "", "takagroup"); 
	$result=mysqli_query($link,"SELECT * FROM troubleshooting");
	
	while($row=mysqli_fetch_array($result))
	{
		$mail->addAddress($row["Email"], $row["Nik"]);
		$pesan= $pesan1;
		$mail->msgHTML($pesan);
		if (!$mail->send()) 
		{
//		echo "Ada Yang Error Gan: " . $mail->ErrorInfo;
		} 
		else 
		{
//		echo "Berhasil di Send!";
		}
	//	<script> document.location.href="http://localhost/notificationemail/index.php" </script>	
	}
	}
	//<script> document.location.href="home_LCDC.php?page=regemployee" </script>
//	mysqli_close($result);
	}
	?>
	<script> document.location.href="home_LCDC.php?page=regemployee" </script>
	