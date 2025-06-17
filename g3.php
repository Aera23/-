<?php
$grace=20;#To disable captcha, set to 123446780
if(strpos($_SERVER['REQUEST_URI'],"/g3.php/")!==false){exit('<meta http-equiv="refresh" content="0 /g3.php"/><mark style="font-size:1.2em;padding:0.3em">Auto redirect</mark>');}

if(!function_exists('ini_parse_quantity')){echo '<mark>Upgrade your PHP for more features / security</mark>';}
#Audio functions
function gt(){$v='AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';$l='qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq';
echo'<audio autoplay src="data:audio/mpeg;base64,SUQzBABAAAAAZQAAAAwBIAUKOn0nKUNPTU0AAAALAAAAAAAAAEd1aXRhckNPTU0AAAALAAAAWFhYAEd1aXRhclRZRVIAAAAFAAAAMjAyNFREUkMAAAAFAAAAMjAyNFRQRTEAAAAHAAAAQWVyYTIz//uQxAAAAAAAAAAAAAAAAAAAAAAAWGluZwAAAA8AAAAMAAAJqgBaWlpaWlpaWnFxcXFxcXFxgYGBgYGBgYGRkZGRkZGRkZGioqKioqKioq6urq6urq6uv7+/v7+/v7+/zMzMzMzMzMzZ2dnZ2dnZ2ebm5ubm5ubm5vPz8/Pz8/Pz//////////8AAAAUTEFNRTMuMTAwBJgAAAAAAAAAABUgJALeQQABpAAACao8wpc'.$v.$v.$v.$v.$v.$v.'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//vAxAAABhABX9QAAALzqC3/MYAACgk0NmaJpGyJ6yjhObg+H1AgMBDg+H/4fgg74PxAGCgIO/znE4fy7//vKBjDETvB+aiIh9eVlXZUS2NtOJNSABOiWkMLkLaDGwqOEo9tyR5ddk4FUVZNUfpvGiX2dN1IBYskduBnCX4xJRuB45L5JD8YmoPa7cjklf6JNc4/j9xqBLDY29gz4xBE3ypV1GJVKI7ZlsxIoxS01PHpXO6q0l+9SVqaX49tR6U2Z+I4WIlQVaSM2rdmmsapInbjVa/Ys1btSTxrvML2Nyx2phR/Y+vqrbyvynCrZyz3Wl3zNBZq442dShMLNxWxrspiira8dWZBEFIoqBkUDroIPHI8SBd0gnHjvUpxXhfLzql5lNpzKXkbtF8+jRvMLospUvWr0lKmU8yrSFaLajWrmzXU6fX0of+tdvetPHdSrWJ5syUVmEGEk0+HR/I3hZEsFuh78JpzkQrUxK3tStQ1rWlluY2UU88RJKXaQKp3ki++hO9jUen/2b3aqsbPdiYEAkkucAoSgxjw4KiXILQitvyKf6IDEU3m95K4muWm96Pau3X7Xr5atT9cZF7DyEryQtzpFNbte7mkdiAklJQDnch/TM20dYkYlUPdjqn7xTRq72rRJqtFWp50ile0ktbmOllztG57ELud7urn3pU3AQASCdAUEFEVKNnHMw0W+kHTvDdpDe9qF3OJqXsIlLn0V3MrXfRW44wuhV7dTtCujLlmZzDJfEwQeiNpGWFdIgmIgh5Yzof3ko6rTa+8TuaRWrorv1Lu672FlKed1Kfp1t+EeEASEk4AIjMtSDhsQAb2HOMPA6AoSvKXuStV9CFPPsQpTzzELuYTUva1e+0puelXvuSpoxgwkpAA+L6Yuh3ODwz4PfQh5ILJHZRVN4ZQw81CVT2XU9yarmpRzjS3k13NbXX23ng3NAIKdoANSMP/3KBXEDRUwND/+0DE7AAJ6S9v/MOAAOgFrnzDjYDM+ICHKypxqSq7mMQq5tCnvampzCKVb2ld0mpd7KtjLiidiAhN3gCB7AQaLztDQ4C5Ybr7JSMte1r1st3P3Lcsfu5OCavl5OL9T3/0fvemHa6qxZ6WJwMAEleAJMCvKXigAvQlsrX36pG/jhb7r3OWtRS8Ms/UpeWv3PXvx+de4/WGP2QquxhhfFccpUBvou0HuQ1UrNTos6X0R+45MhS3fv/7IMT3gAdQyXHkrEUA1gtufPSJFL8UvLU5OpKcvDNz/49d49W26vW9hWYzAhJ7gBtKBl6QspUxgXoipA8La8bQX0qVc9KFz7ULVdTU96E7jxMtukVKsZRi3bmisQoJ2p0RvGpyIPcCOnT3QcrqkgDx5aDlbjrUpXPalXtSq9xJC9v/+yDE9gBGcCdx57CkoMIMbrjGiJRFt7xVJzICC5gAED0DlsdWL8Rc67zwqftDLYwiWWt7EoXcyXVc1C73kl9iUy1S8E6CBLclAHxPilVYVuslplQ9JdbmpQu97S8cfpKKto3ualSGmJUHERIUoAAxQwNJlnvSUakhA7zbOBPg3INJ//sgxPqABlQtc+YU6GDHCC389giUjz7yVrk3vX3gnWtnzr3z4StwyGqkKBe1gk8aEb0VQ6YCR6HAh0sAcEs9ByinnWEkqe7KquYla7ia1wSodFUwEhOgAA+kgPZthWwUsPwp7xJT3EVqW+hCrWILKv0Lc8il2aHNFUQIL1EPLJU4h//7EMT+gAZYMW3mJOggzZktvLCOdcY2YB8aRA1I3aXniJbe1CVT2tVzUFlucRQpTEFNRTMuMTAwVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVdaJH2wSoAABpQeheWRPGjVTcij76GBL//sgxPSARfTJa+WEU6jCmy24wIo9vHmzSZPJu+L3/GnfikxBTUUzLjEwMK'.$l.''.$l.'qqqqqv/7EMT6gEYkNW3nrKZgqges/MSI2K'.$l.''.$l.'//sQxPYARVwtZeUkQ2CUBKv8dhxc'.$l.''.$l.'r/+xDE94BFfHVZ56RIiKgHq7zDCRC'.$l.''.$l.'v/7EMT2AES4LV3gMKDgnAaqvNWcWK'.$l.''.$l.'//sQxOgDxHQvUaSBJCgAAD/AAAAE'.$l.''.$l.'o=">
</audio>';}

function pn(){$e='VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV';
$v='AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';echo'<audio autoplay><source src="data:audio/mp3;base64,SUQzAwAAAAAAZVRQRTEAAAAHAAAAQWVyYTIzVFlFUgAAAAUAAAAyMDIzVERSQwAAAAUAAAAyMDIzQ09NTQAAABEAAAAAAAAAbGlrZSBkYXkgMTc4Q09NTQAAABEAAABYWFgAbGlrZSBkYXkgMTc4//uQxAAAAAAAAAAAAAAAAAAAAAAAWGluZwAAAA8AAAAVAAAMGQAxMTExPj4+Pj5ISEhISFJSUlJSW1tbW2VlZWVlb29vb295eXl5eYODg4ONjY2NjZqampqapKSkpKStra2turq6urrExMTExM7Ozs7O2NjY2OLi4uLi7Ozs7Oz29vb29v////8AAAA8TEFNRTMuMTAwBK8AAAAAAAAAABUgJAJUQQABzAAADBmTpZS3'.$v.$v.$v.$v.$v.$v.$v.'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'.$e.'//sQxPqARIgdO+xh4OCPg+d8/Twc'.$e.'VVVVVVVVVVVVVVVVVVX/+xDE/4BFVH817gFM4KcP5j3AKZx'.$e.'VVVVVVVVVVVVVVVVVVf/7EMT+gMXofy+uAazgnxAmecApnF'.$e.'VVVVVVVVVVVVVVVVVV//sQxPuAxSBHNe3hpKCHCOa5sB2c'.$e.'VVVVVVVVVVVVVVVVVVX/+xDE/4BGuDsz7T2IKLoFJHT3mJ'.$e.'VVVVVVVVVVVVVVVVVVVQ==" /></audio>';}

function makesum($j){$e=100+($j%900);return $e;}

#Cookies; Strum if user got CAPTCHAd mid chat
if(isset($_POST['audio'])){setcookie("audio",$_POST['audio'],time()+35060);}
if(isset($_POST['name'])){setcookie("name",$_POST['name'],time()+86400);}
if(isset($_POST['refresh'])){setcookie("refresh",$_POST['refresh'],time()+86400);}
if(isset($_POST['col'])){setcookie("col",$_POST['col'],time()+35000);}
if(!isset($phrase)){$live='';$l='Redirecting';
if(file_exists("links.php")){include("links.php");$live='Documents/';}
$old=glob($live.'*eep.txt');foreach($old as $eep){if((85+filectime($eep))<time()){unlink($eep);}}

function s(){$s=mt_rand(0,2);if($s===0){return' ';}elseif($s===1){return'';}else{return'&nbsp;';}}

function g($l){
if(!isset($_REQUEST['next'])){echo"<meta http-equiv='refresh' content='0 28.php'/>";exit($l);}
else{echo"<meta http-equiv='refresh' content='0 ".htmlspecialchars($_REQUEST['next'])."'/>";exit($l);}}

function svg($g,$r,$e){
if("%^^"!="%^"."%"){$x='';$len=strlen($g);for($i=0;$i<$len;$i++){$x.=$g[$i].s();}}
else{$x=$g;}
return '<svg height="50" width="129" alt="'.$x.'">
<defs>
  <linearGradient id="g1" x1="0%" y1="0%" x2="100%" y2="0%">
  <stop offset="0%" stop-color="'.$r.'" /><stop offset="100%" stop-color="'.$e.'" />
  </linearGradient>
</defs>
<text fill="url(#g1)" font-size="28" x="23" y="41">'.$x.'</text>
</svg>';}

#Return 1 for valid cookie
function chkx(){
#Fixed poor validation ++
if(isset($_COOKIE['crc'])&&isset($_COOKIE['o'])&&$_COOKIE['o']<time()&&crc32(base64_encode("127.0.0.1".$_COOKIE['o']))==$_COOKIE['crc']){
 return "1";}
 elseif(isset($_GET['apikey'])&&file_exists(".bashrc")&&$_GET['apikey']=="nrzknf.txt"){return "1";}
 elseif(file_exists(crc32("127.0.0.1").".dat")&&(filemtime(crc32("127.0.0.1").".dat")+$grace)>time()){return "1";}
else{return "2";}}

#Redirection
if(chkx()=="1"){
if(!isset($_COOKIE['crc'])){
$j=crc32(base64_encode("127.0.0.1".time()));
setcookie("crc", $j, time()+35000);
setcookie("o",time(),time()+35000);
if(!file_exists("".makesum($j))){file_put_contents("".makesum($j),$_SERVER['REQUEST_TIME_FLOAT']);}
}
g($l);#Redirect if valid cookie exist
}
elseif(isset($_GET['next'])&&($_GET['next']=="28.php?b=d"||$_GET['next']=="28.php?b=b")){
exit("<meta http-equiv='refresh' content='4'><mark>Solve captcha, should auto refresh. Maybe resend message? ~ ".date("H:i:s")."</mark>");
}
else{
if(isset($_REQUEST['id'])){$e=file_get_contents($live.$_POST['id'].'eep.txt');}
if(isset($e)&&$_REQUEST['q'.base_convert(crc32($_REQUEST['id']."9u9dyi"),10,36)]!=""&&strtolower(trim($_REQUEST['q'.base_convert(crc32($_REQUEST['id']."9u9dyi"),10,36)],' \\'))==$e)
{#Invite check
  if(file_exists("config.txt")){$ic=base64_decode(strrev(explode('|',file_get_contents("config.txt"))[7]));}else{$ic=30;}
  if(isset($_POST['test'])&&$_POST['test']!=$ic){echo"<mark>Bad invite code</mark>";}
else{
setcookie("o",time(),time()+35000);setcookie("crc",crc32(base64_encode("127.0.0.1".time())),time()+35000);
file_put_contents(crc32("127.0.0.1").".dat",crc32(strrev("127.0.0.1")));
 g($l);
}}elseif(isset($_REQUEST['id'])){echo"<mark>Invalid captcha solve,</mark>";
$xxx=strlen($_REQUEST['q'.base_convert(crc32($_REQUEST['id']."9u9dyi"),10,36)]);
if($xxx==4){echo"<mark>&nbsp;don't type 4 characters directly</mark>";}
elseif($xxx==3&&strlen($e)!=3){echo"<mark>&nbsp;don't type 3 characters directly</mark>";}
elseif($xxx<3&&$xxx!=0||$xxx==5){echo"<mark>&nbsp;wrong length</mark>";}
elseif($xxx==0){echo"<mark>&nbsp;blank solution is never valid</mark>";}
else{echo"<mark>&nbsp;maybe retry?</mark>";}
}
}
$cf=["#ff33f",'#8800f','#ff334',"#11ffe","#eeaa0","#00dfd","#ff880","#ffff0","#00ff0","#0088f"];
#Preset colours
if(!isset($_POST['col'])){$cb=(mt_rand()%10);$cfi=$cf[$cb].$cb;}
else{$cfi = htmlspecialchars($_POST['col']);}
$e=$cf[mt_rand(0,9)]."0";
echo'<meta name="viewport" content="width=device-width, initial-scale=1">';
if(isset($_COOKIE['audio'])&&!isset($_POST['id'])){gt();}
if($live!='old'){echo$l;}
#Fixed to allow for 0 as first digit(s), with string padding :)
$a=str_pad(base_convert(mt_rand(0,46655),10,36),3,0,0);
$tag=['i','span','b'];
$text=['Type the final 3 letters/digits','Final 3 letters & numbers','Gimme those characters, ignoring 1<sup>st</sup> one','Recall the last three characters','Last three letters/digits please'];
$texta=['Type the initial 3 letters/digits','First 3 letters & numbers','Gimme those characters, ignoring 4<sup>th</sup> one','Recall the first three characters','First three letters/digits please'];
$textb=['Type those characters twice','Enter the characters below 2x','Input the characters below two times','Double type the characters into the box','Enter the characters below twice'];
echo'<!DOCTYPE html><html style="background:linear-gradient(45deg,#0A1520,#0A2015,#200A15)"><meta http-equiv="refresh" content="70">
<style>input,button{background:#dfd;border:2px solid #060;padding:0.3em}::placeholder{color:#060}button:hover,input:hover{border:2px solid #a66 !important}
.r{width:50px;height:50px;background:red;position:relative;animation-name:o;
animation-duration: 80s;animation-timing-function:linear}fieldset{border:2px solid #7f7}button{margin-left:25px;padding:0.3em;border-radius:8px;border:2px solid #8f8;background:linear-gradient(45deg,#0A1520,#0A2015,#200A15);color:#8f8}
@keyframes o{
 0%    {background:#0f0;left:89%;top:0px}
 50%   {background:#ff0;left:44.5%;top:0px}
 100%  {background:#f00;left:0%;top:0px}}
/*Cool timer*/
@keyframes t{
 0%    {opacity:1;font-size:0.1px}
 1%    {opacity:1;font-size:20px}
 81%   {opacity:1;font-size:20px}
 100%  {opacity:1;font-size:0.1px}}';

for($i=0;$i<81;$i++){echo'.a'.$i.'{animation:t 1s linear;animation-delay:'.(80-$i).'s;opacity:0;font-size:0.1px}';}
$r=mt_rand(0,999);
echo'</style>
<h2 id="a" style="margin:2em;color:#f8f;font-family:sans-serif;border:2px solid #6d6;border-radius:7px;padding:0.2em;width:69vw">:3 <'.$tag[time()%3].' style="speak-as:spell-out">';
//Randomise whether CAPTCHA wants first or last letters
$sl=(mt_rand()%3);
if($sl==1){echo $text[mt_rand(0,4)].'<br>';
echo svg(base_convert(mt_rand(0,35),10,36).$a,$cfi,$e).'</'.$tag[time()%3].'>';}
elseif($sl==2){echo $textb[mt_rand(0,4)].'<br>';
echo svg($a,$cfi,$e).'</'.$tag[time()%3].'>';$a=$a.$a;}
else{echo $texta[mt_rand(0,4)].'<br>';
echo svg($a.base_convert(mt_rand(0,35),10,36),$cfi,$e).'</'.$tag[time()%3].'>';}

file_put_contents($live.$r.'eep.txt',$a) or exit("<mark>Can't write</mark>");
#The CAPTCHA form, now with name ready
echo'<form action="g3.php" method="post"><br><input name="name" size="15" placeholder="Nick" value="'.($_POST['name']??$_COOKIE['name']??'').'" style="margin-left:2em"><span style="font-size:14px">&lt; Nick</span><br><input name="refresh" size="10" placeholder="Refresh" value="4" style="margin-left:2em"><span style="font-size:14px">&lt; Refresh</span><br>
<input name="q'.base_convert(crc32($r."9u9dyi"),10,36).'" style="background:#dfd;margin-left:2em" size="6" maxlength="6" placeholder="Code" autofocus required><span style="font-size:12px">&lt; Solution. <mark>READ TITLE</mark></span><input type="color" name="col" value="'.$cfi.'"><input name="id" type="hidden" value="'.$r.'"><input name="next" type="hidden" value="'.($_REQUEST['next']??'28.php').'"><br><br><span style="font-size:16px;margin-left:1.3em">Invite code (30 on public chats):</a><br><input name="test" value="30" size="8" style="padding:0.3em;background:#dfd;margin-left:1.3em"><br><br><button name="audio" value="on">Enter with ping (enable autoplay?)</button><button name="audio" value="off">Enter without Audio</button></form>
<p style="font-size:16px;margin-left:1.3em">Solve accessible crap within 80 seconds, <mark>COOKIES NEEDED</mark></p></h2>
<div style="background:#dfd;width:70vw;display:inline-block;margin-left:2.8em"><div class="r"><center style="padding:20% !important" class="run">';
for($i=0;$i<81;$i++){echo '<span class="a'.$i.'">'.$i.'</span>';} #Timer
echo'</center></div></div><br>
<br><mark style="margin-left:3em">';if($live!="old"){echo`uptime -p`;}echo'</mark></html>';if($live!="old"){include("70.php");}}
else{
$find=['xD',':v',':c','^^','^w^','^u^','^v^','^-^',':&#039;(','o-o','0-0','*v*','*-*','^.^','*.*',':P','(:','):',':|',':D',':3',':(',':)','&lt;b&gt;','&lt;i&gt;','&lt;em&gt;','&lt;strong&gt;','&lt;mark&gt;','&lt;/b&gt;','&lt;/i&gt;','&lt;/em&gt;','&lt;/strong&gt;','&lt;/mark&gt;','>1<','>2<','>3<','>4<','>5<','>6<','>7<','>8<','>9<','>0<',':-)','miii',':<}','{>:'];
$change=['<mark>xD</mark>','<mark>:v</mark>','<mark>:c</mark>','<mark>^^</mark>','<mark>^w^</mark>','<mark>^u^</mark>','<mark>^v^</mark>','<mark>^-^</mark>','<mark>:\'(</mark>','<mark>o-o</mark>','<mark>0-0</mark>','<mark>*v*</mark>','<mark>*-*</mark>','<mark>^.^</mark>','<mark>*.*</mark>','<mark>:P</mark>','<mark>(:</mark>','<mark>):</mark>','<mark>:|</mark>','<mark>:D</mark>','<mark>:3</mark>','<mark>:(</mark>','<mark>:)</mark>','<b>','<i>','<em>','<strong>','<mark style="background:#f44">','</b>','</i>','</em>','</strong>','</mark>','>&#9856<','>&#9857<','>&#9858<','>&#9859<','>&#9860<','>&#9861<','>&#9856<','>&#9857<','>&#9858<','>&#9859<','<mark>:-)</mark>',date("B"),'<mark>:<}</mark>','<mark>{>:</mark>'];

#Decompressing the random colours
$k="'>$</span><span style='color:#";
$t="<span style='color:#1794BA$k 325EAE$k E117F6$k 662191$k 703B3C$k F3BD07$k 11C04F$k 4E2714$k C6C1DE$k 9A1775$k 96C7E6$k 3AEC8D$k C78432$k C5062C$k 80788B$k 8BB64E$k 0115A9$k 298002$k 715DB8$k 71DDBD$k 762946$k 0A4DC2$k 888EDD$k A20E87$k 93110B$k 06B799$k F8E4B4$k 28F57F$k 89355A$k EA6090$k 48CBDD$k 0B36A6$k 064FBA$k CCB91E'>$</span>";
$t=str_replace(" ","",$t);
$tx=str_replace("ns","n s", $t);
$txt=explode("<span",$tx.$tx);
$max=count($txt);
$phrase='_'.htmlspecialchars_decode($phrase);$q='';
$mt=time()%20;
for($i=0;$i<min(strlen($phrase),$max);$i++){$q.=str_replace("$",$phrase[$i],str_replace(" sty","<span sty",$txt[$i+$mt]));}$q = str_replace("_","",$q);}

function highlighter($e){$e=str_replace('&#039;','',$e);$e=str_replace('@','@&&&',$e);$pa=explode("@",$e);$c='';
foreach($pa as $part){
 $a=str_replace('&&&','@',$part);
 $a=str_ireplace('Moonlig','alkalineLig',$a);
  #Getting the colour from the user
 preg_match('/@([^\s:?\/\'*|<>.,]*)\s?/',$a,$ma);
 if(!empty($ma[1])){
  if(file_exists(''.$ma[1].'.visit.cache')){
   $n=explode("|",file_get_contents(''.$ma[1].'.visit.cache'))[1];}
  else{
   $n=explode("|",file_get_contents($ma[1].'.visit'));$n=$n[count($n)-1];}
   $p=strpos($n,"color:");
   $c.=str_replace('@'.$ma[1],"@<b style='color:".substr($n,$p+6,7).";'>".$ma[1]."</b>",$a);}
 else{$c.=$a;}}
 $c=str_replace('alkalineLig','Moonlig',$c);
return str_replace('','&#039;',$c);}
?>
