<!DOCTYPE html><html><meta http-equiv="refresh" content="30"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Second Counter</title><style>body{font-family:consolas,sans-serif; font-size:50px;margin-top:60px}#time{border:2px solid #d80; border-radius:12px; width: 8em;padding:0.2em;color:#930;}#s{font-size:16px;margin-left:60px}#days{font-size:30px}</style><body><p id="s">
<?php
//$file = 1671579350; (The timestamp on my site)
if(!file_exists('time2.txt')){$timed = time(); file_put_contents('time2.txt', $timed) or exit("<mark>Can't write</mark>");}
$file = file_get_contents('time2.txt');
echo (time() - $file);?>

</p><center><p id="time"></p><p id="days"></p></center>
<p style="font-family:corbel;font-size:18px;margin:0px 60px 0px 60px">This stopwatch, counts up since the time it was started. The time is the difference between the time file, and the current server time. That number is seen on the top left. Javascript increments the time and displays the time in the center.</p>
<script>setInterval(add(),1000); function add(){var t = document.getElementById('s').innerHTML * 1;t+=1; document.getElementById('s').innerHTML = t;

var s = t%60;
if(s<10){s = "0" + s;}
var m = ((t-s)/60)%60;
if(m<10){m = "0" + m;}
var h = (t - (t % 3600))/ 3600;
var d = (t - (t % 86.4)) / 864;
d*=0.01;
if(d<1){d+="0_";d=d.substr(0, 3);}
else if(d<10){d+="0_";d=d.substr(0, 4);}
else if(d<100){d+="0_";d = d.substr(0, 5);}
else if(d<1000){d+="0_";d=d.substr(0, 6);}
else if(d<10000){d+="0_";d=d.substr(0, 7);}
else if(d<100000){d+="0_";d=d.substr(0, 8);}
else{d+="0_";d=d.substr(0, 9);}

document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
document.getElementById('days').innerHTML = d + " days";

}
function check(){
var d = new Date();
let ms = d.getMilliseconds();
if(ms>950){add();setInterval(add,1000);}
else{setTimeout(check,50);}
}
check();
</script></body></html>
