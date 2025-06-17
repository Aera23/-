<?php
$config=explode("|",file_get_contents("config.txt"));
if(isset($_GET['9u9dyi'])&&$_GET['9u9dyi']=="t"){setcookie("9u9dyi","t",time()+432000);echo'<mark>Mod cookie set</mark> <form action="28.php" style="display:inline"><input type="submit" name="a" value="Settings"></form>';}
if(isset($_GET['d'])){
switch($_GET['d']){
case 8:
if(is_dir('Music')){$li='';$start=number_format(microtime(true),10,'.','');$names=glob("{,.}*.visit",GLOB_BRACE);array_multisort(array_map('filemtime',$names),SORT_NUMERIC,SORT_DESC,$names);$i=0;
foreach($names as $log){if($i<10){$score=explode('|',file_get_contents($log));$sc=count($score)-1;file_put_contents($li.$log.'.cache',$sc.'|'.$score[$sc]);$i++;touch($li.$log.'.cache',filemtime($log),time());}}}
$end=number_format(microtime(true),10,'.','');$z=($end-$start)*1000;echo$z.'<br>';exit("<mark>Thanks</mark>");break;
case 6:file_put_contents('beep.txt',$_COOKIE['name']);break;
case 5:unlink('beep.txt');break;
case 4:file_put_contents('a28.php',str_replace('%^^','%^%',file_get_contents('a28.php')));break;
case 3:file_put_contents('a28.php',str_replace('%^%','%^^',file_get_contents('a28.php')));break;
case 2:file_put_contents('g3.php',str_replace('%^%','%^^',file_get_contents('g3.php')));break;
case 1:file_put_contents('g3.php',str_replace('%^^','%^%',file_get_contents('g3.php')));break;
exit('<mark>Command run: '.htmlspecialchars($_GET['d']).' [1: normal captcha, 2: spaced out captcha, 3: limit API, 4: full API, 5: no backend beep, 6: beep, 8: redo cache]</mark>');}
}
$ok='2';function qq(){return'background:radial-gradient(#00'.(strpos($_SERVER['HTTP_USER_AGENT'],'bile')?'4,#040,#400)':'2,#020,#200)');}

#CAPTCHA
function mr($gt){exit('<meta http-equiv="refresh" content="0 g3.php?next=28.ph'.$gt.'"><mark>CAPTCHA redirect</mark>');}
if(isset($_COOKIE['crc'])&&$_COOKIE['o']<time()&&crc32(base64_encode("127.0.0.1".$_COOKIE['o']))==$_COOKIE['crc']){$ok=1;}
elseif(isset($_GET['apikey'])&&file_exists("Public/temp/hostname")&&$_GET['apikey']=="nrzknf.txt"){$ok=1;}
 elseif(file_exists(crc32("127.0.0.1").".dat")&&(filemtime(crc32("127.0.0.1").".dat")+20)>time()){$ok=1;}
elseif($ok==2){if($_GET['a']=="a"){mr('p?a=a');}elseif($_GET['b']=='d'){mr('p?b=d');}elseif($_GET['b']=="b"){mr('p?b=b');}else{mr('p');}}

function db($file){if(file_exists($file)){return file($file);}return[''];}
function safe($e){
if(file_exists("1699686263.old.old")){
$file=file("1699686263.old.old");foreach($file as $filter){$f=explode("|",str_replace("\n","",$filter));$ee[]=$f[0]??'&27;';$xx[]=substr($f[1]??'&27;',0,-1);}}
if(isset($ee)){$e=str_replace($ee,$xx,$e);}return trim($e);}

if(isset($_POST['audio'])){setcookie("audio",$_POST['audio'],time()+35060);}
if(isset($_GET['a'])&&$_GET['a']=="a"){file_put_contents("crc.txt",crc().date(" jS H:i:s")."\n",8);}
$hpu='unlock.txt';
if(isset($_COOKIE['name'])&&file_exists($hpu)&&($_COOKIE['name']==file_get_contents($hpu)||safe($_COOKIE['name'])==file_get_contents($hpu))){file_put_contents("crc.txt",$_COOKIE['name'].date(".H:i:s.|"),8);exit('<meta http-equiv="refresh" content="4">');}
if(file_exists($hpu)&&file_get_contents($hpu)=='"'&&!isset($_COOKIE['9u9dyi'])&&strpos(file_get_contents("whitelist.txt"),crc())===false){file_put_contents("crc.txt",$_COOKIE['name'].date(".H:i:s.|"),8);exit('<meta http-equiv="refresh" content="4">');}
$phrase=$config[2]??'Chat';
if(isset($_POST['name'])){setcookie("name",trim($_POST['name']),time()+76400);}
if(isset($_COOKIE['name'])){$safe=safe($_COOKIE['name']);}

#if(crc()==562){$_POST['name']="S";$safe="N";}
if(isset($_POST['ign'])){setcookie("ign",$_POST['ign'],time()+76400);}
$v='<meta name="viewport" content="width=device-width, initial-scale=1">';
if(isset($_POST['refresh'])){setcookie("refresh",$_POST['refresh'],time()+76400);}
if(isset($_POST['col'])&&strlen($_POST['col'])==7){setcookie('col',$_POST['col'],time()+76400);}

#Persist a bit
if(!isset($_POST['show'])&&isset($_POST['t'])){setcookie('n',1,time());}
elseif(isset($_POST['show'])){setcookie('n',99,time()+76400);}
if(!isset($_POST['f'])&&isset($_POST['t'])){setcookie('f','',time());}
elseif(isset($_POST['f'])){setcookie('f',$_POST['f'],time()+76400);}
if(!isset($_POST['e'])&&isset($_POST['t'])){setcookie('e','',time());}
elseif(isset($_POST['e'])){setcookie('e',$_POST['e'],time()+76400);}

if(!isset($_GET['b'])&&!isset($_GET['a'])){
if(file_exists('z28.php')){echo' <form action="z28.php" method="get" style="display:inline"><input type="submit" name="e" value="Notification Only"></form> ';}
if(file_exists('testy.php')){echo'<form action="testy.php" method="get" target="_blank" style="display:inline"><input type="submit" value="Community DB"></form> ';}}

function s_t($t){return preg_replace("/<(.*) style='(.*)'>(.*)<\/(.*)>/i","$3",str_replace('isAFK','/afk',strip_tags($t,'<b><i><mark><br><q><strong>')));}
function roulette($obj){
$obj = str_replace("/","\\/",$obj);
 $strs=explode("\\",$obj);
 if(count($strs)==1){return $obj;}$obj='';
 foreach($strs as $str){
 if(strpos($str,"/sym")!==false){$aa='&#'.mt_rand(9312,11263).';&#'.mt_rand(9312,11263).';&#'.mt_rand(9312,11263).';&#'.mt_rand(9312,11263).';';
 $str=str_replace("/symbols",$aa,$str);}
 $bb='<mark>'.mt_rand(1,6).'</mark>';
 $dd=mt_rand(100,999);
 $cc='<mark style="background:#'.$dd.';color:#'.$dd.';border-radius:0px">‎____</mark>';
 $str=str_replace("/dice",$bb,$str);
 $str=str_replace("/wow",$cc,$str);
 $str=str_replace("/fc",$dd,$str);
 $obj.=$str;}
return str_replace("/bk","\\",$obj);}

#if(safe($_COOKIE['name'])=="n"){$_COOKIE['ignore']="i";}
if(!empty($_POST['comment'])){
if(file_exists("".crc())){$d=($_SERVER['REQUEST_TIME_FLOAT']-file_get_contents("".crc()));}
else{$check=floatval(str_replace("|314159","",$_REQUEST['t']));
$d=(microtime(true)-$check);}
$len=strlen(htmlspecialchars($_POST['comment']));
if($d!=0){$cps=$len/$d;}else{$cps=-1;}
$x=fopen("9u9dyi","a+");fwrite($x, $cps.'|'.$_COOKIE['crc']."|".date("m-jS H:i:s|").htmlspecialchars($_POST['name'])."|".htmlspecialchars($_POST['comment'])."\n");fclose($x);}

