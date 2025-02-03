<?php
if('9u9dyi'=='9u9'.'dyi'||$_COOKIE['9u9dyi']=='t'){
$self = file_get_contents('setup.php');
function check_input($self,$c){
if(empty($c)||strpos($self,$c)!==false||strlen($c)<4){return false;}return true;}
if(check_input($self,$_POST['a'])){setcookie($_POST['a'],'t',time()+864000);}

if(check_input($self,$_POST['a'])&&check_input($self,$_POST['b'])&&check_input($self,$_POST['c'])){
echo'<i>Now, bookmark and use <a href="28.php?'.htmlspecialchars($_POST['a']).'=t" target="_blank">your mod cookie.</a> To change settings again, ensure you are logged into chat as moderator, then access setup.php</i>';
#replace g3.php, setup.php and 28.php secrets, ensuring that they are at least 4 letters, and not found in setup.php
$b=['setup.php','g3.php','28.php'];
#$b=['setup.php'];
foreach($b as $a){
file_put_contents($a,str_replace('nrzknf.txt',htmlspecialchars($_POST['c']),str_replace('1id8sjl.txt',htmlspecialchars($_POST['b']),str_replace('9u9dyi',htmlspecialchars($_POST['a']),file_get_contents($a)))));}
file_put_contents('.bashrc','#'.time(),FILE_APPEND);}# For allowing captcha bypass

echo'<!DOCTYPE HTML><meta name="viewport" content="width=device-width,initial-scale=1.0">
<html lang="en"><title>Setup</title><h2>Setup</h2><p>Replace the secrets with your own, preferably using 4 or more characters from [. A-Z, a-z, 0-9]. Other characters may produce errors.</p><form action="setup.php" method="post"><table>
<tr><td><label for="a">Moderator Cookie:</label></td><td><input name="a" id="a" size="24" value="'.htmlspecialchars($_POST['a']??'9u9dyi').'"></td></tr>
<tr><td><label for="b">Chat data file:</label></td><td><input name="b" id="b" size="24" value="'.htmlspecialchars($_POST['b']??'1id8sjl.txt').'"></td></tr>
<tr><td><label for="c">CAPTCHA bypass code:</label></td><td><input name="c" id="c" size="24" value="'.htmlspecialchars($_POST['c']??'nrzknf.txt').'"></td></tr></table>
<button type="submit">Go</button><br>';
echo'<style>button,input{margin:0.6em;background:#242;color:#0ff;border-radius:10px;placeholder-color:#fff;padding:0.4em;border:2px solid #0c0}html{margin:4vw;font-family:sans-serif}::placeholder{color:#ff8;opacity: 1}::-ms-input-placeholder{color: #ff8;opacity: 1}input:hover,button:hover{background:#353}
*{background:#000;color:#0f0;}td{color:#0cf}h2{color:#fff;animation:rainbow 5s linear infinite}form{display:inline}textarea{padding:0.3em;border-radius:15px}a,a:visited{color:#08f}a:hover{color:#0cf}
@keyframes rainbow{0%{color:#f80;}20%{color:#ff0}40%{color:#0f0}60%{color:#0ff}80%{color:#f2f}100%{color:#f80}}
</style></form><p>For bypassing CAPTCHA, g3.php?apikey=code can be used</p></html>';}
else{echo'"<mark>Chat Already Setup, use moderator cookie to proceed.</mark>"';}?>
