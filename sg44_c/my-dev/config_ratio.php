<?php
/*
遊戲的基本賠率退水設定
*/
//基本賠率
$aryBaseRatio=array();
$aryBaseRatio[0]=0;
//GT,玩法從一開始,玩法代號比照資料表Execl
$aryBaseRatio[1]=array(0,5.9375,36,0.9,0,0,57,570,7500,240,1800);
//GB
$aryBaseRatio[2]=array(0,5.9375,36,0.9,0,0,57,570,7500,240,1800);
//GC
$aryBaseRatio[3]=array(0,5.5789,28.5,0.9,0,0,53,570,0,0,0);

//基本退水
$aryBaseWater=array();
$aryBaseWater[0]=0;
//GT
$aryBaseWater[1]=array(0,27,24,5,24,32,27,37,40,36,42);
//GB
$aryBaseWater[2]=array(0,27,24,5,24,32,27,37,40,36,42);
//GC
$aryBaseWater[3]=array(0,28.1,24,5,0,0,27,37,0,0,0);
//八面賠率
$aryEvtSet=array();
$aryEvtSet[0]=0;
/*
八面賠率[盤口]=[球頭,單,雙,大,小]
*/
$aryEvtSet[1]=array(25,0.9,0.9,0.9,0.9);
$aryEvtSet[2]=array(25,0.9,0.9,0.9,0.9);
$aryEvtSet[3]=array(20,0.9,0.9,0.9,0.9);
/*
星碰類設定
[盤口][玩法]=array[[各層組數],[各層退水]);
*/
//090902
$aryStarSet=array();
$aryStarSet[1]=array();//GT
$aryStarSet[1][ 6]=array(array(0,1,15,45,150,280,380,480,660),array(0,27,27,27,27,27,27.05,27.1,27.1));
$aryStarSet[1][ 7]=array(array(0,1,20,120,1100,2300,4000,6500,9800),array(0,37,37,37,37.6,37.7,37.7,37.8,38));
$aryStarSet[1][ 8]=array(array(0,1,36,210,2000),array(0,40,40,40,40));
$aryStarSet[1][ 9]=array(array(0,1),array(0,36));
$aryStarSet[1][10]=array(array(0,1),array(0,42));
$aryStarSet[2]=array();//GB
$aryStarSet[2][ 6]=array(array(0,1,15,45,150,280,380,480,660),array(0,27,27,27,27,27,27.05,27.1,27.1));
$aryStarSet[2][ 7]=array(array(0,1,20,120,1100,2300,4000,6500,9800),array(0,37,37,37,37.6,37.7,37.7,37.8,38));
$aryStarSet[2][ 8]=array(array(0,1,36,210,2000),array(0,40,40,40,40));
$aryStarSet[2][ 9]=array(array(0,1),array(0,36));
$aryStarSet[2][10]=array(array(0,1),array(0,42));
$aryStarSet[3]=array();//GC
$aryStarSet[3][ 6]=array(array(0,1,15,45,150,280,380,480,660),array(0,27,27,27,27,27,27,27,27));
$aryStarSet[3][ 7]=array(array(0,1,20,120,1100,2300,4000,6500,9800),array(0,37,37,37,37.6,37.7,37.7,37.8,38));

//台號基本賠率列表依照傳真過來的表排列
$aryTR=array();
//GT
$aryTR[1]=array();
//一線               |二線               |三線               |四線               |五線
$aryTR[1][ 1]=11;     $aryTR[1][ 2]=12;   $aryTR[1][3]=13;    $aryTR[1][ 4]=15;   $aryTR[1][ 5]=16;
$aryTR[1][12]=8.5;    $aryTR[1][13]=9.5;  $aryTR[1][14]=10.5; $aryTR[1][15]=11.5; $aryTR[1][16]=13;
$aryTR[1][23]=8.5;    $aryTR[1][24]=9.5;  $aryTR[1][25]=10.5; $aryTR[1][26]=11.5; $aryTR[1][27]=13;
$aryTR[1][34]=8.5;    $aryTR[1][35]=9.5;  $aryTR[1][36]=10.5; $aryTR[1][37]=11.5; $aryTR[1][38]=13;
$aryTR[1][45]=8.5;    $aryTR[1][46]=9.5;  $aryTR[1][47]=10.5; $aryTR[1][48]=11.5; $aryTR[1][49]=13;
$aryTR[1][56]=8.5;    $aryTR[1][57]=9.5;  $aryTR[1][58]=10.5; $aryTR[1][59]=11.5; $aryTR[1][50]=16;
$aryTR[1][67]=8.5;    $aryTR[1][68]=9.5;  $aryTR[1][69]=10.5; $aryTR[1][60]=15;   $aryTR[1][61]=16;
$aryTR[1][78]=8.5;    $aryTR[1][79]=9.5;  $aryTR[1][70]=13;   $aryTR[1][71]=15;   $aryTR[1][72]=16;
$aryTR[1][89]=8.5;    $aryTR[1][80]=12;   $aryTR[1][81]=13;   $aryTR[1][82]=15;   $aryTR[1][83]=16;
$aryTR[1][90]=11;     $aryTR[1][91]=12;   $aryTR[1][92]=13;   $aryTR[1][93]=15;   $aryTR[1][94]=16;

