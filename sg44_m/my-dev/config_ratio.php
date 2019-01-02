<?
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
//一線            |二線            |三線            |四線            |五線     
$aryTR[ 1]=11;     $aryTR[ 2]=12;   $aryTR[3]=13;    $aryTR[ 4]=15;   $aryTR[ 5]=16;  
$aryTR[12]=8.5;    $aryTR[13]=9.5;  $aryTR[14]=10.5; $aryTR[15]=11.5; $aryTR[16]=13;  
$aryTR[23]=8.5;    $aryTR[24]=9.5;  $aryTR[25]=10.5; $aryTR[26]=11.5; $aryTR[27]=13;  
$aryTR[34]=8.5;    $aryTR[35]=9.5;  $aryTR[36]=10.5; $aryTR[37]=11.5; $aryTR[38]=13;  
$aryTR[45]=8.5;    $aryTR[46]=9.5;  $aryTR[47]=10.5; $aryTR[48]=11.5; $aryTR[49]=13;
$aryTR[56]=8.5;    $aryTR[57]=9.5;  $aryTR[58]=10.5; $aryTR[59]=11.5; $aryTR[50]=16;
$aryTR[67]=8.5;    $aryTR[68]=9.5;  $aryTR[69]=10.5; $aryTR[60]=15;   $aryTR[61]=16;
$aryTR[78]=8.5;    $aryTR[79]=9.5;  $aryTR[70]=13;   $aryTR[71]=15;   $aryTR[72]=16;
$aryTR[89]=8.5;    $aryTR[80]=12;   $aryTR[81]=13;   $aryTR[82]=15;   $aryTR[83]=16;
$aryTR[90]=11;     $aryTR[91]=12;   $aryTR[92]=13;   $aryTR[93]=15;   $aryTR[94]=16;

//六線            |七線            |八線            |九線            |十線
$aryTR[ 6]=18;     $aryTR[ 7]=20;   $aryTR[ 8]=23;   $aryTR[ 9]=25;   $aryTR[ 0]=34;  
$aryTR[17]=14;     $aryTR[18]=16;   $aryTR[19]=18;   $aryTR[10]=25;   $aryTR[11]=28;  
$aryTR[28]=14;     $aryTR[29]=16;   $aryTR[20]=23;   $aryTR[21]=25;   $aryTR[22]=28;  
$aryTR[39]=14;     $aryTR[30]=20;   $aryTR[31]=23;   $aryTR[32]=25;   $aryTR[33]=28;  
$aryTR[40]=18;     $aryTR[41]=20;   $aryTR[42]=23;   $aryTR[43]=25;   $aryTR[44]=28;
$aryTR[51]=18;     $aryTR[52]=20;   $aryTR[53]=23;   $aryTR[54]=25;   $aryTR[55]=28;
$aryTR[62]=18;     $aryTR[63]=20;   $aryTR[64]=23;   $aryTR[65]=25;   $aryTR[66]=28;
$aryTR[73]=18;     $aryTR[74]=20;   $aryTR[75]=23;   $aryTR[76]=25;   $aryTR[77]=28;
$aryTR[84]=18;     $aryTR[85]=20;   $aryTR[86]=23;   $aryTR[87]=25;   $aryTR[88]=28;
$aryTR[95]=18;     $aryTR[96]=20;   $aryTR[97]=23;   $aryTR[98]=25;   $aryTR[99]=28;
//特尾三線牌基本賠率,關於每一線有哪些號碼...放在另外一個檔案,有需要再載進來
$arySLR=array(0,0,220,250,280,320,350,420,450,500,580,650,750,850,900,1000,1100,1250,1450,1550,1650);

if(file_exists(Data_Path."m_guprto.php")){
	include(Data_Path."m_guprto.php");
}
if(file_exists(JAVA_TXT_DATA."Ratio/DataRatio.php")){
	include(JAVA_TXT_DATA."Ratio/DataRatio.php");
}
?>