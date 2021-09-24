<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=reportcompany.xls");//ganti nama sesuai keperluan
header("Pragma: no-cache");
header("Expires: 0");

include "koneksi.php";
$sql = "SELECT count(Posisition) AS PresidentDirector FROM perusahaan where Posisition like 'PRESIDENT DIRECTOR' && Status_Kepegawaian like 'Outsourcing'";
$query = mysqli_query($connect,$sql);
$result = mysqli_fetch_array($query);

$sql1 = "SELECT count(Posisition) AS PresidentDirector1 FROM perusahaan where Posisition like 'PRESIDENT DIRECTOR' && Status_Kepegawaian like 'Contract'";
$query1 = mysqli_query($connect,$sql1);
$result1 = mysqli_fetch_array($query1);

$sql2 = "SELECT count(Posisition) AS PresidentDirector2 FROM perusahaan where Posisition like 'PRESIDENT DIRECTOR' && Status_Kepegawaian like 'Permanen'";
$query2 = mysqli_query($connect,$sql2);
$result2 = mysqli_fetch_array($query2);

$sql3 = "SELECT count(Posisition) AS PresidentDirector3 FROM perusahaan where Posisition like 'PRESIDENT DIRECTOR' ";
$query3 = mysqli_query($connect,$sql3);
$result3 = mysqli_fetch_array($query3);

$sql4 = "SELECT count(Posisition) AS AUDITCOMPLIANCEDIRECTOR FROM perusahaan where Posisition like 'AUDIT AND COMPLIANCE DIRECTOR' && Status_Kepegawaian like 'Outsourcing'";
$query4 = mysqli_query($connect,$sql4);
$result4 = mysqli_fetch_array($query4);

$sql5 = "SELECT count(Posisition) AS AUDITCOMPLIANCEDIRECTOR1 FROM perusahaan where Posisition like 'AUDIT AND COMPLIANCE DIRECTOR' && Status_Kepegawaian like 'Contract'";
$query5 = mysqli_query($connect,$sql5);
$result5 = mysqli_fetch_array($query5);

$sql6 = "SELECT count(Posisition) AS AUDITCOMPLIANCEDIRECTOR2 FROM perusahaan where Posisition like 'AUDIT AND COMPLIANCE DIRECTOR' && Status_Kepegawaian like 'Permanen'";
$query6 = mysqli_query($connect,$sql6);
$result6 = mysqli_fetch_array($query6);

$sql7 = "SELECT count(Posisition) AS AUDITCOMPLIANCEDIRECTOR3 FROM perusahaan where Posisition like 'AUDIT AND COMPLIANCE DIRECTOR' ";
$query7 = mysqli_query($connect,$sql7);
$result7 = mysqli_fetch_array($query7);

$sql8 = "SELECT count(Posisition) AS FINANCEANDTREASURYDIRECTOR FROM perusahaan where Posisition like 'FINANCE AND TREASURY DIRECTOR' && Status_Kepegawaian like 'Outsourcing'";
$query8 = mysqli_query($connect,$sql8);
$result8 = mysqli_fetch_array($query8);

$sql9 = "SELECT count(Posisition) AS FINANCEANDTREASURYDIRECTOR1 FROM perusahaan where Posisition like 'FINANCE AND TREASURY DIRECTOR' && Status_Kepegawaian like 'Contract'";
$query9 = mysqli_query($connect,$sql9);
$result9 = mysqli_fetch_array($query9);

$sql10 = "SELECT count(Posisition) AS FINANCEANDTREASURYDIRECTOR2 FROM perusahaan where Posisition like 'FINANCE AND TREASURY DIRECTOR' && Status_Kepegawaian like 'Permanen'";
$query10 = mysqli_query($connect,$sql10);
$result10 = mysqli_fetch_array($query10);

$sql11 = "SELECT count(Posisition) AS FINANCEANDTREASURYDIRECTOR3 FROM perusahaan where Posisition like 'FINANCE AND TREASURY DIRECTOR' ";
$query11 = mysqli_query($connect,$sql11);
$result11 = mysqli_fetch_array($query11);

$sql12 = "SELECT count(Posisition) AS HUMANCAPITALDIRECTOR FROM perusahaan where Posisition like 'HUMAN CAPITAL DIRECTOR' && Status_Kepegawaian like 'Outsourcing'";
$query12 = mysqli_query($connect,$sql12);
$result12 = mysqli_fetch_array($query12);

