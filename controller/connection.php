<?php
	$conn = mysqli_connect('localhost','root','','db_uas_promnet_pln');

	if(mysqli_connect_error()){
		printf("Connect failed", mysqli_connect_error());
		exit();
	}
?>