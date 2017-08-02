<?php

error_reporting(-1);
$counterAll = 0;
$conterLucky = 0;
for ($i=1;$i<=999999;$i++) {
	while (strlen($i)<6) {
		$i="0".$i;
	}
	$counterAll++;
    $result=(string)$i;
    $leftPart=($result[0]+$result[1]+$result[2]);
    $rightPart=($result[3]+$result[4]+$result[5]);
    if ($leftPart==$rightPart){
    	$conterLucky++;
    	echo "$result, ";
    };
}
echo "\n".$counterAll." All numbers","\n".$conterLucky." Lucky numbers\n";
$persent = $conterLucky*100/$counterAll;
echo round($persent,2)."% persents of lucky numbers"; 