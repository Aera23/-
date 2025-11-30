<?php
if(!isset($config)){$config=explode("|",file_get_contents("config.txt"));}
$phrase=$config[2]??'Chat';
include_once('g3.php');
$gf=crc32("127.0.0.1").".dat";
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
exit('<mark>Command sent: '.htmlspecialchars($_GET['d']).' [1: normal captcha, 2: spaced out captcha, 3: limit API, 4: full API, 5: no backend beep, 6: beep, 8: recache]</mark>');}
}
$ok='2';function qq(){return'background:radial-gradient(#00'.(strpos($_SERVER['HTTP_USER_AGENT'],'bile')?'4,#040,#400)':'2,#020,#200)');}

#CAPTCHA
function mr($gt){exit('<meta http-equiv="refresh" content="0 g3.php?next=28.ph'.$gt.'"><mark>CAPTCHA redirect</mark>');}
if(isset($_COOKIE['crc'])&&$_COOKIE['o']<time()&&crc32(base64_encode("127.0.0.1".$_COOKIE['o']))==$_COOKIE['crc']){$ok=1;}
elseif(isset($_GET['apikey'])&&file_exists("Public/temp/hostname")&&$_GET['apikey']=="nrzknf.txt"){$ok=1;}
 elseif(file_exists($gf)&&((filemtime($gf)+20)>time())&&$_COOKIE['temptime']==file_get_contents($gf)){$ok=1;}
elseif($ok==2){if($_GET['a']=="a"){mr('p?a=a');}elseif($_GET['b']=='d'){mr('p?b=d');}elseif($_GET['b']=="b"){mr('p?b=b');}else{mr('p');}}

function db($file){if(file_exists($file)){return file($file);}return[''];}

$v='<meta name="viewport" content="width=device-width, initial-scale=1">';
if(!isset($_POST['a'])){
if(isset($_POST['audio'])){setcookie("audio",$_POST['audio'],time()+35060);}
if(isset($_GET['a'])&&$_GET['a']=="a"){file_put_contents("crc.txt",crc().date(" jS H:i:s")."\n",8);}
if(file_exists($hpu)){
if(isset($_COOKIE['name'])&&($_COOKIE['name']==file_get_contents($hpu)||npr($_COOKIE['name'])==file_get_contents($hpu))){file_put_contents("crc.txt",$_COOKIE['name'].date(".H:i:s.|"),8);exit('<meta http-equiv="refresh" content="4">');}
if(file_get_contents($hpu)=='"'&&!isset($_COOKIE['9u9dyi'])&&strpos(file_get_contents("whitelist.txt"),crc())===false){file_put_contents("crc.txt",$_COOKIE['name'].date(".H:i:s.|"),8);exit('<meta http-equiv="refresh" content="4">');}}
if(isset($_POST['name'])){setcookie("name",trim($_POST['name']),time()+76400);}
if(isset($_COOKIE['name'])){$safe=npr($_COOKIE['name']);}


#HOTPATCHES!
if(crc()==767&&date('d')==14){$_COOKIE['ign']="909";}
#if(crc()==000){$_POST['name']="codename";$safe="nickname";}



if(isset($_POST['ign'])){setcookie("ign",$_POST['ign'],time()+76400);}
if(isset($_POST['refresh'])){setcookie("refresh",$_POST['refresh'],time()+76400);}
if(isset($_POST['col'])){setcookie('col',$_POST['col'],time()+76400);}

#Persist a bit
if(!isset($_POST['show'])&&isset($_POST['t'])){setcookie('n',1,time());$_COOKIE['n']=1;}
elseif(isset($_POST['show'])){setcookie('n',99,time()+76400);$_COOKIE['n']=99;}
if(!isset($_POST['f'])&&isset($_POST['t'])){setcookie('f','',time());}
elseif(isset($_POST['f'])){setcookie('f',$_POST['f'],time()+76400);}
if(!isset($_POST['e'])&&isset($_POST['t'])){setcookie('e','',time());}
elseif(isset($_POST['e'])){setcookie('e',$_POST['e'],time()+76400);}}

if(!isset($_GET['b'])&&!isset($_GET['a'])){
if(file_exists('z28.php')){echo' <form action="z28.php" method="get" style="display:inline"><input type="submit" name="e" value="Notification Only"></form> ';}
if(file_exists('testy.php')){echo'<form action="testy.php" method="get" target="_blank" style="display:inline"><input type="submit" value="Community DB"></form> ';}}

function s_t($t){return preg_replace("/<(.*) style='(.*)'>(.*)<\/(.*)>/i","$3",str_replace('isAFK','/afk',strip_tags($t,'<i><mark><br><q><strong>')));}

function premium($qq,$name){preg_match('/color:#.{6}/m',file_get_contents(''.$name.'.visit.cache'),$matches);$col=';'.$matches[0];
if($name=='METHHEAD'){$col.=';background:#044';}
return (($qq>1000000&&$qq<20000000)?';background:#000'.$col:$col);}

#if(npr($_COOKIE['name'])=="n"){$_COOKIE['ignore']="i";}
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

