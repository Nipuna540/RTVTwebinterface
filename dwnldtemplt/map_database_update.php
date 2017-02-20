<?php
	$server 	 = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'rtvt_database';

	mysql_connect($server,$username,$password) or die(mysql_error());
	mysql_select_db($database) or die(mysql_error());

	$emd_num = intval($_GET['emd_num']);
	$lat 		= floatval($_GET['lat']);
	$lng 		= floatval($_GET['lng']);
	
	if ($emd_num == 111){
		$sql = "UPDATE `location` SET `latitude` = $lat, `longitude` = $lng WHERE `location`.`id` = 1";
		$result = mysql_query($sql) or die(mysql_error());
	}
	
?>