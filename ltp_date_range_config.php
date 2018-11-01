<?php
	DEFINE('DS', DIRECTORY_SEPARATOR); 
	class dbConfig {
		
		public $hostname = 'localhost';
		public $username = 'root';
		public $dbName = 'epush';
		public $password = 'admin';
	}
	$dbConfig=new dbConfig();
	$mysqli  = new mysqli($dbConfig->hostname, $dbConfig->username, $dbConfig->password, $dbConfig->dbName);
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	$logFilesFolder="D:".DS."CIP1contract".DS."backup";
	$fileNamePrefix="cdl";
	$startDt = '2018-08-01 00:00:00';
	$endtDt = '2018-08-02 00:00:00';
    date_default_timezone_set('Asia/Kolkata');
	$mysqli->query("SET SESSION SQL_BIG_SELECTS=1");

?>
