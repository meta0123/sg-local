<?php
$file_path_name = 'sg44_m';
$java_path_name = 'javaserver44';
define("SERVER_ROOT","C:/Users/User/Documents/GitHub/".$file_path_name);
include_once(SERVER_ROOT."/func/classes/db_mysql.class.php");

//$ServerHost=($_SERVER["HTTP_X_FORWARDED_HOST"]!='')? $_SERVER["HTTP_X_FORWARDED_HOST"]:$_SERVER["HTTP_HOST"];
//$UserIP=($_SERVER["HTTP_X_FORWARDED_FOR"]!='')? $_SERVER["HTTP_X_FORWARDED_FOR"]:$_SERVER["REMOTE_ADDR"];

define("ctl_ip", "192.168.99.147/sg/".$java_path_name."/SG1");
define("web_ip", "192.168.99.147/sg/".$java_path_name."/SG1");
define("javaPath", "192.168.99.147/sg/".$java_path_name."/SG1");

define("siteRole", 2); //0公司 1代理商 2會員
define("SC_URL", "192.168.99.147/sg/".$java_path_name."/SG1");
define("SC_URLT","C:/Users/User/Documents/GitHub/".$java_path_name."/SG1");

$DataBase = 'sg44';
$DataBase_log = 'log44';
$IP_R = '127.0.0.1'; $ID_R = 'root'; $PW_R = '';
$IP_W = '127.0.0.1'; $ID_W = 'root';  $PW_W = '';

$mdb = new MysqlDb(
	$IP_R,$ID_R,$PW_R,$DataBase,
	$IP_W,$ID_W,$PW_W,$DataBase,
	$IP_R,$ID_R,$PW_R,$DataBase_log,
	$IP_W,$ID_W,$PW_W,$DataBase_log
);

include_once(SERVER_ROOT."/pub/pubLog.php");

?>
