<?php
	DEFINE('DS', DIRECTORY_SEPARATOR); 
	class dbConfig {
		public $hostname = '192.168.3.165:3306';
		public $username = 'root';
		public $dbName = 'cms';
		public $password = 'fubar';
	}
	$dbConfig=new dbConfig();
	$mysqli  = new mysqli($dbConfig->hostname, $dbConfig->username, $dbConfig->password, $dbConfig->dbName);
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	$logFilesFolder="/Users/sakthivel/Desktop/test_epush/";
	$fileNamePrefix="cdl";
	$startDt = '2018-08-07 00:00:00';
	$endtDt = '2018-08-08 00:00:00';
    date_default_timezone_set('Asia/Kolkata');
	$mysqli->query("SET SESSION SQL_BIG_SELECTS=1");

?>