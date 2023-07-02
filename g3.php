<?php
include('data.php');
//Redirect if cookie exists, and is not hijacked
if($_COOKIE['o']<time() && crc32(base64_encode($secret.$_SERVER['REMOTE_ADDR'].$_COOKIE['o']))==$_COOKIE['crc']){
  if($_REQUEST['next']==""){echo"<meta http-equiv='refresh' content='0.1 28.php'/>";exit;}
  else{
  echo"<meta http-equiv='refresh' content='0.1 ".$_REQUEST['next']."'/>";exit;
  }
}

else{echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
if($_POST['id']!=""){$e = file_get_contents($_POST['id'].'eep.txt');}
if($_POST['ii']!="" and $_POST['ii']==$e)
{setcookie("o", time(), time()+36000);setcookie("crc", crc32(base64_encode($secret.$_SERVER['REMOTE_ADDR'].time())), time()+36000);
unlink($_POST['id'].'eep.txt');
if($_REQUEST['next']==""){echo"<meta http-equiv='refresh' content='0.1 28.php'/>";exit;}
else{echo"<meta http-equiv='refresh' content='0.1 ".$_POST['next']."'/>";exit;}}
}

$a = base_convert(mt_rand(1296,46655),10,36);
$text = ['Out of 4 characters. Type the last 3; ','Only type the last 3 letters and numbers ','Type the random characters, ignoring the 1<sup>st</sub> one: ','Pls recall the last three characters: ','Last three digits please - '];

echo'<!DOCTYPE html><html style="background:#000"><h1 id="a" style="margin:2em;color:#9f9;font-family:sans-serif;border:2px solid #bbb;border-radius:5px;padding:0.2em;width:22em">';
$z = ['<!---->','&#32;','<!--_-->','&#20;',' ','&#31;'];
echo $text[mt_rand(0,4)];
echo base_convert(mt_rand(1,36),10,36).$a.$z[mt_rand(0,5)].':';
$r = mt_rand(0,99);
$old = glob('*eep*');foreach($old as $eep){if(170+filectime($eep)<time()){unlink($eep);}}

file_put_contents($r.'eep.txt',$a);
echo'<form action="g3.php" method="post">
<input name="ii" style="padding:0.3em" size="4"><input type="hidden" name="name" value="'.$_REQUEST['name'].'"><input type="hidden" name="comment" value="'.$_POST['comment'].'"><input type="hidden" name="col" value="'.$_POST['col'].'"><input name="id" type="hidden" value="'.$r.'"><input name="next" type="hidden" value="'.($_GET['next'] ?: '28.php').'"></form>
<p style="font-size:15px">Cookies should be enabled.</p>';
?></html>
