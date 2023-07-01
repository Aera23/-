<?php
#Please change the secrets below
$salt = 'secret-salt';
$cookie = 'cookie-name';

#Spam filtering
if($_POST['comment']!=""){
$token = crc32($_REQUEST['t'].$salt);
  if($token != $_REQUEST['q']){exit("<mark>Error 1</mark>");}
  else{$check = $_REQUEST['t']/7; $now = time()%200000;$d = $now - $check; $length = strlen(htmlspecialchars($_REQUEST['comment']));
    if(($length/$d)>4 or $length>186){
      if($_COOKIE[$cookie]=="t"){echo $length/$d;}
    exit("<mark>Error 2</mark>");
    }
  }
}
if($_SERVER['PHP_SELF']=='/g3.php'){exit;}

//if($_REQUEST['invite']!="eee"){exit("<mark>Invite only. Enter code as: ?invite=code in URL</mark>");}
//else{setcookie("invite",$_GET['invite'],time()+36000);}

if($_COOKIE[$cookie]!=""){  if($_POST['del']=="n"){$file = file("prvt.txt");for($i=0;$i<count($file)-max(($_POST['lines']*2),2);$i++)
  {$prvt.=$file[$i];}file_put_contents("prvt.txt",$prvt);}
  elseif($_POST['del']!=""){
  $file = file("prvt.txt");for($i=0;$i<count($file);$i++){if($_POST['del']!=$i && $_POST['del']!=$i-1){$prvt.=$file[$i];}}file_put_contents("prvt.txt",$prvt);}
}

date_default_timezone_set('Australia/Adelaide');
if($_REQUEST['b']=="b"){
$sec = intval($_REQUEST['refresh']) ?: '4';
echo "<html><meta http-equiv='refresh' content='".$sec."'><style>mark{color:#fff;background:#000;border:1px solid #070;padding:0.2em;columns:60px 4;line-height: 1.7;font-size:18px}.x{color:#888}</style><span style='font-size:18px;background:#000;color:#ff0'>Last refreshes:</span><br>";$names = glob("*visit");$names[].=".visit";

foreach($names as $name){
$p = file_get_contents($name);
$z = explode("|",$p);
$q = array_key_last($z);
echo "<br><mark>".str_replace(".visit"," | ",$name).str_replace(date("jS"),"",str_replace(date("m-"),"",$z[$q].'<span class="x">|'.$q))."</span></mark>";}exit('</html>');}

$em = (htmlspecialchars($_REQUEST['e']) ?: '1');
if($em>2){$em=2;}
if($em<0.5){$em=0.5;}
if($_COOKIE['o']+36000>time()  && $_COOKIE['o']<time() && crc32(base64_encode($salt.$_SERVER['REMOTE_ADDR'].$_COOKIE['o']))==$_COOKIE['crc']){}
else{if($_GET['a']!="a"){header('Location: g3.php?next=28.php');}else{header('Location: g3.php?next=28.php?a=a');}exit;}
#  Filters
include('dirty.php');
$rt = $_POST['comment'] . $_POST['name'];
$xx = strtr($rt,'@43105$7|!','aaeiosstli');
foreach($filter as $f){
if(stripos($xx, $f)!== false){exit('<mark style="color:#dfd">Error.</mark>');}}

function process($comment)
{$comment = htmlspecialchars($comment);
$comment = str_replace('&lt;mark&gt;','<mark>',$comment);
$comment = str_replace('&lt;i&gt;','<i>',$comment);
$comment = str_replace('&lt;b&gt;','<b>',$comment);
$comment = str_replace('&lt;u&gt;','<u>',$comment);
$comment = str_replace('&lt;s&gt;','<s>',$comment);
$comment = str_replace('&lt;/i&gt;','</i>',$comment);
$comment = str_replace('&lt;/b&gt;','</b>',$comment);
$comment = str_replace('&lt;/u&gt;','</u>',$comment);
$comment = str_replace('&lt;/s&gt;','</s>',$comment);
$comment = str_replace(':|','<mark>:|</mark>',$comment);
$comment = str_replace(':)','<mark>:)</mark>',$comment);
$comment = str_replace('&lt;/mark&gt;','</mark>',$comment);
$comment = str_replace('@','<mark>@</mark>',$comment);
//https://stackoverflow.com/questions/14399246/preg-replace-url-with-links-mime-types-failure (corrected at regex101.com)
$comment = preg_replace('|([\w\d]*)\s?(https?://([\d\w\.-]+\.[\w\.]{2,6})[^\s\]\[\<\>]*/?)|i', '$1 <a href="$2" target="_blank">$2</a>', $comment);
return $comment;}

