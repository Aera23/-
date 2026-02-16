<?php
$oo=explode('|',file_get_contents("config.txt"));
$c=$oo[4];
function db($file){if(file_exists($file)){return file($file);}return[''];}
function safe($e){
if(file_exists("1699686263.old.old")){
$file=file("1699686263.old.old");foreach($file as $filter){$f=explode("|",str_replace("\n","",$filter));$ee[]=$f[0]??'&27;';$xx[]=substr($f[1]??'&27;',0,-1);}}
if(isset($ee)){$av=0;
foreach($ee as $ees){if(strlen($e)===strlen($ees)){$e=str_replace($ees,$xx[$av],$e);}$av+=1;}
}return trim($e);}

function gt(){$v='AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';$l='qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq';
echo'<audio autoplay src="data:audio/mpeg;base64,SUQzBABAAAAAZQAAAAwBIAUKOn0nKUNPTU0AAAALAAAAAAAAAEd1aXRhckNPTU0AAAALAAAAWFhYAEd1aXRhclRZRVIAAAAFAAAAMjAyNFREUkMAAAAFAAAAMjAyNFRQRTEAAAAHAAAAQWVyYTIz//uQxAAAAAAAAAAAAAAAAAAAAAAAWGluZwAAAA8AAAAMAAAJqgBaWlpaWlpaWnFxcXFxcXFxgYGBgYGBgYGRkZGRkZGRkZGioqKioqKioq6urq6urq6uv7+/v7+/v7+/zMzMzMzMzMzZ2dnZ2dnZ2ebm5ubm5ubm5vPz8/Pz8/Pz//////////8AAAAUTEFNRTMuMTAwBJgAAAAAAAAAABUgJALeQQABpAAACao8wpc'.$v.$v.$v.$v.$v.$v.'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//vAxAAABhABX9QAAALzqC3/MYAACgk0NmaJpGyJ6yjhObg+H1AgMBDg+H/4fgg74PxAGCgIO/znE4fy7//vKBjDETvB+aiIh9eVlXZUS2NtOJNSABOiWkMLkLaDGwqOEo9tyR5ddk4FUVZNUfpvGiX2dN1IBYskduBnCX4xJRuB45L5JD8YmoPa7cjklf6JNc4/j9xqBLDY29gz4xBE3ypV1GJVKI7ZlsxIoxS01PHpXO6q0l+9SVqaX49tR6U2Z+I4WIlQVaSM2rdmmsapInbjVa/Ys1btSTxrvML2Nyx2phR/Y+vqrbyvynCrZyz3Wl3zNBZq442dShMLNxWxrspiira8dWZBEFIoqBkUDroIPHI8SBd0gnHjvUpxXhfLzql5lNpzKXkbtF8+jRvMLospUvWr0lKmU8yrSFaLajWrmzXU6fX0of+tdvetPHdSrWJ5syUVmEGEk0+HR/I3hZEsFuh78JpzkQrUxK3tStQ1rWlluY2UU88RJKXaQKp3ki++hO9jUen/2b3aqsbPdiYEAkkucAoSgxjw4KiXILQitvyKf6IDEU3m95K4muWm96Pau3X7Xr5atT9cZF7DyEryQtzpFNbte7mkdiAklJQDnch/TM20dYkYlUPdjqn7xTRq72rRJqtFWp50ile0ktbmOllztG57ELud7urn3pU3AQASCdAUEFEVKNnHMw0W+kHTvDdpDe9qF3OJqXsIlLn0V3MrXfRW44wuhV7dTtCujLlmZzDJfEwQeiNpGWFdIgmIgh5Yzof3ko6rTa+8TuaRWrorv1Lu672FlKed1Kfp1t+EeEASEk4AIjMtSDhsQAb2HOMPA6AoSvKXuStV9CFPPsQpTzzELuYTUva1e+0puelXvuSpoxgwkpAA+L6Yuh3ODwz4PfQh5ILJHZRVN4ZQw81CVT2XU9yarmpRzjS3k13NbXX23ng3NAIKdoANSMP/3KBXEDRUwND/+0DE7AAJ6S9v/MOAAOgFrnzDjYDM+ICHKypxqSq7mMQq5tCnvampzCKVb2ld0mpd7KtjLiidiAhN3gCB7AQaLztDQ4C5Ybr7JSMte1r1st3P3Lcsfu5OCavl5OL9T3/0fvemHa6qxZ6WJwMAEleAJMCvKXigAvQlsrX36pG/jhb7r3OWtRS8Ms/UpeWv3PXvx+de4/WGP2QquxhhfFccpUBvou0HuQ1UrNTos6X0R+45MhS3fv/7IMT3gAdQyXHkrEUA1gtufPSJFL8UvLU5OpKcvDNz/49d49W26vW9hWYzAhJ7gBtKBl6QspUxgXoipA8La8bQX0qVc9KFz7ULVdTU96E7jxMtukVKsZRi3bmisQoJ2p0RvGpyIPcCOnT3QcrqkgDx5aDlbjrUpXPalXtSq9xJC9v/+yDE9gBGcCdx57CkoMIMbrjGiJRFt7xVJzICC5gAED0DlsdWL8Rc67zwqftDLYwiWWt7EoXcyXVc1C73kl9iUy1S8E6CBLclAHxPilVYVuslplQ9JdbmpQu97S8cfpKKto3ualSGmJUHERIUoAAxQwNJlnvSUakhA7zbOBPg3INJ//sgxPqABlQtc+YU6GDHCC389giUjz7yVrk3vX3gnWtnzr3z4StwyGqkKBe1gk8aEb0VQ6YCR6HAh0sAcEs9ByinnWEkqe7KquYla7ia1wSodFUwEhOgAA+kgPZthWwUsPwp7xJT3EVqW+hCrWILKv0Lc8il2aHNFUQIL1EPLJU4h//7EMT+gAZYMW3mJOggzZktvLCOdcY2YB8aRA1I3aXniJbe1CVT2tVzUFlucRQpTEFNRTMuMTAwVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVdaJH2wSoAABpQeheWRPGjVTcij76GBL//sgxPSARfTJa+WEU6jCmy24wIo9vHmzSZPJu+L3/GnfikxBTUUzLjEwMK'.$l.''.$l.'qqqqqv/7EMT6gEYkNW3nrKZgqges/MSI2K'.$l.''.$l.'//sQxPYARVwtZeUkQ2CUBKv8dhxc'.$l.''.$l.'r/+xDE94BFfHVZ56RIiKgHq7zDCRC'.$l.''.$l.'v/7EMT2AES4LV3gMKDgnAaqvNWcWK'.$l.''.$l.'//sQxOgDxHQvUaSBJCgAAD/AAAAE'.$l.''.$l.'o=">
</audio>';}
function crc(){return 100+($_COOKIE['crc']%900);}
function tor(){if(str_replace('.onion','',$_SERVER['HTTP_HOST']!=$_SERVER['HTTP_HOST']){return 0;}return 1;}

if(is_dir('Music')){$names=glob("*.visit.cache");
file_put_contents("crc.txt",crc().date(" jS H:i:s")."\n",8);}
if(empty($names)||count($names)<6){$names=glob("{,.}*.visit",GLOB_BRACE);}

$b=0;
foreach($names as $name){$l=filemtime($name);
if(($l+($oo[8]??30))>time()){$b+=1;}}
$names=['cleared'];

$sec=htmlspecialchars($_COOKIE['refresh']??'4');
echo'<!DOCTYPE html><html><meta name="viewport" content="width=device-width, initial-scale=1"><br>';
function p($file,$b){
for($i=count($file)-1;$i>=max(0,count($file)-$b);$i--){
#PM/CRC checks
if(strpos($file[$i],($_COOKIE['ign']??'bitcoin'))!==false){$b+=2;$i-=2;continue;}
if(!preg_match("/\/pm ([0-9]{3})([0-9]{3})-\^!/i",strtolower($file[$i]),$matches)){
if(strlen($file[$i])>3){return $i;}}
else{if($matches[1]==crc()||$matches[2]==crc()){return $i;}else{$b+=2;}}}}
 $file=file("1id8sjl.txt");$time=p($file,$c)%1000;
$e='><mark class="ref" style="background:#000;color:#0f0;margin-left:1em">'.(time()%60).'</mark>';
#&m='.htmlspecialchars(($_REQUEST['m']??'0')).'
$cfi=htmlspecialchars($_COOKIE['col']);
echo'<title>Ping Only mode</title><style>mark{border-radius:15px;padding:0.2em;margin:0.3em;font-size:20px}html,input{background:#000;background:#000}input:hover{border:3px solid #0a0;}input{color:#0f0;border-radius:8px;padding:0.4em;margin:0.5em;border:3px solid #040;font-size:18px !important}</style'.$e;
#Audio ping, message retrieval
if(isset($_GET['t'])&&$_GET['t']!=$time){$e='VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV';
$v='AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';echo'<audio autobuffer="autobuffer" autoplay="autoplay"><source src="data:audio/mp3;base64,SUQzAwAAAAAAZVRQRTEAAAAHAAAAQWVyYTIzVFlFUgAAAAUAAAAyMDIzVERSQwAAAAUAAAAyMDIzQ09NTQAAABEAAAAAAAAAbGlrZSBkYXkgMTc4Q09NTQAAABEAAABYWFgAbGlrZSBkYXkgMTc4//uQxAAAAAAAAAAAAAAAAAAAAAAAWGluZwAAAA8AAAAVAAAMGQAxMTExPj4+Pj5ISEhISFJSUlJSW1tbW2VlZWVlb29vb295eXl5eYODg4ONjY2NjZqampqapKSkpKStra2turq6urrExMTExM7Ozs7O2NjY2OLi4uLi7Ozs7Oz29vb29v////8AAAA8TEFNRTMuMTAwBK8AAAAAAAAAABUgJAJUQQABzAAADBmTpZS3'.$v.$v.$v.$v.$v.$v.$v.'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'.$e.'//sQxPqARIgdO+xh4OCPg+d8/Twc'.$e.'VVVVVVVVVVVVVVVVVVX/+xDE/4BFVH817gFM4KcP5j3AKZx'.$e.'VVVVVVVVVVVVVVVVVVf/7EMT+gMXofy+uAazgnxAmecApnF'.$e.'VVVVVVVVVVVVVVVVVV//sQxPuAxSBHNe3hpKCHCOa5sB2c'.$e.'VVVVVVVVVVVVVVVVVVX/+xDE/4BGuDsz7T2IKLoFJHT3mJ'.$e.'VVVVVVVVVVVVVVVVVVVQ==" /></audio>
<mark>'.$time.'</mark><meta http-equiv="refresh" content="'.tor().' 28.php">';}
else{
if(isset($_GET['o'])&&$_GET['o']!=$b){gt();}
echo'<mark style="background:#0af">'.$time.'</mark><meta http-equiv="refresh" content="'.$sec.' ?t='.$time.'&o='.$b.'">';}
echo'<form action="28.php" method="get" style="display:inline"><input type="submit" name="e" value="Normal Mode '.$b.'"></form></html>';

if(isset($_COOKIE['name'])){if(isset($_COOKIE['9u9dyi'])){$v='*';}else{$v='';}$output='|<span style="color:'.htmlspecialchars($_COOKIE['col']).'">'.date("m-jS H:i:</\s\p\a\\n>s$v");
$log=safe(strtr($_COOKIE['name'],":?/\\*|<>  '","__________")).'.visit';
file_put_contents($log,$output,FILE_APPEND);
#Cache score
if(is_dir('Music')){
if(!file_exists(''.$log.'.cache')){$score=substr_count(file_get_contents($log),'|');}
else{$score=intval(explode('|',file_get_contents(''.$log.'.cache'))[0])+1;}
file_put_contents(''.$log.'.cache',$score.$output);}
}
?>
