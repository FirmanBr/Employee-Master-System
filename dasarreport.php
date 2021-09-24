<?php
ob_start();
?>

<style type="text/css">
	text5{
	font-weight:680px;
	font-size:35px;
	background:#eee;
	color:#45BEF7;
	text-shadow:
	0px 1px #577079,
	0px 2px #577079,
	0px 3px #577079,
	0px 4px #577079,
	0px 5px #577079,
	0px 6px #577079,
	0px 7px #577079,
	0px 7px 10px #333;
}
	table.page_header {width: 1020px; border: none; background-color: #DDDDFF; border-bottom: solid 1mm #AAAADD; padding: 2mm }
	table.page_footer {width: 1020px; border: none; background-color: #DDDDFF; border-top: solid 1mm #AAAADD; padding: 2mm}
	h1 {color: #000033}
	h2 {color: #000055}
	h3 {color: #000077}

	img.kanan {
    float: right;
    margin: -26px;
	width:133px;
	height:170px;
	}

   .letter-5{ letter-spacing: -5px; }
   .letter-1{ letter-spacing: -1px; }
   .letter1 { letter-spacing: 1px; }
   .letter5 { letter-spacing: 5px; }
   
   .word-5{ word-spacing: -5px; }
   .word-1{ word-spacing: -1px; }  
   .word1 { word-spacing: 1px; }  
   .word5 { word-spacing: 20px; }    

   .satu {
   font-size: 12px;
   }
   .dua {
   font-size: 20px;
   }
   .tiga {
   font-size: 18px;
   }

  .tabel2 {
    border-collapse: collapse;
  }
  .tabel2 th, .tabel2 td {
      padding: 5px 5px;
      border: 1px solid #000;
  }
  </style>

<page backtop="14mm" backbottom="14mm" backleft="1mm" backright="10mm">
  <page_header>
    <table class="page_header">
      <tr>
        <td style="text-align: left;    width: 10%">Taka Group</td>
        <td style="text-align: center;    width: 48%">Detail Of Employee Data</td>
		<td style="text-align: center;    width: 10%"><?php date_default_timezone_set("Asia/Jakarta");echo date("d-m-Y H:i:s");?></td>
		<p></p>
		</tr>
    </table>
  </page_header>

  <table>
    <tr>
      <th rowspan="3"><img src="image/logo.jpg" style="width:120px;height:100px" /></th>
      <td align="center" style="width: 600px;"><font style="font-size: 18px"><br><b>Head Office & Workshop </b></font>
        <br><br>Jl. Soekarno-Hatta No.797, Bandung 40294 West Java,Indonesia 
        <br><br>Telephone : +62 22 7838220 Facsimile : +62 22 7838223</td>
    </tr>
  </table>
  <hr><br><br>
<?php
include "koneksi.php";
error_reporting(0);
$kd = $_GET['kd'];
$karyawan = mysqli_query($connect, "SELECT * FROM data_karyawan WHERE nik='$kd'");
$pendidikan = mysqli_query($connect, "SELECT * FROM pendidikan WHERE nik='$kd'");
$keluarga = mysqli_query($connect, "SELECT * FROM keluarga WHERE nik='$kd'");
$perusahaan = mysqli_query($connect, "SELECT * FROM perusahaan WHERE nik='$kd'");
$row = mysqli_fetch_assoc($karyawan);
$row1 = mysqli_fetch_assoc($pendidikan);
$row2 = mysqli_fetch_assoc($keluarga);
$row3 = mysqli_fetch_assoc($perusahaan);
?>	

<table >
    <img src=<?php echo"'fhoto/".$row['Fhoto']."'"?>  class='kanan'/>
		<tr>
		<td class="tiga" style="text-align: center;    width: 45%"><b>Personal Information</b></td>
		</tr>
</table>
<p></p>

<table border=0>

<tr>
	<td class="tiga"><b>NIK</b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row['Nik']; ?></td></tr>
<tr>
	<td class="tiga"><b>Identify Card</b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row['KTP']; ?> </td></tr>
<tr>
	<td class="tiga"><b>Name</b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row['Name']; ?> </td></tr>
<tr>
	<td class="tiga"><b>Birthday</b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row['BIrthday_date']; ?> </td></tr>	
<tr>
	<td class="tiga"><b>Status</b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row['Status']; ?> </td></tr>	
<tr>
	<td class="tiga"><b>Religion</b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row['Agama']; ?> </td></tr>	
<tr>
	<td class="tiga"><b>Blood</b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row['Blood']; ?> </td></tr>
<tr>
	<td class="tiga"><b>Email</b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row['Email']; ?> </td></tr>
<tr>
	<td class="tiga"><b>Adress</b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row['Alamat']; ?> </td></tr>
<tr>
	<td class="tiga"><b>NPWP</b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row['NPWP']; ?> </td></tr>	
<tr>
	<td class="tiga"><b>Mandiri Account Number </b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row['Account']; ?> </td></tr>	
</table>
<p></p>

<p></p>
<table >
	<tr>
    <td class="tiga" style="text-align: center;    width: 45%"><b>Last Education</b></td>
    </tr>
</table>
<p></p>

<table border=0>
<tr>
	<td class="tiga"><b>Strata </b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row1['Gelar']; ?> </td></tr>
<tr>
	<td class="tiga"><b>Major </b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row1['Major']; ?> </td></tr>
<tr>
	<td class="tiga"><b>University </b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row1['University']; ?> </td></tr>
<tr>
	<td class="tiga"><b>IPK</b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row1['IPK']; ?> </td></tr>
</table>

<p></p>
<table border=0>
	<tr>
    <td class="tiga" style="text-align: center;    width: 45%"><b>Family History</b></td>
    </tr>
</table>
<p></p>

<table border=>
<tr>
	<td class="tiga"><b>Father</b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row2['Father']; ?></td></tr>
<tr>
	<td class="tiga"><b>Occupation</b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row2['Job_ayah']; ?></td></tr>
<tr>
	<td class="tiga"><b>Mother</b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row2['Mother']; ?></td></tr>
<tr>
	<td class="tiga"><b>Occupation</b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row2['Job_mother']; ?></td></tr>
<tr>
	<td class="tiga"><b>Husband / Wife</b></td>
	<td class="tiga">:</td>
	<td class="tiga"><?php echo $row2['couple']; ?></td></tr>	
<tr>
	<td class="tiga"><b>Child</b></td>
	<td class="tiga">:</td>
	<td class="tiga">
	<?php 
	$pecah = $row2['Child'];
	$anak=explode(",",$pecah);
	for ( $i = 0; $i<count($anak); $i++) {
	echo $anak[$i]. "<br />";
	}
	?>
	<p></p>
	</td></tr>

</table>
</page>

<?php

include 'html2pdf/html2pdf.class.php';
 $content = ob_get_clean();
 try
{
    $html2pdf = new HTML2PDF('P', 'A4', 'en', false, 'UTF-8', array(10, 10, 4, 10));
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml'])); 
	$html2pdf->Output('Employee.pdf');
}
catch(HTML2PDF_exception $e) {
    echo $e;
    exit;
}
?>
