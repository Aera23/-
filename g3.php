
<?php
if($_POST['audio']!=""){setcookie("audio",$_POST['audio'],time()+34000);}
if($phrase==""){
if(file_get_contents("links.php")!=""){ # Sets path
include("links.php");$live='/home/peplive/Documents/';}
else{$live='old';}
$old=glob($live.'*eep.txt');foreach($old as $eep){if((80+filectime($eep))<time()){unlink($eep);}} #cleanup
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
    <text fill="#FFF" stroke="#000" font-size="23" font-family="Verdana" x="20" y="38">'.$g.'</text>
  </g>
</svg>';} #SVG of CAPTCHA

#Return 1 if cookie exists, and is not hijacked
function chkx(){
if($_REQUEST['o']<time() && crc32(base64_encode($_SERVER['HTTP_USER_AGENT']."127.0.0.1".$_COOKIE['o']))==$_COOKIE['crc']){return "1";}
else{return "2";}}

#Redirection if already solved
if(chkx()=="1"){
  if($_REQUEST['next']==""){echo"<meta http-equiv='refresh' content='0.06 28.php".$_POST['audio']."'/>";exit();}
  else{
  echo"<meta http-equiv='refresh' content='0.06 ".$_REQUEST['next']."'/>";exit();
  }
}

#Redirect if cookie checks out
if(abs($_COOKIE['o'] - time())<34000 && crc32(base64_encode("127.0.0.1".$_COOKIE['o']))==$_COOKIE['crc']){
  if($_REQUEST['next']==""){echo"<meta http-equiv='refresh' content='0.06 28.php'/>";exit();}
  else{
  echo"<meta http-equiv='refresh' content='0.06 ".$_REQUEST['next']."'/>";exit();
  }
}//Captcha expiry within 28.php
elseif($_GET['next']=="28.php?b=d" || $_GET['next']=="28.php?b=b"){
exit("<meta http-equiv='refresh' content='3'><mark>Solve in other window, should refresh automatically. You could try to resubmit the form too ~ ".date("H:i:s")."</mark>");
}else{echo '<meta name="viewport" content="width=device-width, initial-scale=1">';

#Fresh Validation
if($_REQUEST['id']!=""){$e = file_get_contents($live.$_POST['id'].'eep.txt');}
if($_REQUEST['q'.base_convert(crc32($_REQUEST['id']."9u9dyi"),10,36)]!="" && strtolower(trim($_REQUEST['q'.base_convert(crc32($_REQUEST['id']."9u9dyi"),10,36)],' \\'))==$e)
{
$stupid = base64_decode(strrev(explode("|",file_get_contents("config.txt"))[7]));
       if($_POST['test']!=$stupid){echo("<mark>Bad invite code</mark><br>");}
#Cookie setup
else{  
setcookie("o", time(), time()+34000);setcookie("crc", crc32(base64_encode($_SERVER['HTTP_USER_AGENT']."127.0.0.1".time())), time()+34000);
file_put_contents(crc32("127.0.0.1").".dat",crc32(strrev("127.0.0.1")));
 if($_REQUEST['next']==""){echo"<meta http-equiv='refresh' content='0.1 28.php'/>";exit;}
 else{echo"<meta http-equiv='refresh' content='0.1 ".$_REQUEST['next']."'/>";exit;}
}}}

$a = base_convert(mt_rand(1296,46655),10,36);
$tag = ['i','span','b'];
$text = ['Type the final 3 letters/digits','Only type the last 3 letters and numbers','Gimme random characters, ignoring 1<sup>st</sup> one','Recall the last three characters','Last three letters/digits please'];
$texta = ['Type the initial 3 letters/digits','Only type the first 3 letters and numbers','Gimme random characters, ignoring  4<sup>th</sup> one','Recall the first three characters','First three letters/digits please'];
$textb = ['Type the random characters twice','Enter the characters below 2 times =','Input the characters below two times','Repeat the characters into the box','Enter the characters below twice'];
$textc = ['Type the random characters once','Enter the characters below 1 time =','Input the characters below one time','Type the characters into the box','Enter the characters below'];
echo'<!DOCTYPE html><html style="background:linear-gradient(45deg, #0A1520, #0A2015, #200A15)"><meta http-equiv="refresh" content="70">
<style>
button:hover,input:hover{border:2px solid #a66 !important}.r {width: 50px;height: 50px;
  background: red;
  position: relative;
  animation-name: example;
  animation-duration: 70s;
  animation-timing-function: linear} fieldset{border:2px solid #7f7}

@keyframes example {
 0%   {background:#0f0;left:89%;top:0px}
 50%  {background:#ff0;left:44.5%;top:0px}
 100% {background:#f00;left:0%;top:0px}}

/*Cool timer*/
@keyframes t{
 0%   {opacity:1;font-size:0.1px}
 10%  {opacity:1;font-size:20px}
 90%  {opacity:1;font-size:20px}
 100% {opacity:1;font-size:0.1px}}';

for($i=0;$i<81;$i++){echo'.a'.$i.'{animation:t 1s linear;animation-delay:'.(80-$i).'s;opacity:0;font-size:0.1px}';}

echo'</style>
<h2 id="a" style="margin:2em;color:#9f9;font-family:sans-serif;border:2px solid #6d6;border-radius:5px;padding:0.2em;width:69vw">:) ';
//Randomise whether CAPTCHA wants to be typed once or twice
if(time()%2==0){echo $textb[mt_rand(0,4)];
echo '<br><'.$tag[time()%3].' style="speak-as: spell-out">'.svg($a).'</'.$tag[time()%3].'>';$a=$a.$a;}
else{echo $textc[mt_rand(0,4)];
echo '<br><'.$tag[time()%3].' style="speak-as: spell-out">'.svg($a).'</'.$tag[time()%3].'>';}

$r=mt_rand(0,999);
file_put_contents($live.$r.'eep.txt',$a) or die("<meta http-equiv='refresh' content='0 g9.php?next=".$_REQUEST['next']."'><mark>Please await forwarding to the platform</mark></html>");

echo'<form action="g3.php" method="post"><br>
<input name="q'.base_convert(crc32($r."9u9dyi"),10,36).'" style="padding:0.3em;background:#dfd;margin-left:2em" size="4" maxlength="6"><input name="id" type="hidden" value="'.$r.'"><input name="next" type="hidden" value="'.($_REQUEST['next'] ?: '28.php').'"><br><br><span style="font-size:16px">Invite code (30 on public chats):</a><br><input name="test" value="30" size="8" style="padding:0.3em;background:#dfd;margin-left:1em"><br><br><button style="padding:0.3em;border-radius:8px;border: 2px solid #8f8;background:linear-gradient(45deg, #0A1520, #0A2015, #200A15);color:#8f8" name="audio" value="yes">Enter with Audio</button>
<br><br><button style="padding:0.3em;border-radius:8px;border: 2px solid #8f8;background:linear-gradient(45deg, #0A1520, #0A2015, #200A15);color:#8f8" name="audio" value="no">Enter without Audio</button>
</form>
<p style="font-size:15px">Accessible CAPTCHA, solve within 70s</p></h2>
<div style="background:#dfd;width:70vw;display:inline-block;margin-left:2.8em"><div class="r"><center style="padding:20% !important;" class="run">';

for($i=0;$i<81;$i++){echo '<span class="a'.$i.'">'.($i-10).'</span>';}

echo'</center></div></div><br>
<br><mark style="margin-left:3em">'.`uptime -p`.'</mark></html>';if($live!="old"){include("70.php");}}
else{
$find=[':/','O-O','*v*','*-*','^.^','*.*',':P','(:','):',':|',':D',':3',':(',':)','&lt;b&gt;','&lt;i&gt;','&lt;em&gt;','&lt;strong&gt;','&lt;mark&gt;','&lt;/b&gt;','&lt;/i&gt;','&lt;/em&gt;','&lt;/strong&gt;','&lt;/mark&gt;','>1<','>2<','>3<','>4<','>5<','>6<', ':-)','miii',':<}','{>:'];
$change=['<mark>:/</mark>','<mark>O-O</mark>','<mark>*v*</mark>','<mark>*-*</mark>','<mark>^.^</mark>','<mark>*.*</mark>','<mark>:P</mark>','<mark>(:</mark>','<mark>):</mark>','<mark>:|</mark>','<mark>:D</mark>','<mark>:3</mark>','<mark>:(</mark>','<mark>:)</mark>','<b>','<i>','<em>','<strong>','<mark style="background:#f44">','</b>','</i>','</em>','</strong>','</mark>','>&#9856<','>&#9857<','>&#9858<','>&#9859<','>&#9860<','>&#9861<','<mark>:-)</mark>',date("B"),'<mark>:<}</mark>','<mark>{>:</mark>'];

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

#Unused filters
#if(file_get_contents(crc32("x"))==""){file_put_contents(crc32("x"),"nigg\ncunt\n^s\nsuck\nfag\n^d\npuss\nporn\n^x\ncp li\n^k\ncurry munch\nescorts");exit("<meta http-equiv='refresh' content='0'><mark>reload coz filters are there</mark>");}
#else{$filter = file(crc32("x"));}

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

function highlighter($e){$parts = explode("\\",str_replace("@","\\@",$e));
foreach($parts as $part){
 $a=$part;
  #Getting the colour from the user
 preg_match('/@([^\s:?\/\\*|<>.,]*)\s?/',$a,$matches);
 if($matches[1]!=""){
   $times=explode("|",file_get_contents($matches[1].".visit"));
   $times = $times[count($times)-1];
   $pos = strpos($times, "color:");
   $col.= str_replace("@".$matches[1],"@<b style='color:".substr($times,$pos+6,7).";'>".$matches[1]."</b>",$part);}
 else{$col.=$a;}}
return $col;}
?>
