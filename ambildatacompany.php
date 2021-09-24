<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "takagroup";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error()); 
$requestData= $_REQUEST;


$columns = array( 
	0 => 'nik',
	1 => 'join_date',
	2 => 'grade',
	3 => 'posisition',
	4 => 'organization',
	5 => 'directorate',
	6 => 'status_kepegawaian',
	7 => 'End_date',
	8 => 'company',
	9 => 'location'
);

$sql = "SELECT perusahaan.nik, perusahaan.join_date, perusahaan.grade,perusahaan.posisition,perusahaan.directorate,perusahaan.status_kepegawaian,perusahaan.End_date,perusahaan.company,perusahaan.location FROM perusahaan";
$query=mysqli_query($conn, $sql) or die("ambildatacompany.php: get InventoryItems");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  


if( !empty($requestData['search']['value']) ) {
	$sql = "SELECT perusahaan.nik, perusahaan.join_date, perusahaan.grade,perusahaan.posisition,perusahaan.organization,perusahaan.directorate,perusahaan.status_kepegawaian,perusahaan.End_date,perusahaan.company,perusahaan.location FROM perusahaan";
	$sql.=" WHERE nik LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" OR join_date LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR grade LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR posisition LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR directorate LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR status_kepegawaian LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR End_date LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR company LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR location LIKE '".$requestData['search']['value']."%' ";
	$query=mysqli_query($conn, $sql) or die("ambildatacompany.php: get PO");
	$totalFiltered = mysqli_num_rows($query); 

	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; 
	$query=mysqli_query($conn, $sql) or die("ambildatacompany.php: get PO"); 
	
} else {	

	$sql = "SELECT perusahaan.nik, perusahaan.join_date, perusahaan.grade,perusahaan.posisition, perusahaan.directorate, perusahaan.status_kepegawaian, perusahaan.End_date, perusahaan.company, perusahaan.location FROM perusahaan";
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
	$query=mysqli_query($conn, $sql) or die("ambildatacompany.php: get PO");
	
}

$data = array();
while( $row=mysqli_fetch_array($query) ) {  
	$nestedData=array(); 
	$nestedData[] = $row["nik"];
    $nestedData[] = $row["join_date"];
	$nestedData[] = $row["grade"];
	$nestedData[] = $row["posisition"];
	$nestedData[] = $row["directorate"];
	$nestedData[] = $row["status_kepegawaian"];
	$nestedData[] = $row["End_date"];
	$nestedData[] = $row["company"];
	$nestedData[] = $row["location"];
	
		

 
    $nestedData[] = '<td><center>
			         <a href="editcompany.php?kd='.$row['nik'].'"  data-toggle="tooltip" title="Edit" class="btn btn-sm btn-warning"> <i class="menu-icon icon-pencil"></i> </a>
                     <a href="hapuscompany.php?hal=hapus&kd='.$row['nik'].'"  data-toggle="tooltip" title="Hapus" class="btn btn-sm btn-danger"> <i class="menu-icon icon-trash"></i> </a>
				     </center></td>';		
	
	$data[] = $nestedData;
    
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   
			"recordsTotal"    => intval( $totalData ),  
			"recordsFiltered" => intval( $totalFiltered ), 
			"data"            => $data   
			);

echo json_encode($json_data); 

?>
