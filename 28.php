
<?php
$_COOKIE['name']=trim($_COOKIE['name']);
if($_COOKIE['name'] == file_get_contents("unlock.txt") && $_COOKIE['name']!=""){exit('<meta http-equiv="refresh" content="4"><mark>I/O error<br><br>'.date("H:i:s").'</mark>');}
$config=explode("|",file_get_contents("config.txt"));
$phrase=$config[2]?:'Chat';
$v='<meta name="viewport" content="width=device-width, initial-scale=1">';
if($_POST['refresh']!=""){setcookie("refresh", $_POST['refresh'], time()+35990);}
if($_POST['name']!=""){setcookie("name", $_REQUEST['name'], time()+35990);}
if(strlen($_POST['col'])==7){setcookie('col',$_POST['col'],time()+35990);}

function roulette($object){
$object = str_replace("/","\\/",$object);
 $strings=explode("\\",$object);
 if(count($strings)==1){return $object;}$object='';
 foreach($strings as $string){
 if(strpos($string,"/sym")!==false){$aa='&#'.mt_rand(9312,10300).';&#'.mt_rand(9312,11263).';&#'.mt_rand(9312,11263).';&#'.mt_rand(9312,11263).';';}
 $bb='<mark>'.mt_rand(1,6).'</mark>';
 $dd=mt_rand(100,999);
 $cc='<mark style="background:#'.$dd.';color:#'.$dd.';border-radius:0px">‎____</mark>';
 $string=str_replace("/symbols",$aa,$string);
 $string=str_replace("/dice",$bb,$string);
 $string=str_replace("/wow",$cc,$string);
 $object.=$string;}
return str_replace("/bk","\\",$object);}

if($_POST['comment']!=""){
/*include('g3.php');$phrase = $config[4];
$g=$_POST['comment'].$_POST['name'];if(file_get_contents('g3.php')!=""){$g=normalize($g);}
$g=strtr($g,'@43105$7|!€','aaeiosstlie');$g=strtr($g,',.-` ','_____');$g=str_replace("_","",$g);
#Filters
$filter=file(crc32("x"));
foreach($filter as $f){if(stripos($g,$f)!==false){exit("<mark>No connection to SQlite DB</mark>");}}*/

$check=floatval(str_replace("|314159","",$_REQUEST['t']));$d=(microtime(true)-$check); 
$len=strlen(htmlspecialchars($_POST['comment']));
if($d!=0){$cps=$len/$d;}else{$cps=-1;}
$x=fopen("9u9dyi", "a+");fwrite($x, $cps.'|'.$_COOKIE['crc']."|".date("m-jS H:i:s|").htmlspecialchars($_POST['name'])."|".htmlspecialchars($_POST['comment'])."\n");fclose($x);}
if(file_get_contents("1id8sjl.txt")==""){file_put_contents("1id8sjl.txt"," ");}

#Alternative to cookies
function ipcheck(){$addr=file_get_contents(crc32("127.0.0.1").".dat");
$time=filemtime(crc32("127.0.0.1").".dat");
#Cron - runs when this function validates
if(($time+20)>time() && crc32(strrev("127.0.0.1"))==$addr){return "1";}
else{return "2";}}

function crc(){
 if($_COOKIE['crc']%1000==0){$e=(100+crc32("127.0.0.1")%900);}
 else{$e=100+($_COOKIE['crc']%900);}return $e;}

#Prevent duplicate messages (takes advantage of refresh requirements for cookies)
if($_REQUEST['q']!=""){setcookie("u", $_REQUEST['q'], time()+36000);}

if($_GET['b']=="d"){$file=file("1id8sjl.txt");$count = count($file);for($i=$count-1;$i>=max(0,$count-16);$i--){$t.=$file[$i];}$limit = substr_count($t,htmlspecialchars(str_ireplace("Aera349","Aera23",$_REQUEST['name']))." ");  if($limit>7 && ($_POST['comment']!="" || $_POST['rpl']!="")){file_put_contents("9u9dyi","|m".time(),FILE_APPEND);exit("<mark>! <a href='28.php?b=d&col=".base64_encode(htmlspecialchars($_POST['col']))."'>Clear then wait for reply</a></mark>");}}

#Filtering spam
if($_POST['comment']!=""){$token=crc32($_REQUEST['t']);
if($_POST['q']==file_get_contents("q.txt")){$token = -1;}else{file_put_contents("q.txt",$_POST['q']);}
//Variables defined above
 if(($token !=$_REQUEST['q'] || $_COOKIE['u'] == $_POST['q']) && $_POST['rpl']!="" && $_POST['reply']!=""){file_put_contents("9u9dyi","|c".time(),FILE_APPEND);
exit("<mark>! <a href='28.php?b=d&col=".base64_encode(htmlspecialchars($_POST['col']))."'>Oops, you resubmitted, click me to keep messaging</a></mark>");}
 else{if($d==0){$d = 10;}
  $length=strlen(htmlspecialchars($_POST['comment']));$t='';
  if((($length/$d)>($config[0]?:10) && strpos($_POST['rpl'],"-")===false) || strlen($_POST['name'])>($config[1]?:300)){
   echo ($length/$d).' '.$length;
  file_put_contents("9u9dyi","|s".time(),FILE_APPEND);
  exit("<mark>! <a href='28.php?b=d&col=".base64_encode(htmlspecialchars($_POST['col']))."'>System finds it sus</a></mark>");
}}}

if($_GET['b']=="c" && $_COOKIE['9u9dyi']!=""){
$e=$_POST['del'];
if($e!=""){rename($e,$e.".ivisit");}
$e = explode(".v",$e)[0];
file_put_contents("unlock.txt",$e);
#Ideally, there will be a loop to clean all messages from that user, mark the lines as [redacted ###] and store it so it can be restored or read if needed. I won't implement it though
exit("<meta http-equiv='refresh' content='1 28.php?b=b'><h3><mark>Kicked $e</mark></h3>");}

