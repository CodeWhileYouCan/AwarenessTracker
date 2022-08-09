
	<?php

	
	$host='anrdb01.cixjyoy1upya.ap-southeast-2.rds.amazonaws.com';

	$user='admin';
	$pass='anrdb1234';
	$db_name='fonInnov';

	$conn=new mysqli($host,$user,$pass,$db_name, 3306);
	if ($conn->connect_error){
		
		die('Connection error: '.$conn->connect_error);

	}

	?>
