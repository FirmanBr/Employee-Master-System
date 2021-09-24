<?php

require_once 'koneksi.php';
session_start();

$kd = $_SESSION['akses'];
$sql = mysqli_query($connect, "SELECT * FROM cuti WHERE nik ='$kd'");
if(mysqli_num_rows($sql) == 0)
{	
}
else
{
$row = mysqli_fetch_assoc($sql);
}


if($_POST) {
    $nik = $_POST['Nik'];
    $leave_date = $_POST['leave_date'];
	$type = $_POST['type'];
	$description = $_POST['description'];
           }
		   
	$sql =mysqli_query($connect, "UPDATE cuti SET Nik='$nik',Date='$leave_date',Type='$type', Information='$description' WHERE Nik='$nik'")
	or die(mysqli_error());
	if($sql)
	{
	echo '<script type="text/javascript">alert("Sucesfully.");</script>';
	echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=leaverecord'</script>";
	}
	else
	{
	echo '<script type="text/javascript">alert("Failed.");</script>';
	echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=leaverecord'</script>";
	}	
    $connect->close();		   
?>