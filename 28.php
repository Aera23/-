<?php
function db($file){if(file_exists($file)){return file($file);}return [''];}

if($_POST['audio']!=""){setcookie("audio",$_POST['audio'],time()+34060);}
if($_GET['a']=="a"){file_put_contents("crc.txt",crc().date(" jS H:i:s")."\n",8);}
$_COOKIE['name']=trim($_COOKIE['name']);
$hpu='unlock.txt';
if($_COOKIE['name']==file_get_contents($hpu)&&$_COOKIE['name']!=""){file_put_contents("crc.txt",$_COOKIE['name'].date(".H:i:s.|"),8);exit('<meta http-equiv="refresh" content="4">');}
if(file_get_contents($hpu)=='"'&&!isset($_COOKIE['9u9dyi'])){file_put_contents("crc.txt",$_COOKIE['name'].date(".H:i:s.|"),8);exit('<meta http-equiv="refresh" content="4">');}
$config=explode("|",file_get_contents("config.txt"));
$phrase=$config[2]?:'Chat';
$v='<meta name="viewport" content="width=device-width, initial-scale=1">';
if($_POST['refresh']!=""){setcookie("refresh",$_POST['refresh'],time()+34000);}
if($_POST['name']!=""){setcookie("name",$_REQUEST['name'],time()+34000);}
if(strlen($_POST['col'])==7){setcookie('col',$_POST['col'],time()+34000);}

