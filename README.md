Version check
=============
Screen shot here
http://i1363.photobucket.com/albums/r708/MyteeNathanwit/ozweather2_zps8177bdbb.png

Added new plug in in packaging used to check version. The beta version will be on github http://intcloud.mobi/github. Required

1- <IfModule mod_headers.c> Header set Access-Control-Allow-Origin "*" </IfModule> added on top of .htaccess to enable ajax call.

2-file version.php upload to your server. correct the url to the right address.

3-the codding part as in plugin sample index.html

onload, the file will try to connect to server via ajax get to fetch the latest version and compare with current version of the app and advise user to upgrade it.
The code is so simple that we need no document for it.
You add your product and version into version.php
and from loading, send ajax request, ie .. $.get (".....?appname=yourapp").done(response) {}... the response is the version of your app. It can be blank if the appname is not on version.php.