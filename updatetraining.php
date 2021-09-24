<?php

require_once 'koneksi.php';
session_start();

$kd = $_SESSION['akses'];
$sql = mysqli_query($connect, "SELECT * FROM training WHERE nik ='$kd'");
if(mysqli_num_rows($sql) == 0)
{	
}
else
{
$row = mysqli_fetch_assoc($sql);
}


if($_POST) {
    $nik = $_POST['Nik'];
    $date_training = $_POST['date_training'];
	$typetraining = $_POST['typetraining'];
	$Start = $_POST['Start'];
	$end = $_POST['end'];
	$Title = $_POST['Title'];
           }
		   
	$sql =mysqli_query($connect, "UPDATE training SET Nik='$nik',Date='$date_training',	Jenis_training='$typetraining',Start='$Start',End='$end',Information='$Title' WHERE Nik='$nik'")
	or die(mysqli_error());
	if($sql)
	{
	echo '<script type="text/javascript">alert("Sucesfully.");</script>';
	echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=trainingrecord'</script>";
	}
	else
	{
	echo '<script type="text/javascript">alert("Failed.");</script>';
	echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=trainingrecord'</script>";
	}	
    $connect->close();		   
?>