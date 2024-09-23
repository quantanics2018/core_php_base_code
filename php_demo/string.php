<?php 


// php string function 
//  strlength
$nk = "Welcome GUY`S"." ";
echo strlen($nk);

// string count words
echo "<br>";
echo str_word_count($nk);

// string position finding exmaple : wudnicestr123
echo "<br>";
echo  strpos($nk,"GUY`S");

// string replace
echo "<br>";
echo str_replace("GUY`S","1234",$nk);


// string replace
echo "<br>";
echo strrev($nk);

// string trim function
echo "<br>";
echo trim($nk);

// explode function
$str_arr = "reg1,reg2,reg3,reg4,reg5,reg6";

$array_demo = explode(",",$str_arr);

echo "<pre>";
print_r($array_demo);
echo "<br>";
// echo $array_demo;
// echo "</pre>";


// implode function
$array = ["a1","a2","a3","a4"];
$str_implode = implode($array,",");
echo "<br>";
echo $str_implode;


// math function

// square root 64 = 8*8
echo "<br>";
echo "square root value is:\t".sqrt(64);

// min and max
$array_demo = [10,20,40,23,45,12];


echo "\n Minimum array value is:\t".min($array_demo);








?>