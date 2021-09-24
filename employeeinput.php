<?php 
 
require_once 'koneksi.php';
 
if($_POST) {
	
	//tabel pertama
    $nik = $_POST['nik'];
    $indetify = $_POST['indetify'];
	$name = $_POST['name'];	
	$birthday = $_POST['birthday'];
	$status = $_POST['status'];
    $agama = $_POST['agama'];
	$blood = $_POST['blood'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	
	//image
	$nama_file 		= $_FILES['fhoto']['name'];
	$ukuran_file 	= $_FILES['fhoto']['size'];
	$tipe_file 		= $_FILES['fhoto']['type'];
	$tmp_file 		= $_FILES['fhoto']['tmp_name'];
	move_uploaded_file($_FILES['fhoto']['tmp_name'], "fhoto/".$_FILES['fhoto']['name']);
	
	$npwp = $_POST['npwp'];
	$account = $_POST['account'];
	
	//tabel kedua
    $degree = $_POST['degree'];
	$Major = $_POST['Major'];
    $University = $_POST['University'];
	$ipk = $_POST['ipk'];
	
	//tabel ketiga
	$Father = $_POST['Father'];
	$Work_father = $_POST['Work_father'];
    $Mother = $_POST['Mother'];
	$Work_mother = $_POST['Work_mother'];
    $couple = $_POST['couple'];
	//type array	
	$Child = $_POST['Child'];
//	$jumlah_dipilih = count($Child);
	$gabung = implode(",",$Child);	
	if(($nik=="")||($indetify=="")||($name=="")||($nama_file=="")||($email=="")||($alamat=="")||($npwp=="")||($account=="")||($Major=="")||($University=="")||($Father=="")||($Work_father=="")||($Mother=="")||($Work_mother=="")||($couple=="")||($gabung==""))
    {
	echo '<script type="text/javascript">alert("Please complete your form.");</script>';
    echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=regemployee'</script>";		
	}
	else
	{
	// proses
	$tabel1 = "INSERT INTO data_karyawan (Nik, KTP, Name, BIrthday_date, Status, Agama, Blood, Email, Alamat, Fhoto, NPWP, Account) VALUES ('$nik', '$indetify','$name','$birthday','$status','$agama','$blood','$email','$alamat','$nama_file','$npwp','$account')";
	$tabel2 = "INSERT INTO pendidikan (Nik, Gelar, Major, University, IPK) VALUES ('$nik', '$degree','$Major','$University','$ipk ')";	
//	for($x=0;$x<$jumlah_dipilih;$x++){
//	$gabung = implode(" ",$Child[$x]);	
//	}
	$tabel3 = "INSERT INTO keluarga (Nik, Father, Job_ayah, Mother, Job_mother, couple, Child) VALUES ('$nik', '$Father','$Work_father','$Mother','$Work_mother','$couple','$gabung')";

	
	if($connect->query($tabel1)) {
	   if ($connect->query($tabel2) === TRUE) {
		   if ($connect->query($tabel3) === TRUE){
			      
	//		$hasil = $connect->query($image);   
       echo '<script type="text/javascript">alert("Sucesfully.");</script>';
	   echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=trainingrecord'</script>";
			   
		   }
	   }
	}  
	   else {
       echo "Error " . $tabel1. $tabel2. $tabel3. ' ' . $connect->connect_error;
    }
	
    $connect->close();
	}
}
 
?>