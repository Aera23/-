
<?php
if($phrase==""){
if(file_get_contents("links.php")!=""){
include("links.php");$live='/home/peplive/Documents/';}
else{$live='old';}
$old=glob($live.'*eep.txt');foreach($old as $eep){if((80+filectime($eep))<time()){unlink($eep);}}
function svg($g){
return '<svg width="200" height="50" alt="'.$g.'">
  <defs>
    <filter id="MyFilter" filterUnits="userSpaceOnUse" x="0" y="0" width="100" height="60">
      <feGaussianBlur in="SourceAlpha" stdDeviation="0.5" result="blur" />
      <feOffset in="blur" dx="0.5" dy="0.5" result="offsetBlur" />
    </filter>
  </defs>
  <rect width="99" height="59" fill="#ddffdd" />
  <g filter="url(#MyFilter)">
    <path fill="none" stroke="#D90000" stroke-width="5" d="M25,45 C0,45 0,15 25,15 L75,15 C100,15 100,45 75,45 z" />
    <text fill="#FFFFFF" stroke="black" font-size="23" font-family="Verdana" x="20" y="38">'.$g.'</text>
  </g>'.$g.'
</svg>';}

//Return 1 if cookie exists, and is not hijacked, or if CRC32 of IP is in the DB
function chkx(){
#Fixed poor validation ++
$file=filemtime(crc32("127.0.0.1").".dat");
 if((filemtime($file)+20)>time()){unlink(crc32("127.0.0.1").".dat");
  $write='000-'.'<i>'.date("m-jS H:i:s").'</i> |<span style="color:#88ff88">System: User solved CAPTCHA'."</span>\n\n";
  file_put_contents("1id8sjl.txt",$write,FILE_APPEND);return "1";
}
elseif($_REQUEST['o']<time() && crc32(base64_encode($_SERVER['HTTP_USER_AGENT']."127.0.0.1".$_COOKIE['o']))==$_COOKIE['crc']){
 return "1";}
else{return "2";}}

//Redirection
if(chkx()=="1"){
if($_COOKIE['crc']==""){
setcookie("crc", crc32(base64_encode($_SERVER['HTTP_USER_AGENT']."127.0.0.1".time())), time()+36000);
setcookie("o",time(),time()+36000);}
  if($_REQUEST['next']==""){echo"<meta http-equiv='refresh' content='0.06 28.php'/>";exit();}
  else{
  echo"<meta http-equiv='refresh' content='0.06 ".$_REQUEST['next']."'/>";exit();
  }
}

//Redirect if cookie exists, and is not hijacked
if(abs($_COOKIE['o'] - time())<36000 && crc32(base64_encode("127.0.0.1".$_COOKIE['o']))==$_COOKIE['crc']){
  if($_REQUEST['next']==""){echo"<meta http-equiv='refresh' content='0.06 28.php'/>";exit();}
  else{
  echo"<meta http-equiv='refresh' content='0.06 ".$_REQUEST['next']."'/>";exit();
  }
}
elseif($_GET['next']=="28.php?b=d" || $_GET['next']=="28.php?b=b"){
exit("<meta http-equiv='refresh' content='3'><mark>Solve in other window, should refresh automatically. You could try to resubmit the form too ~ ".date("H:i:s")."</mark>");
}
else{echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
if($_REQUEST['id']!=""){$e = file_get_contents($live.$_POST['id'].'eep.txt');}
if($_REQUEST['ii']!="" and strtolower(trim($_REQUEST['ii'],' \\'))==$e)
{setcookie("o", time(), time()+36000);setcookie("crc", crc32(base64_encode($_SERVER['HTTP_USER_AGENT']."127.0.0.1".time())), time()+36000);
file_put_contents(crc32("127.0.0.1").".dat",crc32(strrev("127.0.0.1")));
 if($_REQUEST['next']==""){echo"<meta http-equiv='refresh' content='0.1 28.php'/>";exit;}
 else{echo"<meta http-equiv='refresh' content='0.1 ".$_REQUEST['next']."'/>";exit;}

if($_REQUEST['next']==""){echo"<meta http-equiv='refresh' content='0.1 g3.php?j=1&next=28.php&id=".$_REQUEST['id']."&ii=".$_REQUEST['ii']."'/>";exit;}
else{echo"<meta http-equiv='refresh' content='0.1 g3.php?j=1&next=".$_POST['next']."&id=".$_REQUEST['id']."&ii=".$_REQUEST['ii']."''/>";exit;}}
}

$a = base_convert(mt_rand(1296,46655),10,36);
$tag = ['q','span','b'];
$text = ['Type the final 3 letters/digits: ','Only type the last 3 letters and numbers - ','Gimme random characters, ignoring 1<sup>st</sup> one: ','Recall the last three characters: ','Last three letters/digits please - '];
$texta = ['Type the initial 3 letters/digits: ','Only type the first 3 letters and numbers - ','Gimme random characters, ignoring  4<sup>th</sup> one: ','Recall the first three characters: ','First three letters/digits please - '];
$textb = ['Type the random characters twice:','Enter the characters below 2 times =','Input the characters below two times:','Repeat the characters into the box','Enter the characters below twice'];
echo'<!DOCTYPE html><html style="background:#000"><meta http-equiv="refresh" content="70">
<style>
.r {width: 50px;height: 50px;
  background: red;
  position: relative;
  animation-name: example;
  animation-duration: 70s;
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

for($i=0;$i<81;$i++){echo'.a'.$i.'{animation: t 1s linear;animation-delay:'.(80-$i).'s;opacity:0;font-size:0.1px}';}

echo'</style>
<h2 id="a" style="margin:2em;color:#9f9;font-family:sans-serif;border:2px solid #6d6;border-radius:5px;padding:0.2em;width:69vw">:) ';
//Randomise whether CAPTCHA wants first or last letters
if((mt_rand()%3)==1){echo $text[mt_rand(0,4)];
echo '<br><'.$tag[time()%3].' style="speak-as: spell-out">'.svg(base_convert(mt_rand(0,35),10,36).$a).'</'.$tag[time()%3].'>:';}
elseif((mt_rand()%3)==2){echo $textb[mt_rand(0,4)];
echo '<br><'.$tag[time()%3].' style="speak-as: spell-out">'.svg($a).'</'.$tag[time()%3].'>:';$a=$a.$a;}
else{echo $texta[mt_rand(0,4)];
echo '<br><'.$tag[time()%3].' style="speak-as: spell-out">'.svg($a.base_convert(mt_rand(0,35),10,36)).'</'.$tag[time()%3].'>:';}

$r=mt_rand(0,999);
file_put_contents($live.$r.'eep.txt',$a) or die("<mark>Page can't write to disk!</mark></html>");

echo'<form action="g3.php" method="post">
<input name="ii" style="padding:0.3em" size="4"><input name="id" type="hidden" value="'.$r.'"><input name="next" type="hidden" value="'.($_REQUEST['next'] ?: '28.php').'"><button style="background:#000;color:#8f8">Enter</button></form>
<p style="font-size:15px">Animation shows time left (up to 70s)</p></h2>
<div style="background:#dfd;width:70vw;display:inline-block;margin-left:2.8em"><div class="r"><center style="padding:20% !important;" class="run">';

for($i=0;$i<81;$i++){echo '<span class="a'.$i.'">'.($i-10).'</span>';}

echo'</center></div></div><br>
<br><mark style="margin-left:3em">'.`uptime -p`.'</mark></html>';if($live!="old"){include("70.php");}}
else{
$find=['O-O','*v*','*-*','^.^','*.*',':P','(:','):',':|',':D',':3',':(',':)','&lt;b&gt;','&lt;i&gt;','&lt;em&gt;','&lt;strong&gt;','&lt;mark&gt;','&lt;/b&gt;','&lt;/i&gt;','&lt;/em&gt;','&lt;/strong&gt;','&lt;/mark&gt;','>1<','>2<','>3<','>4<','>5<','>6<', ':-)','miii',':<}','{>:'];
$change=['<mark>O-O</mark>','<mark>*v*</mark>','<mark>*-*</mark>','<mark>^.^</mark>','<mark>*.*</mark>','<mark>:P</mark>','<mark>(:</mark>','<mark>):</mark>','<mark>:|</mark>','<mark>:D</mark>','<mark>:3</mark>','<mark>:(</mark>','<mark>:)</mark>','<b>','<i>','<em>','<strong>','<mark style="background:#f44">','</b>','</i>','</em>','</strong>','</mark>','>&#9856<','>&#9857<','>&#9858<','>&#9859<','>&#9860<','>&#9861<','<mark>:-)</mark>',date("B"),'<mark>:<}</mark>','<mark>{>:</mark>'];

#Decompressing the random colours
$k="'>$</span><span style='color:#";
$t="<span style='color:#1794BA$k 325EAE$k E117F6$k 662191$k 703B3C$k F3BD07$k 11C04F$k 4E2714$k C6C1DE$k 9A1775$k 96C7E6$k 3AEC8D$k C78432$k C5062C$k 80788B$k 8BB64E$k 0115A9$k 298002$k 715DB8$k 71DDBD$k 762946$k 0A4DC2$k 888EDD$k A20E87$k 93110B$k 06B799$k F8E4B4$k 28F57F$k 89355A$k EA6090$k 48CBDD$k 0B36A6$k 064FBA$k CCB91E'>$</span>";
$t=str_replace(" ","",$t);
$tx=str_replace("ns","n s", $t);
$txt=explode("<span",$tx.$tx);
$max=count($txt);
$phrase=htmlspecialchars_decode($phrase);$q='';
$shift=time()%15;
for($i=0;$i<min(strlen($phrase),$max);$i++){$q.= str_replace("$",$phrase[$i],str_replace(" sty","<span sty",$txt[$i+$shift]));}$phrase = str_replace("_","",$phrase);

#Removed $filter due to it not being used

#Credit to allixsenos, Source: https://www.php.net/manual/en/function.strtr.php
function normalize($string) {
    $table = array(
        'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
        'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
        'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
        'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
        'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
        'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
        'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
        'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r');
return strtr($string, $table);}}

function highlighter($e){$parts = explode("@",$e);
foreach($parts as $part){
 if(strpos($e,"@".$part)!==false){$a='@'.$part;}
 else{$a=$part;}
  #Getting the colour from the user
 preg_match('/@([^\s:?\/\\*|<>.,]*)\s?/', $a, $matches);
 if($matches[1]!=""){
   $times=explode("|",file_get_contents($matches[1].".visit"));
   $times = $times[count($times)-1];
   $pos = strpos($times, "color:");
   $col.= str_replace($matches[1],"@<b style='color:".substr($times,$pos+6,7).";'>".$matches[1]."</b>",$part);}
 else{$col.=$a;}}
return str_replace("@@","@",$col);}
?> 
