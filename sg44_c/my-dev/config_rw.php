<?php
$file_path_name = "sg44_c";
$java_path_name = "javaserver44";

define("SERVER_ROOT","C:/Users/User/Documents/GitHub/".$file_path_name);
include_once(SERVER_ROOT."/func/classes/db_mysql.class.php");

//$ServerHost=($_SERVER["HTTP_X_FORWARDED_HOST"]!='')? $_SERVER["HTTP_X_FORWARDED_HOST"]:$_SERVER["HTTP_HOST"];
//$UserIP=($_SERVER["HTTP_X_FORWARDED_FOR"]!='')? $_SERVER["HTTP_X_FORWARDED_FOR"]:$_SERVER["REMOTE_ADDR"];

define("SC_URL", "javaserver44.local.com/SG1");
define("SC_URLT","C:/Users/User/Documents/GitHub/{$java_path_name}/SG1");
define("siteRole", 0); //0公司 1代理商 2會員

$dbname = 'sg44';
$logname = 'log44';
//用於建立table
$ip_C = '127.0.0.1'; $user_C = 'root'; $pswd_C = '';
//用於寫資料
$ip_W = '127.0.0.1'; $user_W = 'root';  $pswd_W = '';
//用於讀資料
$ip_R = '127.0.0.1'; $user_R = 'root'; $pswd_R = '';

$mdb = new MysqlDb(
	$ip_R, $user_R, $pswd_R, $dbname ,
	$ip_W, $user_W, $pswd_W, $dbname ,
	$ip_R, $user_R, $pswd_R, $logname,
	$ip_W, $user_W, $pswd_W, $logname
);

include_once(SERVER_ROOT."/pub/pubLog.php");

?>
