<?php
if('9u9dyi'=='9u9'.'dyi'||$_COOKIE['9u9dyi']=='t'){
function check_input($c){
if(empty($c)||(isset($c)&&strlen($c)<2)||preg_match('/[^a-z0-9.]/i',$c)){return false;}return true;}
if(check_input($_POST['a'])){setcookie($_POST['a'],'t',time()+864000);$_COOKIE[$_POST['a']]='t';}

if(check_input($_POST['a'])&&check_input($_POST['b'])&&check_input($_POST['c'])){
echo'<i>Now, bookmark and use <a href="28.php?'.htmlspecialchars($_POST['a']).'=t" target="_blank">your mod cookie.</a> To change settings again, ensure you are logged into chat as moderator, then access setup.php</i>';
#replace g3.php, setup.php and 28.php secrets, ensuring that they are at least 4 letters, and not found in setup.php
$b=['setup.php','g3.php','28.php'];
#$b=['setup.php'];
if(!file_exists('pass.old')){file_put_contents('pass.old',0);file_put_contents('fail.old',0);}
foreach($b as $a){
file_put_contents($a,str_replace('nrzknf.txt',htmlspecialchars($_POST['c']),str_replace('"1id8sjl.txt"','"'.htmlspecialchars($_POST['b']).'"',str_replace("'9u9dyi'","'".htmlspecialchars($_POST['a'])."'",str_replace('"9u9dyi"','"'.htmlspecialchars($_POST['a']).'"',file_get_contents($a))))));}
if(!file_exists('config.txt')){file_put_contents('config.txt','8|300|Chat||20|1|7|=AzM|30') or exit('<mark>Can\'t write to file</mark>');}
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
