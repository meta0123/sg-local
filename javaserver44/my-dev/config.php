<?php
	$CONNIP = "192.168.88";
	$linkR=mysql_pconnect("localhost","root","");
	$linkW=mysql_pconnect("localhost","root","");

	define("C_WEB","SG1_w");
	define("A_WEB","SG1_c");
	mysql_select_db("sg44", $linkW);
	mysql_select_db("sg44", $linkR);

	$pathJava = "C:/Users/User/Documents/GitHub/javaserver44/";
	define("pathData","C:/Users/User/Documents/Github/sg-local/javadata0/");

	mysql_query("SET CHARACTER SET UTF8",$linkW);
	mysql_query("SET CHARACTER SET UTF8",$linkR);

	define("ProgramPath", $pathJava);
	define("ProgramName", "runServer.sh 44");
	define("ServerName",  "triggerJava44.jar");

	require_once(__DIR__ . '/../SG1_c/classes/helper.php');
	require_once(__DIR__ . '/../SG1_c/config/autoload.php');
	DataCache::init(require('datacache.php'));

	// DB::setRDBResource($linkR);
	// DB::setWDBResource($linkW);
	// DB::setLDB("log44", "127.0.0.1", "root", "");