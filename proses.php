<?php
	include "koneksi.php";
    $username = $_POST['username'];
    $password =md5($_POST['password']);
    $login=mysqli_query($connect,"SELECT * FROM hak_akses WHERE Username = '$username' and Password = '$password' ");
    $hasil=mysqli_num_rows($login);
    $r=mysqli_fetch_array($login);
    
	if ($hasil > 0)
	{
      session_start();	 
	  $_SESSION['nik']          = $r['Nik'];
	  $_SESSION['username']     = $r['Username'];
      $_SESSION['akses']        = $r['akses'];
	  
	 header('location:cek_akses.php');
    }
//    else{ echo "<script language=\"JavaScript\">document.location='index.html'</script>"; }
    ?>