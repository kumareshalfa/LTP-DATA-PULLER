<?php
error_reporting(E_ERROR | E_PARSE);
require_once 'ltp_date_range_config.php';
try {
    if (!file_exists($logFilesFolder))
    mkdir($logFilesFolder, 0777, true);
} catch(Exception $e){print_r($e);}

$startAt = $startDt; // start of the day and then one day previous
$endAt = $endtDt;

echo "start:".$startAt." end:".$endAt;

$tableNames =array();
//loop thro month range and collect table names
$tmpDate = strtotime(date("Y-m-01 00:00:00",$startAt));
while ($tmpDate <= $endAt) {
   $tableNames[]="devicelogs_".date("n_Y",$tmpDate);
   $tmpDate = strtotime("+1 month",  $tmpDate);
}
$tableNames = array_unique($tableNames);
$content = array();
foreach($tableNames as $table) {
    $query = " SELECT DATE_FORMAT(LogDate,'%Y%m%d') as punchdate,DATE_FORMAT(LogDate,'%H%i%s') as punchtime,
    log.Direction,log.DeviceId,log.UserId as cardNumber
    FROM ".$table." log
    WHERE (log.LogDate >= '".date("Y-m-d H:i:s",$startAt)."' AND log.LogDate <'".date("Y-m-d H:i:s",$endAt)."')
    ";
    $result = $mysqli->query($query);
    if(mysqli_num_rows($result)>0) {
        foreach($result as $row) {
            $str="";
            $cardNumber="";
            $machineId="";
            $inOutStatus="0";
            if(!empty($row['cardNumber'])) {
                $cardNumber = substr($row['cardNumber'],0,20);
            }
            if(!empty($row['DeviceId'])) {
                $machineId  = substr($row['DeviceId'],0,20);
            }
            $str=str_pad($cardNumber,20,"-",STR_PAD_LEFT).$row['punchdate'].$row['punchtime'].$inOutStatus.str_pad($machineId,20,"-",STR_PAD_LEFT);
            $content[]=$str;
        }
    }
}






 //writting content into file
 if(!empty($content)) {
    
    $fileName = $logFilesFolder.DS.$fileNamePrefix.date("YmdHi",$endAt).".txt";
    if(!file_exists($fileName)) {
        $fh = fopen($fileName, 'w+');
    }
    file_put_contents($fileName,implode($content,PHP_EOL));
}





?>
