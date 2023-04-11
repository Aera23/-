# -
This is where I can share code from my site

In particular, it contains the script for the chat page and the CAPTCHA

# Installation
Just copy the files into the directory you want to. Needs PHP, and should work with default settings.
You do not need MySQL.

#Extra
If you need to kick a user, you could modify the script live to include
  
  if($_REQUEST['name']="spammer"){exit("Kick message, or leave blank for shadow kick");}
  
To clear the chat, delete the file prvt.txt
