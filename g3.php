<?php
session_name('temptime');
$time=strval(time());
session_id($time.'x'.crc32($time));
if(session_status() !== PHP_SESSION_ACTIVE){session_start();}

function npr($e){#Nickprotect
if(file_exists("1699686263.old.old")){
$file=file("1699686263.old.old");foreach($file as $filter){$f=explode("|",str_replace("\n","",$filter));$ee[]=$f[0]??'&27;';$xx[]=substr($f[1]??'&27;',0,-1);}}

if(!file_exists('config.txt')){include('setup.php');exit;}
$hpu='unlock.txt';
if(!isset($config)){$config=explode("|",file_get_contents("config.txt"));}
if(empty($_COOKIE['temptime'])&&!is_dir('/home/peplive')){setcookie("temptime",time().'x'.crc32(time()),time()+3600);$_COOKIE['temptime']=time().'x'.crc32(time());}
if(str_contains($_SERVER['REQUEST_URI'],"/g3.php/")){exit('<meta http-equiv="refresh" content="0 /g3.php"/><mark style="font-size:1.2em;padding:0.3em">Auto redirect</mark>');}
#Common functions
if(isset($ee)&&isset($e)){$av=0;
foreach($ee as $ees){if(strlen($e)===strlen($ees)){$e=str_replace($ees,$xx[$av],$e);}$av+=1;}
}return trim($e);}
function highlighter($e){$e=str_replace('&#039;',chr(31),$e);$e=str_replace('@','@&&&',$e);$pa=explode("@",$e);$c='';
foreach($pa as $part){
 $a=str_replace('&&&','@',$part);
 preg_match('/@([^\s:'.chr(31).'?\/*|<>.,\(\)]*)\s?/',$a,$ma);
if(!empty($ma[1])){
if(file_exists(''.$ma[1].'.visit.cache')){
 $n=explode("|",file_get_contents(''.$ma[1].'.visit.cache'))[1];}
elseif(file_exists($ma[1].'.visit')){
 $n=explode("|",file_get_contents($ma[1].'.visit'));$hc=count($n);$n=$n[$hc-1];
 file_put_contents(''.$ma[1].'.visit.cache',$hc.'|'.$n);
 touch(''.$ma[1].'.visit.cache',filemtime($log),time());clearstatcache();
}
if(isset($n)){$p=strpos($n,"color:");
 $c.=str_replace('@'.$ma[1],"@<b style='color:".substr($n,$p+6,7).";'>".$ma[1]."</b>",$a);}
else{$c.=str_replace('@'.$ma[1],"@<b>".$ma[1]."</b>",$a);}}
 else{$c.=$a;}}
return str_replace(chr(31),'&#039;',$c);}
if(!function_exists('roulette')){function roulette($obj){
$obj = str_replace("/","\\/",$obj);
 $strs=explode("\\",$obj);
 if(count($strs)==1){return $obj;}$obj='';
 foreach($strs as $str){
 if(str_contains($str,"/sym")){$aa='&#'.mt_rand(9312,11263).';&#'.mt_rand(9312,11263).';&#'.mt_rand(9312,11263).';&#'.mt_rand(9312,11263).';';
 $str=str_replace("/symbols",$aa,$str);}
 $bb='<mark>&#98'.mt_rand(56,61).';</mark>';
 $dd=mt_rand(100,999);
 $cc='<mark style="background:#'.$dd.';color:#'.$dd.';border-radius:0px">‎____</mark>';
 $str=str_replace("/dice",$bb,$str);
 $str=str_replace("/wow",$cc,$str);
 $str=str_replace("/fc",$dd,$str);
 $obj.=$str;}
return str_replace("/bk","\\",$obj);}}
function deeplink($e){
$onion='/([2-7a-z]{56}\.onion*)/i';
return str_replace('.online/http://','.online/',str_replace('http://http://','http://',preg_replace($onion,'http://$1',$e)));}
$find=[
'=)','^e^','*u*','♡⋆˙ ⸜(｡˃ ᵕ ˂ )⸝♡','xD',':v',':c','^^','^w^','^u^','^v^','^-^',':&#039;(','o-o','0-0','*v*','*-*','^.^','*.*',':P','(:','):',':|',':D',':3',':(',':)','&lt;b&gt;','&lt;i&gt;','&lt;em&gt;','&lt;strong&gt;','&lt;mark&gt;','&lt;/b&gt;','&lt;/i&gt;','&lt;/em&gt;','&lt;/strong&gt;','&lt;/mark&gt;',':-)','miii',':<}','{>:'];
$change=[
'<mark>=)</mark>','<mark>^e^</mark>','<mark>*u*</mark>','<mark>♡⋆˙ ⸜(｡˃ ᵕ ˂ )⸝♡</mark>','<mark>xD</mark>','<mark>:v</mark>','<mark>:c</mark>','<mark>^^</mark>','<mark>^w^</mark>','<mark>^u^</mark>','<mark>^v^</mark>','<mark>^-^</mark>','<mark>:\'(</mark>','<mark>o-o</mark>','<mark>0-0</mark>','<mark>*v*</mark>','<mark>*-*</mark>','<mark>^.^</mark>','<mark>*.*</mark>','<mark>:P</mark>','<mark>(:</mark>','<mark>):</mark>','<mark>:|</mark>','<mark>:D</mark>','<mark>:3</mark>','<mark>:(</mark>','<mark>:)</mark>','<b>','<i>','<em>','<strong>','<mark style="background:#f44">','</b>','</i>','</em>','</strong>','</mark>','<mark>:-)</mark>',date("B"),'<mark>:<}</mark>','<mark>{>:</mark>'];

