<html style="font-family:corbel"><title>Cached Hotbit Colour</title><meta name="viewport" content="width=device-width, initial-scale=1"><style>mark{margin-left:10%;font-size:18px;background:#bfb}</style><mark style="font-size:24px">Your Random colours:</mark><?php
$hot = file_get_contents('28.php').file_get_contents('3.html');
$b = intval(file_get_contents('used.txt'));
function color($hot,$b){
echo '<h1 style="padding:0.6em;margin-left:10%;width:80%;background:rgba(';
//$t = round(explode(' ',microtime(false))[0]*1000000)%40000;
$u = unpack("c*",substr($hot,$b,3));
foreach($u as $i){$e.= ($i+128).',';$f.=str_pad(dechex($i+128),2,"0",STR_PAD_LEFT);}
echo $e.'1)"><pre style="background:#fff8;width:11em;display:inline">#'.$f.' '.substr($e,0,-1).'</pre></h1>';
return $t;}

if(empty($_REQUEST['n'])){$c=3;}else{$c=max(min(intval($_REQUEST['n']),1000),0);}
for($i=0;$i<$c;$i++){color($hot,$b);$b+=3;}
file_put_contents('used.txt',$b);
echo '<mark>'.number_format($b).' bytes read since reset</mark><br><mark><a href="22.php?n='.($c-1).'">'.($c-1).' colour(s)</a> |<a href="22.php?n='.($c).'">'.($c).' colour(s)</a> | '. '<a href="22.php?n='.($c+1).'">'.($c+1).' colour(s)</a></mark><br><mark>';
echo round(($b/strlen($hot??'?'))*100,4).'% used';
?></mark><br><mark>This tool uses cached hotbits data to generate 3 colours.</mark></p>
