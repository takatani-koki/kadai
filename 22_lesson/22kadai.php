<?php
//課題１
function times($number){
  $Y=$number * 2;
  return $Y;
}
echo times(5);
echo "\n";

//課題２
function plus($a,$b){
  $c=$a+$b;
  return $c;
}
echo plus(1,99);
echo "\n";

//課題３
$total=0;
function plus_array($arr)
{
 $number_arrays=count($arr);
 for ($i=0; $i <$number_arrays ; $i++)
 {
 $total +=$arr[$i];
 }
 return $total;
}
$arr=[1,3,5,7,9];
echo plus_array($arr);
echo "\n";

//課題４
//未完

//課題５
//strip_tags
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text, '<p><a>');
echo "\n";
//array_push
echo "\n";
$fruits = ['apple', 'orange', 'melon'];
array_push($fruits, 'banana', 'pineapple');
print_r($fruits);

//array_merge
echo "\n";
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array = array_merge($array1, $array2, $array3);
print_r($array);

//time
echo '現在のUnixタイムスタンプ：'.time();
//mktime
echo "\n";
$timestamp = mktime(0, 0, 0, 8, 1, 2017);
echo '指定のUnixタイムスタンプ：'.$timestamp;

//date
echo "\n";
date_default_timezone_set('Asia/Tokyo');
echo date('Y/m/d')."\n";
echo date("Y/m/d H:i:s") . "\n";


echo "\n";

 ?>
