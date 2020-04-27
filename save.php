<?php
if(!empty($_GET['data'])){
	if($_GET['data']=='wxza')
		$data = " ,".time();
	else
		$data = $_GET['data'].",".time();
	
	$file = fopen("data.txt", 'w');
	fwrite($file, $data);
	fclose($file);
}
?>