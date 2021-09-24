<?php 
 
require_once 'koneksi.php';
 
if($_POST) {
    $nik = $_POST['nik'];
    $date_training = $_POST['date_training'];
	$typetraining = $_POST['typetraining'];
	$start = $_POST['Start'];
	$end = $_POST['End'];
    $Descriptiontraining = $_POST['Descriptiontraining'];

	if($Descriptiontraining=="")
	{
	echo '<script type="text/javascript">alert("Please complete your form.");</script>';
    echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=companyrecord'</script>";		
	}		
	else
	{	
    $sql = "INSERT INTO training (Nik, Date, Jenis_training, Start, End, Information) VALUES ('$nik', '$date_training','$typetraining','$start','$end','$Descriptiontraining')";
    if($connect->query($sql) === TRUE) {
       echo '<script type="text/javascript">alert("Sucesfully.");</script>';
	   echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=trainingrecord'</script>";
	       } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
	}
}
 
?>