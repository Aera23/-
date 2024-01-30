http://forwhoallvglhpsx6dhycfb4fu4a2lqkvxtwlivruw765qxofyns7wqd.onion/

https://aera23.net/

# Chat and stopwatch
* Included are the chat script, "creation stopwatch" and the CAPTCHA.
* The stopwatch counts time since it was first run. To reset it, delete time2.txt
* New: Admin can delete messages and deter unwanted chatters from staying, with one click!
# Latency test
* To run the test, access colour.php
* To view more data, add ?r=1 (or 2,3,4) when accessing data.php (shows from last day)
# Comment form
* Type a comment, and press enter (this was made for people who want to see how simple PHP can be, and because I liked some CSS)
* To delete comments, remove "comments.txt"
# Installation
* Copy the files into the directory you want to.
* Run g3.php and solve CAPTCHA
* Follow the prompts, and save
* Click the button saying "BACK"
* Optional: Check out stopwatch.php or colour.php :)
Enjoy :)

# Extra
If you need to deal with a spammer,  typing "/k spammerNick" will help stop @spammerNick from spamming for a while
(there's a cool trick used when they are denied)
To clean the public chat, type \`u\`u\`u\`u\`u\`u\`u\`u\`u\`u\`u\`u\`u\`u\`u\`u\`u\`u\`u\`u or delete the 9u*** data file.

# Hosting
* If you are using an external hosting, create an account and follow their instructions. Navigate to the www/htdocs/public or similar using their tools and then start installation.
* If you want to host on your own machine, for Windows try downloading Uniserver XV on your machine. Start it up, Run Apache, and go to the www directory.
*                                          for Linux, try "sudo apt install php" and something like "php -S 127.0.0.1:8000 -t '/var/www/'" and also goto www.
* Then, copy the files from this page into that directory, and type your server's web address. For Uniserver, it's "localhost/g3.php", or for php "127.0.0.1:8000/g3.php".
* Don't forget to enable port forwarding if you don't use onionsites (or follow an online guide if u do)
# Troubleshooting
* If you get an error called "Can't write to disk" when loading the CAPTCHA, check to see if there are write permissions for PHP and the hosting folder.
* Also check to see if links.php is present, and rename/delete that file, as the script would otherwise try to put CAPTCHA solutions in /home/peplive/Documents/
* Finally, SElinux, hard drive failure, inode limit, and more can stop writing. Search online for troubleshooting