function crc(){$e=100+(($_COOKIE['crc']??0)%900);return $e;}

#Prevent duplicate messages (takes advantage of refresh requirements for cookies)
if(isset($_REQUEST['q'])){setcookie("u",$_REQUEST['q'],time()+35000);}

if(isset($_GET['f'])&&strpos($_GET['f'],".visit")!==false){echo'<style>*{color:#fff;background:#000}input{padding:0.3em;border-radius:8px;border:2px solid #0a0}.x{color:#888}form{display:inline}</style>';
$file=explode("|",file_get_contents($_GET['f']));$r=count($file);
echo'<br>User created at: '.$file[1].'<br><form action="" method="get"><input type="hidden" name="f" value="'.$_GET['f'].'"><input name="i" value="'.max($_GET['i']-5000,0).'" size="6"><input type="submit" value="Previous"></form>||<form action="" method="get"><input type="hidden" name="f" value="'.$_GET['f'].'"><input name="i" value="'.max($r-5000,0).'" size="6"><input type="submit" value="Next"></form><br><br>';
for($i=($_GET['i']??0);$i<min($r,($_GET['i']??0)+5000);$i++){echo$file[$i]."|";}exit;}

if(isset($_GET['b'])&&$_GET['b']=="d"){$t='';$file=db("1id8sjl.txt");$count=count($file);for($i=$count-1;$i>=max(0,$count-16);$i--){$t.=$file[$i];}$limit=substr_count($t,crc()."-")-substr_count($t,'^!<')-substr_count($t,'\\'); if($limit>($config[6]??7)&&(isset($_POST['comment'])||isset($_POST['rpl']))){file_put_contents("9u9dyi","|m".time(),FILE_APPEND);exit("<mark>! <a href='28.php?b=d'>Clear error. - Wait for reply, or delete an extra message</a></mark>");}}

#Filtering spam
if(!empty($_POST['comment'])){$token=crc32($_REQUEST['t']);
#Variables defined above
 if($d==0){$d=10;}
  $length=strlen(htmlspecialchars($_POST['comment']));$t='';
  if((($length/$d)>($config[0]??10)&&strpos($_POST['rpl'],"-")===false)||strlen($_POST['name'])>($config[1]??300)){
   echo'<span style="color:#505">'.($length/$d).' '.$length;
  file_put_contents("9u9dyi","|s".time(),FILE_APPEND);
  exit("</span><mark>! <a href='28.php?b=d'>Unknown error.</a></mark>");
}}

if(isset($_GET['b'])&&$_GET['b']=="c"&&isset($_COOKIE['9u9dyi'])){
$e=$_POST['del'];file_put_contents("whokicked.txt",htmlspecialchars($_COOKIE['name']));
if(isset($e)&&2==1){rename($e,$e.".ivisit");if(!empty($li)){unlink(''.$e.'.cache');}}
$e=explode(".v",$e)[0];
file_put_contents($hpu,$e);
#Ideally, there will be a loop to clean all messages from that user, mark the lines as [redacted ###] and store it so it can be restored or read if needed. I won't implement it though
exit("<meta http-equiv='refresh' content='1 28.php?b=b'><h3><mark>Kicked $e</mark></h3>");}

