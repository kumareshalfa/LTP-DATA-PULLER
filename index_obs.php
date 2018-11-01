<?php 
error_reporting(E_ERROR | E_PARSE);

require_once base64_decode('Y29uZmlnLnBocA==');
try {
    if (!file_exists($logFilesFolder))
    mkdir($logFilesFolder, 0777, true);
} catch(Exception $b1){print_r($b1);}
if (count($argv) >= 2) {
    $s3 =1;
    $r4=2;
    if(strtotime($argv[$s3])) {
        $z5 = strtotime($argv[$s3]);
        if(strtotime($argv[$r4]) && strtotime($argv[$r4])>$z5) {
            $w6 = strtotime($argv[$r4]);
                                } else {
                        $w6 = $z5;
        }
    }
    
}   


if(empty($w6))
$w6 = strtotime(base64_decode('bm93'));
if(empty($z5))
$z5 = strtotime(base64_decode('bm93'));

$z5 = strtotime(date(base64_decode('WS1tLWQgMDA6MDA6MDA='),$z5))-(24*60*60); 

echo base64_decode('c3RhcnQ6').date(base64_decode('WW1kSGlz'),$z5).base64_decode('IGVuZDo=').date(base64_decode('WW1kSGlz'),$w6);

$n7 =array();
$q8 = strtotime(date(base64_decode('WS1tLTAxIDAwOjAwOjAw'),$z5));
while ($q8 <= $w6) {
   $n7[]=base64_decode('ZGV2aWNlbG9nc18=').date(base64_decode('bl9Z'),$q8);
   $q8 = strtotime(base64_decode('KzEgbW9udGg='),  $q8);
}
$n7 = array_unique($n7);
$n9 = array();
foreach($n7 as $v10) {
    $u11 = base64_decode('IFNFTEVDVCBEQVRFX0ZPUk1BVChMb2dEYXRlLCclWSVtJWQnKSBhcyBwdW5jaGRhdGUsREFURV9GT1JNQVQoTG9nRGF0ZSwnJUglaSVzJykgYXMgcHVuY2h0aW1lLA0KICAgIGxvZy5EaXJlY3Rpb24sbG9nLkRldmljZUlkLGxvZy5Vc2VySWQgYXMgY2FyZE51bWJlcg0KICAgIEZST00g').$v10.base64_decode('IGxvZw0KICAgIFdIRVJFIChsb2cuTG9nRGF0ZSA+PSAn').date(base64_decode('WS1tLWQgSDppOnM='),$z5).base64_decode('JyBBTkQgbG9nLkxvZ0RhdGUgPCc=').date(base64_decode('WS1tLWQgSDppOnM='),$w6).base64_decode('JykNCiAgICA=');
        $l12 = $mysqli->query($u11);
    if(mysqli_num_rows($l12)>0) {
        foreach($l12 as $o15) {
            $u16='';
            $r17='';
            $v18='';
            $i19=base64_decode('MA==');
            if(!empty($o15[base64_decode('Y2FyZE51bWJlcg==')])) {
                $r17 = substr($o15[base64_decode('Y2FyZE51bWJlcg==')],0,20);
            }
            if(!empty($o15[base64_decode('RGV2aWNlSWQ=')])) {
                $v18  = substr($o15[base64_decode('RGV2aWNlSWQ=')],0,20);
            }
            $u16=str_pad($r17,20,base64_decode('LQ=='),STR_PAD_LEFT).$o15[base64_decode('cHVuY2hkYXRl')].$o15[base64_decode('cHVuY2h0aW1l')].$i19.str_pad($v18,20,base64_decode('LQ=='),STR_PAD_LEFT);
            $n9[]=$u16;
        }
    }
}






  if(!empty($n9)) {
    
    $w20 = $logFilesFolder.DS.$fileNamePrefix.date(base64_decode('WW1kSGk='),$w6).base64_decode('LnR4dA==');
    if(!file_exists($w20)) {
        $p22 = fopen($w20, base64_decode('dys='));
    }
    file_put_contents($w20,implode($n9,PHP_EOL));
}





?>