$sql13 = "SELECT count(Posisition) AS HUMANCAPITALDIRECTOR1 FROM perusahaan where Posisition like 'HUMAN CAPITAL DIRECTOR' && Status_Kepegawaian like 'Contract'";
$query13 = mysqli_query($connect,$sql13);
$result13 = mysqli_fetch_array($query13);

$sql14 = "SELECT count(Posisition) AS HUMANCAPITALDIRECTOR2 FROM perusahaan where Posisition like 'HUMAN CAPITAL DIRECTOR' && Status_Kepegawaian like 'Permanen'";
$query14 = mysqli_query($connect,$sql14);
$result14 = mysqli_fetch_array($query14);

$sql15 = "SELECT count(Posisition) AS HUMANCAPITALDIRECTOR3 FROM perusahaan where Posisition like 'HUMAN CAPITAL DIRECTOR'";
$query15 = mysqli_query($connect,$sql15);
$result15 = mysqli_fetch_array($query15);

$sql16 = "SELECT count(Posisition) AS EXTERNALAFFAIRDIRECTOR FROM perusahaan where Posisition like 'EXTERNAL AFFAIR DIRECTOR'&& Status_Kepegawaian like 'Outsourcing'";
$query16 = mysqli_query($connect,$sql16);
$result16 = mysqli_fetch_array($query16);

$sql17 = "SELECT count(Posisition) AS EXTERNALAFFAIRDIRECTOR1 FROM perusahaan where Posisition like 'EXTERNAL AFFAIR DIRECTOR'&& Status_Kepegawaian like 'Contract'";
$query17 = mysqli_query($connect,$sql17);
$result17 = mysqli_fetch_array($query17);

$sql18 = "SELECT count(Posisition) AS EXTERNALAFFAIRDIRECTOR2 FROM perusahaan where Posisition like 'EXTERNAL AFFAIR DIRECTOR'&& Status_Kepegawaian like 'Permanen'";
$query18 = mysqli_query($connect,$sql18);
$result18 = mysqli_fetch_array($query18);

$sql19 = "SELECT count(Posisition) AS EXTERNALAFFAIRDIRECTOR3 FROM perusahaan where Posisition like 'EXTERNAL AFFAIR DIRECTOR'";
$query19 = mysqli_query($connect,$sql19);
$result19 = mysqli_fetch_array($query19);

$sql20 = "SELECT count(Posisition) AS ENERGYSECTORDIRECTOR FROM perusahaan where Posisition like 'ENERGY SECTOR DIRECTOR'&& Status_Kepegawaian like 'Outsourcing'";
$query20 = mysqli_query($connect,$sql20);
$result20 = mysqli_fetch_array($query20);

$sql21 = "SELECT count(Posisition) AS ENERGYSECTORDIRECTOR1 FROM perusahaan where Posisition like 'ENERGY SECTOR DIRECTOR'&& Status_Kepegawaian like 'Contract'";
$query21 = mysqli_query($connect,$sql21);
$result21 = mysqli_fetch_array($query21);

$sql22 = "SELECT count(Posisition) AS ENERGYSECTORDIRECTOR2 FROM perusahaan where Posisition like 'ENERGY SECTOR DIRECTOR'&& Status_Kepegawaian like 'Permanen'";
$query22 = mysqli_query($connect,$sql22);
$result22 = mysqli_fetch_array($query22);

$sql23 = "SELECT count(Posisition) AS ENERGYSECTORDIRECTOR3 FROM perusahaan where Posisition like 'ENERGY SECTOR DIRECTOR' ";
$query23 = mysqli_query($connect,$sql23);
$result23 = mysqli_fetch_array($query23);

$sql24 = "SELECT count(Posisition) AS BUSINESSDEVELOPMENTSTAFF FROM perusahaan where Posisition like 'BUSINESS DEVELOPMENT STAFF'&& Status_Kepegawaian like 'Outsourcing' ";
$query24 = mysqli_query($connect,$sql24);
$result24 = mysqli_fetch_array($query24);

$sql25 = "SELECT count(Posisition) AS BUSINESSDEVELOPMENTSTAFF1 FROM perusahaan where Posisition like 'BUSINESS DEVELOPMENT STAFF'&& Status_Kepegawaian like 'Contract' ";
$query25 = mysqli_query($connect,$sql25);
$result25 = mysqli_fetch_array($query25);

