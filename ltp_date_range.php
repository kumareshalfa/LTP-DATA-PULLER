<?php 
ini_set(base64_decode('ZGlzcGxheV9lcnJvcnM='), 1);
ini_set(base64_decode('ZGlzcGxheV9zdGFydHVwX2Vycm9ycw=='), 1);
error_reporting(E_ALL);
require_once base64_decode('bHRwX2RhdGVfcmFuZ2VfY29uZmlnLnBocA==');
try {
    if (!file_exists($logFilesFolder))
    mkdir($logFilesFolder, 0777, true);
} catch(Exception $a1){print_r($a1);}

$o2 = strtotime($startDt); $t4 = strtotime($endtDt);

echo base64_decode('c3RhcnQ6').$o2.base64_decode('IGVuZDo=').$t4;

$t6 =array();
$a7 = strtotime(date(base64_decode('WS1tLTAxIDAwOjAwOjAw'),$o2));
while ($a7 <= $t4) {
   $t6[]=base64_decode('ZGV2aWNlbG9nc18=').date(base64_decode('bl9Z'),$a7);
   $a7 = strtotime(base64_decode('KzEgbW9udGg='),  $a7);
}
$t6 = array_unique($t6);
$m8 = array();

foreach($t6 as $z9) {
    $w10 = base64_decode('IFNFTEVDVCBEQVRFX0ZPUk1BVChMb2dEYXRlLCclWSVtJWQnKSBhcyBwdW5jaGRhdGUsREFURV9GT1JNQVQoTG9nRGF0ZSwnJUglaSVzJykgYXMgcHVuY2h0aW1lLA0KICAgIGxvZy5EaXJlY3Rpb24sbG9nLkRldmljZUlkLGxvZy5Vc2VySWQgYXMgY2FyZE51bWJlcg0KICAgIEZST00g').$z9.base64_decode('IGxvZw0KICAgIFdIRVJFIChsb2cuTG9nRGF0ZSA+PSAn').date(base64_decode('WS1tLWQgSDppOnM='),$o2).base64_decode('JyBBTkQgbG9nLkxvZ0RhdGUgPCc=').date(base64_decode('WS1tLWQgSDppOnM='),$t4).base64_decode('JykNCiAgICA=');
    $g11 = $mysqli->query($w10);
    if(mysqli_num_rows($g11)>0) {
        foreach($g11 as $p14) {
            $x15='';
            $e16='';
            $v17='';
            $j18=base64_decode('MA==');
            if(!empty($p14[base64_decode('Y2FyZE51bWJlcg==')])) {
                $e16 = substr($p14[base64_decode('Y2FyZE51bWJlcg==')],0,20);
            }
            if(!empty($p14[base64_decode('RGV2aWNlSWQ=')])) {
                $v17  = substr($p14[base64_decode('RGV2aWNlSWQ=')],0,20);
            }
            $x15=str_pad($e16,20,base64_decode('LQ=='),STR_PAD_LEFT).$p14[base64_decode('cHVuY2hkYXRl')].$p14[base64_decode('cHVuY2h0aW1l')].$j18.str_pad($v17,20,base64_decode('LQ=='),STR_PAD_LEFT);
            $m8[]=$x15;
        }
    }
}
  if(!empty($m8)) {
    
    $c19 = $logFilesFolder.DS.$fileNamePrefix.date(base64_decode('WW1kSGk='),$t4).base64_decode('LnR4dA==');
    if(!file_exists($c19)) {
        $u21 = fopen($c19, base64_decode('dys='));
    }
    file_put_contents($c19,implode($m8,PHP_EOL));
}





?>