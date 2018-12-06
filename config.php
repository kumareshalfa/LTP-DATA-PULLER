<?php
	DEFINE('DS', DIRECTORY_SEPARATOR); 
	class dbConfig {
		public $hostname = 'localhost';
		public $username = 'root';
		public $dbName = 'epushserver';
		public $password = 'fubar';
	}
	$dbConfig=new dbConfig();
	$mysqli  = new mysqli($dbConfig->hostname, $dbConfig->username, $dbConfig->password, $dbConfig->dbName);
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	$logFilesFolder="/Users/kumaresan.m/Sites/LTP/allnew";
	$fileNamePrefix="cdl";
    date_default_timezone_set('Asia/Kolkata');
	$mysqli->query("SET SESSION SQL_BIG_SELECTS=1");
?>