$sql26 = "SELECT count(Posisition) AS BUSINESSDEVELOPMENTSTAFF2 FROM perusahaan where Posisition like 'BUSINESS DEVELOPMENT STAFF'&& Status_Kepegawaian like 'Permanen' ";
$query26 = mysqli_query($connect,$sql26);
$result26 = mysqli_fetch_array($query26);

$sql27 = "SELECT count(Posisition) AS BUSINESSDEVELOPMENTSTAFF3 FROM perusahaan where Posisition like 'BUSINESS DEVELOPMENT STAFF'";
$query27 = mysqli_query($connect,$sql27);
$result27 = mysqli_fetch_array($query27);

$sql28 = "SELECT count(Posisition) AS BUSINESSDEVELOPMENTMANAGER FROM perusahaan where Posisition like 'BUSINESS DEVELOPMENT MANAGER'&& Status_Kepegawaian like 'Outsourcing' ";
$query28 = mysqli_query($connect,$sql28);
$result28 = mysqli_fetch_array($query28);

$sql29 = "SELECT count(Posisition) AS BUSINESSDEVELOPMENTMANAGER1 FROM perusahaan where Posisition like 'BUSINESS DEVELOPMENT MANAGER'&& Status_Kepegawaian like 'Contract' ";
$query29 = mysqli_query($connect,$sql29);
$result29 = mysqli_fetch_array($query29);

$sql30 = "SELECT count(Posisition) AS BUSINESSDEVELOPMENTMANAGER2 FROM perusahaan where Posisition like 'BUSINESS DEVELOPMENT MANAGER'&& Status_Kepegawaian like 'Permanen' ";
$query30 = mysqli_query($connect,$sql30);
$result30 = mysqli_fetch_array($query30);

$sql31 = "SELECT count(Posisition) AS BUSINESSDEVELOPMENTMANAGER3 FROM perusahaan where Posisition like 'BUSINESS DEVELOPMENT MANAGER'";
$query31 = mysqli_query($connect,$sql31);
$result31 = mysqli_fetch_array($query31);

$sql32 = "SELECT count(Posisition) AS ACCOUNTINGTAXMANAGER FROM perusahaan where Posisition like 'ACCOUNTING & TAX MANAGER'&& Status_Kepegawaian like 'Outsourcing' ";
$query32 = mysqli_query($connect,$sql32);
$result32 = mysqli_fetch_array($query32);

$sql33 = "SELECT count(Posisition) AS ACCOUNTINGTAXMANAGER1 FROM perusahaan where Posisition like 'ACCOUNTING & TAX MANAGER'&& Status_Kepegawaian like 'Contract' ";
$query33 = mysqli_query($connect,$sql33);
$result33 = mysqli_fetch_array($query33);

$sql34 = "SELECT count(Posisition) AS ACCOUNTINGTAXMANAGER2 FROM perusahaan where Posisition like 'ACCOUNTING & TAX MANAGER'&& Status_Kepegawaian like 'Permanen' ";
$query34 = mysqli_query($connect,$sql34);
$result34 = mysqli_fetch_array($query34);

$sql35 = "SELECT count(Posisition) AS ACCOUNTINGTAXMANAGER3 FROM perusahaan where Posisition like 'ACCOUNTING & TAX MANAGER' ";
$query35 = mysqli_query($connect,$sql35);
$result35 = mysqli_fetch_array($query35);

$sql36 = "SELECT count(Posisition) AS BUSINESSPROCESSIMPROVEMENTINTERNALAUDITMANAGER FROM perusahaan where Posisition like 'BUSINESS PROCESS IMPROVEMENT & INTERNAL AUDIT MANAGER'&& Status_Kepegawaian like 'Outsourcing' ";
$query36 = mysqli_query($connect,$sql36);
$result36 = mysqli_fetch_array($query36);

$sql37 = "SELECT count(Posisition) AS BUSINESSPROCESSIMPROVEMENTINTERNALAUDITMANAGER1 FROM perusahaan where Posisition like 'BUSINESS PROCESS IMPROVEMENT & INTERNAL AUDIT MANAGER'&& Status_Kepegawaian like 'Contract' ";
$query37 = mysqli_query($connect,$sql37);
$result37 = mysqli_fetch_array($query37);

