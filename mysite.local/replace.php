<?php
$str1 = "abckdnvgjkdn";
$array = ["a","b","c"];
$strBegin = substr($str1, 0, 3); 
echo "исходная строка $str1, начало строки $strBegin ";
$arrayBegin = str_split($strBegin);

if ($array == $arrayBegin) {
	      $strReplace = substr_replace($str1, 'www', 0, 3);
    echo $strReplace;
} else {echo $str1."zzz";
}
