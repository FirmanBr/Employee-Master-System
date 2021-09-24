<?php 
 
require_once 'koneksi.php';
 
if($_POST) {
    $nik = $_POST['nik'];
    $leave_date = $_POST['leave_date'];
    $type = $_POST['type'];
	$DescriptionLeave = $_POST['DescriptionLeave'];

	if($DescriptionLeave=="")
	{	
	echo '<script type="text/javascript">alert("Please complete your form.");</script>';
    echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=leaverecord'</script>";	
	}
    $sql = "INSERT INTO cuti (Nik, Date, Type, Information) VALUES ('$nik', '$leave_date', '$type','$DescriptionLeave')";
    if($connect->query($sql) === TRUE) {
       echo '<script type="text/javascript">alert("Sucesfully.");</script>';
	   echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=leaverecord'</script>";
	       } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
 
?>