$sql38 = "SELECT count(Posisition) AS BUSINESSPROCESSIMPROVEMENTINTERNALAUDITMANAGER2 FROM perusahaan where Posisition like 'BUSINESS PROCESS IMPROVEMENT & INTERNAL AUDIT MANAGER'&& Status_Kepegawaian like 'Permanen' ";
$query38 = mysqli_query($connect,$sql38);
$result38 = mysqli_fetch_array($query38);

$sql39 = "SELECT count(Posisition) AS BUSINESSPROCESSIMPROVEMENTINTERNALAUDITMANAGER3 FROM perusahaan where Posisition like 'BUSINESS PROCESS IMPROVEMENT & INTERNAL AUDIT MANAGER'";
$query39 = mysqli_query($connect,$sql39);
$result39 = mysqli_fetch_array($query39);

$sql40 = "SELECT count(Posisition) AS BUSINESSDEVELOPMENTMANAGER FROM perusahaan where Posisition like 'BUSINESS DEVELOPMENT MANAGER'&& Status_Kepegawaian like 'Outsourcing' ";
$query40 = mysqli_query($connect,$sql40);
$result40 = mysqli_fetch_array($query40);

$sql41 = "SELECT count(Posisition) AS BUSINESSDEVELOPMENTMANAGER1 FROM perusahaan where Posisition like 'BUSINESS DEVELOPMENT MANAGER'&& Status_Kepegawaian like 'Contract' ";
$query41 = mysqli_query($connect,$sql41);
$result41 = mysqli_fetch_array($query41);

$sql42 = "SELECT count(Posisition) AS BUSINESSDEVELOPMENTMANAGER2 FROM perusahaan where Posisition like 'BUSINESS DEVELOPMENT MANAGER'&& Status_Kepegawaian like 'Permanen' ";
$query42 = mysqli_query($connect,$sql42);
$result42 = mysqli_fetch_array($query42);

$sql43 = "SELECT count(Posisition) AS BUSINESSDEVELOPMENTMANAGER3 FROM perusahaan where Posisition like 'BUSINESS DEVELOPMENT MANAGER'";
$query43 = mysqli_query($connect,$sql43);
$result43 = mysqli_fetch_array($query43);

$sql44 = "SELECT count(Posisition) AS ACCOUNTINGTAXOFFICER FROM perusahaan where Posisition like 'ACCOUNTING & TAX OFFICER'&& Status_Kepegawaian like 'Outsourcing' ";
$query44 = mysqli_query($connect,$sql44);
$result44 = mysqli_fetch_array($query44);

$sql45 = "SELECT count(Posisition) AS ACCOUNTINGTAXOFFICER1 FROM perusahaan where Posisition like 'ACCOUNTING & TAX OFFICER'&& Status_Kepegawaian like 'Contract' ";
$query45 = mysqli_query($connect,$sql45);
$result45 = mysqli_fetch_array($query45);

$sql46 = "SELECT count(Posisition) AS ACCOUNTINGTAXOFFICER2 FROM perusahaan where Posisition like 'ACCOUNTING & TAX OFFICER'&& Status_Kepegawaian like 'Permanen' ";
$query46 = mysqli_query($connect,$sql46);
$result46 = mysqli_fetch_array($query46);

$sql47 = "SELECT count(Posisition) AS ACCOUNTINGTAXOFFICER3 FROM perusahaan where Posisition like 'ACCOUNTING & TAX OFFICER'";
$query47 = mysqli_query($connect,$sql47);
$result47 = mysqli_fetch_array($query47);

$sql48 = "SELECT count(Posisition) AS BUSINESSIMPROVEMENTSTAFF FROM perusahaan where Posisition like 'BUSINESS IMPROVEMENT STAFF'&& Status_Kepegawaian like 'Outsourcing' ";
$query48 = mysqli_query($connect,$sql48);
$result48 = mysqli_fetch_array($query48);

$sql49 = "SELECT count(Posisition) AS BUSINESSIMPROVEMENTSTAFF1 FROM perusahaan where Posisition like 'BUSINESS IMPROVEMENT STAFF'&& Status_Kepegawaian like 'Contract' ";
$query49 = mysqli_query($connect,$sql49);
$result49 = mysqli_fetch_array($query49);

$sql50 = "SELECT count(Posisition) AS BUSINESSIMPROVEMENTSTAFF2 FROM perusahaan where Posisition like 'BUSINESS IMPROVEMENT STAFF'&& Status_Kepegawaian like 'Permanen' ";
$query50 = mysqli_query($connect,$sql50);
$result50 = mysqli_fetch_array($query50);

