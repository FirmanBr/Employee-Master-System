<?php

require_once 'koneksi.php';
session_start();

$kd = $_SESSION['akses'];
$karyawan = mysqli_query($connect, "SELECT * FROM data_karyawan WHERE nik ='$kd'");
$keluarga = mysqli_query($connect, "SELECT * FROM keluarga WHERE nik ='$kd'");
$pendidikan = mysqli_query($connect, "SELECT * FROM pendidikan WHERE nik ='$kd'");

$row = mysqli_fetch_assoc($karyawan);
$row1 = mysqli_fetch_assoc($keluarga);
$row2 = mysqli_fetch_assoc($pendidikan);

if($_POST) {
    $Nik = $_POST['Nik'];
	$KTP = $_POST['KTP'];
	$Name = $_POST['Name'];
	$Birthday = $_POST['Birthday'];
	$Religion = $_POST['Religion'];
	$Blood = $_POST['Blood'];
	$Email = $_POST['Email'];
	$Address = $_POST['Address'];
	$NPWP = $_POST['NPWP'];
	$Account = $_POST['Account'];
	
	$Strata = $_POST['Strata'];
	$Major = $_POST['Major'];
	$University = $_POST['University'];
	$IPK = $_POST['IPK'];
	
	$Father = $_POST['Father'];
	$jobayah = $_POST['jobayah'];
	$Mother = $_POST['Mother'];
	$jobmother = $_POST['jobmother'];
	$couple = $_POST['couple'];
	$Child = $_POST['Child'];
	$gabung = implode(",",$Child);
           }
		   
	$sql1 =mysqli_query($connect, "UPDATE data_karyawan SET Nik='$Nik',KTP='$KTP',Name='$Name',BIrthday_date='$Birthday',Agama='$Religion',	Blood='$Blood',Email='$Email',	Alamat='$Address',NPWP='$NPWP',Account='$Account'WHERE Nik='$Nik'")or die(mysqli_error());
	$sql2 =mysqli_query($connect, "UPDATE pendidikan SET Nik='$Nik',Gelar='$Strata',Major='$Major',University='$University',IPK='$IPK' WHERE Nik='$Nik'")or die(mysqli_error());
	$sql3 =mysqli_query($connect, "UPDATE keluarga SET Nik='$Nik',Father='$Father',Job_ayah='$jobayah',Mother='$Mother',Job_mother='$jobmother',couple='$couple',Child='$gabung'WHERE Nik='$Nik'")or die(mysqli_error());
	
	if($sql1)
	{	
		if($sql2)
		{
			if($sql3)
			{		
	echo '<script type="text/javascript">alert("Sucesfully.");</script>';
	echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=financialrecord'</script>";
	}}}
	else
	{
	echo '<script type="text/javascript">alert("Failed.");</script>';
	echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=financialrecord'</script>";
	}	
    $connect->close();		   
?>