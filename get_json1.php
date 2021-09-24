<?php 
$json=file_get_contents('data1.json');
$data1=json_decode($json,true);


if($_POST['list']==2){
	$data_list=$_POST['data'];
	foreach($data1[$data_list] as $key=>$val){
		echo'<option>'.$val.'</option>';
	}
}

?>