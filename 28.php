
<?php
if($_COOKIE['o']<time() && crc32(base64_encode($_SERVER['REMOTE_ADDR'].$_COOKIE['o']))==$_COOKIE['crc']){}
else{header('Location: g3.php?next=28.php&name='.$_REQUEST['name'].'&comment='.$_REQUEST['name']);exit;}
date_default_timezone_set('Australia/Adelaide');
if($_POST['mono']!=""){
if($_COOKIE['mono']==$_POST['mono']){$mono="x";}
setcookie('mono',$_POST['mono'],time()+19999);}

function process($comment)
{$comment = htmlspecialchars($comment);
$comment = str_replace('&lt;i&gt;','<i>',$comment);
$comment = str_replace('&lt;b&gt;','<b>',$comment);
$comment = str_replace('&lt;u&gt;','<u>',$comment);
$comment = str_replace('&lt;s&gt;','<s>',$comment);
$comment = str_replace('&lt;/i&gt;','</i>',$comment);
$comment = str_replace('&lt;/b&gt;','</b>',$comment);
$comment = str_replace('&lt;/u&gt;','</u>',$comment);
$comment = str_replace('&lt;/s&gt;','</s>',$comment);
return $comment;}

$y = "Aera23";

#Show Colour choice
if($_GET['a']==""){
$cb = (mt_rand() % 8);
$cf = ["#cc5522",'#ffffff','#ff3344',"#88ffee","#eeaa00", "#00dfdf", "#dfffdf", "#ffff44"];$cfi = $cf[$cb];
if($_POST['col']){$cfi = $_POST['col'];}

#Basics
$comment = $_POST["comment"];
function mydump(){$x = fopen("0.txt", "a+"); fwrite($x, $_POST['name'] . $_POST['comment']);fclose($x);}

#Prevents empty comments
if($_POST["comment"]==""){
echo '<html lang="en"><title> \'Zone\''. $q ."</title>";}

#If there's a name to the message
elseif($_POST["name"]!="" && $_POST['comment']!="" && $mono==""){ 
$cf = fopen("prvt.txt", "a+") or die("The page isn't working due to a server error. ");
$txt = '<!--'.date("m-jS H:i:s").'--><span style="color:' . $_POST["col"] .';font-size:'.$_REQUEST['e'].'em">'.process($_POST["name"]) . " - " . process($_POST["comment"]) . "</span>

";
fwrite($cf, $txt);fclose($cf);
echo '<html lang="en"><title>'. $y . '</title>';}

# Otherwise
elseif($comment!="" && $mono==""){ $cf = fopen("prvt.txt", "a+") or die("The comments aren't working due to a server error. ");
$txt = '<!--'.date("m-jS H:i:s").'--><span style="color:' . $_POST["col"] .';">'. "Someone said: " . process($_POST["comment"]) . "</span>

";fwrite($cf, $txt);fclose($cf);}

echo '<html lang="en"><title>'.$y.'</title>';
if($_POST['lines']=""){$l = 5;}else{$l = $_REQUEST['lines'];}

# light theme: bg #ff9, txt #930
echo '<meta name="viewport" content="width=device-width, initial-scale=1"><style>.b{background:#000}html{font-family:corbel; background:#000; color:#8f8;margin:1em}pre{font-family:calibri;}a{color:#0f8}
.int{padding:0.5em;background:#cfb}.int:hover{padding:0.35em; background:#aaf;}
.a1{font-size:20px}.a2{font-size:24px}.a3{font-size:28px}.a4{font-size:32px}input{border:3px solid #000}
</style><div class="b"><h3 style="padding-bottom:0px" id="#top"><span style="color:#FFF712;">A</span><span style="color:#DDF826;">e</span><span style="color:#BBF93A;">r</span><span style="color:#99FA4E;">a</span><span style="color:#77FB63;">2</span><span style="color:#55FC77;">3</span><span style="color:#33FD8B;">\'</span><span style="color:#11FE9F;">s</span> <span style="color:#0FB6BB;">z</span><span style="color:#0D91C8;">o</span><span style="color:#0C6DD6;">n</span><span style="color:#0A48E3;">e</span> <span style="color:#0924F1;">:)</span> <br>Score: '.date("s").' </h3>
<b><p style="color:#fff">Welcome. Bookmark, so you won\'t lose the page :) |<a href="[000904].mp3" style="color:#ff8" target="_blank">Music</a>| If the chat\'s inactive, feel free to try later / leave a message.</p><a href="files.php" target="aa">File upload 👀</a> | <a href="colour.php" target="aa">Latency 👀</a> | <a href="i.php" target="aa">Imaginary numbers 👀</a><br><br></b>

<style>input{padding:0.5em;background:#ccf}input:hover{padding:0.35em; background:#c9f;}</style>
<div style="color:#c09">
<form action="" target="_self" method="post">
   Colour:
<input type="color" name="col" value="'.$cfi.'" style="padding:0em;">
  ...
  <input type="text" class="int" name="name" size="15" value="'. $_REQUEST["name"] .'" placeholder="Nick"><br>
  ...
<input type="text" class="int" name="comment" size="50" placeholder="message"><br>
<span>Emphasis (1-2):</span>
<input type="text" class="int" name="e" size="3" value="'. $_REQUEST['e'].'" max="300">
  <!--p>Show <i>x</i> messages every <i>x</i> seconds:</p>
  <input type="number" class="int" name="lines" size="2" width="3em" value="'. $l . '" max="300"-->
  <input name="mono" type="hidden" value="'.microtime().'">
  <input type="submit" class="int" value="Send">
</form></div>
<p style="color:#f10">Loaded: '.date("H:i:s").'</p>
</fieldset><iframe name="aa" src="/28.php?a=a&m='. $l .'" width="100%" height="55%"></iframe name="aa"></html>';
exit;}

else{function pt($a)
{$a = str_replace("<!--","<i>",$a);$a = str_replace("-->","</i> |",$a);return $a;}
$time = crc32(file_get_contents("t.txt"));$file = file("prvt.txt");
for ($i = max(0, count($file)-1); $i < count($file); $i++) {$y.= $file[$i];}
echo '<!DOCTYPE html><html lang="en"><head><title>'. $y .'</title><meta http-equiv="refresh" content="4 ?a=a&t='.$time.'"><style>pre{color:#ff8;font-family:corbel;background:#000;white-space: pre-wrap;       
white-space: -moz-pre-wrap;  /* Moz, since 1999 */}a{color:#0f0;}</style></head>';
if($_GET['t'] != $time && $_GET['t']!=""){echo '<p>:)</p>';}
else{echo " ";}
echo '<pre>';
#Message count and retrieval
if($_GET['m']){$b = ($_GET['m'] * 2);}
else{$b = 14;}
$file = file("prvt.txt");
for ($i = max(0, count($file)-$b); $i < count($file); $i++) {echo pt($file[$i]);}}
?></pre></div></html>
