<?php
	if(!empty($_GET['status']))
	{
		$data=file_get_contents("update.txt");
		if(time()>=($data+10))
			echo "DOWN";
		else
			echo "UP";
	}
	else
	{
		$file = fopen("update.txt", 'w');
		fwrite($file, time());
		fclose($file);
		$data=file_get_contents("data.txt");
		echo $data;
	}
?>