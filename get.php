<?php
	if(!empty($_GET['status']))
	{
		$data=file_get_contents("data.txt");
		$val=explode(",",$data);
		if(time()>=($val[2]+10))
			echo "DOWN";
		else
			echo "UP";
		//file_put_contents("data.txt", $val[0].",".$val[1].",".$val[2].",".($val[3]+1));
	}
	else
	{
		$data=file_get_contents("data.txt");
		$val=explode(",",$data);
		echo $val[0].",".$val[1];
		file_put_contents("data.txt", "NA,DOWN,".time().",".($val[3]+1));
		
	}
?>