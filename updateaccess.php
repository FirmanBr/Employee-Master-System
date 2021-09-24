<?php

require_once 'koneksi.php';
session_start();

$kd = $_SESSION['akses'];
$sql = mysqli_query($connect, "SELECT * FROM hak_akses WHERE nik ='$kd'");
if(mysqli_num_rows($sql) == 0)
{	
}
else
{
$row = mysqli_fetch_assoc($sql);
}


if($_POST) {
    $nik = $_POST['Nik'];
    $Username= $_POST['Username'];
	$Password = md5($_POST['Password']);
	$akses = $_POST['akses'];
           }
		   
	$sql =mysqli_query($connect, "UPDATE hak_akses SET nik='$nik',Username='$Username',Password='$Password', akses='$akses' WHERE Nik='$nik'")
	or die(mysqli_error());
	if($sql)
	{
	echo '<script type="text/javascript">alert("Sucesfully.");</script>';
	echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=useraccess'</script>";
	}
	else
	{
	echo '<script type="text/javascript">alert("Failed.");</script>';
	echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=useraccess'</script>";
	}	
    $connect->close();		   
?>