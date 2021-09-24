<?php

include "koneksi.php";

$sql = "SELECT count(Nik) AS jumlah FROM perusahaan where Nik = 0";
$query = mysqli_query($connect,$sql);
$result = mysqli_fetch_array($query);
echo $result['jumlah'];