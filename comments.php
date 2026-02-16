<?php if(isset($_GET['9u9dyi'])&&$_GET['9u9dyi']=="t"){setcookie('9u9dyi','t',time()+864000,'/');$_COOKIE['9u9dyi']='t';} ?>
<!DOCTYPE html><html style="background:linear-gradient(270deg,#042,#024,#204)">
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Log</title><style>
input,textarea,button{padding:0.4em;margin:1em;background:#004;color:#0ff;border-radius:8px;border:2px solid #00f}
body{color:#ccf;padding-top:25px;padding-bottom:25px;font-family:sans-serif;margin-left:2%}
textarea:hover,input:hover,button:hover{border:2px solid #08f;background:#007}::placeholder{color:#fff}
a{color:#08f}a:visited{color:#f0f}span{color:#5f5}b{color:#d6d}.d{margin:0.2em}textarea{width:93%}
</style><body><h2 style="font-size:30px;margin-left:0.5em">Aera23's log</h2>
<?php if(isset($_COOKIE['9u9dyi'])){echo'
<form action="" method="post" id="dream"><!--cols="45"-->
<input name="name" value="Aera23"><br><textarea form="dream" rows="5" name="comment" size="70" placeholder="Text"></textarea><br><button>Go</button></form>';$w=' It\'s typically append only, but can be cleaned with number buttons.</p>';}
else{$w='</p>';}echo'<p style="color:#ff0;margin-left:1em;font-size:15px">This is @Aera23\'s logfile, usually used for dream logs, if blank on first load... refresh. '.$w;?>
<pre style="margin-left:1em;white-space:pre-wrap;font-size:15px"><form style="display:inline" action="" method="post">
<?php
 if(isset($_POST['comment'])){$cache=fopen('cache.txt','w+');$g='';}
 if(!empty($_POST['del'])&&!empty($_COOKIE['9u9dyi'])){file_put_contents('hide.txt',intval($_POST['del']).'|',8);}

$hi=@file_get_contents('hide.txt');
if($hi===false){$hi=[1000000];echo "No records hidden due to false file.";}

$ignore=explode('|',$hi);
 if(!file_exists("comments.txt")){exit('Warning, comments.txt is missing!');file_put_contents("comments.txt",'',8);}
 #Send and/or retrieve comments
 if(!empty($_POST['name'])&&!empty($_POST['comment'])&&isset($_COOKIE['9u9dyi'])){file_put_contents("comments.txt",str_replace(["<br>\r\n","<br />\r\n"],' | ',nl2br(htmlspecialchars(date("y-m-jS H:i:s | ").$_POST['name'].' - '.$_POST['comment']))."\n"),8);}
#Loop thru lines and extract messages
$fi=file("comments.txt");$i=0;$j=0;$d='';$max=count($fi);

#Pagination
$def=max($max-20,0);
if(isset($_GET['i'])){$n=intval($_GET['i']);}else{$n=$def;}#(int)=githubCopilot
if($n<0){$n=0;}elseif($n>$def){$n=$def;}

$pv=max($n-20,0);$nx=min($n+20,$max);
$pgn='';if($n>0){$pgn.='<a href="/comments.php?i='.$pv.'">Earlier records ['.$pv.']</a>';}
if($nx<=$def){if($n>0){$pgn.=' | ';}
  $pgn.='<a href="/comments.php?i='.$nx.'">Newer records ['.$nx.']</a>';}echo$pgn.'<br><br>';$o='';
#Style and list 20 logs
 foreach($fi as $f){
  if(!in_array($i,$ignore,true)){
  if(isset($_POST['comment'])){$g.=$f;}
  $j++;if($i>=$n&&$i<$n+20){$o=(isset($_COOKIE['9u9dyi'])?'<button class="d" type="submit" name="del" value="'.$i.'">'.$j.'</button> ':'<input type="submit" disabled value="'.$j.'"> ').preg_replace('/\|<\/span> (\S* )/i','|</span> <b>$1</b>',preg_replace('/^(.{4,18}\d\d \|)/i','<span>$0</span>',$f)).$o;}
#Get timestamps
  $fmt=explode('|',$fi[$i])[0];
  if(strlen($fmt)<14){$fmt='24-01-'.$fmt;}
  $d=date_parse_from_format("y-m-jS H:i:s ", $fmt);
  $time[$i]=mktime($d["hour"],$d["minute"],$d["second"],$d["month"],$d["day"],$d["year"]);
  }$i++;}
#Calc Streak
if(time()-filemtime('comments.txt')>140600){echo'Streak: 0 days';}else{
 for($j=$i-1;$j>0;$j-=1){
  if(isset($time[$j-1])&&isset($time[$j])){
    if($time[$j]-$time[$j-1]>140600){
     $q=round(($time[$i-1]-$time[$j])/86400);echo'520d+ in a row! Streak: '.max(0,$q).' day'.(($q==1)?'':'s');break;}}}}

echo' ... <a href="/comments.php'.(isset($_GET['t'])?'">back
':'?t=1">verify').'</a><br><br>';
#Display streak timings
if(isset($_GET['t'])){echo'Verify Streak:<br>';
for($j=$i-1;$j>0;$j-=1){
 if(isset($time[$j-1])&&isset($time[$j])){
  $tx=$time[$j]-$time[$j-1];
  if($tx<12960000){#1500 days to exclude 0th value
   echo'* '.date('Y-m-d',$time[$j-1]).'-'.date('Y-m-d',$time[$j]).' = '.
(($tx<140600)?'<span>'.$tx.'</span>':$tx).'<br>';}}}}
   
if(isset($_POST['comment'])){fwrite($cache,htmlspecialchars_decode($g));echo'Cache Updated<br>';fclose($cache);}

if(empty($o)){echo 'No logs, possibly refreshing will fix it';}
else{echo$o.'<br>'.$pgn;}

?></form></pre>
</body>
</html>
