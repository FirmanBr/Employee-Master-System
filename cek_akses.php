<?php
session_start();
include "koneksi.php";
error_reporting(0);

if (empty($_SESSION['akses'])){include "index.html";}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>home</title>
</head>
<body>

<?php
$sql = mysqli_query($connect,"SELECT * FROM hak_akses WHERE username = '$_SESSION[username]'");
while ($data = mysqli_fetch_array($sql))
{
 $nik = $data['nik'];		
 $username = $data['username'];
 $akses = $data['akses'];
 
}
?>

<?php
if ($_SESSION[akses] == "LCDC") {echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=regemployee'</script>";}
if ($_SESSION[akses] == "IT") {echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=regemployee'</script>";}
if ($_SESSION[akses] == ""){echo "Kamu tidak memiliki akses kesini!";}
?>

</body>
</html>

<?php
} 
?> 
