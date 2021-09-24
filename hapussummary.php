<?php

session_start();
include "koneksi.php";
$kd_dept = $_GET['kd'];
if($_SESSION['nik'] == $kd_dept)
	{		   	
	echo '<script type="text/javascript">alert("You can not Delete");</script>';
	header('location:home_LCDC.php?page=listemployee');
	}
else
	{
    if($_GET['hal'] == 'hapus'){
		try{
			$delete = mysqli_query($connect, "DELETE FROM pendidikan WHERE nik='$kd_dept'");
    		$delete1 = mysqli_query($connect, "DELETE FROM keluarga WHERE nik='$kd_dept'");
    		$delete2 = mysqli_query($connect, "DELETE FROM perusahaan WHERE nik='$kd_dept'");
    		$delete3 = mysqli_query($connect, "DELETE FROM cuti WHERE nik='$kd_dept'");
    		$delete4 = mysqli_query($connect, "DELETE FROM financial WHERE nik='$kd_dept'");
    		$delete5 = mysqli_query($connect, "DELETE FROM hak_akses WHERE nik='$kd_dept'");
    		$delete6 = mysqli_query($connect, "DELETE FROM peformance WHERE nik='$kd_dept'");
    		$delete7 = mysqli_query($connect, "DELETE FROM training WHERE nik='$kd_dept'");
    		$delete8 = mysqli_query($connect, "DELETE FROM troubleshooting WHERE nik='$kd_dept'");
    		$delete9 = mysqli_query($connect, "DELETE FROM data_karyawan WHERE nik='$kd_dept'");
    		
			echo '<script type="text/javascript">alert("Sucesfully.");</script>';
    		echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=listemployee'</script>";
			}
		catch(Exception $e){
            echo '<script type="text/javascript">alert("Error: "'.$e.');</script>';
            echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=listemployee'</script>";
            }	
		}
	}        
?>