//六線               |七線               |八線               |九線               |十線
$aryTR[1][ 6]=18;     $aryTR[1][ 7]=20;   $aryTR[1][ 8]=23;   $aryTR[1][ 9]=25;   $aryTR[1][ 0]=34;
$aryTR[1][17]=14;     $aryTR[1][18]=16;   $aryTR[1][19]=18;   $aryTR[1][10]=25;   $aryTR[1][11]=28;
$aryTR[1][28]=14;     $aryTR[1][29]=16;   $aryTR[1][20]=23;   $aryTR[1][21]=25;   $aryTR[1][22]=28;
$aryTR[1][39]=14;     $aryTR[1][30]=20;   $aryTR[1][31]=23;   $aryTR[1][32]=25;   $aryTR[1][33]=28;
$aryTR[1][40]=18;     $aryTR[1][41]=20;   $aryTR[1][42]=23;   $aryTR[1][43]=25;   $aryTR[1][44]=28;
$aryTR[1][51]=18;     $aryTR[1][52]=20;   $aryTR[1][53]=23;   $aryTR[1][54]=25;   $aryTR[1][55]=28;
$aryTR[1][62]=18;     $aryTR[1][63]=20;   $aryTR[1][64]=23;   $aryTR[1][65]=25;   $aryTR[1][66]=28;
$aryTR[1][73]=18;     $aryTR[1][74]=20;   $aryTR[1][75]=23;   $aryTR[1][76]=25;   $aryTR[1][77]=28;
$aryTR[1][84]=18;     $aryTR[1][85]=20;   $aryTR[1][86]=23;   $aryTR[1][87]=25;   $aryTR[1][88]=28;
$aryTR[1][95]=18;     $aryTR[1][96]=20;   $aryTR[1][97]=23;   $aryTR[1][98]=25;   $aryTR[1][99]=28;
ksort($aryTR[1]);
//GB
$aryTR[2]=array();
//一線               |二線               |三線               |四線               |五線
$aryTR[2][ 1]=11;     $aryTR[2][ 2]=12;   $aryTR[2][3]=13;    $aryTR[2][ 4]=15;   $aryTR[2][ 5]=16;
$aryTR[2][12]=8.5;    $aryTR[2][13]=9.5;  $aryTR[2][14]=10.5; $aryTR[2][15]=11.5; $aryTR[2][16]=13;
$aryTR[2][23]=8.5;    $aryTR[2][24]=9.5;  $aryTR[2][25]=10.5; $aryTR[2][26]=11.5; $aryTR[2][27]=13;
$aryTR[2][34]=8.5;    $aryTR[2][35]=9.5;  $aryTR[2][36]=10.5; $aryTR[2][37]=11.5; $aryTR[2][38]=13;
$aryTR[2][45]=8.5;    $aryTR[2][46]=9.5;  $aryTR[2][47]=10.5; $aryTR[2][48]=11.5; $aryTR[2][49]=13;
$aryTR[2][56]=8.5;    $aryTR[2][57]=9.5;  $aryTR[2][58]=10.5; $aryTR[2][59]=11.5; $aryTR[2][50]=16;
$aryTR[2][67]=8.5;    $aryTR[2][68]=9.5;  $aryTR[2][69]=10.5; $aryTR[2][60]=15;   $aryTR[2][61]=16;
$aryTR[2][78]=8.5;    $aryTR[2][79]=9.5;  $aryTR[2][70]=13;   $aryTR[2][71]=15;   $aryTR[2][72]=16;
$aryTR[2][89]=8.5;    $aryTR[2][80]=12;   $aryTR[2][81]=13;   $aryTR[2][82]=15;   $aryTR[2][83]=16;
$aryTR[2][90]=11;     $aryTR[2][91]=12;   $aryTR[2][92]=13;   $aryTR[2][93]=15;   $aryTR[2][94]=16;

//六線               |七線               |八線               |九線               |十線
$aryTR[2][ 6]=18;     $aryTR[2][ 7]=20;   $aryTR[2][ 8]=23;   $aryTR[2][ 9]=25;   $aryTR[2][ 0]=34;
$aryTR[2][17]=14;     $aryTR[2][18]=16;   $aryTR[2][19]=18;   $aryTR[2][10]=25;   $aryTR[2][11]=28;
$aryTR[2][28]=14;     $aryTR[2][29]=16;   $aryTR[2][20]=23;   $aryTR[2][21]=25;   $aryTR[2][22]=28;
$aryTR[2][39]=14;     $aryTR[2][30]=20;   $aryTR[2][31]=23;   $aryTR[2][32]=25;   $aryTR[2][33]=28;
$aryTR[2][40]=18;     $aryTR[2][41]=20;   $aryTR[2][42]=23;   $aryTR[2][43]=25;   $aryTR[2][44]=28;
$aryTR[2][51]=18;     $aryTR[2][52]=20;   $aryTR[2][53]=23;   $aryTR[2][54]=25;   $aryTR[2][55]=28;
$aryTR[2][62]=18;     $aryTR[2][63]=20;   $aryTR[2][64]=23;   $aryTR[2][65]=25;   $aryTR[2][66]=28;
$aryTR[2][73]=18;     $aryTR[2][74]=20;   $aryTR[2][75]=23;   $aryTR[2][76]=25;   $aryTR[2][77]=28;
$aryTR[2][84]=18;     $aryTR[2][85]=20;   $aryTR[2][86]=23;   $aryTR[2][87]=25;   $aryTR[2][88]=28;
$aryTR[2][95]=18;     $aryTR[2][96]=20;   $aryTR[2][97]=23;   $aryTR[2][98]=25;   $aryTR[2][99]=28;
ksort($aryTR[2]);

//特尾三線牌基本賠率,關於每一線有哪些號碼...放在另外一個檔案,有需要再載進來
$arySLR[1]=array(0,0,220,250,280,320,350,420,450,500,580,650,750,850,900,1000,1100,1250,1450,1550,1650);
$arySLR[2]=array(0,0,220,250,280,320,350,420,450,500,580,650,750,850,900,1000,1100,1250,1450,1550,1650);

if(file_exists(c_JavaRatio)){ include(c_JavaRatio); }
?>