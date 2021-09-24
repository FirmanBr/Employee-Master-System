<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "takagroup";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 => 'nik',
	1 => 'name', 
    2 => 'username',
	3 => 'password',	
	4 => 'akses',

);

// getting total number records without any search
$sql = "SELECT hak_akses.nik, hak_akses.Username, hak_akses.Password, hak_akses.akses from hak_akses";
$query=mysqli_query($conn, $sql) or die("ambildataaccess.php: get InventoryItems");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
	// if there is a search parameter
	$sql = "SELECT hak_akses.nik,hak_akses.Username, hak_akses.Password, hak_akses.akses from hak_akses";
    $sql.=" WHERE nik LIKE '".$requestData['search']['value']."%' ";    // $requestData['search']['value'] contains search parameter
	$sql.=" OR Username LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR Password LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR akses LIKE '".$requestData['search']['value']."%' ";

	$query=mysqli_query($conn, $sql) or die("ambildataaccess.php: get PO");
	$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 

	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
	$query=mysqli_query($conn, $sql) or die("ambildataaccess.php: get PO"); // again run query with limit
	
} else {	

	$sql = "SELECT hak_akses.nik, hak_akses.Username, hak_akses.Password, hak_akses.akses from hak_akses";
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
	$query=mysqli_query($conn, $sql) or die("ambildataaccess.php: get PO");
	
}

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["nik"];
	$nestedData[] = $row["Username"];
	$nestedData[] = $row["Password"];
	$nestedData[] = $row["akses"];
	
    $nestedData[] = '<td><center>
                     <a href="editaccess.php?kd='.$row['nik'].'"  data-toggle="tooltip" title="Edit" class="btn btn-sm btn-warning"> <i class="menu-icon icon-pencil"></i> </a>
                     <a href="hapusaccess.php?hal=hapus&kd='.$row['nik'].'"  data-toggle="tooltip" title="Hapus" class="btn btn-sm btn-danger"> <i class="menu-icon icon-trash"></i> </a>
				     </center></td>';		
	
	$data[] = $nestedData;
    
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
