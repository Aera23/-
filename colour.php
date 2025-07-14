<?php
$t = ((1000 * microtime(true)) % 100000);

echo'<!DOCTYPE html><html lang="en"><meta name="viewport" content="width=device-width, initial-scale=1">
<style>html{background:#dfd;color:#008; margin-left:2em;font-family:corbel;content-visibility:auto}iframe{border:none;}</style><body>';
echo'<h2>Speed test :D</h2><iframe src="2.php?t=' . $t . '" width="350em" height="120em"></iframe>';
echo'<p>My latency tool measures the time to connect to this site. It was called colour.php, since the page has contrasting colours.</p>
<h3>It works by...</h3>
<p>measuring the time between two requests. <br>Your PCs rendering latency can be added to the total. <br>Results are stored, so everyone can see how my site performs. Unfortunately, the table of data is misaligned.<br><br>

<a href="data.php">View results (:D)</a>';

echo'
<br><h3>What I changed in this tool:</h3>
-I have removed some un-neccessary numbers<br>
-The results are colour coded even better; there are 200 different shades!<br>
-I have made the background light orange, then light green, and removed some excess spacing.</p>';
echo '</body></html>';
?>
