<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Comments</title>
<style>
   input,button{padding:0.4em;margin:1em;background:#036;color:#0ff;border-radius:8px;border:2px solid #00f} body {
        color: whitesmoke;
        background-color: black;
        padding-top: 25px;
        padding-bottom: 25px;}
</style>
<body>
    <h2 style="font-size:30px;margin-left:0.45em">Comments</h2>
    <form action="" method="post">
    <input name="name" placeholder="Nick" value="<?php echo htmlspecialchars($_POST['name']); ?>"><br><input name="comment" size="70" placeholder="Text"><button>Go</button></form>
    <p style="color:yellow;margin-left:0.9em;font-size:16px">I made this with PHP and some CSS/HTML that was lying around.</p>
<pre style="margin:1em"><br>
    <?php
    if(file_get_contents("comments.txt")==""){file_put_contents("comments.txt","\n",8);} # Fix visual bug
    #Send and/or retrieve comments
    if($_POST['name']!="" && $_POST['comment']!=""){file_put_contents("comments.txt",htmlspecialchars(date("y-m-jS H:i:s | ").$_POST['name'].' - '.$_POST['comment']."\n"),8);}
    echo file_get_contents("comments.txt");
    ?></pre>
</body>
</html>
