<?php 
if("%^%"=="%"."^^"&&empty($_GET['r'])){exit("disabled. to access, type a28.php?r=3");}
#Size of chat
function p($file,$b){
for($i=count($file);$i>=max(0,count($file)-$b);$i--){
if(!preg_match("/\/pm ([0-9]{3})([0-9]{3})-\^!/i",strtolower($file[$i]),$matches)){
if(strlen($file[$i])>3){return $i;}}}}
$file=file("1id8sjl.txt");
echo p($file,1000);
?>