$y = "Aera23";

#Show Colour choice
if($_GET['a']==""){
if($_POST['col']==""){
$cb = (mt_rand() % 11);
$cf = ["#cc5522",'#ffffff','#ff3344',"#11ffee","#eeaa00", "#00dfdf", "#ff8800", "#ffff22","#00ff00","#0088ff","#cc00cc"];$cfi = $cf[$cb];}
else{$cfi = $_POST['col'];}

#Basics
$comment = $_POST["comment"];
function mydump(){$x = fopen("0.txt", "a+"); fwrite($x, $_POST['name'] . $_POST['comment']);fclose($x);}

#Prevents empty comments
if($_POST["comment"]==""){
echo '<html lang="en"><title> \'Zone\''. $q ."</title>";}

#If there's a name to the message
elseif($_POST["name"]!="" && $_POST['comment']!=""){ 
$cf = fopen("prvt.txt", "a+") or die("The page isn't working due to a server error. ");
$txt = '<!--'.date("m-jS H:i:s").'--><span style="color:' . htmlspecialchars($_POST["col"]) .';font-size:'.($em ?: '1').'em">'.process($_POST["name"]) . " - " . process($_POST["comment"]) . "</span>

";
fwrite($cf, $txt);fclose($cf);
echo '<html lang="en"><title>'. $y . '</title>';}

# Otherwise
elseif($comment!=""){ $cf = fopen("prvt.txt", "a+") or die("The comments aren't working due to a server error. ");
$txt = '<!--'.date("m-jS H:i:s").'--><span style="color:' . htmlspecialchars($_POST["col"]) .';">'. "Someone said: " . process($_POST["comment"]) . "</span>

";fwrite($cf, $txt);fclose($cf);}

echo '<html lang="en"><title>'.$y.'</title>';
if($_REQUEST['lines']==""){$l = 9;}else{$l = htmlspecialchars($_REQUEST['lines']);}
$token = crc32(((time()%200000)*7).$salt);
# light theme: bg #ff9, txt #930
echo '<meta name="viewport" content="width=device-width, initial-scale=1"><style>.b{background:#000}html{font-family:corbel; background:#000; color:#8f8;margin:1em}pre{font-family:calibri;}a{color:#0f8}
.int{padding:0.5em;background:#cfb}.int:hover{padding:0.35em; background:#aaf;}
.a1{font-size:20px}.a2{font-size:24px}.a3{font-size:28px}.a4{font-size:32px}input{border:3px solid #000}
</style><div class="b"><h3 style="padding-bottom:0px" id="#top"><span style="color:#FFF712;">A</span><span style="color:#DDF826;">e</span><span style="color:#BBF93A;">r</span><span style="color:#99FA4E;">a</span><span style="color:#77FB63;">2</span><span style="color:#55FC77;">3</span><span style="color:#33FD8B;">\'</span><span style="color:#11FE9F;">s</span> <span style="color:#0FB6BB;">z</span><span style="color:#0D91C8;">o</span><span style="color:#0C6DD6;">n</span><span style="color:#0A48E3;">e</span> <span style="color:#0924F1;">:)</span><span style="color:#ff5500"></span> <br>Score: '.(0.5+(count(file("prvt.txt")))/2).' </h3>
<iframe style="float:right;width:33%;height:45%" src="28.php?b=b&refresh='.$_REQUEST['refresh'].'"></iframe>
<span style="color:#6e6"><a href="68.php">Slower refresh.</a> | Enable autoplay for notifications.</span>
<b><p style="color:#fff">Welcome. Bookmark, and refresh if connection times out. |<a href="X-ncs11hrs.mp3" style="color:#ff8" target="_blank">Music</a>| If inactive, feel free to try later / leave a message.</p><a href="files.php" target="aa">Files 👀</a> | <a href="colour.php" target="aa">Latency 👀</a> | <a href="http://25835.rf.gd/wiki/" target="aa">My PmWiki (External) 👀</a><br><br></b>

<style>input{padding:0.5em;background:#ccf;placeholder:#02f}input:hover{padding:0.35em; background:#c9f;}</style>
<div style="color:#c09">
<form action="" target="_self" method="post">
   Colour:
<input type="color" name="col" value="'.$cfi.'" style="padding:0em;">
  ...
  <input type="text" class="int" name="name" size="15" value="'. htmlspecialchars($_REQUEST["name"]) .'" placeholder="Nick"><br>
<input type="text" class="int" name="comment" size="34" placeholder="message"><br>
<span>Emphasis (1-2):</span>
<input type="text" class="int" name="e" size="3" value="'. min(htmlspecialchars($_REQUEST['e']),2).'" max="2">
<span>Refresh (s)</span>
<input type="text" class="int" name="refresh" size="3" value="'. htmlspecialchars($_REQUEST['refresh']).'" min="2">
  <span>Show <i>x</i> messages:</span>
  <input type="number" class="int" name="lines" size="2" width="3em" value="'. htmlspecialchars($l) . '" max="300">
  <input type="hidden" name="t" value="'.((time()%200000)*7).'">
  <input type="hidden" name="q" value="'.$token.'">
';   if($_COOKIE[$cookie]!=""){echo '<input type="checkbox" name="del" value="n">';} echo'
  <input type="submit" class="int" value="Send">
</form></div>
<p style="color:#f10">Loaded: '.date("H:i:s").'</p>
</fieldset><iframe name="aa" src="/28.php?a=a&m='. $l .'&name='.htmlspecialchars($_REQUEST['name']).'&refresh='.$_REQUEST['refresh'].'" width="100%" height="55%"></iframe name="aa"></html>';
exit();}

else{function pt($a,$i){
  if($_COOKIE[$cookie]!="" && $i%2==1){echo '<form action="" method="post"><button name="del" value="'.$i.'">'.$i.'</button></form>';}
  $a = str_replace("<!--","<i>",$a);$a = str_replace("-->","</i> |",$a);return $a;}
$sec = $_REQUEST['refresh'] ?: '4';
echo'<!DOCTYPE html><html lang="en">';
$time = crc32(file_get_contents("prvt.txt"));
echo '<title>'. $y .'</title><meta http-equiv="refresh" content="'.$sec.' ?a=a&t='.$time.'&name='.htmlspecialchars($_REQUEST['name']).'&m='.htmlspecialchars($_REQUEST['lines']).'"><style>pre{color:#ff8;font-family:corbel;background:#000;white-space: pre-wrap;       
white-space: -moz-pre-wrap;  /* Moz, since 1999 */}a{color:#0f0;}form{display:inline}</style>';
if($_GET['t'] != $time && $_GET['t']!=""){echo '<audio src="X-guitar.mp3" controls autoplay></audio>';/*<mark>Sound Effect by <a href="https://pixabay.com/users/irinairinafomicheva-25140203/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=music&amp;utm_content=13692">irinairinafomicheva</a> from <a href="https://pixabay.com//?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=music&amp;utm_content=13692">Pixabay</a>*/}
else{echo " ";}

if(isset($_REQUEST['name'])){file_put_contents($_REQUEST['name'].'.visit','|<span class="x">'.date("m-jS H:i:</\s\p\a\\n>s"),FILE_APPEND);}

echo '<pre>';
#Message count and retrieval
$b = (intval($_REQUEST['m']) * 2) ?: 18;
$file = file("prvt.txt");
for ($i = count($file) - 1; $i >= max(0, count($file)-$b); $i--) {echo pt($file[$i],$i);}}
?></pre></div></html>
