http://forwhoallvglhpsx6dhycfb4fu4a2lqkvxtwlivruw765qxofyns7wqd.onion/
(Yes, I know that the hosting IP and onionsite are linked with this Github. But it is useful if the onion goes offline, or the IP changes)
# Chat and stopwatch
* Included are the chat script, "creation stopwatch" and the CAPTCHA.
* The stopwatch counts time since it was first run. To reset it, delete time2.txt
* New: Admin can delete messages with one click! (Click the number button)


# Installation
* Copy the files into the directory you want to.
* Change the secrets in data.php
* Set a cookie with the name you set, with any non-blank value.
* Remove the code you used to set the cookie

        setcookie("(Your Cookie name)", $value, time()+9000000);

# Extra
If you need to kick/shadowkick a user, you could modify the script live to include an error
  
    if($_REQUEST['name']="spammer"){exit("<mark>Can't connect to MySQL database</mark>");}
  
To clear the chat, delete the file prvt.txt

Error ideas:
* Can't load (upstream/internal/etc) data
* Blank error
* I/O or permission error

# Hosting
* If you are using an external hosting, create an account and follow their instructions. Navigate to the www/htdocs/public or similar using their tools and then start installation.
* If you want to host on your own machine, try downloading Uniserver XV on your machine. Start it up, Run Apache, and go to the www directory.
* Then, copy the files from this page into that directory, and type yuor server's web address. For Uniserver, it's localhost/g3.php


# Troubleshooting
* If you get an error called "Can't write to disk" when loading the CAPTCHA, check to see if there are write permissions for PHP and the hosting folder
* Also check to see if links.php is present, and rename/delete that file, as I have site specific config when it is used (hint, Peppermint OS live)
* Finally, SElinux, hard drive failure, inode limit, and more can stop writing. Search online for more troubleshooting