if((isset($_GET['a'])&&$_GET['a']=='Settings'&&isset($_COOKIE['9u9dyi']))||!isset($config[0])){
setcookie("9u9dyi","t",time()+432000);
$phrase=$config[2]??'Chat Settings';
if(isset($_POST['a'])){$_POST=str_replace('|','',$_POST);
file_put_contents("config.txt",htmlspecialchars($_POST['a']."|".$_POST['b']."|".$_POST['c']."|".htmlspecialchars_decode($_POST['d'])."|".$_POST['f'])."|".$_POST['g']."|".$_POST['h']."|".strrev(base64_encode($_POST['i']))."|".$_POST['j']);echo'<i>Saved</i>';$config=explode("|",file_get_contents("config.txt"));}
if(isset($_POST['e'])&&$_POST['e']!=file_get_contents("canary.txt")){file_put_contents("canary.txt",$_POST['e']);}
include('g3.php');
echo'<!DOCTYPE html><html>'.$v.'<h2>'.$q.' Config <a href="28.php"><button style="display:inline">BACK</button></a></h2>
<a href="28.php?'."9u9dyi".'=t">Pls BOOKMARK admin link!</a><br><form action="" method="post" id="f">
<b>Name of chat:</b><input name="c" value="'.$config[2].'" size="22"><br>
<b>Characters per second :</b><input name="a" value="'.($config[0]??8).'" size="3"><br>
<b>Message max length:</b><input name="b" value="'.($config[1]??300).'" size="3"><br>
<b>Max Messages in a row:</b><input name="h" value="'.($config[6]??7).'" size="3"><br>
<b>Messages to show:</b><input name="f" value="'.($config[4]??30).'" size="3"><br>
<b>Filter edit:</b><input name="g" value="'.($config[5]??1).'" size="2"><b>(2 = admin, 1 = all)</b><br>
<b>Invite code (30 on public chat):</b><input name="i" value="'.(base64_decode(strrev($config[7]))??30).'" size="8"><br>
<b>Online list (s) </b><input name="j" value="'.($config[8]??'30').'" size="3"><br><br>
<button>Save</button><br><br>
 Canary:<br><br><input name="d" value="'.$config[3].'" size="'.(strlen($config[3])??35).'" placeholder="Link"><br>
 <textarea name="e" class="v" form="f" cols="80" rows="40" placeholder="canary.txt">'.htmlspecialchars(file_get_contents("canary.txt")).'</textarea>';
echo'</form><br><b>If @Aera23 has an update, use <a href="https://aera23.net/download.php?f=28.php&a=100" target="_blank">link 1</a> and <a href="https://aera23.net/download.phpf=g3.php&a=100" target="_blank">link 2</a>. Replace the old code with it.</b><style>button:hover,a:hover{color:#0ff}button,input{background:#464;color:#fff;border-radius:8px;padding:0.4em;margin:0.2em;border:2px solid #050}button:hover,input:hover{border:2px solid #0a0}html{margin:3em;font-family:sans-serif}::placeholder{color:#fff;opacity: 1}::-ms-input-placeholder{color: #fff;opacity: 1}
*{background:#000;color:#0af}b,h2{color:#0cf}form{display:inline}textarea{padding:0.3em;border-radius:15px}</style></form></html>';exit;}

if(isset($_POST['del'])){$a=2;
$file=db("1id8sjl.txt");$count=count($file);
 if($_COOKIE['crc']%1000==0){$e=(100+crc32("127.0.0.1")%900);}
 else{$e=100+($_COOKIE['crc']%900);}
if($_POST['del']=="n"){for($i=0;$i<$count-max((($_POST['lines']??0)*2),2);$i++)
{$prvt.=$file[$i];}file_put_contents("1id8sjl.txt",$prvt);}
elseif(isset($e)&&strpos($file[$_POST['del']],$e.'-')!==false){$a=1;}
elseif(isset($_COOKIE['9u9dyi'])){$a=1;}
if($a==1&&abs($count-intval($_POST['delete']))<50){for($i=0;$i<$count;$i++){if($_POST['del']!=$i&&$_POST['del']!=$i-1){$prvt.=$file[$i];}}file_put_contents("1id8sjl.txt",$prvt);}}

#Refresh List
if(isset($_GET['b'])&&$_GET['b']=="b"){
$sec=max(intval($_COOKIE['refresh']??'4'),4);
if(is_dir('Music')){$names=glob("*.visit.cache");$tt='a';}
if(empty($names)||count($names)<6){$names=glob("{,.}*.visit",GLOB_BRACE);$tt='';}
$arr=[];
#https://stackoverflow.com/posts/3298787/revisions
array_multisort(array_map('filemtime',$names),SORT_NUMERIC,SORT_DESC,$names);$ee=0;$i=0;
foreach($names as $name){
if($i<10){
$l=filemtime($name);
if(($l+($config[8]??30))>time()){$ee+=1;}
#Cache only
if($tt=='a'){
$z=explode('|',file_get_contents($name));
$qq=intval($z[0]);
$time=$z[1];}
elseif('/home/peplive'!=''&&file_exists(''.$name.'.cache')){#Cached
$z=explode('|',file_get_contents(''.$name.'.cache'));
$qq=intval($z[0]);
$time=$z[1];}
else{$p=file_get_contents($name);#Uncached
$z=explode('|',$p);
$qq=array_key_last($z);
$time=$z[$qq];}
$i++;
$name=str_replace('.cache','',str_replace('.visit','',str_replace('','',$name)));
if(isset($_COOKIE['9u9dyi'])){$p='<tr><td><form action="28.php?b=c" method="post" style="display:inline"><button name="del" value="'.$name.'.visit" class="t">'.(($name!='0000')?(($name==$safe)?'⚠️':'❌'):'⚠️').'</button></button></form></td><td style="text-align:center">';}else{$p='<tr><td style="text-align:center">';}
$arr[]= $p.str_replace("alkalineLight","Moonlight",$name).'</td><td style="text-align:center">'.str_replace("3 ", "31 ",str_replace(date("jS"),"",str_replace(date("m-"),"",$time.'<span class="x"></td><td style="text-align:right"><a href="28.php?f='.$name.'.visit&i='.max($qq-600,0).'" target="_blank">'.number_format((($name=='Anonymo')?($qq+50000):$qq)))))."</a></td>
</tr>";}else{break;}}
$tt='';$z=0;foreach($arr as $str){if($z<11){$tt=$tt.$str;}$z++;}
echo"<!DOCTYPE html><html><meta http-equiv='refresh' content='$sec 28.php?b=b&o=$ee'>";
if(isset($_GET['o'])&&$_GET['o']!=$ee&&isset($_COOKIE['ina'])&&$_GET['b']=='b'){$phrase='-';include('g3.php');gt();echo'<mark style="display:inline">*</mark>';}
echo"<style>tr{background:#031}tr:nth-child(n+".($ee+1)."){background:#400}center{font-family:sans-serif}a{color:#8f8}button{background:#f88;border-radius:8px;border:2px solid #f00}table{border-spacing:0}td{border:1px solid #afa;color:#fff;border-radius:6px;background:inherit;line-height:1.3;font-size:16px;max-width:10em;padding:0.2em}tr:nth-child(2n) td{border:1px solid #060}tr:nth-child(2n+".($ee+2).") td{border:1px solid #740000 !important}tr:nth-child(2n+".($ee+1).") td{border:1px solid #f16464 !important}.x{color:#888}.t:hover{border:2px solid #80f;background:#f80}</style><center><span style='font-size:17px;background:inherit;color:#afa'>Last online: ";
exit($ee.' (last '.($config[8]??30).'s)</span><br><table>'.$tt.'</table></center></html>');}

$em=max(min(floatval(htmlspecialchars($_REQUEST['e']??'1')),1.5),0.7);
if(isset($_GET['b'])&&$_GET['b']=='d'){
include('g3.php');
if(file_exists("3.html")){
$file=db("3.html");foreach($file as $filter){$f=explode("|",str_replace("\n","",$filter));$find[]=$f[0];$change[]=substr($f[1],0,-1);}}
function process($e,$find,$change,$config)
{if($e==$_POST['name']){$e=substr($e,0,min(strlen($e),50));}
$e=htmlspecialchars($e);
$x=['hild p','DM me','DM @','t.me','nigge','i watch pedo','inces','pajee','notbu','opic link','invite/i=','cp vid','kill them all','05dd3b3dd','pussy','cheese piz','cp tel','1705262',
'ck a 8yo','tortub','changehd','cream pi','porn?','hottie','slut','on fuckin','yatl','edoli','gekkko','loli','sexy l','j2gpb','rape th','oy vid','irl vid','ucking my sis','horny','pizza link','telcp',
'cum in','cums in','edo links','selling my n','05962e20f','gas immigr','ITTLE GIR','load cp','cp link ?','kidfli','cum on','jewish ga','r*pe and m*rder','yos are sex','onion cent','teen vid',
'tits','whore','coxpql','killing their kid','kill their offspr','zioni','ewish reta','wipe their fam','racemix','PREPUBE','years old f','1488','pid jew','club p','ldren p','porn vid','uoxqi4',
'give us cp','anti-White','very young','my cum','na cum','schoolgir','reteen',' cepe ','can i sex','his fantasy','my breast','rape my','evki.uno','cums on','rape or incest','erect','_CUM_',
'snapchat blackm','mega.nz/f','nipple','little boy','boobjob','blow job','favorite age','05b0f5bb','looking for porn','onlyfan','extreme porn','hairy cock','kinder p','Avenue','boys to play','have cp li',
'young fun','dick swing','up your ass','hebe','any kids?','omgporn','c. P.','1096047','rape/forced vid','rape vid','kids pant','ids shorts down','fuck your li','have any cp','illegal porn','kiddie p',
'cp or rape','buy cp','get cp','I find cp','hottie','fuck their','suck my','suck cock','cp pic','/UTTP','xplay','ofl4t','/ZTTP','loli','Hurt Core','fuck his','kill you','kill urs','cumlub','best CP',
'pxl.que','5ety7tp','jwzze','toddler in di','jerk off','undress a','so horny','czrk3z','nudes','i like kid','teeng','luvteen',
'pedomom','bc1q2a','vwsb7j','young love b','oju4yn','be pedo','aiw invite','t some cp','6 to 13','14 is too old','i love kid','xnrpew','nypho','cuck','Cuck','fag ',' fag','knicker','bald slit','pomf2',
'suckin ','dick for','have all age','ck and rape','oral sex','penis','little cock','femboy ass','rape u','panti','cum sh','jdiaz3','d cum','aman1shani','edgin','Goon','his crack','yunglove','for sex','telegram',
'pre cum','iifz7v','Who has CP','retard','pedo ever','fagg','fucker','films up woman','sexual acts','love cp','girls to play','cummi','mywrn4',' pubes ','am a pedo','rape you','take your draws d',
'topics link','hitler','open to trade','Death to i','Death to pa','jews be','hamas','power of love','dumpliw','cp free'];
if(preg_match('/[a-zA-Z0-9][^a-zA-Z0-9][a-zA-Z0-9][^a-zA-Z0-9][a-zA-Z0-9][^a-zA-Z0-9][a-zA-Z0-9][^a-zA-Z0-9][a-zA-Z0-9][^a-zA-Z0-9]/i',$e,$m)){$e='slut';}
foreach($x as $y){
if(stripos($e,$y)!==false){file_put_contents('unlock.txt',$_POST['name']);
$write='000-<i>'.date("m-jS H:i:s").'</i> |<span style="color:'.htmlspecialchars($_COOKIE['col']??'#88ff88').'">/m Filter triggered: '.$y.'</span>'."
  
";file_put_contents("1id8sjl.txt",$write,FILE_APPEND);
exit();}}
if($e==$_POST['name']){$e=safe($e);}
$e=str_replace("\n","<br>",$e);
$e=str_replace("\r","",$e);
$e=substr($e,0,min(strlen($e),($config[1]??500)));
#Complex way of preserving url and highlights
$pattern="/http[^\s]*\s?/i";preg_match_all($pattern,$e,$cache);
$e=preg_replace($pattern,'󛱟',$e);
$e=str_ireplace('@Aera23','@aera',$e);
$e=highlighter($e);
#More complexity near end
$e=str_replace('cafe','café',$e);
$e=str_ireplace('`e','é',$e);
$e=str_ireplace('/chess','https://lichess.org/',$e);
$e=str_ireplace('/help','/[dice, chess, symbols, me, pmhelp, wow, shrug, help, fl] &lt;&lt; Current commands',$e);
$e=str_ireplace('/pmhelp','/[pm 999 message (to PM user with the leftmost number of 999)] ',$e);
$e=str_ireplace('/back','<span style="animation:AERA 6s infinite !important;">Back</span>',$e);
$e=str_replace('/afk','<span style="animation:AERA 6s infinite !important;">isAFK</span>',$e);
$e=str_replace('era23@','er\\a23@',$e);
$e=str_replace('ra23.n','r\\a23.n',$e);
$e=str_replace('&lt;3','<mark style="background:red;">♥</mark>',$e);
$e=str_replace('aera','<a href="mailto:aera23@protonmail.com">A</a><font color="#0ff">e</font><font color="#0f0">r</font><font color="#ff0">a</font><font color="#f86">2:clock:</font>',$e);
$e=str_replace('nt>23','nt>',$e);
$e=str_replace('/shrug',':shrug:',$e);
$e=str_replace('XD','<mark>XD</mark>',$e);
$e=str_replace('priya','<a href="#">p</a><font color="#0ff">r</font><font color="#0f0">i</font><font color="#ff0">y</font><font color="#f86">a :clock:</font>',$e);
$e=str_replace('PROTOTYP','<a href="#">PR</a><font color="#0ff">OT</font><font color="#0f0">OT</font><font color="#ff0">YP</font><font color="#f86">E :clock:</font>',$e);
$e=str_replace('ENCHANTRESS','<a href="#">EN</a><font color="#0ff">CH</font><font color="#0f0">ANT</font><font color="#ff0">RE</font><font color="#f86">SS :clock:</font>',$e);
$e=str_replace('ARIONONE','<a href="#">AR</a><font color="#0ff">IO</font><font color="#0f0">NE</font><font color="#ff0">ON</font><font color="#f86">E :clock:</font>',$e);
if(str_contains($e,':')){
$e=str_replace(':clock:','<font color="#f86"><span class="a0">7</span><span class="a1">6</span><span class="a2">5</span><span class="a3">4</span><span class="a4">3</span><span class="a5">2</span><span class="a6">1</span><span class="a7">0</span><span class="a8">9</span><span class="a9">8</span></font>',$e);
$e=str_replace(':\\','<mark>:\\</mark>',$e);
$e=str_replace(':rainbow:','🟤 🔴 🟠 🟡 🟢 🔵 🟣',$e);
$e=str_ireplace(':o','<mark>:o</mark>',$e);
$e=str_ireplace(':hug:','🫂',$e);
$e=str_ireplace(':hugs:','🫂',$e);
$e=str_ireplace(':cat:','🐈',$e);
$e=str_ireplace(':dog:','🐕',$e);
$e=str_ireplace(':tree:','🌴',$e);
$e=str_ireplace(':music:','🎵',$e);
$e=str_ireplace(':book:','📒',$e);
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
$e=str_replace(':?','<mark>:?</mark>',$e);
$e=str_ireplace(':kiss:','😗',$e);
$e=str_ireplace(':ice:','🧊',$e);
$e=str_ireplace(':goat:','🐐',$e);$w='<span class="a0">wheee!!</span><span class="a9">wheeee!</span><span class="a8">wheeeee</span>';
$e=str_ireplace(':spacedock:','<span class="a4">8==>__<==8</span><span class="a3">8==>_<==8</span><span class="a2">8==><==8</span><span class="a1">8=~~~~~=8</span>'.$w,$e);
$e=str_ireplace(':docking:','<span class="a4">8==>__(|)</span><span class="a3">8==>_(|)</span><span class="a2">8==>(|)</span><span class="a1">8=~~~~~|)</span>'.$w,$e);
$e=str_ireplace(':lovedock:','<span class="a4">(|)__(|)</span><span class="a3">(|)_(|)</span><span class="a2">(|)(|)</span><span class="a1">(|~~~~|)</span>'.$w,$e);
$e=str_ireplace(':whirl:','<span class="a4">o--0-</span><span class="a3">oo-0-</span><span class="a2">-oo0-</span><span class="a1">--oo0</span><span class="a0">0--oo</span><span class="a9">00-oo</span>',$e);}
$e=str_replace(';)','<mark>;)</mark>',$e);
$e=str_replace('plmm','http://forwhoallvglhpsx6dhycfb4fu4a2lqkvxtwlivruw765qxofyns7wqd.onion/',$e);
$e=str_ireplace('&lt;q&gt;','<q>',$e);
$e=str_ireplace('&lt;/q&gt;','</q>',$e);
$e=str_ireplace('magic','<font color="#0ff">m</font><font color="#0f0">a</font><font color="#ff0">g</font><font color="#f86">i<span class="a0">c</span><span class="a1">C</span><span class="a2">c</span><span class="a3">C</span><span class="a4">c</span><span class="a5">C</span><span class="a6">c</span><span class="a7">C</span><span class="a8">c</span><span class="a9">C</span></font>',$e);
$e=roulette($e);
$e=preg_replace('|([0-9]):3|i', '$1:__3', $e);
$e=str_replace($find,$change,$e);
$e=str_replace(':__3',':3',$e);
$e=str_replace('/bk','\\',$e);
$e=str_replace('!.','!',$e);
$e=str_replace('<mark>0.0</mark>.','0.0.',$e);
$e=str_replace('.<mark>0.0</mark>','.0.0',$e);
$e=str_replace('<mark>:3</mark>)','<mark>:3)</mark>',$e);
$e=str_replace('&lt;br&gt;','<br>',$e);
$e=nl2br($e);
$a=explode('󛱟',$e);#Restores urls
$j=0;$e='';if(!isset($cache[0][0])){$cache[0][0]='';}
foreach($a as $b){$e.=$b.$cache[0][$j];$j+=1;}
#https://stackoverflow.com/questions/14399246/preg-replace-url-with-links-mime-types-failure (corrected at regex101.com)
$e=preg_replace('|([\w\d]*)\s?(https?://([\d\w\.-]+\.[\w\.]{2,6})[^\s\]\[\<\>]*/?)|i', '$1 <a href="$2" target="_blank">$2</a>', $e);
#Code highlight
$e=preg_replace('|``(.*)``|i','``<span style="font-family:monospace;background:#040;color:#0f0;font-size:1.2em">$1</span>``',$e);
return $e;}}

#Show Colour choice
if(empty($_GET['a'])){if(empty($_COOKIE['col'])){$cb=(mt_rand()%10);
$cf=["ff33f",'77ff7','ff334',"11ffe","eeaa0","00dfd","ff880","ffff0","00ff0","0088f"];$cfi='#'.$cf[$cb].$cb;}
else{$i=0;
if(isset($_POST['col'])){$cfi=$_POST['col'];}
else{$cfi=$_COOKIE['col'];}}

if(isset($_GET['b'])&&$_GET['b']=='d'){$z=2;
#Saving messages
if(isset($_POST["name"])&&!empty($_POST["comment"])&&$_COOKIE['u']!=$_REQUEST['q']){$z=5;
$comment=trim($_POST["comment"]);
#Prevent multiple submissions within 2s of last one
if(!file_exists("".crc())){file_put_contents("".crc(),$_SERVER['REQUEST_TIME_FLOAT']);}
elseif(($_SERVER['REQUEST_TIME_FLOAT']-2)>file_get_contents("".crc())){file_put_contents("".crc(),$_SERVER['REQUEST_TIME_FLOAT']);}
else{file_put_contents("".crc(),$_SERVER['REQUEST_TIME_FLOAT']);exit("<a href='28.php?b=d'><mark>Error F</mark></a>");}

$me=strpos($_POST['comment'],'/me ');
#Prepare messages
if($me!==0&&$me!==2&&$me!==3&&$me!==8){$txt=process($_POST["name"],$find,$change,$config)." - ".process($comment,$find,$change,$config);}
else{$txt=process($_POST["name"],$find,$change,$config).str_replace('/me ',' ',process($comment,$find,$change,$config));}

if(strpos($_POST['comment'],'/ai ')===0){$_POST['comment'] = str_replace('/ai ','',$_POST['comment']);file_put_contents('Documents/ai.txt',$_POST['comment']);}
#Nick protect
if(strpos($_POST['comment'],'/np ')===0){$p=htmlspecialchars(str_replace('/np ','',str_replace('|','',nl2br($_POST['comment']))));$z=4;
if(strlen($_POST['comment'])>5&&$safe==$_COOKIE['name']){$cf=fopen("1699686263.old.old","a") or die($m);$e=htmlspecialchars(str_replace("/np ","",$_POST['name']."|alkaline \n".$_POST['comment'].'|'.$_POST['name']." \n"));fwrite($cf, $e) or die("<a href='28.php?b=d'><mark>Can't write</mark></a>");fclose($cf);$z=4;
echo"<mark>Protection added for ".htmlspecialchars($_POST['name']).", use $p instead</mark>";$_POST['name']=$p;$_COOKIE['name']=$p;setcookie("name",htmlspecialchars_decode($p),time()+35000);}else{$_POST['comment']='';}}
#Topic
if(strpos($_POST['comment'],'/bm ')===0&&($config[5]==1||!empty($_COOKIE['9u9dyi']))){
$bm=str_replace("/bm ","",process($_POST['comment'],$find,$change,$config));
$cf=fopen("load.txt", "w+") or die($m);fwrite($cf, $bm) or die("<a href='28.php?b=d'><mark>Can't write</mark></a>");fclose($cf);$z=3;}
if(isset($_COOKIE['9u9dyi'])){
#Ban
if(strpos($_POST['comment'],"/k ")===0){$cf=fopen($hpu,"w") or die($m);$e=htmlspecialchars(str_replace("/k ","",$_POST['comment']));fwrite($cf, $e) or die("<a href='28.php?b=d'><mark>Can't write</mark></a>");fclose($cf);$z=4;echo"<mark>Kicked $e</mark>";file_put_contents("whokicked.txt",htmlspecialchars($_COOKIE['name']));$_POST['comment']=' ';}
#AntiRaid
if(strpos($_POST['comment'],"/r")===0){if(file_get_contents($hpu)=='"'){unlink($hpu);echo"<mark>Anti-Raid off</mark>";}else{$cf=fopen($hpu,"w") or die($m);fwrite($cf, '"') or die("<mark>Can't write</mark>");fclose($cf);echo"<mark>Anti-Raid on</mark>";}$z=4;file_put_contents("whokicked.txt",htmlspecialchars($_COOKIE['name']));}}
if($config[5]==1||isset($_COOKIE['9u9dyi'])){
#WARNING: creating beep.txt enables terminal. remove the /x block if concerned
if(strpos($_POST['comment'],"/x ")===0&&file_exists('beep.txt')){$z=4;echo'<pre><mark>';system(str_replace("/x ","",$_POST['comment']));echo'</mark></pre>';}
#Filter add
if(strpos($_POST['comment'],"/fa ")===0){$cf=fopen("3.html","a") or die($m);$e=htmlspecialchars(str_replace("/fa ","",$_POST['comment']));fwrite($cf, $e."\n") or die("<a href='28.php?b=d'><mark>Can't write</mark></a>");fclose($cf);$z=4;echo"<mark>Filter added: $e</mark>";}
#Filter remove
if(strpos($_POST['comment'],"/fr ")===0){$file=db("3.html");$e=str_replace("/fr ","",$_POST['comment']);
for($i=0;$i<count($file);$i++){if($e!=($i+1)){$p.=$file[$i];}}file_put_contents("3.html",$p);
$z=4;echo"<mark>Filter $e removed</mark>";}
if(strpos($_POST['comment'],"/t")===0){if(file_exists('beep.txt')){system("ffplay '/media/peplive/1844AEA344AE82DC/Aera23/Downloads/files/X-guitar.mp3' -autoexit -nodisp");echo"<mark>Triggered beep</mark>";}else{echo"<mark>Beep disabled</mark>";}$z=4;}
#Topic
if(strpos($_POST['comment'],'/w ')===0){
$bm=str_replace("/w ","",$_POST['comment']);
$cf=fopen("whitelist.txt", "w") or die($m);fwrite($cf, $bm) or die("<a href='28.php?b=d'><mark>Can't write</mark></a>");fclose($cf);$z=3;}
#Filter list
if(strpos($_POST['comment'],"/fl")===0){
$v=db("3.html");$i=0;
foreach($v as $z){$i++;$e.=$i.'&gt;'.$z.'<br>';}
echo"<mark>$e</mark>";$z=4;}}}

#Writing
if(isset($_REQUEST['q'])&&$_COOKIE['u']!=$_REQUEST['q']&&$z==5){$e='';

if(isset($_POST['rpl'])){$file=db("1id8sjl.txt");}
 #Find the message number that was replied to, cannot be more than 300 below the current message
 if(isset($_POST['rpl'])&&$_POST['rpl']>(max(0,count($file)-(($config[4]??30)*2)))){$file=db("1id8sjl.txt");$reply=$file[$_POST['rpl']];if(strpos($reply,"^!<")!==false){unset($reply);}if(empty($reply)){$reply="
";}
$e='[Msg Quote]|<br><button style="background:inherit;font-size:0.99em;border:2px solid #afa;line-height:0.8em;float:right;margin-top:-3em;max-height:3em">'.crc().'-'.$reply.'</button>
';}
elseif(!empty($_POST['rpl'])&&$_POST['rpl']<0){$line=str_replace('-','',$_POST['rpl']);$reply=$file[$line];}
#Prepend the CRC code to the message
$e.=crc();
if(isset($_POST["col"])&&strlen($_POST["col"])==7){$colour=htmlspecialchars($_POST['col']);}
else{$colour=htmlspecialchars($_COOKIE["col"]);}
$write=$e.'-'.'<i>'.date("m-jS H:i:s").'</i> |<span style="color:'.$colour.';font-size:'.($em??'1').'em;font-family:'.(htmlspecialchars($_POST['f']??'inherit')).'">'.$txt."</span>";$nl="

";preg_match("/\/pm ([0-9]{3}) ?/i",strtolower(process($_POST['comment'],$find,$change,$config)),$matches);
#Check for PM command, before writing somewhere.

if(isset($matches[1])&&strpos($_POST['comment'],"/pm")===0){
$write=str_replace($matches[0],'',$write.$nl); $m="The comments aren't working due to a server error. ";
if(strlen($_POST['comment'])==8||strlen($_POST['comment'])==7){$z=4;}
$write="/pm ".$matches[1].crc()."-^!<b><u>PM</u></b>--".$write;

if(isset($_POST['rpl'])&&isset($e)&&strpos($file[$line],$e)!==false){
for($i=0;$i<count($file);$i++){if($line!=$i){$prvt.=$file[$i];}else{$prvt.=$write."\n";}}file_put_contents("1id8sjl.txt",$prvt);}
elseif($z!=4){$cf=fopen("1id8sjl.txt", "a+") or die($m);
fwrite($cf,$write) or die("Can't write");
fclose($cf);}}

elseif(isset($_POST['rpl'])&&!empty($e)&&!empty($line)&&strpos($file[$line],$e)!==false){
for($i=0;$i<count($file);$i++){if($line!=$i){$prvt.=$file[$i];}else{$prvt.=$write."\n";}}file_put_contents("1id8sjl.txt",$prvt);}
else{
if(stripos($_POST['comment'],'system')!==false){
$sys=$nl.$e.'-'.'<i>'.date("m-jS H:i:s").'</i> |<span style="color:'.$colour.';font-size:'.($em??'1').'em;font-family:'.(htmlspecialchars($_POST['f']??'inherit')).'">System: '.$change[time()%60]."</span>$nl";}
$cf=fopen("1id8sjl.txt", "a+") or die($m);fwrite($cf, $write.($sys??$nl)) or die("<mark>Can't write</mark>");fclose($cf);}}}

if(!isset($_GET['b'])||$_GET['b']!="d"){echo'<!DOCTYPE html><html id="f"><title>'.$phrase.'</title>';}
#if(empty($_REQUEST['lines'])){$l=12;}else{$l=min($_REQUEST['lines'],48);}
$e=microtime(true);
$token=crc32($e."|314159");
#Light theme: bg #ff9, txt #930
echo $v.'<style>
@media(max-width:929px){#tx{width:99%;height:10em}#d{width:99%}}
@media(min-width:930px){#tx{width:32%;height:13.5em;margin-top:-3.5em}#d{width:65%}}#f:nth-child(1){'.qq().'}
html{color:#fff;background-opacity:0.5}pre{font-family:sans-serif}a{color:#afa}a:hover{color:#28f}input,button,iframe{border-radius:8px;border:1px solid #050}* mark{padding:0.2em;border-radius:10px}
input[type=submit]{background-image:url(\'78.php\') !important}
input{padding:0.5em;border:3px solid #050;color:#fff !important;font-family:'.htmlspecialchars($_POST['f']??'sans-serif').'}button:hover,input:hover{padding:0.5em;background:#560;border:3px solid #0a0}
.n:hover{background:#f00}h3{margin-top:0.3em}</style><body style="margin:1.5em">';

if(isset($_REQUEST['show'])){
echo'<h3 style="padding:0px;margin:0px" id="#top"><center style="margin-top:-1.15em">'.$q.' | Score: '.count(db("9u9dyi")).'</center></h3>';}
echo'<style>input{padding:0.5em;background:#464;placeholder:#02f}input:hover{padding:0.5em; background:#558}';
for($i=0;$i<24;$i++){echo'.e'.$i.'{animation:s 86400s steps(4) infinite;animation-delay:'.(0-((time())%86400)-($i*3600)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<6;$i++){echo'.d'.$i.'{animation:k 3600s steps(4) infinite;animation-delay:'.(0-((time()-2999)%3600)-($i*600)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<10;$i++){echo'.c'.$i.'{animation:c 600s steps(4) infinite;animation-delay:'.(0-((time()-539)%600)-($i*60)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<6;$i++){echo'.b'.$i.'{animation:i 60s steps(4) infinite;animation-delay:'.(0-((time()-28)%60)-($i*10)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<10;$i++){echo'.a'.$i.'{animation:t 10s steps(1) infinite;animation-delay:'.((10-(time()-28)%10)-$i).'s;opacity:0;font-size:0.1px}';}
$oa='opacity:1;font-size:20px';$ob='opacity:0;font-size:20px';$oc='opacity:0;font-size:0.1px';
echo'.r{color:#6f6}.g{width:15em;margin-right:8em;margin-left:0.5em;background:#040;padding:0.4em;border-radius:10px}
/*Clock :)*/
@keyframes t{
 0%{'.$oa.'}9.98%{'.$oa.'}9.99%{'.$ob.'}10%{'.$oc.'}}
@keyframes i{
 35%{'.$oc.'}35.1%{'.$ob.'}35.2%{'.$oa.'}51.7%{'.$oa.'}51.8%{'.$ob.'}51.9%{'.$oc.'}}
@keyframes c{
 0%{'.$oc.'}0.01%{'.$ob.'}0.02%{'.$oa.'}10.01%{'.$oa.'}10.02%{'.$ob.'}10.03%{'.$oc.'}}
@keyframes k{
 0%{'.$oc.'}0.01%{'.$ob.'}0.02%{'.$oa.'}16.67%{'.$oa.'}16.68%{'.$ob.'}16.69%{'.$oc.'}}
@keyframes s{
 0%{'.$oc.'}0.0001%{'.$ob.'}0.0002%{'.$oa.'}4.1657%{'.$oa.'}4.1658%{'.$ob.'}4.1659%{'.$oc.'}}
/*https://stackoverflow.com/questions/4148499/how-to-style-a-checkbox-using-css*/
.l,.r{font-family:monospace}.l{font-size:1.1em}.l span:hover{border:2px solid #0a0}.l span{height:15px;width:15px;border:2px solid grey;background:'.$cfi.';display:inline-block;position:relative;margin-top:5px;}.l input{opacity:0.01}
[type=checkbox]:checked+span:before{content:"✔️";position:absolute;top:-4px;left:0}</style>';

if(isset($_GET['b'])&&$_GET['b']=='d'){
echo'<form action="" target="_self" method="post"><span class="l">Colour:</span>
<input type="color" name="col" value="'.$cfi.'" style="padding:0em">...
<input name="name" size="15" value="'.htmlspecialchars($_POST["name"]??$_COOKIE["name"]).'" placeholder="Nick" required><br>
<input style="color:#fff;background:linear-gradient(to left,#252, #525);" name="comment" maxlength="'.($config[1]??500).'" ';
#PM/M
preg_match("/^\/pm ([0-9]{3}) ?/i",strtolower(htmlspecialchars($_POST['pm']??$_POST['comment']??'')),$matches);
if(!empty($matches[0])){echo' value="'.$matches[0].'"';}

preg_match("/^\/m[^e]|\/m$/i",strtolower(htmlspecialchars($_POST['comment']??'')),$matches);
if(!empty($matches[0])){echo' value="'.$matches[0].'"';}

echo' placeholder="';if(!isset($_REQUEST['reply'])){echo'Type a message.';
if(isset($_REQUEST['show'])){
echo' Current heuristics: '.$limit.'/'.$config[6].'L & '.$config[0].' C/S & '.$config[1].'C."';}
}elseif(isset($_REQUEST['reply'])&&$_REQUEST['reply']>0){echo'Reply (refresh to cancel)"';}else{echo'Edit (send a blank message to cancel)"';}
if(isset($_REQUEST['reply'])&&$_REQUEST['reply']<0){$file=db("1id8sjl.txt");

if(strpos($file[abs(intval($_REQUEST['reply']))],"/pm")===false){
preg_match('/\">('.preg_quote(htmlspecialchars($safe)).') (- )?(.*)<\/span>/i',$file[abs(intval($_REQUEST['reply']))],$matches);
$e=s_t($matches[2]!='- '?'/me '.$matches[3]:$matches[3]);
}
else{
preg_match("/\/pm ([0-9]{3})([0-9]{3})-\^!/i",$file[abs(intval($_REQUEST['reply']))],$x);
preg_match('/\">('.preg_quote(htmlspecialchars($safe)).') (- )?(.*)<\/span>/i',$file[abs(intval($_REQUEST['reply']))],$matches);
$e='/pm '.$x[1].' '.s_t($matches[2]!='- '?'/me '.$matches[3]:$matches[3]);}
echo' value="'.$e.'"';}echo'" size="54" autofocus="true" id="a"><script>setTimeout(function(){var a=document.getElementById("a");a.focus();a.selectionStart=a.selectionEnd='.($config[1]??500).';},0);</script>';#https://stackoverflow.com/questions/511088/use-javascript-to-place-cursor-at-end-of-text-in-text-input-element

if(isset($_REQUEST['show'])){
echo'<span>. . Emphasis (0.7-1.5em):</span>
<input name="e" size="3" value="'.min(htmlspecialchars($_COOKIE['e']??$_REQUEST['e']??1),1.5).'" max="1.5">
<span>Refresh* (s)</span>
<input name="refresh" size="3" value="'.htmlspecialchars($_POST['refresh']??$_COOKIE['refresh']??'').'" min="3" placeholder="4">
<span>Audio (on|off)</span>
<input name="audio" size="3" value="'.htmlspecialchars($_POST['audio']??$_COOKIE['audio']??'').'">
<span>Font</span><input name="f" value="'.htmlspecialchars($_COOKIE['f']??$_REQUEST['f']??'').'" placeholder="Type s for fonts" list="f">
<datalist id="f"><option value="monospace"><option value="sans-serif"><option value="serif"><option value="cursive"><option value="fantasy"></datalist>
<input name="ign" value="'.htmlspecialchars($_POST['ign']??$_COOKIE['ign']??'').'" placeholder="Ignore (crc or keyword)"> * [Min auto refresh delay]
<!--span>Messages:</span><input name="lines" size="2" value="htmlspecialchars($l)" max="64"-->';}
else{echo'<input type="hidden" name="f" value="'.htmlspecialchars($_REQUEST['f']??'').'"><input type="hidden" name="e" value="'.min(htmlspecialchars($_REQUEST['e']??1),1.5).'">';}

#Chat form
echo'<input type="hidden" name="t" value="'.$e.'|314159"><input type="hidden" name="q" value="'.$token.'"><input type="hidden" name="rpl" value="'.htmlspecialchars($_REQUEST['reply']??'').'">'; if(!empty($_COOKIE['9u9dyi'])){echo'<span class="n"><input type="checkbox" name="del" value="n"></span>';}
echo'<input style="background:#252;color:#fff" type="submit" onclick="window.navigator.vibrate(10);" value="Send"><label class="l"><input type="checkbox" name="show" value="y" ';if(isset($_REQUEST['show'])){echo' checked';}exit('><span></span>&nbsp;&nbsp;Request bonus features</label></form>');}

else{echo'<style>#show,.content{display:none}
#show:checked~.content{display:block !important}label u{color:#afa}label u:hover{color:#0ff}
show,.hidden{display:block}#show:checked~.hidden{display:none}
</style><input id="show" type="checkbox"><label for="show"><u>'.$phrase.' QUICK Help<b></b></u> | <a href="music.php" target="_blank">🎵 Music</a> | <a href="22.php" target="_blank">🎨 Hotbit colours</a> | <a href="colour.php" target="_blank">🚅 SpeedTest</a> | <a href="files.php" target="_blank">⬆️ Files</a> | <a href="add.php" target="_blank">🏜️, Pyramid Puzzle</a>';
 if(isset($_COOKIE['9u9dyi'])&&!isset($_GET['9u9dyi'])){echo' <form action="28.php" style="display:inline"><input type="submit" name="a" value="Settings"></form>';}
echo'<br><span class="r">UTC: <span class="g"><span class="e0">0</span>';
for($i=0;$i<15;$i++){if($i!="0"){$e=((24-$i)%24);}else{$e="00";}echo'<span class="e'.$i.'">'.((24-$i)%24).'</span>';}
for($i=15;$i<24;$i++){echo'<span class="e'.$i.'">0'.(24-$i).'</span>';}echo'<span class="x">:</span>';
for($i=0;$i<6;$i++){echo'<span class="d'.$i.'">'.(5-$i).'</span>';}
for($i=0;$i<10;$i++){echo'<span class="c'.$i.'">'.(9-$i).'</span>';} echo'<span class="x">:</span>';
for($i=0;$i<6;$i++){echo'<span class="b'.$i.'">'.(5-$i).'</span>';}  for($i=0;$i<10;$i++){echo'<span class="a'.$i.'">'.(9-$i).'</span>';}
echo'<br></span></label><div class="content"><span style="color:#66e">Set standard Tor security for audio pings. <i>(Type "/pm '.crc().' message" for self-PM.)</i>
<br>&gt;Last Online is based on browser refresh, which can mislead if a user leaves their tab open while AFK, or their browser stops refreshing due to temporary network timeout.</span>
<p style="color:#8e8"><br>
<mark style="background:#600;color:#8f8">PROTECT your nick with nickprotect! Helps prevent impersonation | Syntax:/np codename | (type /nick and /np1 for more info)</mark><br>
Emojis and commands: :alien: :books: :tree: :book: :kiss: :dog: :fire: :ice: :cash:<br><i style="color:#afa">MORE: :bat: :egg: :taco: :eggplant: :rocket: :ghost: :elephant: :snail: :lips: :pumpkin: :xmas: :bird: :lovedock: :docking: :spacedock: :miii:</i><br><span style="color:#e6e">:shrug: /shrug :goat: :rainbow: /wow /symbols :cat: :music: :shroom: /me, /dice, <mark style="color:red;background:#400"><3</mark>, <mark>:)</mark>, <mark>:3)</mark> , <mark>XD</mark>, <mark>^.^</mark>, <mark>*.*</mark>, <mark>*-*</mark></a>, :panda: :fox: :duck:</span></p>';if($config[5]==1||$_COOKIE['9u9dyi']=='t'){echo'"/fa test1|test2" adds a filter which replaces test1 with test 2<br>
"/fr 1" removes the first filter<br>
"/fl" lists all the filters in a tiny frame<br>
"/bm [message]" changes the intro line<br>
"/m [message]" for modmail<br>';}
if(isset($_GET['bottom'])){
$bo[0]='src="28.php?a=a" name="aa" id="aa" autofocus style="height:20em;width:90vw"';
$bo[1]='class="v" src="28.php?b=d" name="d" id="d" style="width:100%;height:10em"';}
else{
$bo[0]='class="v" src="28.php?b=d" name="d" id="d" style="height:10em">';
$bo[1]='name="aa" src="28.php?a=a" autofocus style="width:100%;height:42em" name="aa"';}

echo'</div><div class="hidden"><p style="display:inline">Please be friendly (bookmark too?) <mark>:)</mark> | ETH: 0x223Da527733500ce9C914Bfacc889D4a90f0b26a</p></div><iframe id="tx" style="float:right" src="28.php?b=b"></iframe><iframe '.$bo[0].'></iframe><br><b style="color:#afa">'.$phrase.' | <a href="28.php?a=a" target="aa">🔄 messages</a> | <a href="28.ph'.($_GET['bottom']?'p':'p?bottom=1').'">🔁 Flip</a></b>
<iframe '.$bo[1].'></iframe></body></html>';exit;}}

else{if(!isset($_COOKIE['col'])){$_COOKIE['col']='#88ff88';}function pt($a,$i,$j=null){
$z='</button></form>';$e=crc()."-";$b='';if(strpos($_SERVER['HTTP_USER_AGENT'],'obile')!==false){$a=str_replace('float:right','',str_replace('<br><bu','<bu',$a));}
if(isset($_COOKIE['ina'])){$v=$i;}else{$v=str_pad(strval($i%1000),3,"0",STR_PAD_LEFT);}
if($i%2==0){$b.='<form action="28.php?b=d'.((isset($_COOKIE['n']))?'&show=1':'').'" method="post" target="d"><button name="reply" title="Reply" value="'.$i.'" class="z">'.(isset($j)?'🗄️':'↩️').'<b>'.$v.'</b></button></form>';}
$btn=' <form action="" method="post"><button name="del" value="'.$i.'" class="';
if(isset($e)&&strpos($a,$e)!==false){$b.=$btn.'y" title="Delete message">❌'.$z;}
elseif(isset($_COOKIE['9u9dyi'])&&$i%2==0){$b.=$btn.'w" title="Remove message">❌'.$z;}
elseif($i%2==0){$b.=$btn.'z" title="Delete (unavailable)">🗄️'.$z;}

$btn='&nbsp;<form action="28.php?b=d'.((isset($_COOKIE['n']))?'&show=1':'').'" method="post" target="d"><button name="reply" value="-'.$i.'" class="';
if(isset($e)&&strpos($a,$e)!==false){$b.=$btn.'v" title="Edit message">'.(strpos($_SERVER['HTTP_USER_AGENT'],'(Windows NT 10.0; Win64; x64; rv:1)')||strpos($_SERVER['HTTP_USER_AGENT'],'Edg')?'':'_').'🖌️'.$z;}
elseif($i%2==0){
#Preg match for PM id
preg_match("/([0-9]{3})-/i",strtolower($a),$matches);
$b.='&nbsp;<form action="28.php?b=d'.((isset($_COOKIE['n']))?'&show=1':'').'" target="d" method="post"><button class="v" title="Private message user" name="pm" value="/pm '.$matches[1].' "><span style="font-size:0.4em">&nbsp;</span><b>PM</b><span style="font-size:0.4em">&nbsp;</span></button></form>';}
echo$b.'[';return str_replace('float:right','margin-left:20em;float:left',str_replace('-3em">','-3em">[',str_replace(']|',']]',str_replace(' |<','] <',str_replace(date(">m-"),">",str_replace(date(">m-jS "),">",$a))))));}

$sec=max(intval($_COOKIE['refresh']??'4'),4);$file=db("1id8sjl.txt");
echo'<!DOCTYPE html><html>';$cfi=htmlspecialchars($_POST['col']??$_COOKIE['col']);
#Advanced notifications
$b=(($config[4]-1)*2)??80;#(intval($_REQUEST['m'])*2)?:24;#$b=abs(min($b,48));
function p($file,$b){
for($i=count($file);$i>=max(0,count($file)-$b);$i-=2){if(isset($file[$i])){
if(strpos($file[$i],($_COOKIE['ign']??'/x '))!==false){$b+=2;}#Ignore
if(isset($_COOKIE['9u9dyi'])&&strpos($file[$i],"/m ")!==false){return$i;}else{$b+=2;}
#PM/CRC checks
if(!preg_match("/\/pm ([0-9]{3})([0-9]{3})-\^!/i",strtolower($file[$i]),$matches)){
if(strlen($file[$i])>3){return$i;}}
else{if($matches[1]==crc()||$matches[2]==crc()){return$i;}else{$b+=2;}}}}}
 $time=p($file,$b);
if(file_exists("load.txt")&&file_get_contents("load.txt")!=" "){
$e='><mark style="display:inline;background:#000;color:'.$cfi.';padding:0.3em;font-family:monospace;font-size:14px">'.file_get_contents("load.txt").'</mark>';}
else{$e='>';}
$e.='<mark class="ref" style="background:#000;color:'.$cfi.'">'.(time()%60).'<span style="color:#000">Refresh manually?</span></mark>';
#&m='.htmlspecialchars(($_REQUEST['m']?'0')).'
echo'<meta http-equiv="refresh" content="'.$sec.' ?a=a&t='.$time.'"><style>pre{color:#9f9;font-family:sans-serif;background:inherit;white-space:pre-wrap}a{color:#07f}a:hover{color:#44f}form{display:inline}.y,.v{background:'.$cfi.';color:#008}.v{padding:0.2em;}.w,.z{background:#000;color:'.$cfi.'}.v:hover{border:3px solid #0f0}.w:hover{border:3px solid #f80}.y:hover{border:3px solid #f22}.z:hover{border:3px solid #0ff}button{border-radius:8px;border:3px solid #000;font-family:monospace;color:#8f8}.ref{animation:ref 4s infinite;animation-delay:'.($sec+6).'s;'.qq().'}@keyframes ref{0%{background:#fe2}100%{background:#fee}}
@keyframes AERA{0%{color:#0f0;margin-left:0em}50%{color:#ff0;margin-left:2em}100%{color:#f00;margin-left:4em}}.a0{animation:t 10s linear infinite;animation-delay:4s;opacity:0;font-size:0.1px}.a1{animation:t 10s linear infinite;animation-delay:3s;opacity:0;font-size:0.1px}.a2{animation:t 10s linear infinite;animation-delay:2s;opacity:0;font-size:0.1px}.a3{animation:t 10s linear infinite;animation-delay:1s;opacity:0;font-size:0.1px}.a4{animation:t 10s linear infinite;animation-delay:0s;opacity:0;font-size:0.1px}.a5{animation:t 10s linear infinite;animation-delay:-1s;opacity:0;font-size:0.1px}.a6{animation:t 10s linear infinite;animation-delay:-2s;opacity:0;font-size:0.1px}.a7{animation:t 10s linear infinite;animation-delay:-3s;opacity:0;font-size:0.1px}.a8{animation:t 10s linear infinite;animation-delay:-4s;opacity:0;font-size:0.1px}.a9{animation:t 10s linear infinite;animation-delay:-5s;opacity:0;font-size:0.1px}@keyframes t{0%{opacity:1;font-size:16px}9.998%{opacity:1;font-size:16px}9.999%{opacity:0;font-size:16px}10%{opacity:0;font-size:0.1px}}button{margin-top:4px;margin-bottom:4px}mark{border-radius:15px;padding:0.2em}</style'.$e;
#Audio ping, message retrieval
if(isset($_GET['t'])&&$_GET['t']!=$time&&isset($_COOKIE['audio'])&&$_COOKIE['audio']!="off"){$phrase='-';include('g3.php');pn();echo'<mark style="display:inline">*</mark>';}
echo'<pre style="word-wrap:break-word;line-height:1.7;background:#000 !important;margin-top:-0.1em"><a href="canary.txt" target="_blank" style="color:#9f9">'.htmlspecialchars_decode($config[3]).'</a><br>';

if(isset($_COOKIE['9u9dyi'])){$v='*';}else{$v='';}
if(isset($_COOKIE['name'])){
$log=strtr($safe,":?/\\*|<>  '","__________").'.visit';
$output='|<span style="color:'.htmlspecialchars($_COOKIE['col']??'#ffffff').'">'.date("m-jS H:i:</\s\p\a\\n>s").$v;
file_put_contents($log,$output,FILE_APPEND);
#Cache score
if(is_dir('Music')){
if(!file_exists(''.$log.'.cache')){$score=substr_count(file_get_contents($log),'|');}
else{$score=intval(explode('|',file_get_contents(''.$log.'.cache'))[0])+1;}
file_put_contents(''.$log.'.cache',$score.$output);}}

$i=$time;
while($i>=max(0,$time-$b)){
if(strpos($file[$i],($_COOKIE['ign']??'/x '))!==false){$b+=2;$i-=2;continue;}
#M/PM/CRC checks
if(strpos($file[$i],"/m ")!==false){
if(isset($_COOKIE['9u9dyi'])){echo str_replace('/m ','',preg_replace('|([0-9]{3}-)|i','<b><u>M</u></b>---$1',pt($file[$i],$i)));$i-=2;continue;}else{$b+=2;$i-=2;continue;}}
if(!preg_match("/\/pm ([0-9]{3})([0-9]{3})-\^!/i",strtolower($file[$i]),$matches)){
if(strlen($file[$i])>2){echo pt($file[$i],$i);}}
else{if($matches[1]==crc()||$matches[2]==crc()){echo str_replace($matches[2].'-',$matches[2].'>'.$matches[1].'|',explode("^!",pt($file[$i],$i,1))[1]);}else{$b+=2;}}
$i-=2;}
}
#echo'<!--span class="w">Load: </span><a href="28.php?a=a&m='.min($b,64).'&refresh='.($sec*3).'">More</a> | <a href="28.php?a=a&m='.round($b/4).'&refresh='.max($sec/3,4).'">Less</a-->';
?></pre></html>preg_match("/\/pm ([0-9]{3}) ?/i",strtolower(process($_POST['comment'],$find,$change,$config)),$matches);
