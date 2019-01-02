<?php
	$CONNIP = "192.168.88";
	$linkR=mysql_pconnect("127.0.0.1","root","");
	$linkW=mysql_pconnect("127.0.0.1","root","");

	define("C_WEB","SG1_w");
	define("A_WEB","SG1_c");
	mysql_select_db("sg44", $linkW);
	mysql_select_db("sg44", $linkR);

	$pathJava = "C:/Users/User/Documents/GitHub/javaserver44/";
	define("pathData","D:/work/SG44/javadata0/");

	mysql_query("SET CHARACTER SET UTF8",$linkW);
	mysql_query("SET CHARACTER SET UTF8",$linkR);

	define("ProgramPath", $pathJava);
	define("ProgramName", "runServer.sh 44");
	define("ServerName",  "triggerJava44.jar");