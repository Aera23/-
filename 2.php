<?php
if($_GET['t']){$s = ((1000 * microtime(true)) % 100000); $l = $s - $_GET['t'];}
else{exit('<!DOCTYPE html><html lang="en"><body style="background:#fcc;font-family:monospace;margin:1.8em"><div style="padding:0.7em;border:2px solid #500;border-radius:8px;padding-left:2em"><h2 style="color:#a00;">Oops; Accessed incorrectly. Go to the <a href="/colour.php">correct page here</a> </h2><h3>&gt;- This page saves and displays latency, so accessing it directly should not work, otherwise my results are skewed. <mark>:)</mark><br>&gt;- If you edited the code, check to see if the API has: "?t=\' . $t. \'&s=8" <mark>:)</mark></div></body></html>');}

if($l < 0){$l += 100000;}
#Comments on the latency, and sets the colour
if($l < 90000){$q = "Pain!";}
if($l < 4500){$q = "Tor";}
if($l < 900){$q = "Slooow";}
if($l < 800){$q = "Slow";}
if($l < 700){$q = "Ok-ish";}
if($l < 600){$q = "Ok";}
if($l < 500){$q = "Good";}
if($l < 400){$q = "Nice";}
if($l < 300){$q = "Great";}
if($l < 200){$q = "Fast!";}
if($l < 100){$qual = "WOW"; }
$col = 'hsl('.round((1000-$l)/5).',90%,70%)';
echo '<!DOCTYPE html><html lang="en">
<style>body{background:'.$col.';color:#000; font-family:corbel;}</style><body><h1>'. $l. 'ms ('. $q .')</h1>
<a href="colour.php" target="blank">Test again in new tab? <mark>:)</mark></a></body></html>';

# Makes a file, so users can see the times, CRC'ing the IP to protect it
$qq = fopen(date("j")."l.txt", "a");
$oo = "<br>".$l . ",".crc32($_SERVER['REMOTE_ADDR']) . ",".time() . ",".$_SERVER['HTTP_USER_AGENT'];
fwrite($qq, $oo);
fclose($qq);
?>