$sql51 = "SELECT count(Posisition) AS BUSINESSIMPROVEMENTSTAFF3 FROM perusahaan where Posisition like 'BUSINESS IMPROVEMENT STAFF'";
$query51 = mysqli_query($connect,$sql51);
$result51 = mysqli_fetch_array($query51);

$sql52 = "SELECT count(Posisition) AS INTERNALAUDITSUPERVISOR FROM perusahaan where Posisition like 'INTERNAL AUDIT SUPERVISOR' && Status_Kepegawaian like 'Outsourcing'";
$query52 = mysqli_query($connect,$sql52);
$result52 = mysqli_fetch_array($query52);

$sql53 = "SELECT count(Posisition) AS INTERNALAUDITSUPERVISOR1 FROM perusahaan where Posisition like 'INTERNAL AUDIT SUPERVISOR' && Status_Kepegawaian like 'Contract'";
$query53 = mysqli_query($connect,$sql53);
$result53 = mysqli_fetch_array($query53);

$sql54 = "SELECT count(Posisition) AS INTERNALAUDITSUPERVISOR2 FROM perusahaan where Posisition like 'INTERNAL AUDIT SUPERVISOR' && Status_Kepegawaian like 'Permanen'";
$query54 = mysqli_query($connect,$sql54);
$result54 = mysqli_fetch_array($query54);

$sql55 = "SELECT count(Posisition) AS INTERNALAUDITSUPERVISOR3 FROM perusahaan where Posisition like 'INTERNAL AUDIT SUPERVISOR'";
$query55 = mysqli_query($connect,$sql55);
$result55 = mysqli_fetch_array($query55);

$sql56 = "SELECT count(Posisition) AS DIRECTORSECRETARY FROM perusahaan where Posisition like 'DIRECTOR SECRETARY' && Status_Kepegawaian like 'Outsourcing'";
$query56 = mysqli_query($connect,$sql56);
$result56 = mysqli_fetch_array($query56);

$sql57 = "SELECT count(Posisition) AS DIRECTORSECRETARY1 FROM perusahaan where Posisition like 'DIRECTOR SECRETARY' && Status_Kepegawaian like 'Contract'";
$query57 = mysqli_query($connect,$sql57);
$result57 = mysqli_fetch_array($query57);

$sql58 = "SELECT count(Posisition) AS DIRECTORSECRETARY2 FROM perusahaan where Posisition like 'DIRECTOR SECRETARY' && Status_Kepegawaian like 'Permanen'";
$query58 = mysqli_query($connect,$sql58);
$result58 = mysqli_fetch_array($query58);

$sql59 = "SELECT count(Posisition) AS DIRECTORSECRETARY3 FROM perusahaan where Posisition like 'DIRECTOR SECRETARY' ";
$query59 = mysqli_query($connect,$sql59);
$result59 = mysqli_fetch_array($query59);

$sql60 = "SELECT count(Posisition) AS FINANCEOFFICER FROM perusahaan where Posisition like 'FINANCE OFFICER' && Status_Kepegawaian like 'Outsourcing' ";
$query60 = mysqli_query($connect,$sql60);
$result60 = mysqli_fetch_array($query60);

$sql61 = "SELECT count(Posisition) AS FINANCEOFFICER1 FROM perusahaan where Posisition like 'FINANCE OFFICER' && Status_Kepegawaian like 'Contract' ";
$query61 = mysqli_query($connect,$sql61);
$result61 = mysqli_fetch_array($query61);

$sql62 = "SELECT count(Posisition) AS FINANCEOFFICER2 FROM perusahaan where Posisition like 'FINANCE OFFICER' && Status_Kepegawaian like 'Permanen' ";
$query62 = mysqli_query($connect,$sql62);
$result62 = mysqli_fetch_array($query62);

$sql63 = "SELECT count(Posisition) AS FINANCEOFFICER3 FROM perusahaan where Posisition like 'FINANCE OFFICER'";
$query63 = mysqli_query($connect,$sql63);
$result63 = mysqli_fetch_array($query63);

$sql64 = "SELECT count(Posisition) AS FINANCETREASURYSUPERVISOR FROM perusahaan where Posisition like 'FINANCE & TREASURY SUPERVISOR' && Status_Kepegawaian like 'Outsourcing'";
$query64 = mysqli_query($connect,$sql64);
$result64 = mysqli_fetch_array($query64);

