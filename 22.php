<html style="font-family:corbel"><style>mark{margin-left:10%;font-size:18px}</style><mark>Your Random colours:</mark><?php
$hot = file_get_contents('28.php');
$b = file_get_contents('used.txt');
if($b==""){$b = 0;}
function color($hot,$b){
echo '<h1 style="padding:0.6em;margin-left:10%;width:80%;background:rgba(';
//$t = round(explode(' ',microtime(false))[0]*1000000)%40000;
$u = unpack("c*",substr($hot,$b,3));
foreach($u as $i){$e.= ($i+128).',';$f.=str_pad(dechex($i+128), 2, "0", STR_PAD_LEFT);}
echo $e.'1)"><pre style="background:#fff8;width:11em;display:inline">#'.$f.' '.substr($e,0,-1).'</pre></h1>';
return $t;}

//echo microtime(false);
if($_REQUEST['n']==""){$c = 3;}else{$c = $_REQUEST['n'];}
for($i=0;$i<$c;$i++){color($hot,$b);$b+=3;}
file_put_contents('used.txt',$b);
echo '<mark>'.$b . ' bytes (total)</mark><br><mark><a href="22.php?n='.($c-1).'">'.($c-1).' colour(s)</a> |<a href="22.php?n='.($c).'">'.($c).' colour(s)</a> | '. '<a href="22.php?n='.($c+1).'">'.($c+1).' colour(s)</a></mark><br><mark>';
echo round(($b/43008)*100,2) . '% used';
?></mark><br><mark>This tool uses cached hotbits data to generate 3 colours.</mark></p>
