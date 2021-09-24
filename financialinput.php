<?php 
 
require_once 'koneksi.php';
 
if($_POST) {
    $nik = $_POST['nik'];
    $Salary = $_POST['Salary'];
    $Allowance = $_POST['Allowance'];

	if(($Salary=="")||($Allowance==""))
	{
	echo '<script type="text/javascript">alert("Please complete your form.");</script>';
    echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=financialrecord'</script>";	
	}	
	else
	{
    $sql = "INSERT INTO financial (Nik, Salary, allowance) VALUES ('$nik', '$Salary', '$Allowance')";
    if($connect->query($sql) === TRUE) {
       echo '<script type="text/javascript">alert("Sucesfully.");</script>';
	   echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=financialrecord'</script>";
	       } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
	}
}
 
?>