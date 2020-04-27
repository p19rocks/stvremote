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
		$data=file_get_contents("data.txt");
		echo $data;
		$file = fopen("update.txt", 'w');
		fwrite($file, time());
		fclose($file);
		$file = fopen("data.txt", 'w');
		$newVal=explode(",",$data);
		fwrite($file, " ,".$newVal[1]);
		fclose($file);
	}
?>