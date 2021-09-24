<?php 
$json=file_get_contents('data.json');
$data=json_decode($json,true);

if($_POST['list']==2){
	$data_list=$_POST['data'];
	foreach($data[$data_list] as $key=>$val){
		echo'<option>'.$key.'</option>';
	}
}

?>