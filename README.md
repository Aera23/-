# Chat and stopwatch
New: Delete messages! (Change the $_COOKIE['in'] to your cookie, and the != to == if you want exclusive access to delete)

In particular, it contains the script for the chat page, "creation stopwatch" and the CAPTCHA
Note that the stopwatch counts time since it was run. To reset it, delete time2.txt

# Installation
* Just copy the files into the directory you want to. 
* Needs PHP, and should work with default settings.
* You do not need MySQL.

# Extra
If you need to kick/shadowkick a user, you could modify the script live to include an error
  
    if($_REQUEST['name']="spammer"){exit("<mark>Can't connect to MySQL database</mark>");}
  
To clear the chat, delete the file prvt.txt

Error ideas:
* Can't load (upstream/internal/etc) data
* Blank error
* I/O or permission error


# Hosting
* If you are using an external hosting, create an account and follow their instructions. Navigate to the www,htdocs,public or similar using their tools.
* If you want to host on your own machine, try downloading Uniserver XV on your machine. Start it up, Run Apache, and go to the www directory.
* Then, copy the files from this page into that directory, and type yuor server's web address. For Uniserver, it's localhost/g3.php
