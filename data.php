
<!DOCTYPE html><html><style>body,p{font-family:corbel,arial;background:#dfd;margin-left:2%}th,tr,td{background:#fff;padding-left:1em; border:1px solid #930;border-collapse:collapse;width:30em}
th{background:#2e2}td:nth-child(2n){color:#000}
tr:nth-child(2n-1){background:#ddf}*(not:style){display:table}
table,tr,td{display:inline;margin-left:1em}*:hover{background:#dfd}
</style>
<?php
//File stuff, followed by latency conversion array
$str = file_get_contents(date('j')."l.txt");

$data="<center><h1>Server Speed Monitor</h1></center><br><body><p>How fast is the server? <a href='colour.php'>Check your speed</a> and come back.
The speed of the site is displayed below. <a href='data.php?sort=1'>Sort by time</a></p>";
echo'Date: ' . date("m-d @ H\h\\r\s\ \A\C\S\T");
$x=0;
foreach(explode('<br>', $str) as $r){
$rr[$x]=$r;
$x++;
}
if($_GET['sort']!=""){
sort($rr,SORT_NUMERIC);}

//Prepares and displays data
foreach($rr as $row){
    $row = explode(',', $row);
if((time() - $row[2]) < 86400){
    $l = $row[0];
if($l < 0){$l += 100000;}
#Comments on the latency, and sets the colour
if($l < 90000){$q = "Pain!";}
if($l < 4500){$q = "Tor";}
if($l < 900){$q = "Slooow";}
if($l < 800){$q = "Slow";}
if($l < 700){$q = "Ok-ish";}
if($l < 600){$q = "Ok";}
if($l < 500){$q = "Good";}
if($l < 400){$q = "Nice";}
if($l < 300){$q = "Great";}
if($l < 200){$q = "Fast!";}
if($l < 100){$qual = "WOW"; }
$col = 'hsl('.round((1000-$l)/5).',90%,70%)';

//Allow switching between modes of data
if($_GET['r']==""){$y=date("H:i:s",$row[2]);}
else{$y=$row[$_GET['r']%6];}

//Design data display
if($row[0]!=""){
$data.= "<table style='width:20%'><tr><td style='background:".$col."'>" . $y. "</td><td background:".$col.">". $row[0]. "ms ($q) #".(crc32($row[1])%100)."</td></tr></table>";
$i++;
//Averages latency
$late += $l;
}}}
//RELEASE!

if($str!=""){$r = round($late/$i);}else{$r = '?';}
echo "<title>$i</title><br>$r ms average speed, $i result(s)<br>".$data;
echo '</blockquote>';
?></body></html>
