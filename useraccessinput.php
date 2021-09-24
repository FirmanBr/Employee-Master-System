<?php 
 
require_once 'koneksi.php';

if($_POST) {
			
    $nik = $_POST['nik'];
    $UsernameAccess = $_POST['UsernameAccess'];
	$PasswordAccess = md5($_POST['PasswordAccess']);
	$access = $_POST['access'];
	if(($UsernameAccess=="")||($PasswordAccess==""))
	{
	echo '<script type="text/javascript">alert("Please complete your form.");</script>';
    echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=useraccess'</script>";
	}	
	else
    {	
	$cek_login= mysqli_query($connect, "Select Nik from hak_akses Where Nik = $nik");
	$verifikasi = mysqli_num_rows($cek_login);
	
	if($verifikasi > 0)
	{
	echo '<script type="text/javascript">alert("You can not create double access.");</script>';
	echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=useraccess'</script>";
	}
	else
	{
    $sql = "INSERT INTO hak_akses (Nik, Username, Password, Akses) VALUES ('$nik', '$UsernameAccess','$PasswordAccess','$access')";
    if($connect->query($sql) === TRUE) {
       echo '<script type="text/javascript">alert("Sucesfully.");</script>';
	   echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=useraccess'</script>";
	       } 
	else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
	}
	}
}
 
?>