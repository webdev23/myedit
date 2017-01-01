<?php

//~ Welcome into myeditIo setup file. 
//~ Nico - myeditIo - 2015 | 2016

//~ Serveur name, or use localhost/
$ServerHost = "/home/ponyhacks/@/www";

$ServerAdress = "https://ponyhacks.com/@/www";

//~ Main folder path
$myeditIOpath = "/home/ponyhacks/@/www";

//~ Warning you need php5-curl and php5-mcrypt on your system
//~ Edit as root php.ini and add lines: 
//~ extension=curl.so
//~ extension=mcrypt.so

//~ You need to allow url-fopen if you are not admin of your system

//~ In case of use of something else than localhost:
//~ modify the line 55 and 64 of p.php for set the good absolute url.
//~ There is no workaround due to the use <base href="">

//~ Fake Directory,full path. This will contain your edited page.
$path = "/home/ponyhacks/@/www/fake/";

//~ Token log file full path. This file contain hash's allowing the writer to delete his page.
$file = '/home/ponyhacks/@/www/token/token.log';

//~ Token salt, 32 HEX chars
$fingerprint = "3200000F0000003900023000000a0000";

//~ Give write access to folders: cache, token, fake
//~ Give write access to set.php, kill.php, v.php
//~ UTF8 decoding in v.php won't work in localhost
