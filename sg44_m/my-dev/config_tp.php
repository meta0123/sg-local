<?php
$file_path_name = 'sg44_m';
define("WPath", "C:/Users/User/Documents/GitHub/".$file_path_name);
define("WPath_TPL", WPath."/tpl/zh-tw/");
define("WPath_Smarty", WPath."/lib/Smarty/");
header('Content-type: text/html; charset=utf-8');
// smarty tpl
require WPath_Smarty."libs/Smarty.class.php";
$tpl = new Smarty();
$tpl->template_dir = WPath_TPL;
$tpl->compile_dir = WPath_Smarty."templates_c/";
$tpl->cache_dir = WPath_Smarty."cache/";

include(WPath.'/tpl/lang_ct.php');
?>
