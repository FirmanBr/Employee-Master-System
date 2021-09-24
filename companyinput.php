<?php 
 
require_once 'koneksi.php';
 
if($_POST) {
	if($_POST['end_date']=='')
	{	
    $nik1 				= $_POST['nik'];
    $join_date 			= $_POST['join_date'];
    $grade 				= $_POST['grade'];
	$Directorate 		= $_POST['Directorate'];
	$position 			= $_POST['position'];
	$employeestatus 	= $_POST['employeestatus'];
	$End_date 			= '';
	$company			= $_POST['company'];
	$location 			= $_POST['location'];
	$sql = "INSERT INTO perusahaan(Nik, Join_date, Grade, Posisition, Directorate, Status_Kepegawaian, End_date, Company, Location)VALUES ('$nik1', '$join_date','$grade','$position','$Directorate','$employeestatus','$End_date','$company','$location')";
	}
	else 
	{
    $nik1 				= $_POST['nik'];
    $join_date 			= $_POST['join_date'];
    $grade 				= $_POST['grade'];
	$position 			= $_POST['position'];
	$Directorate 		= $_POST['Directorate'];
	$employeestatus 	= $_POST['employeestatus'];
	$End_date 			= $_POST['end_date'];
	$End_date 			= $_POST['end_date'];
	$company			= $_POST['company'];
	$location 			= $_POST['location'];
	$sql = "INSERT INTO perusahaan(Nik, Join_date, Grade, Posisition, Directorate, Status_Kepegawaian, End_date, Company, Location)VALUES ('$nik1', '$join_date','$grade','$position','$Directorate','$employeestatus','$End_date','$company','$location')";
	}	
	
   if($connect->query($sql)=== TRUE) {

       echo '<script type="text/javascript">alert("Sucesfully.");</script>';
	   echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=companyrecord'</script>";
	       } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
 
?>