$sql65 = "SELECT count(Posisition) AS FINANCETREASURYSUPERVISOR1 FROM perusahaan where Posisition like 'FINANCE & TREASURY SUPERVISOR' && Status_Kepegawaian like 'Contract'";
$query65 = mysqli_query($connect,$sql65);
$result65 = mysqli_fetch_array($query65);

$sql66 = "SELECT count(Posisition) AS FINANCETREASURYSUPERVISOR2 FROM perusahaan where Posisition like 'FINANCE & TREASURY SUPERVISOR' && Status_Kepegawaian like 'Permanen'";
$query66 = mysqli_query($connect,$sql66);
$result66 = mysqli_fetch_array($query66);

$sql67 = "SELECT count(Posisition) AS FINANCETREASURYSUPERVISOR3 FROM perusahaan where Posisition like 'FINANCE & TREASURY SUPERVISOR' ";
$query67 = mysqli_query($connect,$sql67);
$result67 = mysqli_fetch_array($query67);

$sql68 = "SELECT count(Posisition) AS HEADOFLCDC FROM perusahaan where Posisition like 'HEAD OF LCDC' && Status_Kepegawaian like 'Outsourcing'";
$query68 = mysqli_query($connect,$sql68);
$result68 = mysqli_fetch_array($query68);

$sql69 = "SELECT count(Posisition) AS HEADOFLCDC1 FROM perusahaan where Posisition like 'HEAD OF LCDC' && Status_Kepegawaian like 'Contract'";
$query69 = mysqli_query($connect,$sql69);
$result69 = mysqli_fetch_array($query69);

$sql70 = "SELECT count(Posisition) AS HEADOFLCDC2 FROM perusahaan where Posisition like 'HEAD OF LCDC' && Status_Kepegawaian like 'Permanen'";
$query70 = mysqli_query($connect,$sql70);
$result70 = mysqli_fetch_array($query70);

$sql71 = "SELECT count(Posisition) AS HEADOFLCDC3 FROM perusahaan where Posisition like 'HEAD OF LCDC' ";
$query71 = mysqli_query($connect,$sql71);
$result71 = mysqli_fetch_array($query71);

$sql72 = "SELECT count(Posisition) AS LCDCSUPERVISOR FROM perusahaan where Posisition like 'LCDC SUPERVISOR' && Status_Kepegawaian like 'Outsourcing'";
$query72 = mysqli_query($connect,$sql72);
$result72 = mysqli_fetch_array($query72);

$sql73 = "SELECT count(Posisition) AS LCDCSUPERVISOR1 FROM perusahaan where Posisition like 'LCDC SUPERVISOR' && Status_Kepegawaian like 'Contract'";
$query73 = mysqli_query($connect,$sql73);
$result73 = mysqli_fetch_array($query73);

$sql74 = "SELECT count(Posisition) AS LCDCSUPERVISOR2 FROM perusahaan where Posisition like 'LCDC SUPERVISOR' && Status_Kepegawaian like 'Permanen'";
$query74 = mysqli_query($connect,$sql74);
$result74 = mysqli_fetch_array($query74);

$sql75 = "SELECT count(Posisition) AS LCDCSUPERVISOR3 FROM perusahaan where Posisition like 'LCDC SUPERVISOR' ";
$query75 = mysqli_query($connect,$sql75);
$result75 = mysqli_fetch_array($query75);


?>