if(isset($_GET['f'])&&strpos($_GET['f'],".visit")!==false){echo $v.'<style>*{color:#fff;background:#000}input{padding:0.3em;border-radius:8px;border:2px solid #0a0}.x{color:#888}form{display:inline}</style>';
$file=explode("|",file_get_contents($_GET['f']));$r=count($file);
echo'<br>User created at: '.$file[1].'<br>';$form='<form action="" method="get"><input type="hidden" name="f" value="'.htmlspecialchars($_GET['f']).'"><input name="i" value="'.min(max($_GET['i']-5000,0),$r).'" size="6"><input type="submit" value="Previous"></form>||<form action="" method="get"><input type="hidden" name="f" value="'.htmlspecialchars($_GET['f']).'"><input name="i" value="'.min(max($r-1,0),($_GET['i']??0)+5000).'" size="6"><input type="submit" value="Next"></form>';echo$form.'<br><br>';
for($i=($_GET['i']??0);$i<min($r,($_GET['i']??0)+5000);$i++){echo$file[$i]."|";}exit('<br><br>'.$form);}

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

/*if(isset($_GET['b'])&&$_GET['b']=="c"&&isset($_COOKIE['9u9dyi'])){
$e=$_POST['del'];file_put_contents("whokicked.txt",htmlspecialchars($_COOKIE['name']));
if(isset($e)&&2==1){rename($e,$e.".ivisit");if(!empty($li)){unlink(''.$e.'.cache');}}
$e=explode(".v",$e)[0];
file_put_contents($hpu,$e);
#Ideally, there will be a loop to clean all messages from that user, mark the lines as [redacted ###] and store it so it can be restored or read if needed. I won't implement it though
exit("<meta http-equiv='refresh' content='1 28.php?b=b'><h3><mark>Kicked $e</mark></h3>");}*/

if((isset($_GET['a'])&&$_GET['a']=='Settings'&&isset($_COOKIE['9u9dyi']))||!isset($config[0])){
$phrase=$config[2]??'Chat Settings';
if(isset($_POST['a'])){$_POST=str_replace('|','',$_POST);
file_put_contents("config.txt",htmlspecialchars($_POST['a']."|".$_POST['b']."|".$_POST['c']."|".htmlspecialchars_decode($_POST['d'])."|".$_POST['f'])."|".$_POST['g']."|".$_POST['h']."|".strrev(base64_encode($_POST['i']))."|".$_POST['j']);echo'<i>Saved</i>';$config=explode("|",file_get_contents("config.txt"));}
if(isset($_POST['e'])&&$_POST['e']!=file_get_contents("canary.txt")){file_put_contents("canary.txt",$_POST['e']);}
echo'<!DOCTYPE html><html><style>button:hover,a:hover{color:#0ff}button,input{background:#464;color:#fff;border-radius:8px;padding:0.4em;margin:0.2em;border:2px solid #050}button:hover,input:hover{border:2px solid #0a0}html{margin:3em;font-family:sans-serif}*{background:#000;color:#0af}b,h2{color:#0cf}form{display:inline}textarea{padding:0.3em;border-radius:15px}</style>'.$v.'<h2>'.$q.' Config <a href="28.php"><button style="display:inline">BACK</button></a></h2>
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
echo'</form><br><b>If @Aera23 has an update, use <a href="https://aera23.net/download.php?f=28.php&a=100" target="_blank">link 1</a> and <a href="https://aera23.net/download.phpf=g3.php&a=100" target="_blank">link 2</a>. Replace the old code with it.</b></form></html>';exit;}

if(isset($_POST['del'])){$a=2;
$file=db("1id8sjl.txt");$count=count($file);
 if($_COOKIE['crc']%1000==0){$e=(100+crc32("127.0.0.1")%900);}
 else{$e=100+($_COOKIE['crc']%900);}
if($_POST['del']=="n"){for($i=0;$i<$count-max((($_POST['lines']??0)*2),2);$i++)
{$prvt.=$file[$i];}file_put_contents("1id8sjl.txt",$prvt);}
elseif(isset($e)&&strpos($file[$_POST['del']],$e.'-')!==false){$a=1;}
elseif(isset($_COOKIE['9u9dyi'])){$a=1;}
if($a==1&&$_POST['del']<=$count&&($count-$_POST['del'])<200){for($i=0;$i<$count;$i++){if($_POST['del']!=$i&&$_POST['del']!=$i-1){$prvt.=$file[$i];}}file_put_contents("1id8sjl.txt",$prvt);}}

