<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html><style>
input,button{color:#22f;background:#fff}*{font-size:18px}h1{font-size:36px}tr:nth-child(2n){background:#fcf;}form{display:inline}input,button{border:2px solid #930;padding:0.3em;border-radius:10px}body{color:#930;font-family:Arial,sans-serif;margin:2%;padding:2%;background-color:#dfd}.container{max-width:600px;margin:50px auto;background-color:#fff;border-radius:10px;padding:20px;box-shadow:0 0 10px rgba(0,0,0,.1)}.container form{margin-bottom:20px}.container input[type="file"]{margin-bottom:10px}.container h2{margin-bottom:10px}.container ul{list-style:none;padding:0}.container ul li{margin-bottom:5px}table,tr,td{padding:0.3em}
</style><body>
<h1>CommunityDB</h1>
<p>To use: add or change text, then click the number button on the same row you edited. Rather than implement offline inbox, I am reusing this test project :)</p>
<?php
function safe($e){
if(file_exists("1id8sjl.txt.old")){
$file=file("1id8sjl.txt.old");foreach($file as $filter){$f=explode("|",str_replace("\n","",$filter));$ee[]=$f[0]??'&27;';$xx[]=substr($f[1]??'&27;',0,-1);}}
if(isset($ee)){$av=0;
foreach($ee as $ees){if(strlen($e)===strlen($ees)){$e=str_replace($ees,$xx[$av],$e);}$av+=1;}
}return trim($e);}

$hpu='unlock.txt';
if(isset($_COOKIE['name'])&&file_exists($hpu)&&($_COOKIE['name']==file_get_contents($hpu)||safe($_COOKIE['name'])==file_get_contents($hpu))){file_put_contents("crc.txt",$_COOKIE['name'].date(".H:i:s.^|"),8);exit('</html>');}
if(file_exists($hpu)&&file_get_contents($hpu)=='"'&&!isset($_COOKIE['9u9dyi'])&&strpos(file_get_contents("whitelist.txt"),crc())===false){file_put_contents("crc.txt",$_COOKIE['name'].date(".H:i:s.^|"),8);exit('</html>');}

if(isset($_POST['x'])){
$e=($_POST['name']??'').($_POST['a']??'').($_POST['b']??'');
$x=['nigg','hild po','ceepee'];
if(preg_match('/[a-zA-Z0-9][^a-zA-Z0-9][a-zA-Z0-9][^a-zA-Z0-9][a-zA-Z0-9][^a-zA-Z0-9][a-zA-Z0-9][^a-zA-Z0-9][a-zA-Z0-9][^a-zA-Z0-9]/i',$e,$m)){$e='slut';}
foreach($x as $y){
if(stripos($e,$y)!==false){file_put_contents('unlock.txt',$_POST['name']);
$write='000-<i>'.date("m-jS H:i:s").'</i> |<span style="color:'.htmlspecialchars($_COOKIE['col']??'#88ff88').'">/m [testy.php] Filter triggered: '.$y.'</span>'."
  
";file_put_contents("1id8sjl.txt",$write,FILE_APPEND);
exit();}}

}

function diff($t){
#This function calculates the difference between filetime and now, using D/H/M/S.
$s = time() - $t;
if($s<60){return 'Not long ago';}
elseif($s<3600){$z = (($s-($s%60))/60).'m';}
elseif($s<86400){$z = (($s-($s%3600))/3600).'h '.((($s-($s%60))/60)%60).'m ';}
elseif(1==1){$z = (($s-($s%86400))/86400)."d ".((($s-($s%3600))/3600)%24).'h';;}
return $z;
}
 $db=new SQLite3('uploads.db');
 # Create sheet table if needed
 $db->exec('CREATE TABLE IF NOT EXISTS sheet(
    id INTEGER PRIMARY KEY, name TEXT,
    a BLOB, b BLOB,
    t INTEGER)');

    $stmt = $db->prepare('SELECT * FROM sheet WHERE a NOT NULL or b NOT NULL or name NOT NULL');
    $result = $stmt->execute();
  $view=['1'];
  while($row = $result->fetchArray(SQLITE3_ASSOC)){$view[] = $row;}
    if($_POST['x']<count($view)){
     # Updating
    $stmt=$db->prepare('UPDATE OR IGNORE sheet SET name=:name, a=:a, b=:b, t=:t WHERE id=:id;');$write=2;
    $stmt->bindValue(':id', intval($_POST['x']), SQLITE3_INTEGER);}
    elseif(!empty($_POST['x'])){
    $stmt=$db->prepare("INSERT INTO sheet (name,a,b,t) VALUES(:name,:a,:b, ".intval(time()).");");$write=1;}
    if(isset($write)){
    $stmt->bindValue(':name', htmlspecialchars(htmlspecialchars_decode($_POST['name']??'')), SQLITE3_BLOB);
    $stmt->bindValue(':a', htmlspecialchars(htmlspecialchars_decode($_POST['a']??'')), SQLITE3_BLOB);
    $stmt->bindValue(':b', htmlspecialchars(htmlspecialchars_decode($_POST['b']??'')), SQLITE3_BLOB);
    $stmt->bindValue(':t', intval(time()), SQLITE3_INTEGER);
    $r=$stmt->execute();
    $stmt = $db->prepare('SELECT * FROM sheet WHERE a NOT NULL or b NOT NULL or name NOT NULL');
    $result = $stmt->execute();
    }
   $view = [];
   echo '<table>';
 while($row = $result->fetchArray(SQLITE3_ASSOC)){$view[] = $row;}
 foreach($view as $v){echo'<tr><form action="" method="post"><td>'.diff($v['t']).'</td><td><input size="22" name="name" value="'.$v['name'].'"></td><td><input size="22" name="a" value="'.$v['a'].'"></td><td><input size="22" name="b" value="'.$v['b'].'"></td><td><button type="submit" name="x" value="'.($count??1).'">💾 '.($count??1).'</button></form></tr>';$count=intval($v['id'])+1;}
echo'<tr><form action="" method="post"><td>^v^</td><td><input size="22" name="name"></td><td><input size="22" name="a"></td><td><input size="22" name="b"></td><td><button type="submit" name="x" value="'.($count??1).'">💾 '.($count??1).'</button></td></form></tr>';
?></table><p>I made this without ChatGPT's direct assistance, unlike testx.php (it ofc took much longer and more silly bugs had to be fixed).<br>
 You can insert or update data, I didn't implement delete row buttons though.<br>
 <h1>aka ANY BUDDY WANT A DATA BASE*</h1>
 * That is a reference to a mid 2024 spammer (used to be in kickfilter), back when spam was silly</body></html>
