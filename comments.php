<!DOCTYPE html>
<html style="background:radial-gradient(#123, #132, #213)">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Log</title>
<style>
input,button{padding:0.4em;margin:1em;background:#036;color:#0ff;border-radius:8px;border:2px solid #00f}
body{color:#aaf;padding-top:25px;padding-bottom:25px;font-family:sans-serif}b{color:#d2d}
input:hover,button:hover{background:#066}::placeholder{color:#fff}span{color:#4f4}
</style><body>
 <h2 style="font-size:30px;margin-left:0.5em">Comment form</h2>
 <form action="" method="post">
 <input name="name" placeholder="Nick" autofocus value="<?php echo htmlspecialchars($_POST['name']??'') ?>"><br><input name="comment" size="70" placeholder="Text"><button>Go</button></form>
 <p style="color:yellow;margin-left:1em">This has now gotten a colour update</p>
 <pre style="margin-left:1em;margin-right:1em;white-space:pre-wrap">
  <?php
  if(!file_exists("comments.txt")){file_put_contents("comments.txt","\n",8);} # Fix visual bug
  #Send and/or retrieve comments
  if(!empty($_POST['name'])&&!empty($_POST['comment'])){file_put_contents("comments.txt",htmlspecialchars(date("y-m-jS H:i:s | ").$_POST['name'].' - '.$_POST['comment']."\n"),8);}
  echo preg_replace('/\|<\/span> (\S* )/m','|</span> <b>$1</b>',preg_replace('/^(.*\d\d \|)/m', '<span>$0</span>', file_get_contents("comments.txt")));
  ?></pre>
</body>
</html>
