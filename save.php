<?php
if(!empty($_GET['data'])){
	if($_GET['data']=='wxza')
		$newData = " ,UP";
	else
		$newData = $_GET['data'].",UP";
	
	$data=file_get_contents("data.txt");
	$val=explode(",",$data);
	file_put_contents("data.txt", $newData.",".$val[2].",".($val[3]+1));
	
}
?>