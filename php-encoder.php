<?php
/*$php_code = 
'<?php
echo date("Y-m-d")." Hello World";
?>';*/
$php_code = file_get_contents("decoded.php");
//$_F=__FILE__;
$_X='?>'.$php_code;
$_X=strtr($_X,'aouie123456','123456aouie');
$_X=base64_encode($_X);
//$_R=ereg_replace('__FILE__',"'".$_F."'",$_X);
$result = "<?php \$_F=__FILE__;\$_X='".$_X."';
eval(base64_decode('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLC
cxMjM0NTZhb3VpZScsJ2FvdWllMTIzNDU2Jyk7JF9SPWVyZWdfcmVwbGFjZSgnX19GS
UxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>";
file_put_contents("encoded.php", $result); 
echo str_replace('<','&lt',str_replace('>','&gt',$result));
?>