<?php
$ver=explode('.', PHP_VERSION);
define("php_ver",$ver[0] * 10000 + $ver[1] * 100 + $ver[2]);
header('Content-type: text/html; charset=utf-8');

define("siteName","SG44");//LOGIN
define("SERVER_HOST",(!empty($_SERVER["HTTP_X_FORWARDED_HOST"]))? $_SERVER["HTTP_X_FORWARDED_HOST"]:$_SERVER["HTTP_HOST"]);
define("USER_IP",(!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))? $_SERVER["HTTP_X_FORWARDED_FOR"]:$_SERVER["REMOTE_ADDR"]);

define("ROOT_PATH","C:/Users/User/Documents/GitHub/sg44_a/");
define("JAVA_PATH","C:/Users/User/Documents/Github/sg-local/javadata0");

define("FUNC_PATH",ROOT_PATH."func/");
define("Conf_Path",ROOT_PATH."conf/");
define("Data_Path",ROOT_PATH."data/");
define("JAVA_TXT_DATA",JAVA_PATH."data/");

/*
$aryIP = array('203.208.31.130');

$aryBallDB['BB-US'] 	= array('Name' => 'U1','IP'   => '203.208.31.130');

$localIP = '192.168.99.1';
*/
//預設可丟公司比例
//$PtToComp = 0.5; // 50%
$PtToComp = 1; // 100%

// flgWebMail 決定 是否顯示 WebMail 的風格頁面
// 因為要傳遞變數 所以用 T / F ==> T=true(顯示Webmail) / F=false
$flgWebMail = false;
$flgNoLogo  = false;

require_once(__DIR__ . '/autoload.php');
require_once(FUNC_PATH ."classes/helper.php");
DataCache::init(require(__DIR__ . '/datacache.php'));
?>