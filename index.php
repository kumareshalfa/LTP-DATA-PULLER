<?php error_reporting(E_ERROR | E_PARSE);
require_once 'config.php';
try {
    if (!file_exists($logFilesFolder))
    mkdir($logFilesFolder, 0777, true);
} catch(Exception $c1){print_r($c1);}
if (count($d2) >= 2) {
    $j3 =1;
    $n4=2;
    if(strtotime($d2[$j3])) {
        $c5 = strtotime($d2[$j3]);
        if(strtotime($d2[$n4]) && strtotime($d2[$n4])>$c5) {
            $q6 = strtotime($d2[$n4]);
                                } else {
                        $q6 = $c5;
        }
    }    
}   
if(empty($q6))
$q6 = strtotime(base64_decode('bm93'));
if(empty($c5))
$c5 = strtotime(base64_decode('bm93'));

$c5 = strtotime(date(base64_decode('WS1tLWQgMDA6MDA6MDA='),$c5))-(24*60*60); 
echo base64_decode('CnN0YXJ0Og==').date(base64_decode('WW1kSGlz'),$c5).base64_decode('IGVuZDo=').date(base64_decode('WW1kSGlz'),$q6);
$x7 =array();
$z8 = strtotime(date(base64_decode('WS1tLTAxIDAwOjAwOjAw'),$c5));
while ($z8 <= $q6) {
   $x7[]=base64_decode('ZGV2aWNlbG9nc18=').date(base64_decode('bl9Z'),$z8);
   $z8 = strtotime(base64_decode('KzEgbW9udGg='),  $z8);
}
$x7 = array_unique($x7);
$y9 = array();
foreach($x7 as $t10) {
    $d11 = base64_decode('IFNFTEVDVCBEQVRFX0ZPUk1BVChMb2dEYXRlLCclWSVtJWQnKSBhcyBwdW5jaGRhdGUsREFURV9GT1JNQVQoTG9nRGF0ZSwnJUglaSVzJykgYXMgcHVuY2h0aW1lLA0KICAgIGxvZy5EaXJlY3Rpb24sZGUuRGV2aWNlc05hbWUsbG9nLkRldmljZUlkLGxvZy5Vc2VySWQgYXMgY2FyZE51bWJlcg0KICAgIEZST00g').$t10.base64_decode('IGxvZw0KICAgIGxlZnQgam9pbiBkZXZpY2VzIGRlIG9uIGxvZy5EZXZpY2VJZD1kZS5EZXZpY2VJZA0KICAgIFdIRVJFIChsb2cuTG9nRGF0ZSA+PSAn').date(base64_decode('WS1tLWQgSDppOnM='),$c5).base64_decode('JyBBTkQgbG9nLkxvZ0RhdGUgPCc=').date(base64_decode('WS1tLWQgSDppOnM='),$q6).base64_decode('JykNCiAgICA=');
        $g12 = $mysqli->query($d11);
    if(mysqli_num_rows($g12)>0) {
        foreach($g12 as $u14) {
            $j15='';
            $i16='';
            $y17='';
            $k18=base64_decode('MA==');
            if(!empty($u14[base64_decode('Y2FyZE51bWJlcg==')])) {
                $i16 = substr($u14[base64_decode('Y2FyZE51bWJlcg==')],0,20);
            }
            if(!empty($u14[base64_decode('RGV2aWNlc05hbWU=')])) {
                $y17  = substr($u14[base64_decode('RGV2aWNlc05hbWU=')],0,20);
            }
            $j15=str_pad($i16,20,base64_decode('LQ=='),STR_PAD_LEFT).$u14[base64_decode('cHVuY2hkYXRl')].$u14[base64_decode('cHVuY2h0aW1l')].$k18.str_pad($y17,20,base64_decode('LQ=='),STR_PAD_LEFT);
            $y9[]=$j15;
        }
    }
}
mysqli_close($mysqli);
  if(!empty($y9)) {
    
    $v19 = $logFilesFolder.DS.$fileNamePrefix.date(base64_decode('WW1kSGk='),$q6).base64_decode('LnR4dA==');
    if(!file_exists($v19)) {
        $k21 = fopen($v19, base64_decode('dys='));
    }
    file_put_contents($v19,implode($y9,PHP_EOL));
}
?>