if(($_GET['a']=='Settings' && $_COOKIE['9u9dyi']=="t") || $config[0]==""){
setcookie("9u9dyi","t",time()+8640000);
$phrase=$config[2] ?: 'Chat Settings';include('g3.php');
if($_POST['a']!=""){file_put_contents("config.txt",htmlspecialchars($_POST['a']."|".$_POST['b']."|".$_POST['c']."|".htmlspecialchars_decode($_POST['d'])."|".$_POST['f'])."|".$_POST['g']);echo'<i>Saved</i>';$config=explode("|",file_get_contents("config.txt"));}
if($_POST['e']!="" && $_POST['e']!=file_get_contents("canary.txt")){file_put_contents("canary.txt",$_POST['e']);}

echo'<html>'.$v.'<h2> '.$q.' Config <a href="28.php"><button style="display: inline">BACK</button></a></h2><form action="" method="post" id="f">
<b>Name of chat:</b><input name="c" value="'.$config[2].'" size="25"><br>
<b>Characters per second :</b><input name="a" value="'.($config[0] ?: 8).'" size="4"><br>
<b>Message max length:</b><input name="b" value="'.($config[1] ?: 300).'" size="4"><br>
<b>Messages to show:</b><input name="f" value="'.($config[4] ?: 30).'" size="4"><br>
<b>String replacements:</b><input name="g" value="'.($config[5] ?: 1).'" size="4"><b>(0 = admin, 1 = all)</b><br>
<button>Save</button><br><br>';
 if(file_get_contents("links.php")!=""){echo'
 The following settings can be <a href="https://pgptool.org/" target="_blank">safely</a> left blank:
 <br><br><input name="d" value="'.$config[3].'" size="'.(strlen($config[3]) ?: 35).'" placeholder="Link"><br>
 <textarea name="e" class="v" form="f" cols="80" rows="40" placeholder="canary.txt">'.htmlspecialchars(file_get_contents("canary.txt")).'</textarea>';}
echo'</form><br><b>If @Aera23 has an update, please visit <a href="http://forwhoallvglhpsx6dhycfb4fu4a2lqkvxtwlivruw765qxofyns7wqd.onion/source.php?f=28.php&a=100" target="_blank">link 1</a> and <a href="http://forwhoallvglhpsx6dhycfb4fu4a2lqkvxtwlivruw765qxofyns7wqd.onion/source.php?f=g3.php&a=100" target="_blank">link 2</a>, which may take a while to load. Then replace the old code with these files.</b><style>button,input{background:#070;color:#0ff;border-radius:10px;placeholder-color:#fff;padding:0.4em;margin:0.2em;border:2px solid #0a0}html{margin:3em;font-family:sans-serif}::placeholder{color:#ff8;opacity: 1}::-ms-input-placeholder{color: #ff8;opacity: 1}
*{background:#000;color:#0f0;}b,h2{color:#0cf}form{display:inline}textarea{padding:0.3em;border-radius:15px}</style></form><br>Debug: ';print_r($_POST);echo'</html>';exit;}

if($_POST['del']!=""){$a=2;
$file=file("1id8sjl.txt");$count = count($file);
 if($_COOKIE['crc']%1000==0){$e=(100+crc32("127.0.0.1")%900);}
 else{$e=100+($_COOKIE['crc']%900);}
if($_POST['del']=="n"){for($i=0;$i<$count-max(($_POST['lines']*2),2);$i++)
{$prvt.=$file[$i];}file_put_contents("1id8sjl.txt",$prvt);}
elseif($_POST['del']!="" && strpos($file[$_POST['del']],$e)!==false && $e!=""){$a=1;}
elseif($_COOKIE['9u9dyi']=="t"){$a=1;}
if($a==1){for($i=0;$i<$count;$i++){if($_POST['del']!=$i && $_POST['del']!=$i-1){$prvt.=$file[$i];}}file_put_contents("1id8sjl.txt",$prvt);}}

#Refresh List
if($_GET['b']=="b" && (ipcheck()==1 || $_COOKIE['o']!="")){

$sec=intval($_COOKIE['refresh']) ?: '4';
echo"<html><meta http-equiv='refresh' content='".$sec." 28.php?b=b&refresh=".$sec."'><style>button{background:#f44;border-radius:8px;border:2px solid #f00}table{border-spacing:0;;border-radius:8px}td{color:#fff;background:#0A1520;border:1px solid #070;line-height:1.3;font-size:16px;max-width:10em;padding:0.2em}.x{color:#888}.t:hover{border:2px solid #80f;background:#f80}</style><span style='font-size:18px;background:#0A1520;color:#ff0'>⏬ Last online: ";$names=glob("*.visit");$e=0;
foreach($names as $name){$i=0;
$p=file_get_contents($name);
$l=filemtime($name);
if(($l+20)>time()){$e+=1;}
$z=explode("|",$p);
$q=array_key_last($z);
while($arr[$l]!=""&&$i<10){$l+=1;$i++;}
if($_COOKIE['9u9dyi']!=""){$p='<tr><td><form action="28.php?b=c" method="post" style="display:inline"><button name="del" value="'.$name.'" class="t">✖️</button></form></td><td style="text-align:center">';}else{$p='<tr><td style="text-align:center">';}
$arr[$l]= $p.str_replace(".visit","",$name).'</td><td style="text-align:center">'.str_replace(date("jS"),"",str_replace(date("m-"),"",$z[$q].'<span class="x"></td><td style="text-align:right">'.number_format($q)))."</td></tr>";}
ksort($arr,SORT_NUMERIC);$z=sizeof($arr,0);
$t='';foreach($arr as $str){if($z<11){$t=$str.$t;}$z--;}exit($e.' (last 20s)</span><br><table>'.$t.'</table></html>');}

$em=(htmlspecialchars($_REQUEST['e']) ?: '1');
if($em>1.5){$em=1.5;}
if($em<0.7){$em=0.7;}
if($_COOKIE['o']<time() && crc32(base64_encode($_SERVER['HTTP_USER_AGENT']."127.0.0.1".$_COOKIE['o']))==$_COOKIE['crc']){}
elseif(ipcheck()==1){}
else{if($_GET['a']=="a"){header('Location: g3.php?next=28.php?a=a');}elseif($_GET['b']=='d'){header('Location: g3.php?next=28.php?b=d');exit;}elseif($_GET['b']=="b"){header('Location: g3.php?next=28.php?b=b');}else{header('Location: g3.php?next=28.php');exit;}}

if($_GET['b']=='d'){
include('g3.php');
/*$g=$_POST['comment'].$_POST['name'];if(file_get_contents('g3.php')!=""){$g=normalize($g);}
$g=strtr($rt,'@43105$7|!€','aaeiosstlie');$g=strtr($g,',.-` ','_____');$g=str_replace("_","",$g);
#Filters
foreach($filter as $f){if(stripos($g, $f)!==false){exit("<mark>No connection to SQlite DB</mark>");}}*/

function process($e,$find,$change)
{if($e==$_POST['name']){$e=str_replace('Aera23','alkaline',$e);$e=str_replace('Aera349','Aera23',$e);$e=substr($e,0,min(strlen($e),50));}
$e=htmlspecialchars($e);
$e=substr($e,0,min(strlen($e),($config[1] ?: 500)));
$e=highlighter($e);
$e=str_ireplace('cafe','café',$e);
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
$e=str_ireplace('`q','

',$e);
$e=str_replace('plmm','http://forwhoallvglhpsx6dhycfb4fu4a2lqkvxtwlivruw765qxofyns7wqd.onion/',$e);
$e=str_ireplace(':ice:','🧊',$e);
$e=str_ireplace(':goat:','🐐',$e);
$e=str_ireplace('&lt;q&rt;','<q>',$e);
$e=str_ireplace('&lt;/q&rt;','</q>',$e);
//https://stackoverflow.com/questions/14399246/preg-replace-url-with-links-mime-types-failure (corrected at regex101.com)
$e=preg_replace('|([\w\d]*)\s?(https?://([\d\w\.-]+\.[\w\.]{2,6})[^\s\]\[\<\>]*/?)|i', '$1 <a href="$2" target="_blank">$2</a>', $e);
$e=str_replace('aera23@','aer\\a23@',$e);
$e=str_replace('@','<u>@</u>',$e);
$e=str_replace('&lt;3','<mark style="background:red;">♥</mark>',$e);
$e=str_replace('aera','<a href="mailto:aera23@protonmail.com">A</a><font color="#0ff">e</font><font color="#0f0">r</font><font color="#ff0">a</font><font color="#f86">2<span class="a0">7</span><span class="a1">6</span><span class="a2">5</span><span class="a3">4</span><span class="a4">3</span><span class="a5">2</span><span class="a6">1</span><span class="a7">0</span><span class="a8">9</span><span class="a9">8</span></font>',$e);
$e=str_replace('</font>23','</font>',$e);
$e=str_ireplace(':spacedock:','<span class="a4">8==>__<==8</span><span class="a3">8==>_<==8</span><span class="a2">8==><==8</span><span class="a1">8=~~~~~=8</span><span class="a0">wheeeee</span><span class="a9">wheeeee</span>',$e);
$e=str_ireplace(':docking:','<span class="a4">8==>__(|)</span><span class="a3">8==>_(|)</span><span class="a2">8==>(|)</span><span class="a1">8=~~~~~|)</span><span class="a0">wheeeee</span><span class="a9">wheeeee</span>',$e);
$e=str_ireplace(':lovedock:','<span class="a4">(|)__(|)</span><span class="a3">(|)_(|)</span><span class="a2">(|)(|)</span><span class="a1">(|~~~~|)</span><span class="a0">wheeeee</span><span class="a9">wheeeee</span>',$e);
$e=str_ireplace('magic','<font color="#0ff">m</font><font color="#0f0">a</font><font color="#ff0">g</font><font color="#f86">i<span class="a3">C</span><span class="a4">c</span><span class="a5">C</span><span class="a6">c</span><span class="a7">C</span><span class="a8">c</span><span class="a9">C</span></font>',$e);
$e=roulette($e);
$e=str_replace($find,$change,$e);
$e=str_replace('/hq','"',$e);
$e=str_replace('/lq',"'",$e);
$e=str_replace(':3)','<mark>:3)</mark>',$e);
return $e;}}

#Show Colour choice
if($_GET['a']==""){if($_REQUEST['col']=="" && $_COOKIE['col']==""){$cb=(mt_rand()%10);
$cf=["#cc552",'#77ff7','#ff334',"#11ffe","#eeaa0","#00dfd","#ff880","#ffff0","#00ff0","#0088f"];$cfi=$cf[$cb].$cb;}
else{$i=0;if($_GET['col']!=""){$cf=$_GET['col'];while($i < 10 && strlen($cf)>7){$cf=base64_decode($cf);$i++;}}

if(strlen($_POST['col'])==7){$cfi=$_POST['col'];}
else{$cfi=$_COOKIE['col'] ?: base64_decode($_GET['col']);}}

if($_GET['b']=='d'){
#Basics
$comment=trim($_POST["comment"]);$z=2;function mydump(){$x=fopen("9u9dyi", "a+"); fwrite($x, $_POST['name'] . $_POST['comment']);fclose($x);}

#Saving messages
if($_POST["name"]!="" && $comment!="" && $_COOKIE['u']!=$_REQUEST['q']){$z=5;
 if(file_get_contents("3.html")!=""){
  $file=file("3.html");foreach($file as $filter){$f=explode("|",str_replace("\n","",$filter));$find[]=$f[0];$change[]=$f[1];}}
if(strpos($_POST['comment'],'/me')!==0){$txt=process($_POST["name"],$find,$change) . " - " . process($comment,$find,$change);}
else{$txt=process($_POST["name"],$find,$change) . str_replace('/me','',process($comment,$find,$change));}}

#If broadcasting
if(strpos($_POST['comment'],"/bm ")!==false){$cf=fopen("load.txt", "w+") or die($m);fwrite($cf, htmlspecialchars(str_replace("/bm ","",$_POST['comment']))) or die("<mark>Can't write</mark>");fclose($cf);$z=3;}
#Kick
if(strpos($_POST['comment'],"/k ")===0 && $_COOKIE['9u9dyi']!=""){$cf=fopen("unlock.txt", "w") or die($m);$e=htmlspecialchars(str_replace("/k ","",$_POST['comment']));fwrite($cf, $e) or die("<mark>Can't write</mark>");fclose($cf);$z=4;echo"<mark>Kicked $e</mark>";}
#Filter add
if(strpos($_POST['comment'],"/fa ")===0 && ($config[5]==1 || $_COOKIE['9u9dyi']!="")){$cf=fopen("3.html", "a+") or die($m);$e=htmlspecialchars(str_replace("/fa ","",$_POST['comment']));fwrite($cf, $e."\n") or die("<mark>Can't write</mark>");fclose($cf);$z=4;echo"<mark>Filter added: $e</mark>";}
#Filter remove
if(strpos($_POST['comment'],"/fr ")===0 && ($config[5]==1 || $_COOKIE['9u9dyi']!="")){$file=file("3.html");$e=str_replace("/fr ","",$_POST['comment']);
for($i=0;$i<count($file);$i++){if($e!=($i+1)){$p.=$file[$i];}}file_put_contents("3.html",$p);
$z=4;echo"<mark>Filter $e removed</mark>";}
#Filter list
if(strpos($_POST['comment'],"/fl")===0 && ($config[5]==1 || $_COOKIE['9u9dyi']!="")){
$v=file("3.html");$i=0;
foreach($v as $z){$i++;$e.=$i.'&gt;'.$z.'<br>';}
echo"<mark>$e</mark>";$z=4;}

#Writing
if($_COOKIE['u']!=$_REQUEST['q'] && $z==5){$e='';

if($_POST['rpl']!=""){$file=file("1id8sjl.txt");}
 #Find the message number that was replied to, cannot be more than 300 below the current message
 if($_POST['rpl']!="" && $_POST['rpl']>(count($file)-(($config[4]?:30)*2))){$file=file("1id8sjl.txt");$reply=$file[$_POST['rpl']];if(strpos($reply,"^!")!==false){$reply=$file[$_POST['rpl']];}if($reply==""){$reply="
";}
$e='<button style="background:#0A1520;font-size:0.75em;border:2px solid #070;line-height:0.8em;float:right;margin-top:-3em">'.crc().$reply.'</button>
';}
elseif($_POST['rpl']!="" && $_POST['rpl']<0){$line=abs($_POST['rpl']);$reply=$file[$line];}
#Prepend the CRC code to the message
$e.=crc();
if(strlen($_POST["col"])==7){$colour = htmlspecialchars($_POST['col']);}
else{$colour = htmlspecialchars($_COOKIE["col"]);}

$write=$e.'-'.'<i>'.date("m-jS H:i:s").'</i> |<span style="color:'.$colour.';font-size:'.($em ?: '1').'em;font-family:'.(htmlspecialchars($_POST['f']) ?: 'inherit').'">'.$txt."</span>";$nl="

";preg_match("/\/pm ([0-9]{3}) /i",strtolower(process($_POST['comment'],$find,$change)),$matches);
#Check for PM command, before writing somewhere.

if($matches[1]!="" && strpos($_POST['comment'],"/pm")===0){
$write=str_replace($matches[0],'',$write.$nl); $m="The comments aren't working due to a server error. ";
$write="/pm ".$matches[1].crc()."-^!<b><u>[PM]</u></b> ----".$write;

if($_POST['rpl']!="" && strpos($file[$line], $e)!==false && $e!=""){
for($i=0;$i<count($file);$i++){if($line!=$i){$prvt.=$file[$i];}else{$prvt.=$write."\n";}}file_put_contents("1id8sjl.txt",$prvt);}
else{$cf=fopen("1id8sjl.txt", "a+") or die($m);
fwrite($cf, $write) or die("Can't write");
fclose($cf);}}

elseif($_POST['rpl']!="" && strpos($file[$line], $e)!==false && $e!=""){
for($i=0;$i<count($file);$i++){if($line!=$i){$prvt.=$file[$i];}else{$prvt.=$write."\n";}}file_put_contents("1id8sjl.txt",$prvt);}
else{$cf=fopen("1id8sjl.txt", "a+") or die($m);fwrite($cf, $write.$nl) or die("<mark>Can't write</mark>");fclose($cf);}}}

echo'<html lang="en"><title>'.$phrase.'</title>';
if($_REQUEST['lines']==""){$l=12;}else{$l=htmlspecialchars(min($_REQUEST['lines'],48));}
$e = microtime(true);
$token=crc32($e."|314159");
#Light theme: bg #ff9, txt #930
echo $v.'<style>
@media(max-width:929px){#tx{width:99%;height:10em}#d{width:99%}}
@media(min-width:930px){#tx{width:32%;height:13.5em;margin-top:-3.5em}#d{width:65%}}
.b{background:#0A1520}html{font-family:corbel; background:#000;color:#8f8;margin:1em}pre{font-family:calibri;}a{color:#4f4}a:hover{color:#28f}input,button,iframe{border-radius:8px;border:1px solid #080}* mark{padding:0.25em;border-radius:10px}
input{padding:0.5em;background:#cfb;border:3px solid #030}input:hover{padding:0.5em;background:#99f;border:3px solid #050}.n:hover{background:#f00}
.a1{font-size:20px}.a2{font-size:24px}.a3{font-size:28px}.a4{font-size:32px}h3{margin-top:0.3em}</style><div class="b">';

if($_REQUEST['show']!=""){
echo'<h3 style="padding:0px;margin:0px" id="#top"><center style="margin-top:-1.15em">'.$q.' | Score: '.count(file("9u9dyi")).'</center></h3>';}
echo'<style>input{padding:0.5em;background:#ccf;placeholder:#02f}input:hover{padding:0.5em; background:#c9f;}';
for($i=0;$i<24;$i++){echo'.e'.$i.'{animation:s 86400s linear infinite;animation-delay:'.(0-((time())%86400)-($i*3600)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<6;$i++){echo'.d'.$i.'{animation:k 3600s linear infinite;animation-delay:'.(0-((time()-2999)%3600)-($i*600)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<10;$i++){echo'.c'.$i.'{animation:c 600s linear infinite;animation-delay:'.(0-((time()-539)%600)-($i*60)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<6;$i++){echo'.b'.$i.'{animation: i 60s linear infinite;animation-delay:'.(0-((time()-28)%60)-($i*10)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<10;$i++){echo'.a'.$i.'{animation:t 10s linear infinite;animation-delay:'.((10-(time()-28)%10)-$i).'s;opacity:0;font-size:0.1px}';}
echo'.r{color:#fff}.g{width:15em;margin-right:8em;margin-left:1em;background:#004;margin-top:-1px;padding:0.2em;border-radius:10px}
/*Clock :)*/
@keyframes t{
 0%{opacity:1;font-size:20px}9.8%{opacity:1;font-size:20px}9.9%{opacity:0;font-size:20px}10%{opacity:0;font-size:0.1px}}
@keyframes i{
 35%{opacity:0;font-size:0.01px}35.1%{opacity:0;font-size:20px}35.2%{opacity:1;font-size:20px}51.7%{opacity:1;font-size:20px}51.8%{opacity:0;font-size:20px}51.9%{opacity:0;font-size:0.1px}}
@keyframes c{
 0%{opacity:0;font-size:0.1px}0.01%{opacity:0;font-size:20px}0.02%{opacity:1;font-size:20px}10.01%{opacity:1;font-size:20px}10.02%{opacity:0;font-size:20px}10.03%{opacity:0;font-size:0.1px}}
@keyframes k{
 0%{opacity:0;font-size:0.1px}0.01%{opacity:0;font-size:20px}0.02%{opacity:1;font-size:20px}16.67%{opacity:1;font-size:20px}16.68%{opacity:0;font-size:20px}16.69%{opacity:0;font-size:0.1px}}
@keyframes s{
 0%{opacity:0;font-size:0.1px}0.0001%{opacity:0;font-size:20px}0.0002%{opacity:1;font-size:20px}4.1657%{opacity:1;font-size:20px}4.1658%{opacity:0;font-size:20px}4.1659%{opacity:0;font-size:0.1px}}
</style>';

if($_GET['b']=='d'){
echo'<div style="color:#c09">
<form action="" target="_self" method="post">Colour:
<input type="color" name="col" value="'.$cfi.'" style="padding:0em">...
<input name="name" size="15" value="'. (htmlspecialchars($_REQUEST["name"]) ?: htmlspecialchars($_COOKIE["name"]) ).'" placeholder="Nick" required';
if($_POST['name']==""){echo' autofocus="true"';}
echo'><br>
<input style="background: linear-gradient(to left,#8f8, #f8f);" name="comment"';
preg_match("/\/pm ([0-9]{3}) /i",strtolower(htmlspecialchars($_POST['pm'] ?: $_POST['comment'])),$matches);

if($matches[0]!=""){echo' value="'.$matches[0].'"';}
echo' placeholder="';if($_REQUEST['reply']==""){echo'Type a message.';
if($_REQUEST['show']!=""){
echo' Current heuristics: '.$limit.'/8L & '.$config[0].' C/S & '.$config[1].'C."';}
} elseif($_REQUEST['reply']>0){echo'Reply (send a blank message to cancel)"';}else{echo'Edit (send a blank message to cancel)"';}
if($_REQUEST['reply']<0){$file=file("1id8sjl.txt");

if(strpos($file[abs(intval($_REQUEST['reply']))],"/pm")===false){
preg_match('/\">(.*) - (.*)<\/span>/i',$file[abs(intval($_REQUEST['reply']))],$matches);$e=strip_tags($matches[2]);}
else{
preg_match("/\/pm ([0-9]{3})([0-9]{3})-\^!/i",$file[abs(intval($_REQUEST['reply']))],$x);
preg_match('/\">(.*) - (.*)<\/span>/i',$file[abs(intval($_REQUEST['reply']))],$matches);$e='/pm '.$x[1].' '.strip_tags($matches[2]);}
echo' value="'.$e.'"';}echo'" size="54"';if($_POST['name']!=""){echo' autofocus';}echo'>';

if($_REQUEST['show']!=""){
echo'<span>Emphasis (0.7-1.5em):</span>
<input name="e" size="3" value="'. min(htmlspecialchars($_REQUEST['e']),2).'" max="2">
<span>Refresh (s)</span>
<input name="refresh" size="3" value="'. htmlspecialchars($_POST['refresh']).'" min="2" placeholder="4"><br>
<span>Font</span><input name="f" value="'.htmlspecialchars($_REQUEST['f']).'">
<!--span>Messages:</span><input name="lines" size="2" value="htmlspecialchars($l)" max="64"-->';}

#Form for sending data
echo'<input type="hidden" name="t" value="'.$e.'|314159"><input type="hidden" name="q" value="'.$token.'"><input type="hidden" name="rpl" value="'.htmlspecialchars($_REQUEST['reply']).'">'; if($_COOKIE['9u9dyi']!=""){echo'<span class="n"><input type="checkbox" name="del" value="n"></span>';}
echo'<input style="background:#8f8" type="submit"';if($_COOKIE['9u9dyi']=='t'){echo' onclick="window.navigator.vibrate(10);"';}echo' value="Send"><br>Hidden features and accessibility: <input type="checkbox" name="show" value="y"'; if($_REQUEST['show']!="" || $_REQUEST['reply']>0){echo' checked';}
exit('></form></div>');}

else{echo'<style>#show,.content{display:none}
#show:checked~.content{display:block !important}label u{color:#8f8}label u:hover{color:#0ff}
show,.hidden{display:block}#show:checked~.hidden{display:none}'.$hide.'
</style><input id="show" type=checkbox><label for="show"><u>'.$phrase.' Help<b> (please confirm autoplay works)</b></u>';
 if($_COOKIE['9u9dyi']!=''){echo'<form action="28.php" style="display:inline"><input type="submit" name="a" value="Settings"></form>';}
echo'<br><span class="r">UTC: <span class="g"><span class="e0">0</span>';
for($i=0;$i<15;$i++){if($i!="0"){$e=((24-$i)%24);}else{$e="00";}echo'<span class="e'.$i.'">'.((24-$i)%24).'</span>';}
for($i=15;$i<24;$i++){echo'<span class="e'.$i.'">0'.(24-$i).'</span>';}echo'<span class="x">:</span>';
for($i=0;$i<6;$i++){echo'<span class="d'.$i.'">'.(5-$i).'</span>';}
for($i=0;$i<10;$i++){echo'<span class="c'.$i.'">'.(9-$i).'</span>';} echo'<span class="x">:</span>';
for($i=0;$i<6;$i++){echo'<span class="b'.$i.'">'.(5-$i).'</span>';}  for($i=0;$i<10;$i++){ echo'<span class="a'.$i.'">'.(9-$i).'</span>';}
echo'<br></span></label><div class="content">
<span style="color:#66e">Enable autoplay, and set standard Tor security for audio pings. <i>(To PM, note a user\'s ID. Ex: "600-07-30... [message]" -&gt; "/pm 600 message". Or type /pm '.crc().' for self-PM.)</i></span>
<p style="color:#8e8">Emojis and commands: :alien: :books: :tree: :book: :kiss: :dog: :fire: :ice: :cash:<br><i style="color:#f88">NEW: :egg: :taco: :eggplant: :rocket: :ghost: :elephant: :snail: :lips: :pumpkin: :xmas: :bird: :lovedock: :docking: :spacedock: :miii:</i><br><span style="color:#e6e">:shrug: /shrug :goat: :rainbow: /wow /symbols :cat: :music: :shroom: /me, /dice, <mark style="color:red;background:#400"><3</mark>, <mark>:)</mark>, <mark>:3)</mark> , <mark>XD</mark></a>, :panda: :fox: :duck:</span></p><b><a href="/solr/ncs-'.mt_rand(0,11).'.mp3" target="_blank" download>Save some NCS Music</a>|<a href="22.php" target="aa">Random colours 👀</a> | <a href="colour.php" target="_blank">Latency 👀</a> | <a href="28.php?a=a" target="aa">Reload messages</a> | <a href="files.php" target="aa">File upload 👀</a>';if($config[5]==1){echo'<br><br>
"/fa test1|test2" adds a filter which replaces test1 with test 2<br>
"/fr 1" removes the first filter<br>
"/fl" lists all the filters in a tiny frame</b>';}echo'
</div><div class="hidden"><p style="display:inline">Please keep things non-toxic (Reload if needed, Bookmark too) <mark>:)</mark></p></div><iframe id="tx" style="float:right" src="28.php?b=b&refresh='.htmlspecialchars($_COOKIE['refresh']).'"></iframe><iframe src="28.php?b=d" name="d" id="d" autofocus style="height:10em"></iframe><br><b style="color:#4f4">Welcome to '.$phrase.' :)</b>
</fieldset><iframe class="v" name="aa" src="/28.php?a=a&m='. $l .'&name='.htmlspecialchars($_REQUEST['name']).'&refresh='.htmlspecialchars($_COOKIE['refresh']).'&col='.base64_encode($_REQUEST['col']).'" width="100%" height="65%"></iframe name="aa"><audio src="X-silence.mp3" autoplay></audio></html>';exit();}}

else{function pt($a,$i){
$z='</button></form>';$e=crc()."-";$b='';
if($_COOKIE['ina']=="t"){$v = $i;}else{$v = $i%1000;}
if($i%2==0){$b.='<form action="28.php?b=d&name='.htmlspecialchars($_COOKIE['name']).'&col='.base64_encode($_COOKIE['col']).'" method="post" target="d"><button name="reply" value="'.$i.'" class="z">↩️'.$v.'</button></form>';}
$btn=' <form action="" method="post"><button name="del" value="'.$i.'" class="';
if(strpos($a, $e)!==false && $e!=""){$b.=$btn.'y">✖️'.$z;}
elseif($_COOKIE['9u9dyi']!="" && $i%2==0){$b.=$btn.'w">✖️'.$z;}
elseif($i%2==0){$b.=$btn.'z">🗄️'.$z;}

if(1==1){$btn='&nbsp;<form action="28.php?b=d&name='.htmlspecialchars($_REQUEST['name']).'&col='.base64_encode($_COOKIE['col']).'" target="d" method="post"><button name="reply" value="-'.$i.'" class="';
if(strpos($a,$e)!==false && $e!=""){$b.=$btn.'y">🖋'.$z;}
elseif($i%2==0){
#Preg match for PM id
preg_match("/([0-9]{3})-/i",strtolower($a),$matches);
$b.='<form action="28.php?b=d&name='.htmlspecialchars($_REQUEST['name']).'&col='.base64_encode($_COOKIE['col']).'" target="d" method="post"><button class="y" name="pm" value="/pm '.$matches[1].' ">PM</button></form>';}}
$a=str_replace("<!--","<i>",$a);$a=str_replace("-->","</i> |",$a);echo $b;

return str_replace(date("m-"),"",str_replace(date("m-jS "),"",$a));}

$sec=htmlspecialchars($_COOKIE['refresh']) ?: '4';
echo'<!DOCTYPE html><html lang="en">';
$time=filesize("1id8sjl.txt");

if(file_get_contents("load.txt")!="" && file_get_contents("load.txt")!=" "){
$e='><mark style="display:inline;background:#000;color:#ff0">'.file_get_contents("load.txt").'</mark>';}
else{$e='>';}

$cfi=htmlspecialchars($_POST['col']) ?: htmlspecialchars(base64_decode($_GET['col'])) ?: htmlspecialchars($_COOKIE['col']);
echo'<title>'.$phrase.'</title><meta http-equiv="refresh" content="'.$sec.' ?a=a&refresh='.$sec.'&t='.$time.'&name='.htmlspecialchars($_REQUEST['name']).'&col='.htmlspecialchars($_REQUEST['col']).'&m='.htmlspecialchars(($_REQUEST['m']?:'0')).'"><style>pre{color:#ff8;font-family:corbel;background:#0A1520;white-space:pre-wrap}a{color:#4e4}a:hover{color:#28f}form{display:inline}.w{color:'.$cfi.';background:#0A1520}.y{background:'.$cfi.';}.z{background:#0A1520;color:'.$cfi.'}.w:hover{border:3px solid #0f0}.y:hover{border:3px solid #f22}.z:hover{border:3px solid #0ff}button{border-radius:8px;border: 3px solid #'.(111+(crc32(time())%888)).'}.ref{animation:ref 4s infinite;animation-delay:'.($sec+4).'s;background:#000}@keyframes ref{0%{background:#000}50%{background:#f00}100%{background:#000}}
@keyframes AERA{0%{color:#0f0;margin-left:0em}50%{color:#ff0;margin-left:2em}100%{color:#f00;margin-left:4em}}.a0{animation:t 10s linear infinite;animation-delay:4s;opacity:0;font-size:0.1px}.a1{animation:t 10s linear infinite;animation-delay:3s;opacity:0;font-size:0.1px}.a2{animation:t 10s linear infinite;animation-delay:2s;opacity:0;font-size:0.1px}.a3{animation:t 10s linear infinite;animation-delay:1s;opacity:0;font-size:0.1px}.a4{animation:t 10s linear infinite;animation-delay:0s;opacity:0;font-size:0.1px}.a5{animation:t 10s linear infinite;animation-delay:-1s;opacity:0;font-size:0.1px}.a6{animation:t 10s linear infinite;animation-delay:-2s;opacity:0;font-size:0.1px}.a7{animation:t 10s linear infinite;animation-delay:-3s;opacity:0;font-size:0.1px}.a8{animation:t 10s linear infinite;animation-delay:-4s;opacity:0;font-size:0.1px}.a9{animation:t 10s linear infinite;animation-delay:-5s;opacity:0;font-size:0.1px}@keyframes t{0%{opacity:1;font-size:16px}9.998%{opacity:1;font-size:16px}9.999%{opacity:0;font-size:16px}10%{opacity:0;font-size:0.1px}}mark{border-radius:15px;padding:0.3em}</style'.$e;
#Message count and retrieval
$b=($config[4]*2)?:80;#(intval($_REQUEST['m'])*2)?:24;#$b=abs(min($b,48));
#Audio ping
if($_GET['t'] != $time && $_GET['t']!=""){$e='VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV';
$v='AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';echo'<audio autobuffer="autobuffer" autoplay="autoplay"><source src="data:audio/mp3;base64,SUQzAwAAAAAAZVRQRTEAAAAHAAAAQWVyYTIzVFlFUgAAAAUAAAAyMDIzVERSQwAAAAUAAAAyMDIzQ09NTQAAABEAAAAAAAAAbGlrZSBkYXkgMTc4Q09NTQAAABEAAABYWFgAbGlrZSBkYXkgMTc4//uQxAAAAAAAAAAAAAAAAAAAAAAAWGluZwAAAA8AAAAVAAAMGQAxMTExPj4+Pj5ISEhISFJSUlJSW1tbW2VlZWVlb29vb295eXl5eYODg4ONjY2NjZqampqapKSkpKStra2turq6urrExMTExM7Ozs7O2NjY2OLi4uLi7Ozs7Oz29vb29v////8AAAA8TEFNRTMuMTAwBK8AAAAAAAAAABUgJAJUQQABzAAADBmTpZS3'.$v.$v.$v.$v.$v.$v.$v.'AAAAA//ugxAAAwZgDVcAAACiAhKi5h5jVcgJ5sAAAAACqeRIRkxQaavbwEfo7DheMtghLMAmdi2FwH+SQXN9KSGE4yMis+Qre0AAAAABxASFlANKOKHpnACYZbRUgYZCB9tP0Fb+AAAYABOwAErHOD+wNBY6ARdiP66B3tNVMQU1FMy4xMDBVVZcGqUgHDgAAABgHAIZD4whnj14XDnFt0QErE64ZZnR+CHZ4ZpASrYAkKBxBawkbKhArSA1fFaYoW7V2tBhassn9Lur/6tpMQU1FMy4xMDCqqqqqqqqqtQWJYAcOBgAAGBmBC5wIwC0oDtIDjU0LjqnVIztVGT+vyzv/VsxgWaYAkF5ggjWwQAE1wvLBm10Ft1h1SNbbDf9frkxBTUUzLjEwMKqqqqqqqqqqqqqqqqrHBalwAA4HAAAZGBHJfmRwhfAOhBl2WGMaD7EHLbjf/6//r+Qi8sAAEOoIwmmCMDLgukBlrsRXYmuhx2k9TEFNRTMuMTAwqqqqqqqqqrUGerAAAAeAABVELMXmFnBWgBrG0qYip3LSsYOrnD///q9VKDReAAAAPjBB8NzERGJg8AGOuxU7lhWD/DAWP//+r1VMQU1FVVWWBolwCQwHAAAZ6MAIhgiIKn5wwEb1oqIB1jq4ae0i9/kPZ/8hJgsS4A4cbtfIwCPGKAQNhz+AYwcFUALlrHTU//sgxOQAw5wdVcxh4qBpA6q4/DwkYOoZRfX/gnf7a3X1qnIEaGAHDi4AABwUnG7jAACrvPbBQxlXIoGy9WBk6DEm//Bv/hxv9WdlXQFeCAGDi4txQ6KHhQGgKpZy4CBpajwX/WOnwycHC3/Mf+oZn///P9PKa5QFmSAJDi5gABYEgP/7EMT5AER4HznscwIgiIOnvY5gRIvsROCqjnLAEAEBVMACAaKafDJwcLf6AwZ/j0d//+3p5Hk5UFiCAIBVUgIouINBVnTvQBgSAq5C/662SPOHw9/y8Wf1CCG3//0vty5VlAaZEAgO//sQxPeAxLAdO+xzAiB1A6g5jeBENyAAGQodG7jBBC255UAANAdWwv+utkjfg4W/1CeS/0A0Jn//yHyNuOnVQwRL8XF9WMLLEQJCODQPzAVBdGxL9l8gn2iXvUJo3/sBOFl///KeVfj/+xDE9IDEWB1B7G8CIGkDqXmM4ESq6z///+ipBqowCw43YAAbCwJmpKYsJmHkgmbNQTSRmLB8Pf6QWwbm/WI9P//6fs/Jz6JgFdhAIDh8Jetyf1gxKSiHSMk4GpPJLM6wih7/UIkaf//7EMT3gERUHT/sZwIggAOofPw8HHHCMVv//b0zbWLWz/+7/+mYCKggCQwvBAAjzd1kCMFSRhReAQECix1SNcl9I1S98bh8/6A4Tf//O+/EQv/9MsDVIgEhxaW5J3rIEYLjjZgurTIB//sQxPyARJwfPezvAiCdCKd9sAmMYcsomA09+BHN/rCDNf6grhsf//0fV5/b/93/9CqEBZkQCA4mQAAbknezwZAsUaM8sAEAAEHAEghgxywA83/ECO/1AfCz//9P+LLVwgNVEASHFyb/+xDE/4BFKEc37mBE4KsQJr3cKJTknezwZAsRKydLAGaFJfmQxcRHNWAQzf6hNCl/WFCb///X/ydpcgR3MAgOBQAAGRId26DIDhRpzxQEzEZTMu4sRk7qAoj3+oTY0/uPAX2////yvf/7EMT/AMXQfzfsdULgpo/muY60XJ////TSgsyYBIcDxBolWoYIYhRpgOSgQALnAgATAVjbQMm/4/Lf0Bg7///08eZa6D3YHHAwAAC8iEbPBVIIT05IBsAAEsOX8XQrGyQOzf8ff+J8//sQxPwBRgSBNex1QuC7j+Z90CmMQH///5V5u8GCs6ADAkcQtUUEeQJCT5gbMIBgtWhIXQrGzQK5v+i/9Ysyj///5ke5rZMDZ0AFDgQAAARiGdqKCHIAZZ0AOgABLnQkLoVjZIEr/0//+yDE9gBFmH877HWi4MEP5j3sQJT4gT//kpbEBYmQAA4HYhCCqFugqHEDU4wEs4w9IRiC120Z139H///8HtrVTEFNRVVVtQOZoAAOBmAAEEQrVYAQ1CyTGNQB2yyiYAxywEnd/8u//1v65YFeoAADgdm8Azp6AFKFiwDpgYAu9Ujk//sQxP4ARcyBN+6BTGDDD+a93DSUBXj8J/P/+G//hmU0qqMHiFAADgcAABMAwOEXALzmEEwcJBpgwLF1y8CpGXuo3O/+ExP///H53Lu4Q7IAAHEwqQOx0aAwIkgnQ0EC03YjFu80e///+xDE94BFxIE17r1EoLOP5v3cNJRAlCY///r4xfj13////VX0f9gAcSgAAQy2JqpYBg5aA3bGCwGsI5cPxSXthv/WEzIP//0PY/yc//+//+j/+qVBZlQAAZih4vsRBQVggHQQGA67C//7IMTzgEZEfzPu4aSgqpAnfY4oXE6g7BHHZ7f+oGSf//7+Ufkf/+hMQaUFqHAGDiwAABZIiCFgwoKBXAAd0AnrENJy27LHfCYn/+v/lwt/yuyUgwV5gAAHpT0dMRAAFjDkwAwsBUETHZ2nQy9gN/8Djv9XpZQFeIh4j/4AAAt2ydj/+xDE+4DFZIEzrHWi4KYP5nmONFx6Qhi5hyQxbdYiRb/jgZwpYYWOdSlOowwsWP36XCAMPDw8f/9Dwz1PxoCkckicYTIKk3QkILoBWCpOg02dgWvVHEgYiiCgpsEFBQUF//xBgoKCjv/7EMT6gEUARzPscULgkQ6nvaAJnP/IKOxVTEFNRTMuMTAw'.$e.'//sQxPqARIgdO+xh4OCPg+d8/Twc'.$e.'VVVVVVVVVVVVVVVVVVX/+xDE/4BFVH817gFM4KcP5j3AKZx'.$e.'VVVVVVVVVVVVVVVVVVf/7EMT+gMXofy+uAazgnxAmecApnF'.$e.'VVVVVVVVVVVVVVVVVV//sQxPuAxSBHNe3hpKCHCOa5sB2c'.$e.'VVVVVVVVVVVVVVVVVVX/+xDE/4BGuDsz7T2IKLoFJHT3mJ'.$e.'VVVVVVVVVVVVVVVVVVVQ==" /></audio><mark>*</mark>';}
echo'<mark class="ref">*</mark><pre style="word-wrap:break-word;line-height:1.7;margin-top:-0.1em"><a href="canary.txt" target="_blank">'.htmlspecialchars_decode($config[3]).'</a><br>';
if(isset($_COOKIE['name'])){file_put_contents(str_ireplace("Aera349","Aera23",str_ireplace("Aera23","alkaline",strtr($_COOKIE['name'],":?/\\*|<>","_______"))).'.visit','|<span style="color:'.htmlspecialchars($_COOKIE['col']).'">'.date("m-jS H:i:</\s\p\a\\n>s"),FILE_APPEND);}
$file=file("1id8sjl.txt");
for($i=count($file)-1;$i>=max(0,count($file)-$b);$i--){
# Buggy checks for PM here, then checks for CRC
if(!preg_match("/\/pm ([0-9]{3})([0-9]{3})-\^!/i",strtolower($file[$i]),$matches)){
if(strlen($file[$i])>3){echo pt($file[$i],$i);}}
else{if($matches[1]==crc() || $matches[2]==crc()){echo explode("^!",pt($file[$i],$i))[1];}else{$i-=1;$b+=2;}}}}
//echo'<!--span class="w">Load: </span><a href="28.php?a=a&m='.min($b,64).'&refresh='.($sec*3).'&col='.htmlspecialchars($_GET['col']).'">More</a> | <a href="28.php?a=a&m='.round($b/4).'&refresh='.max($sec/3,4).'&col='.htmlspecialchars($_GET['col']).'">Less</a-->';
?></pre></html>
