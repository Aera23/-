# Aera23's repo :)
This is where I can share code from my site

In particular, it contains the script for the chat page, "creation stopwatch" and the CAPTCHA
Note that the stopwatch counts time since it was installed. To reset it, delete time2.txt

# Installation
* Just copy the files into the directory you want to. 
* Needs PHP, and should work with default settings.
* You do not need MySQL.

# Extra
If you need to kick a user, you could modify the script live to include
  
    if($_REQUEST['name']="spammer"){exit("Kick message, or leave blank for shadow kick");}
  
To clear the chat, delete the file prvt.txt

# Hosting
* If you are using an external hosting, create an account and follow their instructions. Navigate to the www,htdocs,public or similar using their tools.
* If you want to host on your own machine, try downloading Uniserver XV on your machine. Start it up, Run Apache, and go to the www directory.
* Then, copy the files from this page into that directory, and type yuor server's web address. For Uniserver, it's localhost/g3.php .

To view more source code, go to http://101.174.15.188/source.php?f=index.php or https://fern.rf.gd/source.php?f=index.php (change the filename to browse source)
