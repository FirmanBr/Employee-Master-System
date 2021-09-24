
<?php
	//include connection file 
	include_once("koneksi.php");
	 
	// initilize all variable
	$params = $columns = $totalRecords = $data = array();

	$params = $_REQUEST;

	//define index of column
	$columns = array( 
		0 =>'nik',
		1 =>'name', 
		2 =>'date',
		3 =>'jenis_training'
		4 =>'information'
	);

	$where = $sqlTot = $sqlRec = "";

	// getting total number records without any search
	$sql = "SELECT training.nik, data_karyawan.name, training.date, training.jenis_training, training.information FROM training, data_karyawan where training.nik=data_karyawan.nik ";
	$sqlTot .= $sql;
	$sqlRec .= $sql;


 	$sqlRec .=  " ORDER BY nik";

	$queryTot = mysqli_query($conn, $sqlTot) or die("database error:". mysqli_error($conn));


	$totalRecords = mysqli_num_rows($queryTot);

	$queryRecords = mysqli_query($conn, $sqlRec) or die("error to fetch employees data");

	//iterate on results row and create new index array of data
	while( $row = mysqli_fetch_row($queryRecords) ) { 
		$data[] = $row;
	}	

	$json_data = array(
			"draw"            => 1,   
			"recordsTotal"    => intval( $totalRecords ),  
			"recordsFiltered" => intval($totalRecords),
			"data"            => $data   // total data array
			);

	echo json_encode($json_data);  // send data as json format
?>
	