<?php
$java_path_name = 'javaserver44';
define("web_ip", "192.168.99.147/sg/".$java_path_name."/".gameName);
include_once(pathFunc."/classes/log.class.php");

$DBTable = 'sg44';
$DBLogs = 'log44';
$Wip = '127.0.0.1'; $Wacc = 'root';  $Wpwd = '';
$Rip = '127.0.0.1'; $Racc = 'root'; $Rpwd = '';
$linkR = mysql_connect($Rip, $Racc, $Rpwd)or die('99_r');
$linkW = mysql_connect($Wip, $Wacc, $Wpwd)or die('99_w');
$logset=array('ip'=>$Wip, 'user'=>$Wacc, 'pass'=>$Wpwd, 'db'=>$DBLogs);
mysql_select_db($DBTable,$linkR);
mysql_select_db($DBTable,$linkW);
mysql_query("SET CHARACTER SET UTF8",$linkR);
mysql_query("SET CHARACTER SET UTF8",$linkW);
?>
