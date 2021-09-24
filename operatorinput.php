<?php 
 
require_once 'koneksi.php';
 
if($_POST) {
    $nik = $_POST['nik'];
    $Email = $_POST['Email'];

	if($Email=="")
	 {
	   echo '<script type="text/javascript">alert("Please input email.");</script>';
	   echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=trouble'</script>";
	 
	 }
	else {	
    $sql = "INSERT INTO troubleshooting (Nik, Email) VALUES ('$nik','$Email')";
    if($connect->query($sql) === TRUE) {
       echo '<script type="text/javascript">alert("Sucesfully.");</script>';
	   echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=trouble'</script>";
	       } 
    else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
    $connect->close();
	}
}
?>