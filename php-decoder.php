<?php
$_F=__FILE__;
$encode = file_get_contents("encoded.php");
$_X = substr($encode, strpos($encode, "='") + 2, strpos($encode, "';") - strpos($encode, "='") - 2);
//$_X='Pz48P3BocA0KNWNoMiAiSDVsbDIgVzJybGQiOw0KPz4=';
$_X=base64_decode($_X);
$_X=strtr($_X,'123456aouie','aouie123456');
$_R=ereg_replace('__FILE__',"'".$_F."'",$_X);
$_R=substr($_R, 2, strlen($_R)-2);
file_put_contents("decoded.php", $_R); 
echo str_replace('<','&lt',str_replace('>','&gt',$_R));
?>