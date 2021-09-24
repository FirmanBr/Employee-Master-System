<?php

require_once 'koneksi.php';
session_start();

$kd = $_SESSION['akses'];
$sql = mysqli_query($connect, "SELECT * FROM hak_akses WHERE akses ='$kd'");
if(mysqli_num_rows($sql) == 0)
{	
}
else
{
$row = mysqli_fetch_assoc($sql);
}


if($_POST) {
    $nik = $row['Nik'];
    $username = $_POST['Username'];
    $newpassword = $_POST['newpassword'];
           }
		   
	$sql =mysqli_query($connect, "UPDATE hak_akses SET username='$username', password='$newpassword' WHERE nik='$nik'")
	or die(mysqli_error());
	if($sql)
	{
	echo '<script type="text/javascript">alert("Sucesfully.");</script>';
	echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=regemployee'</script>";
	}
	else
	{
	echo '<script type="text/javascript">alert("Failed.");</script>';
	echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=changepassword'</script>";
	}	
    $connect->close();		   
?>