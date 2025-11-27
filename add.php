<style>*{font-family:monospace;background:#ff7;font-size:18px}span{text-align:center;padding:45px;border:2px solid #f80;color:#930;font-size:20px}input,button{border:2px solid #930}div{padding:45px}form{display:inline}b{margin-left:1em}</style><b>
<?php $h=1+intval(htmlspecialchars($_POST['c']??'0'));
if(!empty($_POST)){$a='';foreach($_POST as $k=>$v){if($k!='c'){if(crc32($v)!=$k){$a.='X';}else{$a.='V';}}}echo $a.'<br>X = wrong and V = right. Level: '.$h;}
else{echo 'The pyramid is made of numbers that add up to each other, solve it, then click the <mark>:) CHECK</mark> button';}
echo '</b><div><form action="" method="post">';
$aa=[];$ab=[];$ac=[];$ad=[];
function dice($h){return mt_rand(1,10*$h);}
function tile($i){if(mt_rand(0,5)!=2){echo '<span>'.$i.'</span>';}else{echo '<span style="padding:45px;"><input name="'.crc32($i).'" size="3"></span>';}return $i;}
for($i=0;$i<5;$i++){$aa[]=tile(dice($h));}
echo '</div><div style="margin-left:51px">';
for($i=0;$i<4;$i++){$ab[]=tile($aa[$i]+$aa[$i+1]);}
echo '</div><div style="margin-left:102px">';
for($i=0;$i<3;$i++){$ac[]=tile($ab[$i]+$ab[$i+1]);}
echo '</div><div style="margin-left:153px">';
for($i=0;$i<2;$i++){$ad[]=tile($ac[$i]+$ac[$i+1]);}
echo '</div><div style="margin-left:204px">';
tile($ad[0]+$ad[1]);
?><button name="c" value="<?php echo $h; ?>">:) CHECK</button></form></div>