function checkuser($n){return true;
 if(file_exists(strtr(npr($n),":?/\\*|<> '","_________").'.visit')){return true;}return false;}

function chkb($n){
$m=$n[1];$end='';$last=substr($m,-1,1);
if(in_array($last,['!','.',',',':'])){$m=substr($m,0,-1);$end=$last;}
$m=htmlspecialchars(urldecode(htmlspecialchars_decode($m)));
$b='<a href="'.$m.'" target="_blank">'.$m.'</a>'.$end;
$ok=substr_count($m,'(')-substr_count($m,')');
 if($ok===0){return $b;}
 elseif($ok==-1){return str_replace(')','',$b).')';}
 else{return $b.'<mark>Inequal brackets</mark>';}}

function process($e,$find,$change,$config)
{if(isset($_POST['name'])&&$e==$_POST['name']){$e=substr($e,0,min(strlen($e),50));}
$e=htmlspecialchars($e);
if(isset($_POST['name'])&&$e==$_POST['name']){$e=npr($e);}
$e=str_replace("\n","<br>",$e);
$e=str_replace("\r","",$e);
$e=substr($e,0,min(strlen($e),($config[1]??500)));
#Complex way of preserving url and highlights
if(str_contains($e,'.on')){$e=deeplink($e);}
$pattern="/http[^\s]*\s?/i";preg_match_all($pattern,$e,$cache);
$e=preg_replace($pattern,'󛱟',$e);
$e=str_ireplace('@Aera23','@aera',$e);
$e=str_replace('@lunchbreak','@<span class="lunchhamstyle1"><span class="lunchbox1"><span class="lunchbreak1">lunchbreak</span></span></span>',$e);
$e=str_replace('@pp','@<font color="#0ff">p</font><font color="#f40">p :clock:</font>',$e);
$e=str_replace('@Beauty','@<a href="#">B</a><font color="#0ff">e</font><font color="#0f0">a</font><font color="#ff0">u</font><font color="#f86">t</font><font color="#f22">y :clock:</font>',$e);
#More complexity near end
$e=str_replace('cafe','café',$e);
$e=str_ireplace('`e','é',$e);
$e=str_ireplace('/chess','https://lichess.org/',$e);
$e=str_ireplace('/pmhelp','/[pm 999 message (to PM user with the leftmost number of 999)] ',$e);
$e=str_ireplace('/back','<span style="animation:AERA 6s infinite !important;">Back</span>',$e);
$e=str_replace('/afk','<span style="animation:AERA 6s infinite !important;">isAFK</span>',$e);
$e=str_replace('era23@','er\\a23@',$e);
$e=str_replace('ra23.n','r\\a23.n',$e);
$e=str_replace('&lt;3','<mark style="background:red;">♥</mark>',$e);
$e=str_replace('aera','<a href="mailto:aera23@protonmail.com">A</a><font color="#0ff">e</font><font color="#0f0">r</font><font color="#ff0">a</font><font color="#f86">2:clock:</font>',$e);
$e=str_replace('nt>23','nt>',$e);
$e=str_replace('/shrug',':shrug:',$e);
$e=str_replace('XD','<mark>XD</mark>',$e);
$e=str_replace('flyp','<font color="#0ff" class="mv">f</font><font color="#0f0" class="mv">l</font><font color="#ff0" class="mv">y</font><font color="#f86" class="mv">p :clock:</font>',$e);
$e=str_replace('priya','<a href="#">p</a><font color="#0ff">r</font><font color="#0f0">i</font><font color="#ff0">y</font><font color="#f86">a :clock:</font>',$e);
$e=str_replace('PROTOTYP','<a href="#">PR</a><font color="#0ff">OT</font><font color="#0f0">OT</font><font color="#ff0">YP</font><font color="#f86">E :clock:</font>',$e);
$e=str_replace('ENCHANTRESS','<a href="#">EN</a><font color="#0ff">CH</font><font color="#0f0">ANT</font><font color="#ff0">RE</font><font color="#f86">SS :clock:</font>',$e);
$e=str_replace('ARIONONE','<a href="#">AR</a><font color="#0ff">IO</font><font color="#0f0">NE</font><font color="#ff0">ON</font><font color="#f86">E :clock:</font>',$e);
if(str_contains($e,':')){
$e=str_replace(':clock:','<font color="#f86"><span class="a0">7</span><span class="a1">6</span><span class="a2">5</span><span class="a3">4</span><span class="a4">3</span><span class="a5">2</span><span class="a6">1</span><span class="a7">0</span><span class="a8">9</span><span class="a9">8</span></font>',$e);
$e=str_replace(':\\','<mark>:\\</mark>',$e);
$e=str_replace(':rainbow:','🟤 🔴 🟠 🟡 🟢 🔵 🟣',$e);
$e=str_ireplace(':o','<mark>:o</mark>',$e);
$e=str_ireplace(':hug:','🫂',$e);$e=str_ireplace(':hugs:','🫂',$e);
$e=str_ireplace(':cat:','🐈',$e);$e=str_ireplace(':dog:','🐕',$e);
$e=str_ireplace(':tree:','🌴',$e);$e=str_ireplace(':music:','🎵',$e);
$e=str_ireplace(':book:','📒',$e);$e=str_ireplace(':shrug:','¯&#92;_(ツ)_/¯',$e);
$e=str_ireplace(':books:','📕 📗 📘 📙',$e);$e=str_ireplace(':fire:','🔥',$e);
$e=str_ireplace(':ice:','🧊',$e);$e=str_ireplace(':cash:','💸',$e);
$e=str_ireplace(':shroom:','🍄',$e);$e=str_ireplace(':duck:','🦆',$e);
$e=str_ireplace(':panda:','🐼',$e);$e=str_ireplace(':fox:','🦊',$e);
$e=str_ireplace(':alien:','👾',$e);$e=str_ireplace(':hug:','🫂',$e);
$e=str_replace(':?','<mark>:?</mark>',$e);
$e=str_ireplace(':kiss:','😗',$e);
$e=str_ireplace(':ice:','🧊',$e);
$e=str_ireplace(':goat:','🐐',$e);$w='<span class="a0">wheee!!</span><span class="a9">wheeee!</span><span class="a8">wheeeee</span>';
$e=str_ireplace(':spacedock:','<span class="a4">8==>__<==8</span><span class="a3">8==>_<==8</span><span class="a2">8==><==8</span><span class="a1">8=~~~~~=8</span>'.$w,$e);
$e=str_ireplace(':docking:','<span class="a4">8==>__(|)</span><span class="a3">8==>_(|)</span><span class="a2">8==>(|)</span><span class="a1">8=~~~~~|)</span>'.$w,$e);
$e=str_ireplace(':lovedock:','<span class="a4">(|)__(|)</span><span class="a3">(|)_(|)</span><span class="a2">(|)(|)</span><span class="a1">(|~~~~|)</span>'.$w,$e);
$e=str_ireplace(':whirl:','<span class="a4">o--0-</span><span class="a3">oo-0-</span><span class="a2">-oo0-</span><span class="a1">--oo0</span><span class="a0">0--oo</span><span class="a9">00-oo</span>',$e);}
/*$e=preg_replace('|([0-9]):3|i', '$1:__3', $e);
$e=preg_replace('|([0-9]):0|i', '$1:__0', $e);
$e=preg_replace('|([0-9])3:|i', '$13``:', $e);
$e=preg_replace('|([0-9])0:|i', '$10``:', $e);
*/$e=str_replace($find,$change,$e);
/*$e=str_replace(':__3',':3',$e);
$e=str_replace(':__0',':0',$e);
$e=str_replace('3``:','3:',$e);
$e=str_replace('0``:','0:',$e);*/
$e=highlighter($e);
$e=str_replace(';)','<mark>;)</mark>',$e);
$e=str_replace('uot<mark>;)</mark>','uot;)',$e);
$e=str_replace('plmm','http://forwhoallvglhpsx6dhycfb4fu4a2lqkvxtwlivruw765qxofyns7wqd.onion/',$e);
$e=str_ireplace('&lt;q&gt;','<q>',$e);
$e=str_ireplace('&lt;/q&gt;','</q>',$e);
$e=str_ireplace('magic','<font color="#0ff">m</font><font color="#0f0">a</font><font color="#ff0">g</font><font color="#f86">i<span class="a0">c</span><span class="a1">C</span><span class="a2">c</span><span class="a3">C</span><span class="a4">c</span><span class="a5">C</span><span class="a6">c</span><span class="a7">C</span><span class="a8">c</span><span class="a9">C</span></font>',$e);
$e=str_replace('!.','!',$e);$e=str_replace('<mark>0.0</mark>.','0.0.',$e);
$e=str_replace('.<mark>0.0</mark>','.0.0',$e);$e=str_replace('<mark>:3</mark>)','<mark>:3)</mark>',$e);
$e=str_replace('&lt;br&gt;','<br>',$e);
$e=str_ireplace('/help','/[dice, chess, symbols, me, pmhelp, wow, shrug, help, fl] &lt;&lt; Current commands',$e);
$e=nl2br($e);
$a=explode('󛱟',$e);#Restores urls
$j=0;$e='';if(!isset($cache[0][0])){$cache[0][0]='';}
foreach($a as $b){$e.=$b.$cache[0][$j];$j+=1;}
#wow this callback took a while!
$e=preg_replace_callback('/(http[^\s]*[^\s])/i', 'chkb', $e);
$e=str_replace('<a href="https" target="_blank">https</a>','https',$e);
#Code highlight
$e=preg_replace('|``([^`]*)``|i','``<span style="font-family:monospace;background:#040;color:#0f0;font-size:1.2em">$1</span>``',$e);
$e=roulette($e);
return trim($e);}
function gt(){$v='AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';$l='qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq';
echo'<audio autoplay src="data:audio/mpeg;base64,SUQzBABAAAAAZQAAAAwBIAUKOn0nKUNPTU0AAAALAAAAAAAAAEd1aXRhckNPTU0AAAALAAAAWFhYAEd1aXRhclRZRVIAAAAFAAAAMjAyNFREUkMAAAAFAAAAMjAyNFRQRTEAAAAHAAAAQWVyYTIz//uQxAAAAAAAAAAAAAAAAAAAAAAAWGluZwAAAA8AAAAMAAAJqgBaWlpaWlpaWnFxcXFxcXFxgYGBgYGBgYGRkZGRkZGRkZGioqKioqKioq6urq6urq6uv7+/v7+/v7+/zMzMzMzMzMzZ2dnZ2dnZ2ebm5ubm5ubm5vPz8/Pz8/Pz//////////8AAAAUTEFNRTMuMTAwBJgAAAAAAAAAABUgJALeQQABpAAACao8wpc'.$v.$v.$v.$v.$v.$v.'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//vAxAAABhABX9QAAALzqC3/MYAACgk0NmaJpGyJ6yjhObg+H1AgMBDg+H/4fgg74PxAGCgIO/znE4fy7//vKBjDETvB+aiIh9eVlXZUS2NtOJNSABOiWkMLkLaDGwqOEo9tyR5ddk4FUVZNUfpvGiX2dN1IBYskduBnCX4xJRuB45L5JD8YmoPa7cjklf6JNc4/j9xqBLDY29gz4xBE3ypV1GJVKI7ZlsxIoxS01PHpXO6q0l+9SVqaX49tR6U2Z+I4WIlQVaSM2rdmmsapInbjVa/Ys1btSTxrvML2Nyx2phR/Y+vqrbyvynCrZyz3Wl3zNBZq442dShMLNxWxrspiira8dWZBEFIoqBkUDroIPHI8SBd0gnHjvUpxXhfLzql5lNpzKXkbtF8+jRvMLospUvWr0lKmU8yrSFaLajWrmzXU6fX0of+tdvetPHdSrWJ5syUVmEGEk0+HR/I3hZEsFuh78JpzkQrUxK3tStQ1rWlluY2UU88RJKXaQKp3ki++hO9jUen/2b3aqsbPdiYEAkkucAoSgxjw4KiXILQitvyKf6IDEU3m95K4muWm96Pau3X7Xr5atT9cZF7DyEryQtzpFNbte7mkdiAklJQDnch/TM20dYkYlUPdjqn7xTRq72rRJqtFWp50ile0ktbmOllztG57ELud7urn3pU3AQASCdAUEFEVKNnHMw0W+kHTvDdpDe9qF3OJqXsIlLn0V3MrXfRW44wuhV7dTtCujLlmZzDJfEwQeiNpGWFdIgmIgh5Yzof3ko6rTa+8TuaRWrorv1Lu672FlKed1Kfp1t+EeEASEk4AIjMtSDhsQAb2HOMPA6AoSvKXuStV9CFPPsQpTzzELuYTUva1e+0puelXvuSpoxgwkpAA+L6Yuh3ODwz4PfQh5ILJHZRVN4ZQw81CVT2XU9yarmpRzjS3k13NbXX23ng3NAIKdoANSMP/3KBXEDRUwND/+0DE7AAJ6S9v/MOAAOgFrnzDjYDM+ICHKypxqSq7mMQq5tCnvampzCKVb2ld0mpd7KtjLiidiAhN3gCB7AQaLztDQ4C5Ybr7JSMte1r1st3P3Lcsfu5OCavl5OL9T3/0fvemHa6qxZ6WJwMAEleAJMCvKXigAvQlsrX36pG/jhb7r3OWtRS8Ms/UpeWv3PXvx+de4/WGP2QquxhhfFccpUBvou0HuQ1UrNTos6X0R+45MhS3fv/7IMT3gAdQyXHkrEUA1gtufPSJFL8UvLU5OpKcvDNz/49d49W26vW9hWYzAhJ7gBtKBl6QspUxgXoipA8La8bQX0qVc9KFz7ULVdTU96E7jxMtukVKsZRi3bmisQoJ2p0RvGpyIPcCOnT3QcrqkgDx5aDlbjrUpXPalXtSq9xJC9v/+yDE9gBGcCdx57CkoMIMbrjGiJRFt7xVJzICC5gAED0DlsdWL8Rc67zwqftDLYwiWWt7EoXcyXVc1C73kl9iUy1S8E6CBLclAHxPilVYVuslplQ9JdbmpQu97S8cfpKKto3ualSGmJUHERIUoAAxQwNJlnvSUakhA7zbOBPg3INJ//sgxPqABlQtc+YU6GDHCC389giUjz7yVrk3vX3gnWtnzr3z4StwyGqkKBe1gk8aEb0VQ6YCR6HAh0sAcEs9ByinnWEkqe7KquYla7ia1wSodFUwEhOgAA+kgPZthWwUsPwp7xJT3EVqW+hCrWILKv0Lc8il2aHNFUQIL1EPLJU4h//7EMT+gAZYMW3mJOggzZktvLCOdcY2YB8aRA1I3aXniJbe1CVT2tVzUFlucRQpTEFNRTMuMTAwVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVdaJH2wSoAABpQeheWRPGjVTcij76GBL//sgxPSARfTJa+WEU6jCmy24wIo9vHmzSZPJu+L3/GnfikxBTUUzLjEwMK'.$l.''.$l.'qqqqqv/7EMT6gEYkNW3nrKZgqges/MSI2K'.$l.''.$l.'//sQxPYARVwtZeUkQ2CUBKv8dhxc'.$l.''.$l.'r/+xDE94BFfHVZ56RIiKgHq7zDCRC'.$l.''.$l.'v/7EMT2AES4LV3gMKDgnAaqvNWcWK'.$l.''.$l.'//sQxOgDxHQvUaSBJCgAAD/AAAAE'.$l.''.$l.'o=">
</audio>';}
function pn(){
echo'<audio autoplay><source src="data:audio/mpeg;base64,SUQzBABAAAABBwAAAAwBIAUOATZ+OlRYWFgAAAAQAAAAQ09NTQBwaXRjaCBkb3duQ09NTQAAAA8AAAAAAAAAcGl0Y2ggZG93bkNPTU0AAAAPAAAAWFhYAHBpdGNoIGRvd25UWUVSAAAABQAAADIwMjVURFJDAAAABQAAADIwMjVUUEUxAAAABwAAAEFlcmEyM//jGMQADFjd5AFMEAGaUpTb2OBLJ9lnHYlk9CBuI8dOOxLBuBMAAKHTs/SCAOiGAIBxQ2vfoscvNKU698Dh6v/8e4V5nHDVLP/jGMQJD1jGYAGdMABvr7OTRuwMAIYglXm9AVAwwWKNOtXdrMyTB8wACASAyLnZijGG4GiQKyMZub+adGdgo6a9Ve8/uu/vmf/jGMQGDUiaWAHdAAFyvyl/cqgx9G7uWDgMAwTGKqRGZHSm2xfmQQ+mF4YGGIPGB4AOXdvXL9q3c3atzKrS0n+qHmOrDQ8BKP/jGMQLDtieTABG+kDie6XgNEQAXGh6p/v4ZvePJi4FhhYEBhiIIwAJdxw4xv99q3BJWLI79P////////IVnuePpUOG56ngtf/jGMQKD0iWTABG/ECUqJLvTACwmYPUG2ouwYa4PxgQALqBmA4AGYEQF6cb5SK9nYqpO51/0idv///+////1Amq6J+xVdIBDf/jGMQHDTiCVAAWfEDTqBv6Yb5mVGteF+YrQEhgFgHmAWACDAJDANAufuUDg+EBA7/3////5j///5s5Iv2ghu487jA0EMxa0P/jGMQNDKCGVAAO+iSMTFSQd1z2qixUkzAQBi3BQJQgAlQiBrAeLn0VNR/////////5Vf/X6///9d1vmGrNO6zMxgEGGgAZkv/jGMQVDMCCVAFcAABQdAEZ10jmFQaWjAIhQPTXhsgAXhr//////////Un//+b+k//1/UwTE7u5KCACCgyrQ03ZBY/6LiEYK//jGMQdFBDOWAGcKAAV02CiBIdsU6FAe3FpsZ/AMXOoueURYd6AfCIEGHhEePfBBQYKAKeV/Sh5eT9dvfw/NXIV///+N4fRs//jGMQHDFi5zAHPAAAF7qz6LRiOYnR1PyUi4rR+lxVLchzM2obGgva4tvMHYl1/EWIix6o8IsRKTEFNRTMuMTAwqqqqqqqqqg==" /></audio>';}
function makesum($j){$e=100+($j%900);return $e;}
function filter($e,$config){unset($config);$config=explode("|",file_get_contents("config.txt"));
if(file_exists($config[10]??'../filter')){$x=explode("|",file_get_contents($config[10]??'../filter'));}
else{$x=[];}
if(preg_match('/([a-zA-Z0-9][ -]){5,}/i',$e,$m)){$e='*FILTER_SPACED_OUT';}
if(preg_match('/[0-9]{10,}/i',$e,$m)&&!str_contains($e,'/')){$e='*FILTER_PHONE_NUM';}
if(preg_match('/([0-9]{3,}[^0-9]){2,}[0-9]{3,}/i',$e,$m)){$e='*FILTER_PHONE_NUM';}
if(preg_match('/(\d+\/)?\d+[A-F]?\s[A-z]+\s(St|Av|Dr|Rd|Ct|Cr|Tce|La|Street|Ave|Avenue|Drive|Court|Crescent|Crt|Lane|Terrace) /i',$e,$m)&&!str_contains($e," to la")){$e='*FILTER_ADDR';}$prod=0;
foreach($x as $y){
if(stripos($e,$y)!==false){
if(isset($_COOKIE['9u9dyi'])){$a=0;}else{$a=3;}
if($config[5]<$a){echo '<mark>3</mark>';
file_put_contents('unlock.txt',$_POST['name']);$prod=1;
$y.=' | <a href="/z0.php.php?lmi=202040" target="blank" style="color:'.htmlspecialchars($_COOKIE['col']??$_POST['col']??'#88ff88').'">Undo</a></span>';}
else{$y.=' [TEST]';$prod=2;}
$write='000-<i>'.date("m-jS H:i:s").'</i> |<span style="color:'.htmlspecialchars($_COOKIE['col']??$_POST['col']??'#88ff88').'">/m Filter triggered: '.$y."</span>
  
";file_put_contents("1id8sjl.txt",$write,FILE_APPEND);
if($prod==1){unset($_POST['comment'],$_POST['name']);}break;}}
}

#Cookies; Strum if user got CAPTCHAd mid chat
if(isset($_POST['audio'])){setcookie("audio",$_POST['audio'],time()+35060);}
if(isset($_POST['name'])){setcookie("name",$_POST['name'],time()+86400);}
if(isset($_POST['refresh'])){setcookie("refresh",$_POST['refresh'],time()+86400);}
if(isset($_POST['col'])){setcookie("col",$_POST['col'],time()+35000);}
if(!isset($phrase)){$live='old';$l='Redirecting';
if(file_exists("links.php")){include("links.php");$live='Documents/';}
$old=glob($live.'*eep.txt');foreach($old as $eep){if((85+filemtime($eep))<time()){unlink($eep);}}

function s(){$s=mt_rand(0,2);if($s===0){return' ';}elseif($s===1){return'';}else{return'&nbsp;';}}
function g($l){
if(!isset($_REQUEST['next'])||isset($_REQUEST['next'])&&$_REQUEST['next']=="28.php"){include_once('28.php');exit;}
else{echo'<body style="background:#000"><meta http-equiv="refresh" content="0 '.htmlspecialchars($_REQUEST['next']).'"/>';exit($l.'</body>');}}
function svg($g,$r,$e){
if("%^^"!="%^"."%"){$x='';$len=strlen($g);for($i=0;$i<$len;$i++){$x.=$g[$i].s();}}
else{$x=$g;}
$real=mt_rand(0,9);$svg='';
for($i=0;$i<10;$i++){if($i!=$real){$y=str_pad(base_convert(hrtime()[1]%46656,10,36),3,0,0);$sos='inline;display:no';}else{$y=$x;$sos='none;display:inli';}
$svg.='<svg style="display:'.$sos.'ne" height="70" width="129" alt="- '.$y.' -"><defs><linearGradient id="g1" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" stop-color="'.$r.'" /><stop offset="100%" stop-color="'.$e.'" /></linearGradient></defs><text fill="url(#g1)" font-size="28" x="23" y="55">'.$y.'</text></svg>';}return $svg;
}

#Return 1 for valid cookie
function chkx(){
#Fixed poor validation ++
if(isset($_COOKIE['crc'])&&isset($_COOKIE['o'])&&$_COOKIE['o']<time()&&crc32(base64_encode("9u9dyi".$_COOKIE['o']))==$_COOKIE['crc']){
 return "1";}
 elseif(isset($_GET['apikey'])&&$_GET['apikey']=="9u9dyi.txt"){return "1";}
else{return "2";}}

#Redirection
if(chkx()=="1"){if(isset($_POST['name'])){filter($_POST['name'],$config);}#else{include_once('28.php');exit;}
if(!isset($_COOKIE['crc'])){
$j=crc32(base64_encode("9u9dyi".time()));
setcookie("crc", $j, time()+35000);$_COOKIE['crc']=$j;
setcookie("o",time(),time()+35000);$_COOKIE['o']=time();
file_put_contents("".makesum($j),$_SERVER['REQUEST_TIME_FLOAT']);
}
g($l);#Redirect if valid cookie exist
}
elseif(isset($_GET['next'])&&($_GET['next']=="28.php?b=d"||$_GET['next']=="28.php?b=b")){
exit("<meta http-equiv='refresh' content='4'><mark>Solve captcha, should auto refresh. Maybe resend message? ~ ".date("H:i:s")."</mark>");
}
else{
if(isset($_REQUEST['id'])){$e=file_get_contents($live.$_POST['id'].'eep.txt');}
if(!empty($_POST['comment'])&&isset($e)&&$_REQUEST['q'.base_convert(crc32($_REQUEST['id']."9u9dyi"),10,36)]!=""&&strtolower(trim($_REQUEST['q'.base_convert(crc32($_REQUEST['id']."9u9dyi"),10,36)],' \\'))==$e)
{#Invite check
  if(file_exists("config.txt")){$ic=base64_decode(strrev(explode('|',file_get_contents("config.txt"))[7]));}else{$ic=30;}
  if(isset($_POST['test'])&&$_POST['test']!=$ic&&empty($_REQUEST['9u9dyi'])&&empty($_COOKIE['9u9dyi'])||!checkuser($_POST['name'])){echo"<mark>License expired, contact Aera23 for assistance. <meta http-equiv='refresh' content='0 /a/sp?utm_source=license_renew'></mark>";}
else{filter($_POST['name'],$config);
setcookie("o",time(),time()+35000);setcookie("crc",crc32(base64_encode("9u9dyi".time())),time()+35000);
file_put_contents(crc32("9u9dyi").".dat",$_COOKIE['temptime']);
file_put_contents("pass.old",(int)file_get_contents("pass.old")+1);
$output='<mark>'.date('Y-m-d H:i:s').' | </mark><span style="color:'.htmlspecialchars($_POST['col']).'">'.htmlspecialchars($_POST['name']).' - '.htmlspecialchars($_POST['comment']).'</span>';
file_put_contents("greeting.html.old",$output.'<br>',8);


if(file_exists("whitelist.txt")&&file_get_contents("whitelist.txt")!="off"&&!isset($_COOKIE['9u9dyi'])&&!str_contains(file_get_contents("whitelist.txt"),makesum($_COOKIE['crc']))){file_put_contents("crc.txt",$_POST['name'].date(".H:i:s.|"),8);exit('<meta http-equiv="refresh" content="4">!');}
 
if(isset($_POST['name'])&&file_exists($hpu)&&($_POST['name']==file_get_contents($hpu)||npr($_POST['name'])==file_get_contents($hpu))){file_put_contents("crc.txt",$_POST['name'].date(".H:i:s.|"),8);exit('<meta http-equiv="refresh" content="4">!');}
if(file_exists($hpu)&&file_get_contents($hpu)=='"'&&!isset($_COOKIE['9u9dyi'])){file_put_contents("crc.txt",$_POST['name'].date(".H:i:s.|"),8);exit('<meta http-equiv="refresh" content="4">!');}

filter($_POST['comment'],$config);
if(strlen($_POST['name'].$_POST['comment'])<72){$ff=makesum(crc32(base64_encode("9u9dyi".time()))).'-'.'<i>'.date("m-jS H:i:s").'</i> |<span style="color:'.htmlspecialchars($_POST['col']).'">'.process(npr($_POST['name']),$find,$change,$config).' - '.process($_POST['comment'],$find,$change,$config)."</span>";}

if(isset($ff)){file_put_contents("1id8sjl.txt",$ff."\n\n",FILE_APPEND);}
g($l);
}}elseif(isset($_REQUEST['id'])){echo"<mark>Invalid captcha solve, ";
file_put_contents("fail.old",(int)file_get_contents("fail.old")+1);
$xxx=strlen($_REQUEST['q'.base_convert(crc32($_REQUEST['id']."9u9dyi"),10,36)]);
if($xxx==4){echo"don't type 4 characters directly";}
elseif($xxx==3&&strlen($e)!=3){echo"don't type 3 characters directly";}
elseif($xxx<3&&$xxx!=0||$xxx==5){echo"wrong length";}
elseif($xxx==0){echo"blank solution is never valid";}
elseif(empty($_POST['comment'])){echo"entry message is missing";}
else{echo"maybe retry?";}echo'</mark>';
}
}
$cf=["#ff33f",'#dd00f','#ff334',"#11ffe","#eeaa0","#00dfd","#ff880","#ffff0","#00ff0","#0088f"];
#Preset colours
if(!isset($_POST['col'])){$cb=(mt_rand()%10);$cfi=$cf[$cb].$cb;}
else{$cfi = htmlspecialchars($_POST['col']);}
$e=$cf[time()%10]."0";
echo'<meta name="viewport" content="width=device-width, initial-scale=1">';
if(isset($_COOKIE['audio'])&&!isset($_POST['id'])){gt();}
if($live!='old'){echo$l;}
#Fixed to allow for 0 as first digit(s), with string padding :)
$a=str_pad(base_convert(hrtime()[1]%46656,10,36),3,0,0);
$tag=['i','span','b'];
$text=['Type the final 3 letters/digits','Final 3 letters & numbers','Gimme those characters, ignoring 1<sup>st</sup> one','Recall the last three characters','Last three letters/digits please'];
$texta=['Type the initial 3 letters/digits','First 3 letters & numbers','Gimme those characters, ignoring 4<sup>th</sup> one','Recall the first three characters','First three letters/digits please'];
$textb=['Type those characters twice','Enter the characters below 2x','Input the characters below two times','Double type the characters into the box','Enter the characters below twice'];
echo'<!DOCTYPE html><html style="background:linear-gradient(45deg,#0A1520,#0A2015,#200A15)"><meta http-equiv="refresh" content="70">
<style>input,button{background:#dfd;border:2px solid #060;padding:0.3em}::placeholder{color:#060}button:hover,input:hover{border:2px solid #a66 !important}svg{border:2px solid '.$cfi.'}
.r{width:50px;height:50px;background:red;position:relative;animation-name:o;
animation-duration: 80s;animation-timing-function:linear}fieldset{border:2px solid #7f7}button{margin-left:25px;padding:0.3em;border-radius:8px;border:2px solid #8f8;background:linear-gradient(45deg,#0A1520,#0A2015,#200A15);color:#8f8}
@keyframes o{
 0%    {background:#0f0;left:89%;top:0px}
 50%   {background:#ff0;left:44.5%;top:0px}
 100%  {background:#f00;left:0%;top:0px}}
/*Cool timer*/
@keyframes t{
 0%    {opacity:1;font-size:0.1px}
 1%    {opacity:1;font-size:20px}
 81%   {opacity:1;font-size:20px}
 100%  {opacity:1;font-size:0.1px}}';

for($i=0;$i<81;$i++){echo'.a'.$i.'{animation:t 1s linear;animation-delay:'.(80-$i).'s;opacity:0;font-size:0.1px}';}
$r=mt_rand(0,999);
echo'</style>
<h2 id="a" style="margin:2em;margin-top:0em;color:#f8f;font-family:sans-serif;border:2px solid #6d6;border-radius:7px;padding:0.2em;width:69vw">:3 <'.$tag[time()%3].' style="speak-as:spell-out;margin-top:-0.5em">';
//Randomise whether CAPTCHA wants first or last letters
if("%^^"!="%^"."%"){$sl=4;$size=3;}
else{$sl=(mt_rand()%3);}
if($sl==4){$ex='🤗😁';echo' 🐳 For redfern stealing a license key, type: '.svg($a,$cfi,$e).'</'.$tag[time()%3].'>';}
elseif($sl==1){echo $text[mt_rand(0,4)].'<br>';$size=3;
$ex='Example: "type the last 3 characters of sefa" = "efa"';
echo svg(base_convert(mt_rand(0,35),10,36).$a,$cfi,$e).'</'.$tag[time()%3].'>';}
elseif($sl==2){echo $textb[mt_rand(0,4)].'<br>';$size=6;
$ex='Example: "type box twice" = "boxbox"';
echo svg($a,$cfi,$e).'</'.$tag[time()%3].'>';$a=$a.$a;}
else{echo $texta[mt_rand(0,4)].'<br>';$size=3;
$ex='Example: If captcha says "type the first 3 characters of sefa", type "sef"';
echo svg($a.base_convert(mt_rand(0,35),10,36),$cfi,$e).'</'.$tag[time()%3].'>';}

file_put_contents($live.$r.'eep.txt',$a) or exit("<mark>Can't write</mark>");
#The CAPTCHA form, now with name ready
echo'<form action="g3.php" method="post"><br><input name="name" size="16" placeholder="Nick or Codename" value="'.htmlspecialchars($_POST['name']??$_COOKIE['name']??'').'" style="margin-left:2em" required><span style="font-size:13px">&lt; Nick or Codename</span><br><input name="q'.base_convert(crc32($r."9u9dyi"),10,36).'" style="background:#dfd;margin-left:2em" size="6" maxlength="'.$size.'" placeholder="Code" autofocus required><span style="font-size:13px">&lt; Solution. <mark>
<br>'.$ex.'</mark></span><input type="color" name="col" value="'.$cfi.'"> <span style="font-size:13px">&lt; Text Colour</span><input name="id" type="hidden" value="'.$r.'"><input name="next" type="hidden" value="'.($_REQUEST['next']??'28.php').'"><br><br><span style="font-size:16px;margin-left:1.3em">Greet the chat: </a><br>
<input name="comment" value="'.htmlspecialchars($_POST['comment']??'').'" style="padding:0.3em;background:#dfd;margin-left:1.3em" size="18" required><input name="refresh" type="hidden" value="4" style="margin-left:1.3em">
<input name="test" type="hidden" value="30" size="8"><br><br><button name="audio" value="on">Enter</button><!--button name="audio" value="off">Quiet Ocean</button--></form>
<p style="font-size:16px;margin-left:1.3em">Solve within 80 seconds, <mark>COOKIES NEEDED</mark></p></h2>
<div style="background:#dfd;width:70vw;display:inline-block;margin-left:2.8em"><div class="r"><center style="padding:20% !important" class="run">';
for($i=0;$i<81;$i++){echo '<span class="a'.$i.'">'.$i.'</span>';} #Timer
echo'</center></div></div><br>
<br><mark style="margin-left:3em">';if($live!="old"){echo`uptime -p`;}echo'</mark></html>';if($live!="old"){include("70.php");}}
else{
#Decompressing the random colours
$k="'>$</span><span style='color:#";
$t="<span style='color:#1794BA$k 325EAE$k E117F6$k 662191$k 703B3C$k F3BD07$k 11C04F$k 4E2714$k C6C1DE$k 9A1775$k 96C7E6$k 3AEC8D$k C78432$k C5062C$k 80788B$k 8BB64E$k 0115A9$k 298002$k 715DB8$k 71DDBD$k 762946$k 0A4DC2$k 888EDD$k A20E87$k 93110B$k 06B799$k F8E4B4$k 28F57F$k 89355A$k EA6090$k 48CBDD$k 0B36A6$k 064FBA$k CCB91E'>$</span>";
$t=str_replace(" ","",$t);$tx=str_replace("ns","n s", $t);$txt=explode("<span",$tx.$tx);
$max=count($txt);
$phrase=htmlspecialchars_decode($phrase);$q="<b style='text-shadow:0.5px 0.5px #090,-0.5px -0.5px #090'>";
$mt=time()%20;
if(function_exists('mb_str_split')){$split = mb_str_split($phrase,1);$i=0;
foreach($split as $sp){$q.=str_replace("$",$sp,str_replace(" sty","<span sty",$txt[$i+$mt]));$i++;}}
else{
for($i=0;$i<min(strlen($phrase),$max);$i++){$q.=str_replace("$",$phrase[$i],str_replace(" sty","<span sty",$txt[$i+$mt]));}}$q.='</b>';}
?>
