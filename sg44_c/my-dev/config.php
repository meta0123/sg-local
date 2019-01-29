<?php
date_default_timezone_set('Asia/Taipei');
$ver=explode('.', PHP_VERSION);
define("php_ver",$ver[0] * 10000 + $ver[1] * 100 + $ver[2]);

$website = 'sg44';
$serdata = 'javadata0';
$sergrup = 'SG44';

$role=0;	//0公司 1代理商 2會員
header('Content-type: text/html; charset=utf-8');
define("siteName","SG44");//LOGIN
define("SERVER_HOST",(!empty($_SERVER["HTTP_X_FORWARDED_HOST"]))? $_SERVER["HTTP_X_FORWARDED_HOST"]:$_SERVER["HTTP_HOST"]);

$__check__IP = (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))? $_SERVER["HTTP_X_FORWARDED_FOR"]:$_SERVER["REMOTE_ADDR"];
if (
    filter_var($__check__IP, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) ||
    filter_var($__check__IP, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)
) {
    define("USER_IP",$__check__IP);
} else {
    die('jootpnsgmfwcissa');
}

define("Home_Path","C:/Users/User/Documents/GitHub/");
define("ROOT_PATH","C:/Users/User/Documents/GitHub/".$website."_c/");
define("JAVA_PATH","C:/Users/User/Documents/Github/sg-local/".$serdata."/");

define("FUNC_PATH",ROOT_PATH."func/");
define("Conf_Path",ROOT_PATH."conf/");
define("Data_Path",ROOT_PATH."data/");
define("JAVA_TXT_DATA",JAVA_PATH."data/");
define("starComb",JAVA_PATH."comb/");//writefile url

define("DEV_MODE", true); // 本機外補
/*
define("c_GupRto",Home_Path."sg17_c/data/c_guprto.php");
define("a_GupRto",Home_Path."sg17_a/data/a_guprto.php");
define("m_GupRto",Home_Path."sg17_m/data/m_guprto.php");
define("w_GupRto",Home_Path."sg17_w/data/w_guprto.php");
*/
define("c_JavaRatio",JAVA_PATH."data/Ratio/DataRatio.php");
define("w_JavaRatio",JAVA_PATH."data/Ratio/DataRatio.php");

//120417 For modem
$modemIP='192.168.99.128';
$modemDir='sg/sg27_f';

/*
$aryIP = array('192.168.99.204');

$aryBallDB['BB-US'] 	= array('Name' => 'U1','IP'   => '203.208.31.130');

$localIP = '192.168.99.1';

$default_Money = '50000';
*/
//預設可丟公司比例
//$PtToComp = 0.5; // 50%
$PtToComp = 1; // 100%

// flgWebMail 決定 是否顯示 WebMail 的風格頁面
// 因為要傳遞變數 所以用 T / F ==> T=true(顯示Webmail) / F=false
$flgWebMail = false;
$flgNoLogo  = false;

@include_once(Conf_Path."custom_set.php");

require_once(__DIR__ . '/autoload.php');
DataCache::init(require(__DIR__ . '/datacache.php'));
require_once(FUNC_PATH ."classes/helper.php");
?>