http://forwhoallvglhpsx6dhycfb4fu4a2lqkvxtwlivruw765qxofyns7wqd.onion/

https://aera23.net/

# WARNING
* Use Find and Replace (Ctrl + H or Ctrl + R) to change these secrets 1id8sjl.txt and 9u9dyi in g3.php and 28.php
* (please change $ad at the top of testx.php / files.php)

# Chat and stopwatch
* Included are the chat script, PHP stopwatch and the CAPTCHA.
* The stopwatch counts time since it was first run. To reset it, delete time2.txt
* New: Admin can delete messages and send away bad chatters with one click!
* Use Find and Replace (Ctrl + H or Ctrl + R) to change these secrets 1id8sjl.txt and 9u9dyi
* if you cannot do that, obtain g3.php and 28.php from https://aera23.net/source.php
# Latency test
* To run the test, access colour.php
* To view more data, add ?r=1 (or 2,3,4) when accessing data.php (shows from last day)
# Comment form
* Type a comment, and press enter (this was made for people who want to see how simple PHP can be, and because I liked some CSS)
* The comments are stored in "comments.txt", and can technically be edited (or specific comments can be removed, manually)
# File upload
* This needs sqlite
* I made it with a lot of ChatGPT assistance
* I added the timestamps column in DB, and timestamp support
* I changed chatGPT's dotpoint list to a table, and improved styling
* ?delete=accesskey to be able to delete files via the upload page (please change $ad at the top of the script)
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
To clean the public chat, delete the 9ud** data file. (change this filename with find and replace)
"Max characters per second" is the maximum rate of typing (estimated by comparing loaded time with message process time, and validated with crc32)
Eg: at 7 (cps)... a message sent in 5 seconds can have 35 characters max

# Hosting
* If you are using an external hosting, create an account and follow their instructions. Navigate to the www/htdocs/public or similar using their tools and then start installation.
* If you want to host on your own machine:
* for Windows try downloading UniformServer on your machine. Start it up, Run Apache, and go to the www directory.
* for Linux, try "sudo apt install php" and something like "php -S 127.0.0.1:8000 -t '/var/www/'" and also goto /var/www.
* Then, copy the files from this page there, and type your server's web address. For Uniserver, it's "localhost/g3.php", or for Linux's php, "127.0.0.1:8000/g3.php".
* Don't forget to enable port forwarding if you don't use onionsites (or follow an online guide if u do)
# Troubleshooting
* If you get an error called "Can't write to disk" when loading the CAPTCHA, check to see if there are write permissions for PHP and the hosting folder.
* Also check to see if links.php is present, and rename/delete that file...
  as the script would otherwise try to put CAPTCHA solutions in /home/peplive/Documents/, which only works if that folder exists
* Finally, SElinux, hard drive failure, inode limit, and more can stop writing. Search online for troubleshooting