#Refresh List
if(isset($_GET['b'])&&$_GET['b']=="b"){
$sec=max(intval($_COOKIE['refresh']??'4'),4);
if(is_dir('Music')){$names=glob("*.visit.cache");$tt='a';}
if(empty($names)||count($names)<6){$names=glob("{,.}*.visit",GLOB_BRACE);$tt='';}
$arr=[];
#https://stackoverflow.com/posts/3298787/revisions
array_multisort(array_map('filemtime',$names),SORT_NUMERIC,SORT_DESC,$names);$ee=0;$i=0;
foreach($names as $name){
if($i<12){
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
/*if(isset($_COOKIE['9u9dyi'])){$p='<tr><td><form action="28.php?b=c" method="post" style="display:inline"><button name="del" value="'.$name.'.visit" class="t">'.(($name!='0000')?(($name==$safe)?'⚠️':'❌'):'⚠️').'</button></button></form></td><td style="text-align:center">';}else{}*/$p='<tr><td style="text-align:center'.premium($qq,$name).'">';
$arr[]=$p.$name.'</td><td style="text-align:center">'.str_replace("3 ", "31 ",str_replace(date("jS"),"",str_replace(date("m-"),"",$time.'<span class="x"></td><td style="text-align:right"><a href="28.php?f='.$name.'.visit&i='.max($qq-600,0).'" target="_blank">'.number_format((($name=='Anonymo')?($qq+50000):$qq)))))."</a></td>
</tr>";}else{break;}}
$tt='';$z=0;foreach($arr as $str){if($z<13){$tt=$tt.$str;}$z++;}
echo"<!DOCTYPE html><html><meta http-equiv='refresh' content='$sec 28.php?b=b&o=$ee'>";
if(isset($_GET['o'])&&$_GET['o']!=$ee&&isset($_COOKIE['ina'])&&$_GET['b']=='b'){gt();echo'<mark style="display:inline">*</mark>';}
echo"<style>tr{background:#031}tr:nth-child(n+".($ee+1)."){background:#400}center{font-family:sans-serif}a{color:#8f8}button{background:#f88;border-radius:8px;border:2px solid #f00}table{border-spacing:0}td{border:1px solid #afa;color:#fff;border-radius:6px;background:inherit;line-height:1.3;font-size:16px;max-width:10em;padding:0.2em}tr:nth-child(2n) td{border:1px solid #060}tr:nth-child(2n+".((($ee&1)==0?2:1)+$ee).") td{border:1px solid #000000 !important}tr:nth-child(2n+".((($ee&1)==0?1:2)+$ee).") td{border:1px solid #f16464 !important}.x{color:#888}.t:hover{border:2px solid #80f;background:#f80}</style><center><span style='font-size:17px;background:inherit;color:#afa'>";
$ee='Last online: '.$ee;if(isset($_COOKIE['9u9dyi'])){$ee='[Mod] '.$ee;}
exit($ee.' (last '.($config[8]??30).'s)</span><br><table>'.$tt.'</table></center></html>');}

$em=max(min(floatval(htmlspecialchars($_REQUEST['e']??'1')),1.5),0.7);
if(isset($_GET['b'])&&$_GET['b']=='d'){
if(function_exists('filter')&&isset($_POST['name'])&&isset($_POST['comment'])){filter($_POST['name'].$_POST['comment'],2);}
if(file_exists("3.html")){
$file=db("3.html");foreach($file as $filter){$f=explode("|",str_replace("\n","",$filter));$find[]=$f[0];$change[]=substr($f[1],0,-1);}}
}

#Show Colour choice
if(empty($_GET['a'])){if(empty($_COOKIE['col'])&&empty($_POST['col'])){$cb=(mt_rand()%10);
$cf=["ff33f",'77ff7','ff334',"11ffe","eeaa0","00dfd","ff880","ffff0","00ff0","0088f"];$cfi='#'.$cf[$cb].$cb;}
else{$i=0;
if(isset($_POST['col'])){$cfi=$_POST['col'];}
else{$cfi=$_COOKIE['col'];}}

if(isset($_GET['b'])&&$_GET['b']=='d'){$z=2;
#Saving messages
if(isset($_POST["name"])&&!empty($_POST["comment"])&&($_COOKIE['u']??'0')!=($_REQUEST['q']??0)){$z=5;
$comment=trim($_POST["comment"]);
#Prevent multiple submissions within 2s of last one
if(!file_exists("".crc())){file_put_contents("".crc(),$_SERVER['REQUEST_TIME_FLOAT']);}
elseif(($_SERVER['REQUEST_TIME_FLOAT']-1)>file_get_contents("".crc())){file_put_contents("".crc(),$_SERVER['REQUEST_TIME_FLOAT']);}
else{file_put_contents("".crc(),$_SERVER['REQUEST_TIME_FLOAT']);exit("<a href='28.php?b=d'><mark>Error F</mark></a>");}

$me=strpos($_POST['comment'],'/me ');
#Prepare messages
if($me!==0&&$me!==2&&$me!==3&&$me!==8){$txt=process($_POST["name"],$find,$change,$config)." - ".process($comment,$find,$change,$config);}
else{$txt=process($_POST["name"],$find,$change,$config).str_replace('/me ',' ',process($comment,$find,$change,$config));}

if(strpos($_POST['comment'],'/ai ')===0){$_POST['comment'] = str_replace('/ai ','',$_POST['comment']);file_put_contents('Documents/ai.txt',$_POST['comment']);}
#Nick protect
if(strpos($_POST['comment'],'/np ')===0){
if(!strpos($_POST['comment'],$_POST['nick'])){
$p=htmlspecialchars(str_replace('/np ','',str_replace('|','',nl2br($_POST['comment']))));$z=4;

if($p==$_COOKIE['name']){echo"<mark>Nickname and codename cannot be the same</mark>";}

if(strlen($_POST['comment'])>5&&$safe==$_COOKIE['name']&&$p!=$_COOKIE['name']){$cf=fopen("1699686263.old.old","a") or die($m);$e=htmlspecialchars(str_replace("/np ","",$_POST['name']."|alkaline \n".$_POST['comment'].'|'.$_POST['name']." \n"));fwrite($cf, $e) or die("<a href='28.php?b=d'><mark>Can't write</mark></a>");fclose($cf);$z=4;
echo"<mark>Protection added for ".htmlspecialchars($_POST['name']).", use $p instead</mark>";$_POST['name']=$p;$_COOKIE['name']=$p;setcookie("name",htmlspecialchars_decode($p),time()+35000);}else{$_POST['comment']='';}}else{echo"<mark>Nick and codename cannot be the same</mark>";}}
#Topic
if(strpos($_POST['comment'],'/bm ')===0&&($config[5]==1||!empty($_COOKIE['9u9dyi']))){
$bm=str_replace("/bm ","",process($_POST['comment'],$find,$change,$config));
$cf=fopen("load.txt", "w+") or die($m);fwrite($cf, $bm) or die("<a href='28.php?b=d'><mark>Can't write</mark></a>");fclose($cf);$z=3;}
if(isset($_COOKIE['9u9dyi'])){
#Ban
if(strpos($_POST['comment'],"/k ")===0){$cf=fopen($hpu,"w") or die($m);$e=htmlspecialchars(str_replace("/k ","",$_POST['comment']));fwrite($cf, $e) or die("<a href='28.php?b=d'><mark>Can't write</mark></a>");fclose($cf);$z=4;echo"<mark>Kicked $e</mark>";file_put_contents("whokicked.txt",htmlspecialchars($_COOKIE['name']));
unlink(''.str_replace("/k ","",$_POST['comment']).'.visit.cache');$_POST['comment']=' ';}
#AntiRaid
if(strpos($_POST['comment'],"/r")===0){if(file_get_contents($hpu)=='"'){unlink($hpu);echo"<mark>Anti-Raid off</mark>";}else{$cf=fopen($hpu,"w") or die($m);fwrite($cf, '"') or die("<mark>Can't write</mark>");fclose($cf);echo"<mark>Anti-Raid on</mark>";}$z=4;file_put_contents("whokicked.txt",htmlspecialchars($_COOKIE['name']));}}
if($config[5]==1||isset($_COOKIE['9u9dyi'])){
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
if(($_COOKIE['u']??0)!=($_REQUEST['q']??0)&&$z==5){$e='';

if(isset($_POST['rpl'])){$file=db("1id8sjl.txt");}
 #Find the message number that was replied to, cannot be more than 300 below the current message
 if(isset($_POST['rpl'])&&$_POST['rpl']>(max(0,count($file)-(($config[4]??30)*2)))){$file=db("1id8sjl.txt");$reply=$file[$_POST['rpl']];if(strpos($reply,"^!<")!==false){unset($reply);}if(empty($reply)){$reply="
";}
$e='[Msg Quote]|<br><button style="background:inherit;font-size:0.99em;border:2px solid #afa;line-height:0.8em;float:right;margin-top:-3em;max-height:3em">'.crc().'-'.$reply.'</button>
';}
elseif(!empty($_POST['rpl'])&&$_POST['rpl']<0){$line=str_replace('-','',$_POST['rpl']);$reply=$file[$line];}
#Prepend the CRC code to the message
$e.=crc();
if(isset($_POST["col"])&&strlen($_POST["col"])==7){$colour = htmlspecialchars($_POST['col']);}
else{$colour=htmlspecialchars($_COOKIE["col"]);}
$write=$e.'-'.'<i>'.date("m-jS H:i:s").'</i> |<span style="color:'.$colour.';font-size:'.($em??'1').'em;font-family:'.(htmlspecialchars($_POST['f']??'inherit')).'">'.$txt."</span>";$nl="

";preg_match("/\/pm ([0-9]{3}) ?/i",strtolower(process($_POST['comment'],$find,$change,$config)),$matches);
#Check for PM command, before writing somewhere.

if(isset($matches[1])&&strpos($_POST['comment'],"/pm")===0){
$write=str_replace($matches[0],'',$write.$nl); $m="The comments aren't working due to a server error. ";
if(strlen($_POST['comment'])==8||strlen($_POST['comment'])==7){$z=4;}
$write="/pm ".$matches[1].crc()."-^!<b><u>PM</u></b>--".$write;

if(isset($_POST['rpl'])&&isset($e)&&!empty($line)&&strpos($file[$line],$e)!==false){
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
html{color:#fff}pre{font-family:sans-serif}a{color:#afa}a:hover{color:#28f}input,button,iframe{border-radius:8px;border:1px solid #050}* mark{padding:0.2em;border-radius:10px}
input[type=submit]{background-image:url(\'78.php\') !important}
input{padding:0.5em;border:3px solid #050;color:#fff !important;font-family:'.htmlspecialchars($_POST['f']??'sans-serif').'}button:hover,input:hover{padding:0.5em;background:#560;border:3px solid #0a0}
.n:hover{background:#f00}h3{margin-top:0.3em}</style><body style="margin:1.5em">';

if(isset($_REQUEST['show'])){
echo'<h3 style="padding:0px;margin:0px" id="#top"><center style="margin-top:-1.15em">'.$q.' | Score: '.number_format(substr_count(file_get_contents("9u9dyi"), "\n")).'</center></h3>';}
echo'<style>input{padding:0.5em;background:#464;placeholder:#02f}input:hover{padding:0.5em; background:#558}';
for($i=0;$i<24;$i++){echo'.e'.$i.'{animation:s 86400s steps(4) infinite;animation-delay:'.(0-((time())%86400)-($i*3600)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<6;$i++){echo'.d'.$i.'{animation:k 3600s steps(4) infinite;animation-delay:'.(0-((time()-2999)%3600)-($i*600)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<10;$i++){echo'.c'.$i.'{animation:c 600s steps(4) infinite;animation-delay:'.(0-((time()-539)%600)-($i*60)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<6;$i++){echo'.b'.$i.'{animation:i 60s steps(4) infinite;animation-delay:'.(0-((time()-28)%60)-($i*10)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<10;$i++){echo'.a'.$i.'{animation:t 10s steps(1) infinite;animation-delay:'.((10-(time()-28)%10)-$i).'s;opacity:0;font-size:0.1px}';}
$oa='opacity:1;font-size:20px';$ob='opacity:0;font-size:20px';$oc='opacity:0;font-size:0.1px';
echo'.r{color:#6f6;font-size:14px !important}.g{width:10em;margin-right:8em;margin-left:0.5em;background:#040;padding:0.4em;border-radius:10px}
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

preg_match("/^\/m[^e]|\/m$/i",strtolower(htmlspecialchars($_POST['pm']??$_POST['comment']??'')),$matches);
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
echo' value="'.str_replace('magicCcCcCcCcC','magic',str_replace('o--0-oo-0--oo0---oo00--oo00-oo',':whirl:',str_replace('style="background:#f44"','',$e))).'"';}echo'" size="54" autofocus="true" id="a"><script>setTimeout(function(){var a=document.getElementById("a");a.focus();a.selectionStart=a.selectionEnd='.($config[1]??500).';},0);</script>';#https://stackoverflow.com/questions/511088/use-javascript-to-place-cursor-at-end-of-text-in-text-input-element

if(isset($_REQUEST['show'])){
echo'<span>. . Emphasis (0.7-1.5em):</span>
<input name="e" size="3" value="'.min(htmlspecialchars($_COOKIE['e']??$_REQUEST['e']??1),1.5).'" max="1.5"><span>Refresh* (s)</span>
<input name="refresh" size="3" value="'.htmlspecialchars($_POST['refresh']??$_COOKIE['refresh']??'').'" min="3" placeholder="4"><span>Audio (on|off)</span>
<input name="audio" size="3" value="'.htmlspecialchars($_POST['audio']??$_COOKIE['audio']??'').'">
<span>Font</span><input name="f" value="'.htmlspecialchars($_COOKIE['f']??$_REQUEST['f']??'').'" placeholder="Type s for fonts" list="f">
<datalist id="f"><option value="monospace"><option value="sans-serif"><option value="serif"><option value="cursive"><option value="fantasy"></datalist>
<input name="ign" value="'.htmlspecialchars($_POST['ign']??$_COOKIE['ign']??'').'" placeholder="Ignore,these,keywords"> * [Min auto refresh delay]
<!--span>Messages:</span><input name="lines" size="2" value="htmlspecialchars($l)" max="64"-->';}
else{echo'<input type="hidden" name="f" value="'.htmlspecialchars($_REQUEST['f']??'').'"><input type="hidden" name="e" value="'.min(htmlspecialchars($_REQUEST['e']??1),1.5).'">';}

#Chat form
echo'<input type="hidden" name="t" value="'.$e.'|314159"><input type="hidden" name="q" value="'.$token.'"><input type="hidden" name="rpl" value="'.htmlspecialchars($_REQUEST['reply']??'').'">'; if(!empty($_COOKIE['9u9dyi'])){echo'<span class="n"><input type="checkbox" name="del" value="n"></span>';}
echo'<input style="background:#252;color:#fff" type="submit" onclick="window.navigator.vibrate(10);" value="Send"><label class="l"><input type="checkbox" name="show" value="y" ';if(isset($_REQUEST['show'])){echo' checked';}exit('><span></span>&nbsp;&nbsp;Check me!</label></form>');}

else{if(isset($_COOKIE['9u9dyi'])&&!isset($_GET['9u9dyi'])){echo' <form action="28.php" style="display:inline"><input type="submit" name="a" value="Settings"></form>';}

echo'<style>#show,#utc,.content,#lo{display:none}
#show:checked~.content{display:block !important}label u{color:#afa}label u:hover{color:#0ff}
show,.hidden{display:block}#show:checked~.hidden{display:none}
#utc:checked~.g{opacity:1 !important}.g{opacity:0.01}
#lo:checked~#tx{display:none !important}
</style><input id="show" type="checkbox"><label for="show"><u>'.$q.' QUICK Help and LINKS<b></b></u></label>
<div class="content"><a href="14.html" target="_blank">🌡 Temperature</a> | <a href="music.php" target="_blank">🎵 Music</a> | <a href="22.php" target="_blank">🎨 RDTSC() colours</a> | <a href="colour.php" target="_blank">🚅 SpeedTest</a> | <a href="testx.php" target="_blank">⬆️ Files</a> | <a href="54.php" target="_blank">⬆️ Legacy files</a> | <a href="add.php" target="_blank">🏜️, Pyramid Puzzle</a><br> Donations welcome - ETH: 0x223Da527733500ce9C914Bfacc889D4a90f0b26a<br>
&gt; Last Online is based on browser refresh, which can mislead if a user leaves their tab open while AFK, or their browser stops refreshing due to temporary network timeout.</span>
<p style="color:#8e8">
<mark style="background:#600;color:#8f8">PROTECT your nick with nickprotect! Helps prevent impersonation | Syntax:/np codename | (type /nick and /np1 for more info)</mark><br>
Emojis and commands: :alien: :books: :tree: :book: :kiss: :dog: :fire: :ice: :cash:<br><i style="color:#afa">MORE: :bat: :egg: :taco: :eggplant: :rocket: :ghost: :elephant: :snail: :lips: :pumpkin: :xmas: :bird: :lovedock: :docking: :spacedock: :miii:</i><br><span style="color:#e6e">:shrug: /shrug :goat: :rainbow: /wow /symbols :cat: :music: :shroom: /me, /dice, <mark style="color:red;background:#400"><3</mark>, <mark>:)</mark>, <mark>:3)</mark> , <mark>XD</mark>, <mark>^.^</mark>, <mark>*.*</mark>, <mark>*-*</mark></a>, :panda: :fox: :duck:</span></p>';if($config[5]==1||isset($_COOKIE['9u9dyi'])){echo'"/fa test1|test2 " (with space at the end) autoreplaces test1 with test 2<br>"/fl" lists the autoreplacements in a tiny frame<br>
"/fr 1" removes the first replacement<br>';}if(isset($_COOKIE['9u9dyi'])){echo'
"/k [spammer]" kicks a bad actor<br>
"/bm [message]" changes the subtitle<br>
"/m [message]" sends moderator mail<br>';}
echo'</div><br><span class="r"><input id="utc" type="checkbox"><label for="utc"><u>Toggle UTC clock</u></label><input id="lo" type="checkbox"><label for="lo" checked> | <u>Toggle Last Online</u></label><span class="g"><span class="e0">0</span>';
for($i=0;$i<15;$i++){if($i!="0"){$e=((24-$i)%24);}else{$e="00";}echo'<span class="e'.$i.'">'.((24-$i)%24).'</span>';}
for($i=15;$i<24;$i++){echo'<span class="e'.$i.'">0'.(24-$i).'</span>';}echo'<span class="x">:</span>';
for($i=0;$i<6;$i++){echo'<span class="d'.$i.'">'.(5-$i).'</span>';}
for($i=0;$i<10;$i++){echo'<span class="c'.$i.'">'.(9-$i).'</span>';} echo'<span class="x">:</span>';
for($i=0;$i<6;$i++){echo'<span class="b'.$i.'">'.(5-$i).'</span>';} for($i=0;$i<10;$i++){echo'<span class="a'.$i.'">'.(9-$i).'</span>';}
echo'</span><br>';
if(isset($_GET['bottom'])){
$bo[0]='src="28.php?a=a" name="aa" id="aa" autofocus style="height:20em;width:90vw"';
$bo[1]='class="v" src="28.php?b=d" name="d" id="d" style="width:100%;height:10em"';}
else{
$bo[0]='class="v" src="28.php?b=d" name="d" id="d" style="height:10em">';
$bo[1]='name="aa" src="28.php?a=a" autofocus style="width:100%;height:42em" name="aa"';}

echo'<p style="display:inline">Please bookmark me <mark>:)</mark></p><br><iframe id="tx" style="float:right" src="28.php?b=b"></iframe><iframe '.$bo[0].'></iframe><br><b style="color:#afa"><a href="28.php?a=a" target="aa">🔄 messages</a> | <a href="28.ph'.($_GET['bottom']?'p':'p?bottom=1').'">🔁 Flip</a></b><iframe '.$bo[1].'></iframe></body></html>';exit;}}

else{if(!isset($_COOKIE['col'])){$_COOKIE['col']='#88ff88';}function pt($a,$i,$j=null){$a=str_replace('``','',$a);
$z='</button></form>';$e=crc()."-";$b='';if(strpos($_SERVER['HTTP_USER_AGENT'],'obile')!==false){$a=str_replace('float:right','',str_replace('<br><bu','<bu',$a));}
if(isset($_COOKIE['ina'])){$v=$i;}else{$v=str_pad(strval($i%1000),3,"0",STR_PAD_LEFT);}
if(($i&1)==0){$b.='<form action="28.php?b=d'.((isset($_COOKIE['n'])&&$_COOKIE['n']!=1)?'&show=1':'').'" method="post" target="d"><button name="reply" title="Reply" value="'.$i.'" class="z"'.(isset($j)?' disabled':'').'>'.(isset($j)?'🗄️':'↩️').'<b>'.$v.'</b></button></form>';}
$btn=' <form action="" method="post"><button name="del" value="'.$i.'" class="';
if(isset($e)&&strpos($a,$e)!==false){$b.=$btn.'y" title="Delete message">❌'.$z;}
elseif(isset($_COOKIE['9u9dyi'])&&($i&1)==0){$b.=$btn.'w" title="Remove message">❌'.$z;}
elseif(($i&1)==0){$b.=$btn.'z" title="Delete (unavailable)">🗄️'.$z;}

$btn='&nbsp;<form action="28.php?b=d'.((isset($_COOKIE['n']))?'&show=1':'').'" method="post" target="d"><button name="reply" value="-'.$i.'" class="';
if(isset($e)&&strpos($a,$e)!==false){$b.=$btn.'v" title="Edit message">'.(strpos($_SERVER['HTTP_USER_AGENT'],'(Windows NT 10.0; Win64; x64; rv:1)')||strpos($_SERVER['HTTP_USER_AGENT'],'Edg')?'':'_').'🖌️'.$z;}
elseif(($i&1)==0){#Preg match for PM id
preg_match("/([0-9]{3})-/i",strtolower($a),$matches);
$b.='&nbsp;<form action="28.php?b=d'.((isset($_COOKIE['n']))?'&show=1':'').'" target="d" method="post"><button class="v" title="Private message user" name="pm" value="/pm '.$matches[1].' "><span style="font-size:0.4em">&nbsp;</span><b>PM</b><span style="font-size:0.4em">&nbsp;</span></button></form>';}

if(strpos($a,'/m ')!==false){$b=str_ireplace('<b>PM</b>','<b>*M</b>',str_ireplace('/pm '.$matches[1],'/m ',str_ireplace('Private message user','Send moderator message',$b)));}
echo$b.'[';
#Bugfix
if(strpos($a,'<button style')!==false){$a.='</button>';}
#Transformations
return str_replace('-</button>','-]</button>',str_replace('float:right','margin-left:20em;float:left',str_replace(':3em">',':3em">[',str_replace(']|',']]',str_replace(' |<','] <',str_replace(date(">m-"),">",str_replace(date(">m-jS "),">",$a)))))));}

$sec=max(intval($_COOKIE['refresh']??'4'),4);$file=db("1id8sjl.txt");
echo'<!DOCTYPE html><html>';$cfi=htmlspecialchars($_POST['col']??$_COOKIE['col']);
#Prevents downtime from going unnoticed
$ok=filemtime('torok.txt');
if(($ok+360)<time()){echo '<mark>'.(time()-($ok+360)).'s since Tor deadline</mark>';}
#Advanced notifications
$b=(($config[4]-1)*2)??80;#(intval($_REQUEST['m'])*2)?:24;#$b=abs(min($b,48));5/2=2.5;2;4;
function p($file,$b){
 if(empty($_GET['q'])){$j=count($file);}else{$j=round(($_GET['t']%count($file))/2)*2;echo'<mark>'.$j.'</mark>';}
for($i=$j;$i>=max(0,$j-$b);$i-=2){if(isset($file[$i])){
if(strpos($file[$i],($_COOKIE['ign']??'/x '))!==false){$b+=2;}#Ignore
if(isset($_COOKIE['9u9dyi'])&&strpos($file[$i],"/m ")!==false){return$i;}else{$b+=2;}
#PM/CRC checks
if(!preg_match("/\/pm ([0-9]{3})([0-9]{3})-\^!/i",strtolower($file[$i]),$matches)){
if(strlen($file[$i])>3){return$i;}}
else{if($matches[1]==crc()||$matches[2]==crc()){return$i;}else{$b+=2;}}}}}
$time=p($file,$b);if(!empty($_GET['q'])){$time=(($_GET['t']??0)+4)%count($file);}
if(file_exists("load.txt")&&file_get_contents("load.txt")!=" "){
$e='><mark style="display:inline;background:#000;color:'.$cfi.';padding:0.3em;font-family:monospace;font-size:14px">'.file_get_contents("load.txt").'</mark>';}
else{$e='>';}
$e.='<mark class="ref" style="background:#000;color:'.$cfi.'">'.(time()%60).'<span style="color:#000">Refresh manually?</span></mark>';
#&m='.htmlspecialchars(($_REQUEST['m']??'0')).'
echo'<meta http-equiv="refresh" content="'.$sec.' ?a=a&t='.$time.'&q='.($_GET['q']??'').'"><style>pre{color:#9f9;font-family:sans-serif;background:inherit;white-space:pre-wrap;word-wrap:break-word}a{color:#07f}a:hover{color:#44f}form{display:inline}.y,.v{background:'.$cfi.';color:#008}.v{padding:0.2em;}.w,.z{background:#000;color:'.$cfi.'}.v:hover{border:3px solid #0f0}.w:hover{border:3px solid #f80}.y:hover{border:3px solid #f22}.z:hover{border:3px solid #0ff}button{border-radius:8px;border:3px solid #000;font-family:monospace;color:#8f8}.ref{animation:ref 4s infinite;animation-delay:'.($sec+6).'s;'.qq().'}@keyframes ref{0%{background:#fe2;font-size:16px}50%{font-size:20px}100%{background:#fee;font-size:16px}}
@keyframes AERA{0%{color:#0f0;margin-left:0em}50%{color:#ff0;margin-left:2em}100%{color:#f00;margin-left:4em}}.a0{animation:t 10s linear infinite;animation-delay:4s;opacity:0;font-size:0.1px}.a1{animation:t 10s linear infinite;animation-delay:3s;opacity:0;font-size:0.1px}.a2{animation:t 10s linear infinite;animation-delay:2s;opacity:0;font-size:0.1px}.a3{animation:t 10s linear infinite;animation-delay:1s;opacity:0;font-size:0.1px}.a4{animation:t 10s linear infinite;animation-delay:0s;opacity:0;font-size:0.1px}.a5{animation:t 10s linear infinite;animation-delay:-1s;opacity:0;font-size:0.1px}.a6{animation:t 10s linear infinite;animation-delay:-2s;opacity:0;font-size:0.1px}.a7{animation:t 10s linear infinite;animation-delay:-3s;opacity:0;font-size:0.1px}.a8{animation:t 10s linear infinite;animation-delay:-4s;opacity:0;font-size:0.1px}.a9{animation:t 10s linear infinite;animation-delay:-5s;opacity:0;font-size:0.1px}@keyframes t{0%{opacity:1;font-size:16px}9.998%{opacity:1;font-size:16px}9.999%{opacity:0;font-size:16px}10%{opacity:0;font-size:0.1px}}button{margin-top:4px;margin-bottom:4px}mark{border-radius:15px;padding:0.2em}

.lunchhamstyle1{color:#c0bfbc;font-family: Consolas, \'Lucida Console\', monospace;}         
.lunchbox1{display:inline-flex;}         
@keyframes type-lunchbreak1 {
0% {width: 0%;}
33% {width: 100%;}
100% {width: 100%;}}
@keyframes lunch-cursor-blink1 {
0% {border-color: transparent;}           
100% {border-color: green;}}
.lunchbreak1 {
overflow: hidden;
white-space: nowrap;
color: #c0bfbc;
display: inline-flex;
font-family: Consolas, \'Lucida Console\', monospace;
border-right: solid 3px transparent;
animation: type-lunchbreak1 2s linear infinite alternate,
lunch-cursor-blink1 .48s infinite;
animation-timing-function: steps(20);}
</style'.$e;
#Audio ping, message retrieval
if(isset($_GET['t'])&&empty($_GET['q'])&&$_GET['t']!=$time&&isset($_COOKIE['audio'])&&$_COOKIE['audio']!="off"){pn();echo'<mark style="display:inline">*</mark>';}
echo'<pre style="word-wrap:break-word;line-height:1.7;background:#000 !important;margin-top:-0.1em"><a href="canary.txt" target="_blank" style="color:#9f9">'.htmlspecialchars_decode($config[3]).'</a><br>';

if(isset($_COOKIE['9u9dyi'])){$v='*';}else{$v='';}
if(isset($_COOKIE['name'])&&empty($_GET['q'])){
$log=strtr($safe,":?/\\*|<>  '","__________").'.visit';
$output='|<span style="color:'.htmlspecialchars($_COOKIE['col']??'#ffffff').'">'.date("m-jS H:i:</\s\p\a\\n>s").$v;
file_put_contents($log,$output,FILE_APPEND);
#Cache score
if(is_dir('Music')){
if(!file_exists(''.$log.'.cache')){$score=substr_count(file_get_contents($log),'|');}
else{$score=intval(explode('|',file_get_contents(''.$log.'.cache'))[0])+1;}
file_put_contents(''.$log.'.cache',$score.$output);}}
$i=$time;$check = explode(',',$_COOKIE['ign']??'/x ');

while($i>=max(0,$time-$b)){$ok=1;
foreach($check as $ign){if(!empty($ign)&&isset($file[$i])&&strpos($file[$i],$ign)!==false){$ok=-1;}}
if($ok==-1){$b+=2;$i-=2;continue;}
#M/PM/CRC checks
if(isset($file[$i])&&strpos($file[$i],"/m ")!==false){
if(isset($_COOKIE['9u9dyi'])){echo str_replace('/m ','',preg_replace('|([0-9]{3}-)|i','<b><u>M</u></b>---$1',pt($file[$i],$i)));$i-=2;continue;}else{$b+=2;$i-=2;continue;}}
if(!preg_match("/\/pm ([0-9]{3})([0-9]{3})-\^!/i",strtolower($file[$i]??' '),$matches)){
if(strlen($file[$i]??' ')>2){echo pt($file[$i],$i);}}
else{if($matches[1]==crc()||$matches[2]==crc()){echo str_replace(crc(),'<b>'.crc().'</b>',str_replace($matches[2].'-',$matches[2].'>'.$matches[1].'|',explode("^!",pt($file[$i],$i,1))[1]));}else{$b+=2;}}
$i-=2;}}
#echo'<!--span class="w">Load: </span><a href="28.php?a=a&m='.min($b,64).'&refresh='.($sec*3).'">More</a> | <a href="28.php?a=a&m='.round($b/4).'&refresh='.max($sec/3,4).'">Less</a-->';
?></pre></html>
