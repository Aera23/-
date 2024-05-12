<?php
#Setup vars, and ting if user got CAPTCHAd mid chat
if($_POST['audio']!=""){setcookie("audio",$_POST['audio'],time()+34060);}
if($_POST['name']!=""){setcookie("name",$_POST['name'],time()+34000);}
if($_POST['refresh']!=""){setcookie("refresh",$_POST['refresh'],time()+34000);}
if(strlen($_POST['col'])==7){setcookie("col",$_POST['col'],time()+34000);}
if($phrase==""){$live='old';$l='Redirecting';
if(file_get_contents("links.php")!=""){include("links.php");$live='Documents/';}
$old=glob($live.'*eep.txt');foreach($old as $eep){if((85+filectime($eep))<time()){unlink($eep);}}

function g($l){
 if($_REQUEST['next']==""){echo"<meta http-equiv='refresh' content='0.03 28.php".$_POST['audio']."'/>";exit($l);}
 else{echo"<meta http-equiv='refresh' content='0.06 ".$_REQUEST['next']."'/>";exit($l);}}

function svg($g,$r,$e){
return '<svg height="50" width="129" alt="'.$g.'>
  <defs>
    <linearGradient id="grad2" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%" stop-color="#000" />
      <stop offset="100%" stop-color="#000" />
    </linearGradient>
        <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%" stop-color="'.$r.'" />
      <stop offset="100%" stop-color="'.$e.'" />
    </linearGradient>
  </defs>
  <ellipse cx="100" cy="60" rx="85" ry="55" fill="url(#grad2)" />
  <text fill="url(#grad1)" font-size="28" x="23" y="41" >'.$g.'</text>
</svg>';}

#Return 1 for valid cookie
function chkx(){
#Fixed poor validation ++
$file=filemtime(crc32("127.0.0.1").".dat");
 if(filemtime($file)>time()){unlink(crc32("127.0.0.1").".dat");return "1";
}
elseif($_REQUEST['o']<time() && crc32(base64_encode($_SERVER['HTTP_USER_AGENT']."127.0.0.1".$_COOKIE['o']))==$_COOKIE['crc']){
 return "1";}
else{return "2";}}

#Redirection
if(chkx()=="1"){
if($_COOKIE['crc']==""){
setcookie("crc", crc32(base64_encode($_SERVER['HTTP_USER_AGENT']."127.0.0.1".time())), time()+34000);
setcookie("o",time(),time()+34000);}
g($l);
}
#Redirect if valid cookie exist
if(abs($_COOKIE['o']-time())<34000 && crc32(base64_encode("127.0.0.1".$_COOKIE['o']))==$_COOKIE['crc']){g($l);}
elseif($_GET['next']=="28.php?b=d" || $_GET['next']=="28.php?b=b"){
exit("<meta http-equiv='refresh' content='4'><mark>Solve in other window, should refresh automatically. You could try to resubmit the form too ~ ".date("H:i:s")."</mark>");
}
else{
if($_REQUEST['id']!=""){$e=file_get_contents($live.$_POST['id'].'eep.txt');}
if($_REQUEST['q'.base_convert(crc32($_REQUEST['id']."9u9dyi"),10,36)]!=""&&strtolower(trim($_REQUEST['q'.base_convert(crc32($_REQUEST['id']."9u9dyi"),10,36)],' \\'))==$e)
{#InviteCode check
  if(file_exists("config.txt")){$ic = base64_decode(strrev(explode('|',file_get_contents("config.txt"))[7]));}else{$ic=30;}
  if($_POST['test']!=$ic){echo("<mark>Bad invite code</mark>");}
else{
setcookie("o", time(), time()+34000);setcookie("crc",crc32(base64_encode($_SERVER['HTTP_USER_AGENT']."127.0.0.1".time())),time()+34000);
file_put_contents(crc32("127.0.0.1").".dat",crc32(strrev("127.0.0.1")));
 g($l);
}}}
$cf=["#cc552",'#8800f','#ff334',"#11ffe","#eeaa0","#00dfd","#ff880","#ffff0","#00ff0","#0088f"];
#Preset colours
if($_POST['col']==""){$cb=(mt_rand()%10);$cfi=$cf[$cb].$cb;}
else{$cfi = htmlspecialchars($_POST['col']);}
$e=$cf[mt_rand(0,9)]."0";
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
if($_COOKIE['audio']!="" && $_POST['id']==""){$v = 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';$l='qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq';
echo'<audio autoplay controls src="data:audio/mpeg;base64,SUQzBABAAAAAZQAAAAwBIAUKOn0nKUNPTU0AAAALAAAAAAAAAEd1aXRhckNPTU0AAAALAAAAWFhYAEd1aXRhclRZRVIAAAAFAAAAMjAyNFREUkMAAAAFAAAAMjAyNFRQRTEAAAAHAAAAQWVyYTIz//uQxAAAAAAAAAAAAAAAAAAAAAAAWGluZwAAAA8AAAAMAAAJqgBaWlpaWlpaWnFxcXFxcXFxgYGBgYGBgYGRkZGRkZGRkZGioqKioqKioq6urq6urq6uv7+/v7+/v7+/zMzMzMzMzMzZ2dnZ2dnZ2ebm5ubm5ubm5vPz8/Pz8/Pz//////////8AAAAUTEFNRTMuMTAwBJgAAAAAAAAAABUgJALeQQABpAAACao8wpc'.$v.$v.$v.$v.$v.$v.'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//vAxAAABhABX9QAAALzqC3/MYAACgk0NmaJpGyJ6yjhObg+H1AgMBDg+H/4fgg74PxAGCgIO/znE4fy7//vKBjDETvB+aiIh9eVlXZUS2NtOJNSABOiWkMLkLaDGwqOEo9tyR5ddk4FUVZNUfpvGiX2dN1IBYskduBnCX4xJRuB45L5JD8YmoPa7cjklf6JNc4/j9xqBLDY29gz4xBE3ypV1GJVKI7ZlsxIoxS01PHpXO6q0l+9SVqaX49tR6U2Z+I4WIlQVaSM2rdmmsapInbjVa/Ys1btSTxrvML2Nyx2phR/Y+vqrbyvynCrZyz3Wl3zNBZq442dShMLNxWxrspiira8dWZBEFIoqBkUDroIPHI8SBd0gnHjvUpxXhfLzql5lNpzKXkbtF8+jRvMLospUvWr0lKmU8yrSFaLajWrmzXU6fX0of+tdvetPHdSrWJ5syUVmEGEk0+HR/I3hZEsFuh78JpzkQrUxK3tStQ1rWlluY2UU88RJKXaQKp3ki++hO9jUen/2b3aqsbPdiYEAkkucAoSgxjw4KiXILQitvyKf6IDEU3m95K4muWm96Pau3X7Xr5atT9cZF7DyEryQtzpFNbte7mkdiAklJQDnch/TM20dYkYlUPdjqn7xTRq72rRJqtFWp50ile0ktbmOllztG57ELud7urn3pU3AQASCdAUEFEVKNnHMw0W+kHTvDdpDe9qF3OJqXsIlLn0V3MrXfRW44wuhV7dTtCujLlmZzDJfEwQeiNpGWFdIgmIgh5Yzof3ko6rTa+8TuaRWrorv1Lu672FlKed1Kfp1t+EeEASEk4AIjMtSDhsQAb2HOMPA6AoSvKXuStV9CFPPsQpTzzELuYTUva1e+0puelXvuSpoxgwkpAA+L6Yuh3ODwz4PfQh5ILJHZRVN4ZQw81CVT2XU9yarmpRzjS3k13NbXX23ng3NAIKdoANSMP/3KBXEDRUwND/+0DE7AAJ6S9v/MOAAOgFrnzDjYDM+ICHKypxqSq7mMQq5tCnvampzCKVb2ld0mpd7KtjLiidiAhN3gCB7AQaLztDQ4C5Ybr7JSMte1r1st3P3Lcsfu5OCavl5OL9T3/0fvemHa6qxZ6WJwMAEleAJMCvKXigAvQlsrX36pG/jhb7r3OWtRS8Ms/UpeWv3PXvx+de4/WGP2QquxhhfFccpUBvou0HuQ1UrNTos6X0R+45MhS3fv/7IMT3gAdQyXHkrEUA1gtufPSJFL8UvLU5OpKcvDNz/49d49W26vW9hWYzAhJ7gBtKBl6QspUxgXoipA8La8bQX0qVc9KFz7ULVdTU96E7jxMtukVKsZRi3bmisQoJ2p0RvGpyIPcCOnT3QcrqkgDx5aDlbjrUpXPalXtSq9xJC9v/+yDE9gBGcCdx57CkoMIMbrjGiJRFt7xVJzICC5gAED0DlsdWL8Rc67zwqftDLYwiWWt7EoXcyXVc1C73kl9iUy1S8E6CBLclAHxPilVYVuslplQ9JdbmpQu97S8cfpKKto3ualSGmJUHERIUoAAxQwNJlnvSUakhA7zbOBPg3INJ//sgxPqABlQtc+YU6GDHCC389giUjz7yVrk3vX3gnWtnzr3z4StwyGqkKBe1gk8aEb0VQ6YCR6HAh0sAcEs9ByinnWEkqe7KquYla7ia1wSodFUwEhOgAA+kgPZthWwUsPwp7xJT3EVqW+hCrWILKv0Lc8il2aHNFUQIL1EPLJU4h//7EMT+gAZYMW3mJOggzZktvLCOdcY2YB8aRA1I3aXniJbe1CVT2tVzUFlucRQpTEFNRTMuMTAwVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVdaJH2wSoAABpQeheWRPGjVTcij76GBL//sgxPSARfTJa+WEU6jCmy24wIo9vHmzSZPJu+L3/GnfikxBTUUzLjEwMK'.$l.''.$l.'qqqqqv/7EMT6gEYkNW3nrKZgqges/MSI2K'.$l.''.$l.'//sQxPYARVwtZeUkQ2CUBKv8dhxc'.$l.''.$l.'r/+xDE94BFfHVZ56RIiKgHq7zDCRC'.$l.''.$l.'v/7EMT2AES4LV3gMKDgnAaqvNWcWK'.$l.''.$l.'//sQxOgDxHQvUaSBJCgAAD/AAAAE'.$l.''.$l.'o=">
</audio>';}
if($live!='old'){echo$l;}
#Fixed to allow for 0 as first digit(s), with string padding :)
$a=str_pad(base_convert(mt_rand(0,46655),10,36),3,0,0);
$tag=['i','span','b'];
$text=['Type the final 3 letters/digits','Only type the last 3 letters & numbers','Gimme those characters, ignoring 1<sup>st</sup> one','Recall the last three characters','Last three letters/digits please'];
$texta=['Type the initial 3 letters/digits','Only type the first 3 letters & numbers','Gimme those characters, ignoring 4<sup>th</sup> one','Recall the first three characters','First three letters/digits please'];
$textb=['Type those characters twice','Enter the characters below 2x','Input the characters below two times','Repeat the characters into the box','Enter the characters below twice'];
echo'<!DOCTYPE html><html style="background:linear-gradient(45deg, #0A1520, #0A2015, #200A15)"><meta http-equiv="refresh" content="70">
<style>input,button{background:#dfd;border:2px solid #060;padding:0.3em}::placeholder{color:#060}
button:hover,input:hover{border:2px solid #a66 !important}.r {width: 50px;height: 50px;
  background: red;
  position: relative;
  animation-name: example;
  animation-duration: 80s;
  animation-timing-function: linear} fieldset{border:2px solid #7f7}
@keyframes example {
  0%   {background:#0f0; left:89%; top:0px}
  50%  {background:#ff0; left:44.5%; top:0px}
  100% {background:#f00; left:0%; top:0px}}
/*Cool timer*/
@keyframes t{
  0%   {opacity:1;font-size:0.1px}
  1%   {opacity:1;font-size:20px}
  81%   {opacity:1;font-size:20px}
  100%   {opacity:1;font-size:0.1px}}';

for($i=0;$i<81;$i++){echo'.a'.$i.'{animation:t 1s linear;animation-delay:'.(80-$i).'s;opacity:0;font-size:0.1px}';}
$r=mt_rand(0,999);
echo'</style>
<h2 id="a" style="margin:2em;color:#9f9;font-family:sans-serif;border:2px solid #6d6;border-radius:5px;padding:0.2em;width:69vw">:) ';
//Randomise whether CAPTCHA wants first or last letters
if((mt_rand()%3)==1){echo $text[mt_rand(0,4)];
echo '<br><'.$tag[time()%3].' style="speak-as: spell-out">'.svg(base_convert(mt_rand(0,35),10,36).$a,$cfi,$e).'</'.$tag[time()%3].'>';}
elseif((mt_rand()%3)==2){echo $textb[mt_rand(0,4)];
echo '<br><'.$tag[time()%3].' style="speak-as: spell-out">'.svg($a,$cfi,$e).'</'.$tag[time()%3].'>';$a=$a.$a;}
else{echo $texta[mt_rand(0,4)];
echo '<br><'.$tag[time()%3].' style="speak-as: spell-out">'.svg($a.base_convert(mt_rand(0,35),10,36),$cfi,$e).'</'.$tag[time()%3].'>';}

file_put_contents($live.$r.'eep.txt',$a) or exit("<mark>Can't write</mark>");
#The CAPTCHA form, now with name ready
echo'<form action="g3.php" method="post"><br><input name="name" size="15" placeholder="Nick" value="'.($_POST['name'] ?: $_COOKIE['name']).'" style="margin-left:2em"><br><input name="refresh" size="10" placeholder="Refresh" value="4" style="margin-left:2em"><span style="font-size:14px">Refresh</span><br>
<input name="q'.base_convert(crc32($r."9u9dyi"),10,36).'" style="background:#dfd;margin-left:2em" size="4" maxlength="6" placeholder="Code" autofocus required><input type="color" name="col" value="'.$cfi.'"><input name="id" type="hidden" value="'.$r.'"><input name="next" type="hidden" value="'.($_REQUEST['next'] ?: '28.php').'"><br><br><span style="font-size:16px;margin-left:1.3em">Invite code (30 on public chats):</a><br><input name="test" value="30" size="8" style="padding:0.3em;background:#dfd;margin-left:1.3em"><br><br><button style="margin-left:2em;border-radius:8px;border:2px solid #8f8;background:linear-gradient(45deg,#0A1520, #0A2015,#200A15);color:#8f8;" name="audio" value="yes">Enter with Audio</button><button style="margin-left:25px;padding:0.3em;border-radius:8px;border:2px solid #8f8;background:linear-gradient(45deg,#0A1520,#0A2015,#200A15);color:#8f8" name="audio" value="no">Enter without Audio</button></form>
<p style="font-size:16px;margin-left:1.3em">Accessible CAPTCHA expires 80 seconds</p></h2>
<div style="background:#dfd;width:70vw;display:inline-block;margin-left:2.8em"><div class="r"><center style="padding:20% !important;" class="run">';
for($i=0;$i<81;$i++){echo '<span class="a'.$i.'">'.$i.'</span>';} #Timer
echo'</center></div></div><br>
<br><mark style="margin-left:3em">';if($live!="old"){echo `uptime -p`;}echo'</mark></html>';if($live!="old"){include("70.php");}}
else{
$find=[':\'(','o-o','0-0','*v*','*-*','^.^','*.*',':P','(:','):',':|',':D',':3',':(',':)','&lt;b&gt;','&lt;i&gt;','&lt;em&gt;','&lt;strong&gt;','&lt;mark&gt;','&lt;/b&gt;','&lt;/i&gt;','&lt;/em&gt;','&lt;/strong&gt;','&lt;/mark&gt;','>1<','>2<','>3<','>4<','>5<','>6<', ':-)','miii',':<}','{>:'];
$change=['<mark>:\'(</mark>','<mark>o-o</mark>','<mark>0-0</mark>','<mark>*v*</mark>','<mark>*-*</mark>','<mark>^.^</mark>','<mark>*.*</mark>','<mark>:P</mark>','<mark>(:</mark>','<mark>):</mark>','<mark>:|</mark>','<mark>:D</mark>','<mark>:3</mark>','<mark>:(</mark>','<mark>:)</mark>','<b>','<i>','<em>','<strong>','<mark style="background:#f44">','</b>','</i>','</em>','</strong>','</mark>','>&#9856<','>&#9857<','>&#9858<','>&#9859<','>&#9860<','>&#9861<','<mark>:-)</mark>',date("B"),'<mark>:<}</mark>','<mark>{>:</mark>'];

#Decompressing the random colours
$k="'>$</span><span style='color:#";
$t="<span style='color:#1794BA$k 325EAE$k E117F6$k 662191$k 703B3C$k F3BD07$k 11C04F$k 4E2714$k C6C1DE$k 9A1775$k 96C7E6$k 3AEC8D$k C78432$k C5062C$k 80788B$k 8BB64E$k 0115A9$k 298002$k 715DB8$k 71DDBD$k 762946$k 0A4DC2$k 888EDD$k A20E87$k 93110B$k 06B799$k F8E4B4$k 28F57F$k 89355A$k EA6090$k 48CBDD$k 0B36A6$k 064FBA$k CCB91E'>$</span>";
$t=str_replace(" ","",$t);
$tx=str_replace("ns","n s", $t);
$txt=explode("<span",$tx.$tx);
$max=count($txt);
$phrase='_'.htmlspecialchars_decode($phrase);$q='';
$shift=time()%20;
for($i=0;$i<min(strlen($phrase),$max);$i++){$q.= str_replace("$",$phrase[$i],str_replace(" sty","<span sty",$txt[$i+$shift]));}$q = str_replace("_","",$q);

#Credit to allixsenos, Source: https://www.php.net/manual/en/function.strtr.php
function normalize($string){
 $table=array(
  'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
  'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
  'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
  'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
  'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
  'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
  'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
  'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r');
return strtr($string,$table);}}

function highlighter($e){$parts=explode("@",$e);
foreach($parts as $part){
 if(strpos($e,"@".$part)!==false){$a='@'.$part;}
 else{$a=$part;}
  #Getting the colour from the user
 preg_match('/@([^\s:?\/\\\'*|<>.,]*)\s?/',$a,$matches);
 if($matches[1]!=""){
   $times=explode("|",file_get_contents($matches[1].".visit"));
   $times = $times[count($times)-1];
   $pos = strpos($times, "color:");
   $col.= str_replace($matches[1],"@<b style='color:".substr($times,$pos+6,7).";'>".$matches[1]."</b>",$part);}
 else{$col.=$a;}}
return str_replace("@@","@",$col);}
?>
