<?php
$phrase=1;
include_once('g3.php');
$e="";
$safe=str_replace(' ','_',substr($_SESSION['safe']??'',0,50));
if(isset($_REQUEST['nq'])&&isset($_REQUEST['len'])){
$col='<b style="color:'.htmlspecialchars($_COOKIE['col']??'#ddffdd').'">*</b>';
if(file_exists("te.txt")){$messages=file("te.txt");}else{$messages=[''];}
$count=count($messages);$message='';
for($i=max(0,$count-4);$i<count($messages);$i++){$message.=$messages[$i];}
if(empty($_REQUEST['test'])){

if(isset($_REQUEST['nq'])){$safe=$safe;}
else{$safe='';}

$nick=highlighter('@'.htmlspecialchars($safe));
$message=preg_replace('|'.preg_quote($nick).' \[(.){1,3}\]|',str_replace('*','^'."\n",$col),$message);
$message.=$nick.' ['.intval($_REQUEST['len'])."]\n ";}
else{$message.=$col;$message=str_replace(htmlspecialchars($safe),'',$message);}
file_put_contents("te.txt",preg_replace('|(<b style(.){9,}<\/b>){6}|',"\n",$message));
}
if(file_exists("te.txt")){
$events=file("te.txt");
$count=count($events);$event='';
for($i=0;$i<$count;$i++){$event.=$events[$i]."\n";}
if(!empty($_COOKIE['ign'])){echo str_replace(htmlspecialchars($_COOKIE['ign']),'',$event);}else{echo $event;}
}else{echo '*';}
?>