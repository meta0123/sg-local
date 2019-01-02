<?php
date_default_timezone_set('Asia/Taipei');
$ver=explode('.', PHP_VERSION);
define("php_ver",$ver[0] * 10000 + $ver[1] * 100 + $ver[2]);

$website = 'sg44';
$serdata = 'javadata0';
$service = 'javaserver44';
$sergrup = 'SG44';
$serveip = '127.0.0.1';

header('Content-type: text/html; charset=utf-8');
define("siteName","SG44");//LOGIN
define("gameName","SG1");//COOKIE
define("pathHome","C:/Users/User/Documents/GitHub/".$website."_w/");

define("pathJS",pathHome."js/");
define("pathPub",pathHome."pub/");
define("pathTmp",pathHome."/bin/");
define("pathFunc",pathHome."func/");
define("pathConf",pathHome."conf/");
define("Conf_Path",pathHome."conf/");
define("Data_Path",pathHome."data/");
define("SuperGateway",pathHome."pub/SuperGateway.php");

define("pathJava","C:/Users/User/Documents/GitHub/".$service."/");
define("pathTxt","C:/Users/User/Documents/Github/sg-local/".$serdata."/data/");
define("pathBin","C:/Users/User/Documents/Github/sg-local/".$serdata."/starbin/");
define("urlWF","http://".$serveip."/sg/".$service."/");//writefile url
define("urlStarBin",urlWF."SG1_w/starbin/");//writefile path

define("MNO","1");

require_once(__DIR__ . '/../conf/autoload.php');
DataCache::init(require(__DIR__ . '/datacache.php'));

include_once("config_ratio.php");

//$ServerHost=$_SERVER["HTTP_HOST"];
//$UserIP=$_SERVER["REMOTE_ADDR"];
//Proxy
$UserIP=$_SERVER["REMOTE_ADDR"];
if(isset($_SERVER["HTTP_X_FORWARDED_FOR"])){ $UserIP=$_SERVER["HTTP_X_FORWARDED_FOR"]; }
$dot=strpos( $UserIP,',');
if($dot!=false){ $UserIP=substr($UserIP,0,$dot-1); }

include_once(pathPub."pubFunc.php");
if(chkValidIP($UserIP)!=1){ exit; }

$ServerHost=$_SERVER["HTTP_HOST"];
if(isset($_SERVER["HTTP_X_FORWARDED_HOST"])){ $ServerHost=$_SERVER["HTTP_X_FORWARDED_HOST"]; }

//記錄IP
//define("recURL",    "http://fw-sg.sog88.net/instList.php?c=sg0|@id|@pw|@ip");
//define("recURL",    "http://fw-sg.sog88.net/instList.php?c=".strtolower(siteName)."|@id|@pw|@ip");
define("recURL",    "http://192.168.99.113/sg/fw1/instList.php?c=".strtolower(siteName)."|@id|@pw|@ip");

//規則
$aryRule = array(
	"celBetTime"   => 600,//撤單時間(秒)
	"clsTimeLimit" => 600,//關盤時間前不能撤單(秒)
);

/*
$aryIP = array('203.208.31.130');

$aryBallDB['BB-US'] 	= array('Name' => 'U1','IP'   => '203.208.31.130');

$localIP = '192.168.99.1';
*/

// flgWebMail 決定 是否顯示 WebMail 的風格頁面
$flgWebMail = false;
$flgNoLogo = false;

@include_once(Conf_Path."custom_set.php");
?>