<?php

require_once 'koneksi.php';
session_start();

$kd = $_SESSION['akses'];
$sql = mysqli_query($connect, "SELECT * FROM perusahaan WHERE nik ='$kd'");
if(mysqli_num_rows($sql) == 0)
{	
}
else
{
$row = mysqli_fetch_assoc($sql);
}


if($_POST) {
    $nik = $_POST['Nik'];
    $join_date = $_POST['join_date'];
	$grade = $_POST['grade'];
	$position = $_POST['position'];
	$Directorate = $_POST['Directorate'];
	$employeestatus = $_POST['employeestatus'];
	$End_date 		= $_POST['end_date'];
	$company = $_POST['company'];
	$location = $_POST['location'];
           }
		   
	$sql =mysqli_query($connect, "UPDATE perusahaan SET Nik='$nik',Join_date='$join_date',Grade='$grade',Posisition='$position',Directorate='$Directorate',Status_Kepegawaian='$employeestatus',End_date='$End_date',Company='$company',Location='$location' WHERE Nik='$nik'")
	or die(mysqli_error());
	if($sql)
	{
	echo '<script type="text/javascript">alert("Sucesfully.");</script>';
	echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=companyrecord'</script>";
	}
	else
	{
	echo '<script type="text/javascript">alert("Failed.");</script>';
	echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=companyrecord'</script>";
	}	
    $connect->close();		   
?>