<?php
	// $var = "HELLO";
	// $var_len = strlen($var);
	// $i = 0;
	// while ($i<$var_len){
	// 	echo $var{$i}."\n";
	// 	$i++;
	// }

$i = 1; $j = 1;
while ($j<=10){
	while ($i <= 10){
		echo $i++;
		if($i==5)
			break 2;
	}
	$j++;
}	
?>