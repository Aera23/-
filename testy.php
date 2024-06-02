<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html><style>
input{color:#22f}*{font-size:18px}h1{font-size:36px}tr:nth-child(2n){background:#fcf;}form{display:inline}table,tr,td,input{border:2px solid #930;border-collapse:collapse;padding:0.3em}body{color:#930;font-family:Arial,sans-serif;margin:2%;padding:2%;background-color:#dfd}.container{max-width:600px;margin:50px auto;background-color:#fff;border-radius:10px;padding:20px;box-shadow:0 0 10px rgba(0,0,0,.1)}.container form{margin-bottom:20px}.container input[type="file"]{margin-bottom:10px}.container h2{margin-bottom:10px}.container ul{list-style:none;padding:0}.container ul li{margin-bottom:5px}
</style><body>
<h1>CommunityDB (aka ANY BUDDY WANT A DATA BASE*)</h1>
<p>To use, add or change text, then click the number button on the same row you edited. Rather than implement offline inbox, I am reusing this test project :)</p>
<?php
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

    $stmt = $db->prepare('SELECT * FROM sheet');
    $result = $stmt->execute();
  $view=['1'];
  while($row = $result->fetchArray(SQLITE3_ASSOC)){$view[] = $row;}
    if($_POST['x']<count($view)){
 # Updating
 $stmt=$db->prepare('UPDATE OR IGNORE sheet SET name=:name, a=:a, b=:b, t=:t WHERE id=:id;');
 $stmt->bindValue(':id', intval($_POST['x']), SQLITE3_INTEGER);
 $stmt->bindValue(':name', htmlspecialchars($_POST['name']??''), SQLITE3_BLOB);
 $stmt->bindValue(':a', htmlspecialchars($_POST['a']??''), SQLITE3_BLOB);
 $stmt->bindValue(':b', htmlspecialchars($_POST['b']??''), SQLITE3_BLOB);
 $stmt->bindValue(':t', intval(time()), SQLITE3_INTEGER);
 $result = $stmt->execute();}
    elseif($_POST['x']!=""){
    $stmt = $db->prepare("INSERT INTO sheet (name,a,b,t) VALUES(:name,:a,:b, ".intval(time()).");");
     $stmt->bindValue(':name', htmlspecialchars($_POST['name']??''), SQLITE3_BLOB);
     $stmt->bindValue(':a', htmlspecialchars($_POST['a']??''), SQLITE3_BLOB);
     $stmt->bindValue(':b', htmlspecialchars($_POST['b']??''), SQLITE3_BLOB);
    $stmt->bindValue(':t', intval(time()), SQLITE3_INTEGER);
    $r=$stmt->execute();
    }
    $stmt = $db->prepare('SELECT * FROM sheet');
    $result = $stmt->execute();
   $view = [];
   echo '<table>';
 while($row = $result->fetchArray(SQLITE3_ASSOC)){$view[] = $row;}
 foreach($view as $v){echo'<tr><form action="" method="post"><td>'.diff($v['t']).'</td><td><input name="name" value="'.htmlspecialchars($v['name']).'"></td><td><input name="a" value="'.$v['a'].'"></td><td><input name="b" value="'.$v['b'].'"></td><td><input type="submit" name="x" value="'.htmlspecialchars($v['id']).'"></td></form></tr>';$count=intval($v['id'])+1;}
echo'<tr><form action="" method="post"><td>^v^</td><td><input name="name"></td><td><input name="a"></td><td><input name="b"></td><td><input type="submit" name="x" value="'.($count??1).'"></td></form></tr>';
?></table><p>I made this without ChatGPT's direct assistance, unlike testx.php (it ofc took much longer and more silly bugs had to be fixed).<br>
 You can insert or update data, I didn't implement delete because it may mess with the rows on the next insert<br>
 * That is a reference to months old spam (not even in kickfilter anymore), I found it funny (tho I didn't spam it)</body></html> 
