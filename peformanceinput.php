<?php 
 
require_once 'koneksi.php';
 
if($_POST) {
    $nik = $_POST['nik'];
    $year = $_POST['year'];
    $DescriptionPeformance = $_POST['DescriptionPeformance'];
	if($DescriptionPeformance=="")
	{
	echo '<script type="text/javascript">alert("Please complete your form.");</script>';
    echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=peformancerecord'</script>";		
	}
	else
	{	
    $sql = "INSERT INTO peformance (Nik, Year, Information) VALUES ('$nik', '$year',' $DescriptionPeformance')";
    if($connect->query($sql) === TRUE) {
       echo '<script type="text/javascript">alert("Sucesfully.");</script>';
	   echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=peformancerecord'</script>";
	       } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
	
	}
}
 
?>