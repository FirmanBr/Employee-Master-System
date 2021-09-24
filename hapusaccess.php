<?php

session_start();
include "koneksi.php";
$kd_dept = $_GET['kd'];
if($_SESSION['nik'] == $kd_dept)
	{		   	
	echo '<script type="text/javascript">alert("You can not Delete");</script>';
	header('location:home_LCDC.php?page=useraccess');
	}
else
	{
    if($_GET['hal'] == 'hapus'){
		try{
    		$delete5 = mysqli_query($connect, "DELETE FROM hak_akses WHERE nik='$kd_dept'");
    		
			echo '<script type="text/javascript">alert("Sucesfully.");</script>';
    		echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=useraccess'</script>";
			}
		catch(Exception $e){
            echo '<script type="text/javascript">alert("Error: "'.$e.');</script>';
            echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=useraccess'</script>";
            }	
		}
	}        
?>