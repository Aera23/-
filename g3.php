<?php
include('28.php');
//Redirect if cookie exists, and is not hijacked
if(($_COOKIE['o']<time() && crc32(base64_encode($_SERVER['REMOTE_ADDR'].$_COOKIE['o']))==$_COOKIE['crc'])){
  echo"<meta http-equiv='refresh' content='0.1 ".($_REQUEST['next'] ?: '28.php')."'/>";exit;
}

if($_POST['vv']!=""){$e = file_get_contents($_POST['vv'].'eep.txt');}
if($_POST['qq']!="" and $_POST['qq']==$e)
{setcookie("o", time(), time()+3600);setcookie("crc", crc32(base64_encode($salt.$_SERVER['REMOTE_ADDR'].time())), time()+3600);
echo"<meta http-equiv='refresh' content='0.1 ".($_REQUEST['next'] ?: '28.php')."'/>";unlink($_POST['vv'].'eep.txt');
exit;}
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo'<!DOCTYPE html><html style="background:#000"><h1 id="a" style="margin:2em;color:#fff;font-family:sans-serif;border:2px solid #bbb;border-radius:5px;padding:0.2em;width:6em">Type ';
$a = base_convert(mt_rand(1296,46655),10,36); echo strrev($a).' below. <mark style="font-size:18px;color:#000">After submitting, refresh</span>:';
$r = mt_rand(0,99);
$old = glob('*eep*');foreach($old as $eep){if(170+filectime($eep)<time()){unlink($eep);}}

file_put_contents($r.'eep.txt',strrev($a));
echo'<form action="g3.php" method="post">
<input name="qq" style="padding:0.3em" size="4"><input type="hidden" name="name" value="'.$_REQUEST['name'].'"><input type="hidden" name="comment" value="'.$_POST['comment'].'"><input type="hidden" name="col" value="'.$_POST['col'].'"><input name="vv" type="hidden" value="'.$r.'"><input name="next" type="hidden" value="'.($_REQUEST['next'] ?: '28.php').'"></form>
<p style="font-size:15px">Cookies should be enabled.</p>';
?></html>
