<?php
$string="ABCDEF";
echo strlen($string);
echo "\n";
 ?>
<?php
 $new=php;
$string="I love Ruby!";
$new_string=str_replace("Ruby","$new",$string);
echo $new_string;
echo "\n";
  ?>
<?php
$array=[1,2,3,4,5,6,7,8,9,10];
echo count($array);
echo "\n";
?>
<?php
$array=[2,5,9,7,3,1,8,6,4];
asort($array);
print_r($array);

arsort($array);
print_r($array);
?>
