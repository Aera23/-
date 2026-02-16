<?php
#For anonhosting and other platforms if you have extracted --main.zip
if(isset($_GET['9u9dyi'])&&$_GET['9u9dyi']=="t"){
unlink('move.php');
$f=glob('*');
foreach($f as $g){rename($g,'../'.$g) or exit('err: '.$g);echo $g.'<br>';unlink($g);}
rmdir('../--main');
echo date("Y-m-d H:i:s");}
?>