<html>
<center><h2>Employee Record Data Taka Group Company</h2></center>
<table width="100%" border="1" cellpadding="5" cellspacing="0">
  <tbody>
  <tr>
  <tr>   
		<th colspan= "20"><h4>Direcorate / Departement / Position </h4></th>
  </tr>		
  <tr>   
		<th rowspan= "2">Employee Status</th>
        <th colspan = "4" with=>Board Of Director</th>
        <th colspan="1">EXTERNAL AFFAIR</th>
        <th colspan="3">BUSINESS DEVELOPMENT</th>
		<th colspan ="6">AUDIT AND COMPLIANCE</th>
		<th colspan ="1">SECRETARIAL UNIT</th>
		<th colspan="2">FINANCE AND TREASURY</th>
		<th colspan="2">HUMAN CAPITAL</th>
    </tr>
    <tr>    
		<th>PRESIDENT DIRECTOR</th>
		<th>AUDIT AND COMPLIANCE DIRECTOR</th>
		<th>FINANCE AND TREASURY DIRECTOR</th>
		<th>HUMAN CAPITAL DIRECTOR</th>
		
		<th>EXTERNAL AFFAIR DIRECTOR</th>
		
		<th>ENERGY SECTOR DIRECTOR</th>
		<th>BUSINESS DEVELOPMENT STAFF</th>
		<th>BUSINESS DEVELOPMENT MANAGER</th>
		
		<th>ACCOUNTING & TAX MANAGER</th>
		<th>BUSINESS PROCESS IMPROVEMENT & INTERNAL AUDIT MANAGER</th>
		<th>BUSINESS DEVELOPMENT MANAGER</th>
		<th>ACCOUNTING & TAX OFFICER</th>
		<th>BUSINESS IMPROVEMENT STAFF</th>
		<th>INTERNAL AUDIT SUPERVISOR</th>
		
		<th>DIRECTOR SECRETARY</th>
		
		<th>FINANCE OFFICER</th>
		<th>FINANCE & TREASURY SUPERVISOR</th>
		
		<th>HEAD OF LCDC</th>
		<th>LCDC SUPERVISOR</th>
		
    </tr>
	<tr>
        <th>Outsourcing</th>
		<th><?php echo $result['PresidentDirector']; ?></th>
		<th><?php echo $result4['AUDITCOMPLIANCEDIRECTOR']; ?></th>
		<th><?php echo $result8['FINANCEANDTREASURYDIRECTOR']; ?></th>
		<th><?php echo $result12['HUMANCAPITALDIRECTOR']; ?></th>
		<th><?php echo $result16['EXTERNALAFFAIRDIRECTOR']; ?></th>
		<th><?php echo $result20['ENERGYSECTORDIRECTOR']; ?></th>
		<th><?php echo $result24['BUSINESSDEVELOPMENTSTAFF']; ?></th>
		<th><?php echo $result28['BUSINESSDEVELOPMENTMANAGER']; ?></th> 
		<th><?php echo $result32['ACCOUNTINGTAXMANAGER']; ?></th>
		<th><?php echo $result36['BUSINESSPROCESSIMPROVEMENTINTERNALAUDITMANAGER']; ?></th>
		<th><?php echo $result40['BUSINESSDEVELOPMENTMANAGER']; ?></th>
		<th><?php echo $result44['ACCOUNTINGTAXOFFICER']; ?></th>
		<th><?php echo $result48['BUSINESSIMPROVEMENTSTAFF']; ?></th>
		<th><?php echo $result52['INTERNALAUDITSUPERVISOR']; ?></th>
		<th><?php echo $result56['DIRECTORSECRETARY']; ?></th>
		<th><?php echo $result60['FINANCEOFFICER']; ?></th>
		<th><?php echo $result64['FINANCETREASURYSUPERVISOR']; ?></th>
		<th><?php echo $result68['HEADOFLCDC']; ?></th>
		<th><?php echo $result72['LCDCSUPERVISOR']; ?></th>
	</tr>
    <tr>
        <th>Contract</th>
		<th><?php echo $result1['PresidentDirector1']; ?></th>
		<th><?php echo $result5['AUDITCOMPLIANCEDIRECTOR1']; ?></th>
		<th><?php echo $result9['FINANCEANDTREASURYDIRECTOR1']; ?></th>
		<th><?php echo $result13['HUMANCAPITALDIRECTOR1']; ?></th>
		<th><?php echo $result17['EXTERNALAFFAIRDIRECTOR1']; ?></th>
		<th><?php echo $result21['ENERGYSECTORDIRECTOR1']; ?></th>
		<th><?php echo $result25['BUSINESSDEVELOPMENTSTAFF1']; ?></th>
		<th><?php echo $result29['BUSINESSDEVELOPMENTMANAGER1']; ?></th>
		<th><?php echo $result33['ACCOUNTINGTAXMANAGER1']; ?></th>
		<th><?php echo $result37['BUSINESSPROCESSIMPROVEMENTINTERNALAUDITMANAGER1']; ?></th>
		<th><?php echo $result41['BUSINESSDEVELOPMENTMANAGER1']; ?></th>
		<th><?php echo $result45['ACCOUNTINGTAXOFFICER1']; ?></th>
		<th><?php echo $result49['BUSINESSIMPROVEMENTSTAFF1']; ?></th>
		<th><?php echo $result53['INTERNALAUDITSUPERVISOR1']; ?></th>
		<th><?php echo $result57['DIRECTORSECRETARY1']; ?></th>
		<th><?php echo $result61['FINANCEOFFICER1']; ?></th>
		<th><?php echo $result65['FINANCETREASURYSUPERVISOR1']; ?></th>
		<th><?php echo $result69['HEADOFLCDC1']; ?></th>
		<th><?php echo $result73['LCDCSUPERVISOR1']; ?></th>
	</tr>
    <tr>
        <th>Permanent</th>
		<th><?php echo $result2['PresidentDirector2']; ?></th>
		<th><?php echo $result6['AUDITCOMPLIANCEDIRECTOR2']; ?></th>
		<th><?php echo $result10['FINANCEANDTREASURYDIRECTOR2']; ?></th>
		<th><?php echo $result14['HUMANCAPITALDIRECTOR2']; ?></th>
		<th><?php echo $result18['EXTERNALAFFAIRDIRECTOR2']; ?></th>
		<th><?php echo $result22['ENERGYSECTORDIRECTOR2']; ?></th>
		<th><?php echo $result26['BUSINESSDEVELOPMENTSTAFF2']; ?></th>
		<th><?php echo $result30['BUSINESSDEVELOPMENTMANAGER2']; ?></th>
		<th><?php echo $result34['ACCOUNTINGTAXMANAGER2']; ?></th>
		<th><?php echo $result38['BUSINESSPROCESSIMPROVEMENTINTERNALAUDITMANAGER2']; ?></th>
		<th><?php echo $result42['BUSINESSDEVELOPMENTMANAGER2']; ?></th>
		<th><?php echo $result46['ACCOUNTINGTAXOFFICER2']; ?></th>
		<th><?php echo $result50['BUSINESSIMPROVEMENTSTAFF2']; ?></th>
		<th><?php echo $result54['INTERNALAUDITSUPERVISOR2']; ?></th>
		<th><?php echo $result58['DIRECTORSECRETARY2']; ?></th>
		<th><?php echo $result62['FINANCEOFFICER2']; ?></th>
		<th><?php echo $result66['FINANCETREASURYSUPERVISOR2']; ?></th>
		<th><?php echo $result70['HEADOFLCDC2']; ?></th>		
		<th><?php echo $result74['LCDCSUPERVISOR2']; ?></th>
	</tr>
    <tr>
        <th>Total</th>
		<th><?php echo $result3['PresidentDirector3']; ?></th>
		<th><?php echo $result7['AUDITCOMPLIANCEDIRECTOR3']; ?></th>
		<th><?php echo $result11['FINANCEANDTREASURYDIRECTOR3']; ?></th>
		<th><?php echo $result15['HUMANCAPITALDIRECTOR3']; ?></th>
		<th><?php echo $result19['EXTERNALAFFAIRDIRECTOR3']; ?></th>
		<th><?php echo $result23['ENERGYSECTORDIRECTOR3']; ?></th>
		<th><?php echo $result27['BUSINESSDEVELOPMENTSTAFF3']; ?></th>
		<th><?php echo $result31['BUSINESSDEVELOPMENTMANAGER3']; ?></th>
		<th><?php echo $result35['ACCOUNTINGTAXMANAGER3']; ?></th>
		<th><?php echo $result39['BUSINESSPROCESSIMPROVEMENTINTERNALAUDITMANAGER3']; ?></th>
		<th><?php echo $result43['BUSINESSDEVELOPMENTMANAGER3']; ?></th>
		<th><?php echo $result47['ACCOUNTINGTAXOFFICER3']; ?></th>
		<th><?php echo $result51['BUSINESSIMPROVEMENTSTAFF3']; ?></th>
		<th><?php echo $result55['INTERNALAUDITSUPERVISOR3']; ?></th>
		<th><?php echo $result59['DIRECTORSECRETARY3']; ?></th>
		<th><?php echo $result63['FINANCEOFFICER3']; ?></th>
		<th><?php echo $result67['FINANCETREASURYSUPERVISOR3']; ?></th>
		<th><?php echo $result71['HEADOFLCDC3']; ?></th>
		<th><?php echo $result75['LCDCSUPERVISOR3']; ?></th>
</tr>
</tr>
  </tbody>
</table>
</html>
