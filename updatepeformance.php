<?php

require_once 'koneksi.php';
session_start();

$kd = $_SESSION['akses'];
$sql = mysqli_query($connect, "SELECT * FROM peformance WHERE nik ='$kd'");
if(mysqli_num_rows($sql) == 0)
{	
}
else
{
$row = mysqli_fetch_assoc($sql);
}


if($_POST) {
    $nik = $_POST['Nik'];
    $year = $_POST['year'];
	$information = $_POST['information'];
           }
		   
	$sql =mysqli_query($connect, "UPDATE peformance SET Nik='$nik',Year='$year',Information='$information' WHERE Nik='$nik'")
	or die(mysqli_error());
	if($sql)
	{
	echo '<script type="text/javascript">alert("Sucesfully.");</script>';
	echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=peformancerecord'</script>";
	}
	else
	{
	echo '<script type="text/javascript">alert("Failed.");</script>';
	echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=peformancerecord'</script>";
	}	
    $connect->close();		   
?>