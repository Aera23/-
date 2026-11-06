<?php $size = intval($_GET['size']??50); ?>
<!DOCTYPE html><html><meta name="viewport" content="width=device-width, initial-scale=1"><head><style>
html{background:#dfd;font-family:monospace}.x{font-family:serif}
a{color:#08f}a:visited{color:#f0f}
.r{width:7em;height:1.25em;font-family:serif;
  background:#040;color:lime;font-size:<?php echo $size; ?>px;
  position:relative;
  border-bottom:8px solid #930}*{animation-timing-function:step-start;}
/* Setup classes for different speeds */
<?php
if(isset($_GET['custom'])){$_GET['custom']+=1;}
if(!file_exists('time2.txt')){$chime=time(); file_put_contents('time2.txt', $timed) or exit("<mark>Can't write</mark>");}
$chime = intval($_GET['custom']??time()-intval(file_get_contents('time2.txt')-2));echo $chime;

if($chime>35990000){
for($i=0;$i<10;$i++){echo'.j'.$i.'{animation:t 3600000000s linear infinite;animation-delay:'.(0-(($chime-3240000000)%3600000000)-($i*360000000)).'s;opacity:0;font-size:0.1px}';}}
if($chime>3590000){for($i=0;$i<10;$i++){echo'.i'.$i.'{animation:t 360000000s linear infinite;animation-delay:'.(0-(($chime-324000000)%360000000)-($i*36000000)).'s;opacity:0;font-size:0.1px}';}}
if($chime>359000){for($i=0;$i<10;$i++){echo'.h'.$i.'{animation:t 36000000s linear infinite;animation-delay:'.(0-(($chime-32400000)%36000000)-($i*3600000)).'s;opacity:0;font-size:0.1px}';}}
for($i=0;$i<10;$i++){echo'.g'.$i.'{animation:t 3600000s linear infinite;animation-delay:'.(0-(($chime-3240000)%3600000)-($i*360000)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<10;$i++){echo'.f'.$i.'{animation:t 360000s linear infinite;animation-delay:'.(0-(($chime-324000)%360000)-($i*36000)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<10;$i++){echo'.e'.$i.'{animation:t 36000s linear infinite;animation-delay:'.(0-(($chime-32400)%36000)-($i*3600)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<6;$i++){echo'.d'.$i.'{animation:k 3600s linear infinite;animation-delay:'.(0-(($chime-3000)%3600)-($i*600)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<10;$i++){echo'.c'.$i.'{animation:t 600s linear infinite;animation-delay:'.(0-(($chime-540)%600)-($i*60)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<6;$i++){echo'.b'.$i.'{animation: i 60s linear infinite;animation-delay:'.(0-(($chime-30)%60)-($i*10)).'s;opacity:0;font-size:0.1px}';}
for($i=0;$i<10;$i++){echo'.a'.$i.'{animation:t 10s linear infinite;animation-delay:'.(0-($chime%10)-$i).'s;opacity:0;font-size:0.1px}';} ?>

<?php 
$t='
/*Change numbers, tks to experimentation or math*/
@keyframes t{
 0%{opacity:1;font-size:'.$size.'px}
 9.999998%{opacity:1;font-size:'.$size.'px}
 9.999999%{opacity:0;font-size:'.$size.'px}
 10%{opacity:0;font-size:0.1px}}

@keyframes i{
 35%{opacity:0;font-size:0.1px}
 35.1%{opacity:0;font-size:'.$size.'px}
 35.2%{opacity:1;font-size:'.$size.'px}
 51.7%{opacity:1;font-size:'.$size.'px}
 51.8%{opacity:0;font-size:'.$size.'px}
 51.9%{opacity:0;font-size:0.1px}}

@keyframes k{
 0%{opacity:0;font-size:0.1px}
 0.01%{opacity:0;font-size:'.$size.'px}
 0.02%{opacity:1;font-size:'.$size.'px}
 16.67%{opacity:1;font-size:'.$size.'px}
 16.68%{opacity:0;font-size:'.$size.'px}
 16.69%{opacity:0;font-size:0.1px}}'; if(empty($_GET['hide'])){echo$t;}else{echo str_replace("20px","180px;color:#000",$t);}?>
</style></head><body><center>
<div style="background:#8f8;margin:2vw;display:inline-block;padding:0.3em;max-width:72em"><div class="r">&nbsp;<span class="e0">0</span><?php
if($chime>359999000){for($i=0;$i<10;$i++){echo'<span class="j'.$i.'">'.(9-$i).'</span>';}}
if($chime>35999000){for($i=0;$i<10;$i++){echo'<span class="i'.$i.'">'.(9-$i).'</span>';}}
if($chime>3599000){for($i=0;$i<10;$i++){echo'<span class="h'.$i.'">'.(9-$i).'</span>';}}
if($chime>359000){for($i=0;$i<10;$i++){echo'<span class="g'.$i.'">'.(9-$i).'</span>';}}
for($i=0;$i<10;$i++){echo'<span class="f'.$i.'">'.(9-$i).'</span>';}
for($i=0;$i<10;$i++){echo'<span class="e'.$i.'">'.(9-$i).'</span>';}echo':';
for($i=0;$i<6;$i++){echo'<span class="d'.$i.'">'.(5-$i).'</span>';}
for($i=0;$i<10;$i++){echo'<span class="c'.$i.'">'.(9-$i).':</span>';}
for($i=0;$i<6;$i++){echo'<span class="b'.$i.'">'.(5-$i).'</span>';}
for($i=0;$i<10;$i++){echo'<span class="a'.$i.'">'.(9-$i).'</span>';} ?></div>
</div></center></body></html>