if($_GET['9u9dyi']=="t"){setcookie("9u9dyi","t",time()+432000);echo'<mark>Moderator cookie set</mark><form action="28.php" style="display:inline"><input type="submit" name="a" value="Settings"></form>';}
if($_GET['b']==""&&$_GET['a']==""){
if(file_exists('z28.php')){echo'<form action="z28.php" method="get" style="display:inline"><input type="submit" name="e" value="Digit Only"></form>';}
if(file_exists('testy.php')){echo'<form action="testy.php" method="get" target="_blank" style="display:inline">
<input type="submit" name="e" value="Community Database"></form>';}}
function roulette($obj){
$obj = str_replace("/","\\/",$obj);
 $strs=explode("\\",$obj);
 if(count($strs)==1){return $obj;}$obj='';
 foreach($strs as $str){
 if(strpos($str,"/sym")!==false){$aa='&#'.mt_rand(9312,11263).';&#'.mt_rand(9312,11263).';&#'.mt_rand(9312,11263).';&#'.mt_rand(9312,11263).';';}
 $bb='<mark>'.mt_rand(1,6).'</mark>';
 $dd=mt_rand(100,999);
 $cc='<mark style="background:#'.$dd.';color:#'.$dd.';border-radius:0px">‎____</mark>';
 $str=str_replace("/symbols",$aa,$str);
 $str=str_replace("/dice",$bb,$str);
 $str=str_replace("/wow",$cc,$str);
 $obj.=$str;}
return str_replace("/bk","\\",$obj);}

if($_POST['comment']!=""){

$check=floatval(str_replace("|314159","",$_REQUEST['t']));$d=(microtime(true)-$check); 
$len=strlen(htmlspecialchars($_POST['comment']));
if($d!=0){$cps=$len/$d;}else{$cps=-1;}
$x=fopen("9u9dyi","a+");fwrite($x, $cps.'|'.$_COOKIE['crc']."|".date("m-jS H:i:s|").htmlspecialchars($_POST['name'])."|".htmlspecialchars($_POST['comment'])."\n");fclose($x);}

function crc(){
 if($_COOKIE['crc']%1000==0){$e=(100+crc32("127.0.0.1")%900);}
 else{$e=100+($_COOKIE['crc']%900);}return $e;}

#Prevent duplicate messages (takes advantage of refresh requirements for cookies)
if($_REQUEST['q']!=""){setcookie("u", $_REQUEST['q'], time()+34000);}


if(strpos($_GET['f'],".visit")!==false){echo '<style>*{color:#fff;background:#000}input{padding:0.3em;border-radius:8px;border:2px solid #0a0}.x{color:#888}form{display:inline}</style>';
$file = explode("|",file_get_contents($_GET['f']));
echo'<br><form action="" method="get"><input type="hidden" name="f" value="'.$_GET['f'].'"><input name="i" value="'.max($_GET['i']-10000,0).'" size="6"><input type="submit" value="Previous"></form>||<form action="" method="get"><input type="hidden" name="f" value="'.$_GET['f'].'"><input name="i" value="'.min($_GET['i']+10000,(count($file)-10000)).'" size="6"><input type="submit" value="Next"></form><br><br>';$r=count($file);
for($i=($_GET['i']?:0);$i<min($r,($_GET['i']?:0)+10000);$i++){echo $file[$i]."|";}exit;}

if($_GET['b']=="d"){$file=db("1id8sjl.txt");$count = count($file);for($i=$count-1;$i>=max(0,$count-16);$i--){$t.=$file[$i];}$limit = substr_count($t,crc()."-");  if($limit>($config[6]?:7)&&($_POST['comment']!=""||$_POST['rpl']!="")){file_put_contents("9u9dyi","|m".time(),FILE_APPEND);exit("<mark>! <a href='28.php?b=d'>Clear then wait for reply</a></mark>");}}

#Filtering spam
if($_POST['comment']!=""){$token=crc32($_REQUEST['t']);
if($_POST['q']==file_get_contents("q.txt")){$token = -1;}else{file_put_contents("q.txt",$_POST['q']);}
#Variables defined above
 if(($token!=$_REQUEST['q']||$_COOKIE['u']==$_POST['q'])&&$_POST['rpl']!=""&&$_POST['reply']!=""){file_put_contents("9u9dyi","|c".time(),FILE_APPEND);
exit("<mark>! <a href='28.php?b=d'>Resubmit detected, click to continue.</a></mark>");}
 else{if($d==0){$d = 10;}
  $length=strlen(htmlspecialchars($_POST['comment']));$t='';
  if((($length/$d)>($config[0]?:10) && strpos($_POST['rpl'],"-")===false) || strlen($_POST['name'])>($config[1]?:300)){
   echo ($length/$d).' '.$length;
  file_put_contents("9u9dyi","|s".time(),FILE_APPEND);
  exit("<mark>! <a href='28.php?b=d'>Unknown error.</a></mark>");
}}}

if($_GET['b']=="c" && $_COOKIE['9u9dyi']!=""){
$e=$_POST['del'];
if($e!=""){rename($e,$e.".ivisit");}
$e=explode(".v",$e)[0];
file_put_contents($hpu,$e);
#Ideally, there will be a loop to clean all messages from that user, mark the lines as [redacted ###] and store it so it can be restored or read if needed. I won't implement it though
exit("<meta http-equiv='refresh' content='1 28.php?b=b'><h3><mark>Banned $e</mark></h3>");}

if(($_GET['a']=='Settings' && $_COOKIE['9u9dyi']!="") || $config[0]==""){
setcookie("9u9dyi","t",time()+432000);
$phrase=$config[2]?:'Chat Settings';include('g3.php');
if($_POST['a']!=""){file_put_contents("config.txt",htmlspecialchars($_POST['a']."|".$_POST['b']."|".$_POST['c']."|".htmlspecialchars_decode($_POST['d'])."|".$_POST['f'])."|".$_POST['g']."|".$_POST['h']."|".strrev(base64_encode($_POST['i'])));echo'<i>Saved</i>';$config=explode("|",file_get_contents("config.txt"));}
if($_POST['e']!="" && $_POST['e']!=file_get_contents("canary.txt")){file_put_contents("canary.txt",$_POST['e']);}

echo'<!DOCTYPE html><html>'.$v.'<h2>'.$q.' Config <a href="28.php"><button style="display:inline">BACK</button></a></h2>
<a href="28.php?'."9u9dyi".'=t">Pls BOOKMARK admin link!</a><br><form action="" method="post" id="f">
<b>Name of chat:</b><input name="c" value="'.$config[2].'" size="25"><br>
<b>Characters per second :</b><input name="a" value="'.($config[0]?:8).'" size="4"><br>
<b>Message max length:</b><input name="b" value="'.($config[1]?:300).'" size="4"><br>
<b>Max Messages in a row:</b><input name="h" value="'.($config[6]?:7).'" size="4"><br>
<b>Messages to show:</b><input name="f" value="'.($config[4]?:30).'" size="4"><br>
<b>String replacements:</b><input name="g" value="'.($config[5]?:1).'" size="4"><b>(2 = admin, 1 = all)</b><br>
<b>Invite code (30 on public chat):</b><input name="i" value="'.(base64_decode(strrev($config[7]))?:30).'" size="8"><br><br>
<button>Save</button><br><br>';
 if(file_get_contents("links.php")!=""){echo'
 The following settings can be <a href="https://pgptool.org/" target="_blank">safely</a> left blank:
 <br><br><input name="d" value="'.$config[3].'" size="'.(strlen($config[3])?:35).'" placeholder="Link"><br>
 <textarea name="e" class="v" form="f" cols="80" rows="40" placeholder="canary.txt">'.htmlspecialchars(file_get_contents("canary.txt")).'</textarea>';}
echo'</form><br><b>If @Aera23 has an update, please visit <a href="http://forwhoallvglhpsx6dhycfb4fu4a2lqkvxtwlivruw765qxofyns7wqd.onion/source.php?f=28.php&a=100" target="_blank">link 1</a> and <a href="http://forwhoallvglhpsx6dhycfb4fu4a2lqkvxtwlivruw765qxofyns7wqd.onion/source.php?f=g3.php&a=100" target="_blank">link 2</a>, which may take a while to load. Then replace the old code with these files.</b><style>button:hover,a:hover{color:#0ff}button,input{background:#446;color:#fff;border-radius:8px;padding:0.4em;margin:0.2em;border:2px solid #300}button:hover,input:hover{border:2px solid #520}html{margin:3em;font-family:sans-serif}::placeholder{color:#fff;opacity: 1}::-ms-input-placeholder{color: #fff;opacity: 1}
*{background:#000;color:#0af;}b,h2{color:#0cf}form{display:inline}textarea{padding:0.3em;border-radius:15px}</style></form><br>Debug: ';print_r($_POST);echo'</html>';exit;}

if($_POST['del']!=""){$a=2;
$file=db("1id8sjl.txt");$count = count($file);
 if($_COOKIE['crc']%1000==0){$e=(100+crc32("127.0.0.1")%900);}
 else{$e=100+($_COOKIE['crc']%900);}
if($_POST['del']=="n"){for($i=0;$i<$count-max(($_POST['lines']*2),2);$i++)
{$prvt.=$file[$i];}file_put_contents("1id8sjl.txt",$prvt);}
elseif($_POST['del']!="" && strpos($file[$_POST['del']],$e)!==false && $e!=""){$a=1;}
elseif($_COOKIE['9u9dyi']!=""){$a=1;}
if($a==1){for($i=0;$i<$count;$i++){if($_POST['del']!=$i && $_POST['del']!=$i-1){$prvt.=$file[$i];}}file_put_contents("1id8sjl.txt",$prvt);}}

#Refresh List (intentionally using softer checks)
if($_GET['b']=="b"&&$_COOKIE['o']!=""){
$sec=intval($_COOKIE['refresh'])?:'4';
$names=glob("*.visit");$arr=[];
#https://stackoverflow.com/posts/3298787/revisions
array_multisort(array_map('filemtime',$names),SORT_NUMERIC,SORT_DESC, $names);$e=0;$i=0;
foreach($names as $name){
if($i<11){
$p=file_get_contents($name);
$l=filemtime($name);
if(($l+30)>time()){$e+=1;}
$z=explode("|",$p);
$qq=array_key_last($z);
$i++;
if($_COOKIE['9u9dyi']!=""){$p='<tr><td><form action="28.php?b=c" method="post" style="display:inline"><button name="del" value="'.$name.'" class="t">❌</button></form></td><td style="text-align:center">';}else{$p='<tr><td style="text-align:center">';}
$arr[]= $p.str_replace(".visit","",$name).'</td><td style="text-align:center">'.str_replace("3 ", "31 ",str_replace(date("jS"),"",str_replace(date("m-"),"",$z[$qq].'<span class="x"></td><td style="text-align:right"><a href="28.php?f='.$name.'&i='.max($qq-600,0).'" target="_blank">'.number_format($qq))))."</a></td></tr>";}else{break;}}
$tt='';$z=0;foreach($arr as $str){if($z<11){$tt=$tt.$str;}$z++;}
echo"<!DOCTYPE html><html><meta http-equiv='refresh' content='$sec 28.php?b=b&o=$e'>";
if($_GET['o']!=""&&$_GET['o']!=$e&&$_COOKIE['ina']=="t"&&$_GET['b']=='b'){$phrase='-';include('g3.php');gt();echo'<mark style="display:inline">*</mark>';}
echo"<style>a{color:#0ff}button{background:#f88;border-radius:8px;border:2px solid #f00}table{border-spacing:0;}td{color:#fff;border-radius:6px;background:inherit;border:1px solid #afa;line-height:1.3;font-size:16px;max-width:10em;padding:0.2em}.x{color:#888}.t:hover{border:2px solid #80f;background:#f80}</style><center><span style='font-size:18px;background:inherit;color:#afa'>Last online: ";
exit($e.' (last 30s)</span><br><table>'.$tt.'</table></center></html>');}

$em=(htmlspecialchars($_REQUEST['e'])?:'1');
if($em>1.5){$em=1.5;}
if($em<0.7){$em=0.7;}
if($_COOKIE['o']<time() && crc32(base64_encode($_SERVER['HTTP_USER_AGENT']."127.0.0.1".$_COOKIE['o']))==$_COOKIE['crc']){}
else{if($_GET['a']=="a"){header('Location: g3.php?next=28.php?a=a');}elseif($_GET['b']=='d'){header('Location: g3.php?next=28.php?b=d');exit;}elseif($_GET['b']=="b"){header('Location: g3.php?next=28.php?b=b');}else{header('Location: g3.php?next=28.php');exit("<mark>Solve CAPTCHA to chat</mark>");}}

if($_GET['b']=='d'){
include('g3.php');

function process($e,$find,$change)
{if($e==$_POST['name']){$e=str_replace('Aera23','alkaline',$e);$e=str_replace('Aera344','Aera23',$e);$e=substr($e,0,min(strlen($e),50));}
$e=htmlspecialchars($e);
$x=['hild p','teleg','t.me','h i l d','nigg','i watch pedo','incest','pajeet','notbu','edofil','opic link','invite/i=','cp vid','kill them all','yatl','05dd3b3dd','ussy','cheese pizza','cp tele','1705262',
'ck a 8yo','tortub','changehd','cream pie','porn?','hotties','slut','on fucking','yatl','edoli','gekkko','loli','sexy','j2gpb','rape th','oy vid','irl vid','ucking my sis','horny','pizza link','cartelcp',
'cum in','pedo links','selling my nude','05962e20f','gas immigrant','LITTLE GI','to download cp','cp link ?','kidfli','cum on','jewish ga','r*pe and m*rder','5yos are se','onion center','teen vid','nude',
'tits?','whore','coxpql','killing their kid','kill their offspr','ionist','ewish retard','wipe their family','racemix','PREPUBE','6 years old for','1488','stupid jew','club p','children p','porn vid'];
foreach($x as $y){
if(stripos($e,$y)!==false){file_put_contents('unlock.txt',$_POST['name']);exit();}}
$e=nl2br($e);
$e=substr($e,0,min(strlen($e),($config[1]?:500)));
if(strpos($e,"http")===false){$e=highlighter($e);}
$e=str_replace('cafe','café',$e);
$e=str_ireplace('`e','é',$e);
$e=str_replace('``','&#',$e);
$e=str_replace(':\\','<mark>:\\</mark>',$e);
$e=str_replace(':rainbow:','🟤 🔴 🟠 🟡 🟢 🔵 🟣',$e);
$e=str_ireplace(':o','<mark>:o</mark>',$e);
$e=str_ireplace('/chess','https://lichess.org/',$e);
$e=str_ireplace('/help','/[dice, chess, symbols, me, pmhelp, wow, shrug, help, fl] &lt;&lt; Current commands',$e);
$e=str_ireplace('/pmhelp','/[pm 999 message (to PM user with the leftmost number of 999)] ',$e);
$e=str_replace('XD','<mark>XD</mark>',$e);
$e=str_ireplace(':cat:','🐈',$e);
$e=str_ireplace(':dog:','🐕',$e);
$e=str_ireplace(':tree:','🌴',$e);
$e=str_ireplace(':music:','🎵',$e);
$e=str_ireplace(':book:','📒',$e);
$e=str_ireplace('/afk','isAFK',$e);
$e=str_ireplace('/back','<span style="animation:AERA 6s infinite !important;">Back</span>',$e);
$e=str_replace('isAFK','<span style="animation:AERA 6s infinite !important;">isAFK</span>',$e);
$e=str_replace('/shrug',':shrug:',$e);
$e=str_ireplace(':shrug:','¯&#92;_(ツ)_/¯',$e);
$e=str_ireplace(':books:','📕 📗 📘 📙',$e);
$e=str_ireplace(':fire:','🔥',$e);
$e=str_ireplace(':ice:','🧊',$e);
$e=str_ireplace(':cash:','💸',$e);
$e=str_ireplace(':shroom:','🍄',$e);
$e=str_ireplace(':duck:','🦆',$e);
$e=str_ireplace(':panda:','🐼',$e);
$e=str_ireplace(':fox:','🦊',$e);
$e=str_ireplace(':alien:','👾',$e);
$e=str_ireplace(':hug:','🫂',$e);
$e=str_replace(';)','<mark>;)</mark>',$e);
$e=str_replace(':?','<mark>:?</mark>',$e);
$e=str_ireplace(':kiss:','😗',$e);
$e=str_replace('plmm','http://forwhoallvglhpsx6dhycfb4fu4a2lqkvxtwlivruw765qxofyns7wqd.onion/',$e);
$e=str_ireplace(':ice:','🧊',$e);
$e=str_ireplace(':goat:','🐐',$e);
$e=str_ireplace('&lt;q&gt;','<q>',$e);
$e=str_ireplace('&lt;/q&gt;','</q>',$e);
#https://stackoverflow.com/questions/14399246/preg-replace-url-with-links-mime-types-failure (corrected at regex101.com)
$e=preg_replace('|([\w\d]*)\s?(https?://([\d\w\.-]+\.[\w\.]{2,6})[^\s\]\[\<\>]*/?)|i', '$1 <a href="$2" target="_blank">$2</a>', $e);
$e=str_replace('aera23@','aer\\a23@',$e);
$e=str_ireplace('@aera','@aer\\a',$e);
$e=str_replace('aera23.net','aer\\a23.net',$e);
$e=str_replace('&lt;3','<mark style="background:red;">♥</mark>',$e);
$e=str_replace('aera','<a href="mailto:aera23@protonmail.com">A</a><font color="#0ff">e</font><font color="#0f0">r</font><font color="#ff0">a</font><font color="#f86">2<span class="a0">7</span><span class="a1">6</span><span class="a2">5</span><span class="a3">4</span><span class="a4">3</span><span class="a5">2</span><span class="a6">1</span><span class="a7">0</span><span class="a8">9</span><span class="a9">8</span></font>',$e);
$e=str_replace(':clock:','<font color="#f86"><span class="a0">7</span><span class="a1">6</span><span class="a2">5</span><span class="a3">4</span><span class="a4">3</span><span class="a5">2</span><span class="a6">1</span><span class="a7">0</span><span class="a8">9</span><span class="a9">8</span></font>',$e);
$e=str_replace('</font>23','</font>',$e);
$e=str_ireplace(':whirl:',':whirlwind:',$e);
$e=str_ireplace(':spacedock:','<span class="a4">8==>__<==8</span><span class="a3">8==>_<==8</span><span class="a2">8==><==8</span><span class="a1">8=~~~~~=8</span><span class="a0">wheeeee</span><span class="a9">wheeeee</span>',$e);
$e=str_ireplace(':docking:','<span class="a4">8==>__(|)</span><span class="a3">8==>_(|)</span><span class="a2">8==>(|)</span><span class="a1">8=~~~~~|)</span><span class="a0">wheeeee</span><span class="a9">wheeeee</span>',$e);
$e=str_ireplace(':lovedock:','<span class="a4">(|)__(|)</span><span class="a3">(|)_(|)</span><span class="a2">(|)(|)</span><span class="a1">(|~~~~|)</span><span class="a0">wheeeee</span><span class="a9">wheeeee</span>',$e);
$e=str_ireplace(':whirlwind:','<span class="a4">o--0-</span><span class="a3">oo-0-</span><span class="a2">-oo0-</span><span class="a1">--oo0</span><span class="a0">0--oo</span><span class="a9">00-oo</span>',$e);
$e=str_ireplace('magic','<font color="#0ff">m</font><font color="#0f0">a</font><font color="#ff0">g</font><font color="#f86">i<span class="a0">c</span><span class="a1">C</span><span class="a2">c</span><span class="a3">C</span><span class="a4">c</span><span class="a5">C</span><span class="a6">c</span><span class="a7">C</span><span class="a8">c</span><span class="a9">C</span></font>',$e);
$e=roulette($e);
$e=str_replace($find,$change,$e);
$e=str_replace('!.','!',$e);
$e=str_replace('<mark>:3</mark>)','<mark>:3)</mark>',$e);
$e=str_replace('http<mark>:/</mark>','http:/',$e);
$e=str_replace('https<mark>:/</mark>','https:/',$e);
$e=str_replace('/<b>@</b>','/@',$e);
$e=str_replace('&lt;br&gt;','<br>',$e);
return $e;}}

#Show Colour choice
if($_GET['a']==""){if($_COOKIE['col']==""){$cb=(mt_rand()%10);
$cf=["#cc552",'#77ff7','#ff334',"#11ffe","#eeaa0","#00dfd","#ff880","#ffff0","#00ff0","#0088f"];$cfi=$cf[$cb].$cb;}
else{$i=0;

if(strlen($_POST['col'])==7){$cfi=$_POST['col'];}
else{$cfi=$_COOKIE['col'];}}

if($_GET['b']=='d'){
#Basics
$comment=trim($_POST["comment"]);$z=2;

#Saving messages
if($_POST["name"]!=""&& $comment!=""&&$_COOKIE['u']!=$_REQUEST['q']){$z=5;

#Prevent multiple submissions within 2s of last one
if(file_get_contents("".crc())==''){file_put_contents("".crc(),time());}
elseif((time()-2)> file_get_contents("".crc())){file_put_contents("".crc(),time());}
else{file_put_contents("".crc(),time());exit("<a href='28.php?b=d'><mark>Too fast</mark></a>");}

if(file_get_contents("3.html")!=""){
$file=db("3.html");foreach($file as $filter){$f=explode("|",str_replace("\n","",$filter));$find[]=$f[0];$change[]=substr($f[1],0,-1);}}
if(strpos($_POST['comment'],'/me ')!==0){$txt=process($_POST["name"],$find,$change)." - ".process($comment,$find,$change);}
else{$txt=process($_POST["name"],$find,$change).str_replace('/me ',' ',process($comment,$find,$change));}}

#Topic
if(strpos($_POST['comment'],"/bm ")===0&&($config[5]==1||$_COOKIE['9u9dyi']!="")){
$bm=str_replace("/bm ","",process($_POST['comment'],$find,$change));
$cf=fopen("load.txt", "w+") or die($m);fwrite($cf, $bm) or die("<a href='28.php?b=d'><mark>Can't write</mark></a>");fclose($cf);$z=3;}
#Ban
if(strpos($_POST['comment'],"/k ")===0&&isset($_COOKIE['9u9dyi'])){$cf=fopen($hpu,"w") or die($m);$e=htmlspecialchars(str_replace("/k ","",$_POST['comment']));fwrite($cf, $e) or die("<a href='28.php?b=d'><mark>Can't write</mark></a>");fclose($cf);$z=4;echo"<mark>Banned $e</mark>";}
#AntiRaid
if(strpos($_POST['comment'],"/r")===0&&isset($_COOKIE['9u9dyi'])){if(file_get_contents($hpu)=='"'){unlink($hpu);echo"<mark>Anti-Raid off</mark>";}else{$cf=fopen($hpu,"w") or die($m);fwrite($cf, '"') or die("<mark>Can't write</mark>");fclose($cf);echo"<mark>Anti-Raid on</mark>";}$z=4;}
#Unban
if(strpos($_POST['comment'],"/uk ")===0&&isset($_COOKIE['9u9dyi'])){unlink($hpu) or die($m);$e=htmlspecialchars(str_replace("/uk ","",$_POST['comment']));if(file_exists($e.'.visit.ivisit')){rename($e.'.visit.ivisit',$e.'.visit');};$z=4;echo"<mark>Unbanned $e</mark>";}
elseif(strpos($_POST['comment'],"/uk")===0&&$_COOKIE['9u9dyi']!=""){if(file_exists($hpu)){$e=file_get_contents($hpu);}if(file_exists($e.'.visit.ivisit')){rename($e.'.visit.ivisit',$e.'.visit');};$z=4;echo"<mark>Unbanned $e</mark>";}
#Filter add
if(strpos($_POST['comment'],"/fa ")===0&&($config[5]==1||isset($_COOKIE['9u9dyi']))){$cf=fopen("3.html","a") or die($m);$e=htmlspecialchars(str_replace("/fa ","",$_POST['comment']));fwrite($cf, $e."\n") or die("<a href='28.php?b=d'><mark>Can't write</mark></a>");fclose($cf);$z=4;echo"<mark>Filter added: $e</mark>";}
#Filter remove
if(strpos($_POST['comment'],"/fr ")===0&&($config[5]==1||isset($_COOKIE['9u9dyi']))){$file=db("3.html");$e=str_replace("/fr ","",$_POST['comment']);
for($i=0;$i<count($file);$i++){if($e!=($i+1)){$p.=$file[$i];}}file_put_contents("3.html",$p);
$z=4;echo"<mark>Filter $e removed</mark>";}
#Filter list
if(strpos($_POST['comment'],"/fl")===0&&($config[5]==1||isset($_COOKIE['9u9dyi']))){
$v=db("3.html");$i=0;
foreach($v as $z){$i++;$e.=$i.'&gt;'.$z.'<br>';}
echo"<mark>$e</mark>";$z=4;}

#Writing
if($_COOKIE['u']!=$_REQUEST['q']&&$z==5){$e='';

if($_POST['rpl']!=""){$file=db("1id8sjl.txt");}
 #Find the message number that was replied to, cannot be more than 300 below the current message
 if($_POST['rpl']!=""&&$_POST['rpl']>(count($file)-(($config[4]?:30)*2))){$file=db("1id8sjl.txt");$reply=$file[$_POST['rpl']];if(strpos($reply,"^!")!==false){$reply=$file[$_POST['rpl']];}if($reply==""){$reply="
";}
$e='<button style="background:radial-gradient(#004, #040, #400);font-size:0.75em;border:2px solid #afa;line-height:0.8em;float:right;margin-top:-3em">'.crc().'-'.$reply.'</button>
';}
elseif($_POST['rpl']!=""&&$_POST['rpl']<0){$line=abs($_POST['rpl']);$reply=$file[$line];}
#Prepend the CRC code to the message
$e.=crc();
if(strlen($_POST["col"])==7){$colour = htmlspecialchars($_POST['col']);}
else{$colour = htmlspecialchars($_COOKIE["col"]);}

$write=$e.'-'.'<i>'.date("m-jS H:i:s").'</i> |<span style="color:'.$colour.';font-size:'.($em ?: '1').'em;font-family:'.(htmlspecialchars($_POST['f']) ?: 'inherit').'">'.$txt."</span>";$nl="

";preg_match("/\/pm ([0-9]{3}) ?/i",strtolower(process($_POST['comment'],$find,$change)),$matches);
#Check for PM command, before writing somewhere.

if($matches[1]!=""&&strpos($_POST['comment'],"/pm")===0){
$write=str_replace($matches[0],'',$write.$nl); $m="The comments aren't working due to a server error. ";
$write="/pm ".$matches[1].crc()."-^!<b><u>[PM]</u></b> ----".$write;

if($_POST['rpl']!=""&&strpos($file[$line],$e)!==false && $e!=""){
for($i=0;$i<count($file);$i++){if($line!=$i){$prvt.=$file[$i];}else{$prvt.=$write."\n";}}file_put_contents("1id8sjl.txt",$prvt);}
else{$cf=fopen("1id8sjl.txt", "a+") or die($m);
fwrite($cf, $write) or die("Can't write");
fclose($cf);}}

elseif($_POST['rpl']!=""&&strpos($file[$line], $e)!==false && $e!=""){
for($i=0;$i<count($file);$i++){if($line!=$i){$prvt.=$file[$i];}else{$prvt.=$write."\n";}}file_put_contents("1id8sjl.txt",$prvt);}
else{$cf=fopen("1id8sjl.txt", "a+") or die($m);fwrite($cf, $write.$nl) or die("<mark>Can't write</mark>");fclose($cf);}}}

if($_GET['b']!="d"){echo'<!DOCTYPE html><link rel="manifest" href="/manifest.json"/><html id="f"><title>'.$phrase.'</title>';}
if($_REQUEST['lines']==""){$l=12;}else{$l=htmlspecialchars(min($_REQUEST['lines'],48));}
$e = microtime(true);
$token=crc32($e."|314159");
#Light theme: bg #ff9, txt #930
echo $v.'<style>
@media(max-width:929px){#tx{width:99%;height:10em}#d{width:99%}}
@media(min-width:930px){#tx{width:32%;height:13.5em;margin-top:-3.5em}#d{width:65%}}#f:nth-child(1){background:radial-gradient(#000014, #001400, #140000);}
html{color:#fff}pre{font-family:sans-serif;}a{color:#afa}a:hover{color:#28f}input,button,iframe{border-radius:8px;border:1px solid #444}* mark{padding:0.2em;border-radius:10px}
input{padding:0.5em;background:#450;border:3px solid #300;color:#fff !important}input:hover{padding:0.5em;background:#560;border:3px solid #500}.n:hover{background:#f00}
.a1{font-size:20px}.a2{font-size:24px}.a3{font-size:28px}.a4{font-size:32px}h3{margin-top:0.3em}</style><body style="margin:1.5em">';

if($_REQUEST['show']!=""){
echo'<h3 style="padding:0px;margin:0px" id="#top"><center style="margin-top:-1.15em">'.$q.' | Score: '.count(db("9u9dyi")).'</center></h3>';}
echo'<style>input{padding:0.5em;background:#446;placeholder:#02f}input:hover{padding:0.5em; background:#558;}';
for($i=0;$i<24;$i++){echo'.e'.$i.'{animation:s 86400s linear infinite;animation-delay:'.(0-((time())%86400)-($i*3600)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<6;$i++){echo'.d'.$i.'{animation:k 3600s linear infinite;animation-delay:'.(0-((time()-2999)%3600)-($i*600)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<10;$i++){echo'.c'.$i.'{animation:c 600s linear infinite;animation-delay:'.(0-((time()-539)%600)-($i*60)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<6;$i++){echo'.b'.$i.'{animation: i 60s linear infinite;animation-delay:'.(0-((time()-28)%60)-($i*10)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<10;$i++){echo'.a'.$i.'{animation:t 10s linear infinite;animation-delay:'.((10-(time()-28)%10)-$i).'s;opacity:0;font-size:0.1px}';}
echo'.r{color:#fff}.g{width:15em;margin-right:8em;margin-left:0.5em;background:#004;margin-top:-1px;padding:0.2em;border-radius:10px}
/*Clock :)*/
@keyframes t{
 0%{opacity:1;font-size:20px}9.98%{opacity:1;font-size:20px}9.99%{opacity:0;font-size:20px}10%{opacity:0;font-size:0.1px}}
@keyframes i{
 35%{opacity:0;font-size:0.01px}35.1%{opacity:0;font-size:20px}35.2%{opacity:1;font-size:20px}51.7%{opacity:1;font-size:20px}51.8%{opacity:0;font-size:20px}51.9%{opacity:0;font-size:0.1px}}
@keyframes c{
 0%{opacity:0;font-size:0.1px}0.01%{opacity:0;font-size:20px}0.02%{opacity:1;font-size:20px}10.01%{opacity:1;font-size:20px}10.02%{opacity:0;font-size:20px}10.03%{opacity:0;font-size:0.1px}}
@keyframes k{
 0%{opacity:0;font-size:0.1px}0.01%{opacity:0;font-size:20px}0.02%{opacity:1;font-size:20px}16.67%{opacity:1;font-size:20px}16.68%{opacity:0;font-size:20px}16.69%{opacity:0;font-size:0.1px}}
@keyframes s{
 0%{opacity:0;font-size:0.1px}0.0001%{opacity:0;font-size:20px}0.0002%{opacity:1;font-size:20px}4.1657%{opacity:1;font-size:20px}4.1658%{opacity:0;font-size:20px}4.1659%{opacity:0;font-size:0.1px}}

/*https://stackoverflow.com/questions/4148499/how-to-style-a-checkbox-using-css*/
.l span{height:15px;width:15px;border:1px solid grey;background:'.(htmlspecialchars($_COOKIE['col'])?:'#8f8').';display:inline-block;position:relative;margin-top:5px;}.l input{opacity:0.01}
[type=checkbox]:checked+span:before{content:"✔️";position:absolute;top:-4px;left:0;}</style>';

if($_GET['b']=='d'){
echo'<form action="" target="_self" method="post">Colour:
<input type="color" name="col" value="'.$cfi.'" style="padding:0em">...
<input name="name" size="15" value="'. (htmlspecialchars($_REQUEST["name"]) ?: htmlspecialchars($_COOKIE["name"]) ).'" placeholder="Nick" required><br>
<input style="color:#fff;background: linear-gradient(to left,#252, #525);" name="comment"';
#PM/M
preg_match("/^\/pm ([0-9]{3}) ?/i",strtolower(htmlspecialchars($_POST['pm']?:$_POST['comment'])),$matches);
if($matches[0]!=""){echo' value="'.$matches[0].'"';}

preg_match("/^\/m[^e]|\/m$/i",strtolower(htmlspecialchars($_POST['comment'])),$matches);
if($matches[0]!=""){echo' value="'.$matches[0].'"';}

echo' placeholder="';if($_REQUEST['reply']==""){echo'Type a message.';
if($_REQUEST['show']!=""){
echo' Current heuristics: '.$limit.'/'.$config[6].'L & '.$config[0].' C/S & '.$config[1].'C."';}
} elseif($_REQUEST['reply']>0){echo'Reply (send a blank message to cancel)"';}else{echo'Edit (send a blank message to cancel)"';}
if($_REQUEST['reply']<0){$file=db("1id8sjl.txt");

if(strpos($file[abs(intval($_REQUEST['reply']))],"/pm")===false){
preg_match('/\">(.*) - (.*)<\/span>/i',$file[abs(intval($_REQUEST['reply']))],$matches);$e=strip_tags($matches[2]);}
else{
preg_match("/\/pm ([0-9]{3})([0-9]{3})-\^!/i",$file[abs(intval($_REQUEST['reply']))],$x);
preg_match('/\">(.*) - (.*)<\/span>/i',$file[abs(intval($_REQUEST['reply']))],$matches);$e='/pm '.$x[1].' '.strip_tags($matches[2]);}
echo' value="'.$e.'"';}echo'" size="54" autofocus="true" id="a"><script>setTimeout(function(){var a=document.getElementById("a");a.focus();a.selectionStart=a.selectionEnd=1000;},0);</script>';#https://stackoverflow.com/questions/511088/use-javascript-to-place-cursor-at-end-of-text-in-text-input-element

if($_REQUEST['show']!=""){
echo'<span>Emphasis (0.7-1.5em):</span>
<input name="e" size="3" value="'. min(htmlspecialchars($_REQUEST['e']),2).'" max="2">
<span>Refresh (s)</span>
<input name="refresh" size="3" value="'. htmlspecialchars($_POST['refresh']).'" min="2" placeholder="4">
<span>Audio (on|off)</span>
<input name="audio" size="3" value="'. htmlspecialchars($_POST['audio']).'">
<span>Font</span><input name="f" value="'.htmlspecialchars($_REQUEST['f']).'"><!--span>Messages:</span><input name="lines" size="2" value="htmlspecialchars($l)" max="64"-->';}

#Chat form
echo'<input type="hidden" name="t" value="'.$e.'|314159"><input type="hidden" name="q" value="'.$token.'"><input type="hidden" name="rpl" value="'.htmlspecialchars($_REQUEST['reply']).'">'; if($_COOKIE['9u9dyi']!=""){echo'<span class="n"><input type="checkbox" name="del" value="n"></span>';}
echo'<input style="background:#252;color:#fff" type="submit" onclick="window.navigator.vibrate(10);" value="Send"><br>
<label class="l"><input type="checkbox" name="show" value="y" ';if($_REQUEST['show']!=""){echo' checked';}exit('><span></span>&nbsp;&nbsp;Hidden features and accessibility</label></form>');}

else{echo'<style>#show,.content{display:none}
#show:checked~.content{display:block !important}label u{color:#afa}label u:hover{color:#0ff}
show,.hidden{display:block}#show:checked~.hidden{display:none}'.$hide.'
</style><input id="show" type=checkbox><label for="show"><u>'.$phrase.' Help<b></b></u> | <a href="music.php" target="_blank">🎵</a> | <a href="22.php" target="_blank">🎨</a> | <a href="colour.php" target="_blank">🚅</a> | <a href="files.php" target="_blank">⬆️</a>';
 if($_COOKIE['9u9dyi']!='' && $_GET['9u9dyi']==""){echo'<form action="28.php" style="display:inline"><input type="submit" name="a" value="Settings"></form>';}
echo'<br><span class="r">UTC: <span class="g"><span class="e0">0</span>';
for($i=0;$i<15;$i++){if($i!="0"){$e=((24-$i)%24);}else{$e="00";}echo'<span class="e'.$i.'">'.((24-$i)%24).'</span>';}
for($i=15;$i<24;$i++){echo'<span class="e'.$i.'">0'.(24-$i).'</span>';}echo'<span class="x">:</span>';
for($i=0;$i<6;$i++){echo'<span class="d'.$i.'">'.(5-$i).'</span>';}
for($i=0;$i<10;$i++){echo'<span class="c'.$i.'">'.(9-$i).'</span>';} echo'<span class="x">:</span>';
for($i=0;$i<6;$i++){echo'<span class="b'.$i.'">'.(5-$i).'</span>';}  for($i=0;$i<10;$i++){ echo'<span class="a'.$i.'">'.(9-$i).'</span>';}
echo'<br></span></label><div class="content"><span style="color:#66e">Set standard Tor security for audio pings. <i>(Type "/pm '.crc().' message" for self-PM.)</i>
<br>&gt;Last Online is based on browser refresh, which can be incorrect if a user leaves their tab open while AFK, or their browser stops refreshing due to temporary network timeout.</span>
<p style="color:#8e8">Emojis and commands: :alien: :books: :tree: :book: :kiss: :dog: :fire: :ice: :cash:<br><i style="color:#afa">MORE: :egg: :taco: :eggplant: :rocket: :ghost: :elephant: :snail: :lips: :pumpkin: :xmas: :bird: :lovedock: :docking: :spacedock: :miii:</i><br><span style="color:#e6e">:shrug: /shrug :goat: :rainbow: /wow /symbols :cat: :music: :shroom: /me, /dice, <mark style="color:red;background:#400"><3</mark>, <mark>:)</mark>, <mark>:3)</mark> , <mark>XD</mark>, <mark>^.^</mark>, <mark>*.*</mark>, <mark>*-*</mark></a>, :panda: :fox: :duck:</span></p>';if($config[5]==1){echo'"/fa test1|test2" adds a filter which replaces test1 with test 2<br>
"/fr 1" removes the first filter<br>
"/fl" lists all the filters in a tiny frame<br>
"/bm [message]" for changing the topic text<br>
"/m [message]" for modmail<br>
Link help: 🎵 Music list | 🎨 ColourGen | 🚅 Latency Test| ⬆️ Upload/View Files<br>';}
if(isset($_GET['bottom'])){
$bo[0]='src="28.php?a=a" name="aa" id="aa" autofocus style="height:20em;width:90vw"';
$bo[1]='class="v" src="28.php?b=d" name="d" id="d" style="width:100%;height:10em"';}
else{
$bo[0]='class="v" src="28.php?b=d" name="d" id="d" style="height:10em">';
$bo[1]='name="aa" src="28.php?a=a" autofocus style="width:100%;height:42em" name="aa"';}

echo'
</div><div class="hidden"><p style="display:inline">Please be friendly (bookmark too?) <mark>:)</mark> | ETH: 0x223Da527733500ce9C914Bfacc889D4a90f0b26a</p></div><iframe id="tx" style="float:right" src="28.php?b=b"></iframe><iframe '.$bo[0].'></iframe><br><b style="color:#afa">Welcome to '.$phrase.' | <a href="28.php?a=a" target="aa">🔄 messages</a> | <a href="28.ph'.($_GET['bottom']?'p':'p?bottom=1').'">🔁 Flip</a></b>
<iframe '.$bo[1].'></iframe><audio src="X-silence.mp3" autoplay></audio></body></html>';exit();}}

else{if($_COOKIE['col']==""){$_COOKIE['col']='#88ff88';}function pt($a,$i){
$z='</button></form>';$e=crc()."-";$b='';
if($_COOKIE['ina']=="t"){$v=$i;}else{$v=$i%1000;}
if($i%2==0){$b.='<form action="28.php?b=d" method="post" target="d"><button name="reply" value="'.$i.'" class="z">↩️<b>'.$v.'</b></button></form>';}
$btn=' <form action="" method="post"><button name="del" value="'.$i.'" class="';
if(strpos($a, $e)!==false && $e!=""){$b.=$btn.'y">❌'.$z;}
elseif($_COOKIE['9u9dyi']!="" && $i%2==0){$b.=$btn.'w">❌'.$z;}
elseif($i%2==0){$b.=$btn.'z">🗄️'.$z;}

$btn='&nbsp;<form action="28.php?b=d" method="post" target="d"><button name="reply" value="-'.$i.'" class="';
if(strpos($a,$e)!==false&&$e!=""){$b.=$btn.'v">&nbsp;🖌️&nbsp;'.$z;}
elseif($i%2==0){
#Preg match for PM id
preg_match("/([0-9]{3})-/i",strtolower($a),$matches);
$b.='&nbsp;<form action="28.php?b=d" target="d" method="post"><button class="v" name="pm" value="/pm '.$matches[1].' "><span style="font-size:0.4em">&nbsp;</span><b>PM</b><span style="font-size:0.4em">&nbsp;</span></button></form>';}
echo$b;return str_replace(date(">m-"),">",str_replace(date(">m-jS "),">",$a));}

$sec=htmlspecialchars($_COOKIE['refresh'])?:'4';
echo'<!DOCTYPE html><html>';
#Advanced notifications
$b=($config[4]*2)?:80;#(intval($_REQUEST['m'])*2)?:24;#$b=abs(min($b,48));
function p($file,$b){
for($i=count($file);$i>=max(0,count($file)-$b);$i-=2){
if(strpos($file[$i],"/m ")!==false && $_COOKIE['9u9dyi']!=""){return $i;}else{$i-=2;$b+=2;}
#PM/CRC checks
if(!preg_match("/\/pm ([0-9]{3})([0-9]{3})-\^!/i",strtolower($file[$i]),$matches)){
if(strlen($file[$i])>3){return $i;}}
else{if($matches[1]==crc()||$matches[2]==crc()){return $i;}else{$i-=2;$b+=2;}}}}
 $file=db("1id8sjl.txt");$time=p($file,$b);
if(file_get_contents("load.txt")!="" && file_get_contents("load.txt")!=" "){
$e='><mark style="display:inline;background:#000;color:#afa">'.file_get_contents("load.txt").'</mark>';}
else{$e='>';}
$e.='<mark class="ref" style="background:#000;color:#080">'.(time()%60).'</mark>';
#&m='.htmlspecialchars(($_REQUEST['m']?:'0')).'
$cfi=htmlspecialchars($_POST['col'])?:htmlspecialchars($_COOKIE['col']);
echo'<title>'.$phrase.'</title><meta http-equiv="refresh" content="'.$sec.' ?a=a&refresh='.$sec.'&t='.$time.'&name='.htmlspecialchars($_REQUEST['name']).'&col='.htmlspecialchars($_REQUEST['col']).'"><style>pre{color:#fff;font-family:corbel;background:inherit;white-space:pre-wrap}a{color:#07f}a:hover{color:#44f}form{display:inline}.y,.v{background:'.$cfi.';}.v{padding:0.2em;}.w,.z{background:#000;color:'.$cfi.'}.v:hover{border:3px solid #0f0}.w:hover{border:3px solid #f80}.y:hover{border:3px solid #f22}.z:hover{border:3px solid #0ff}button{border-radius:8px;border: 3px solid #000}.ref{animation:ref 4s infinite;animation-delay:10s;background:radial-gradient(#000014, #001400, #140000)}@keyframes ref{0%{background:radial-gradient(#000014, #001400, #140000)}50%{background:#f22}100%{background:radial-gradient(#000014, #001400, #140000)}}
@keyframes AERA{0%{color:#0f0;margin-left:0em}50%{color:#ff0;margin-left:2em}100%{color:#f00;margin-left:4em}}.a0{animation:t 10s linear infinite;animation-delay:4s;opacity:0;font-size:0.1px}.a1{animation:t 10s linear infinite;animation-delay:3s;opacity:0;font-size:0.1px}.a2{animation:t 10s linear infinite;animation-delay:2s;opacity:0;font-size:0.1px}.a3{animation:t 10s linear infinite;animation-delay:1s;opacity:0;font-size:0.1px}.a4{animation:t 10s linear infinite;animation-delay:0s;opacity:0;font-size:0.1px}.a5{animation:t 10s linear infinite;animation-delay:-1s;opacity:0;font-size:0.1px}.a6{animation:t 10s linear infinite;animation-delay:-2s;opacity:0;font-size:0.1px}.a7{animation:t 10s linear infinite;animation-delay:-3s;opacity:0;font-size:0.1px}.a8{animation:t 10s linear infinite;animation-delay:-4s;opacity:0;font-size:0.1px}.a9{animation:t 10s linear infinite;animation-delay:-5s;opacity:0;font-size:0.1px}@keyframes t{0%{opacity:1;font-size:16px}9.998%{opacity:1;font-size:16px}9.999%{opacity:0;font-size:16px}10%{opacity:0;font-size:0.1px}}mark{border-radius:15px;padding:0.2em}</style'.$e;
#Audio ping, message retrieval
if($_GET['t']!=$time&&$_GET['t']!=""&&$_COOKIE['audio']!="off"&&$_COOKIE['audio']!="no"){$phrase='-';include('g3.php');pn();echo'<mark style="display:inline">*</mark>';}
echo'<pre style="word-wrap:break-word;line-height:1.7;margin-top:-0.1em"><a href="canary.txt" target="_blank">'.htmlspecialchars_decode($config[3]).'</a><br>';

if($_COOKIE['9u9dyi']!=""){$v='*';}else{$v='';}
if(isset($_COOKIE['name'])){file_put_contents(str_ireplace("Aera344","Aera23",str_ireplace("Aera23","alkaline",strtr($_COOKIE['name'],":?/\\*|<>  '","__________"))).'.visit','|<span style="color:'.htmlspecialchars($_COOKIE['col']).'">'.date("m-jS H:i:</\s\p\a\\n>s").$v,FILE_APPEND);}

for($i=$time;$i>=max(0,$time-$b);$i-=2){
#M/PM/CRC checks
if(strpos($file[$i],"/m ")!==false){
if($_COOKIE['9u9dyi']!=""){echo str_replace('/m ','',preg_replace('|([0-9]{3}-)|i', '<b><u>[M]</u></b> ------$1', pt($file[$i],$i)));continue;}else{$i-=2;$b+=2;}}
if(!preg_match("/\/pm ([0-9]{3})([0-9]{3})-\^!/i",strtolower($file[$i]),$matches)){
if(strlen($file[$i])>2){echo pt($file[$i],$i);}}
else{if($matches[1]==crc() || $matches[2]==crc()){echo explode("^!",pt($file[$i],$i))[1];}else{$i-=2;$b+=2;}}}
}
#echo'<!--span class="w">Load: </span><a href="28.php?a=a&m='.min($b,64).'&refresh='.($sec*3).'">More</a> | <a href="28.php?a=a&m='.round($b/4).'&refresh='.max($sec/3,4).'">Less</a-->';
?></pre></html>
