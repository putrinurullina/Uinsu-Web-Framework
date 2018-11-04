<?php
//----- Settingan umum -------//
$homeBase = 'http://localhost/uinsuWf/';
$siteName = 'Uinsu Web Framework';
$author = 'Uinsu';
$styleBase = $homeBase.'ladun/style/';
$imgBase = $homeBase.'ladun/img/';
$utf = '+07';
//
//
//
//
//
//
//---- Database -----//
$dbDriver = 'mysqli';
$dbServer = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'dbs_haxors';
//
//
//
//
//
//
//
//------ Fungsi ------//
$stringRandom = "QWERTYUIOPLKJHGFDSAZXCVBNMQWERTYUIOPLKJHGFDSAZXCVBNM";
$numberRandom = "789456123";
$allRandom = $stringRandom.$numberRandom;
$newRandomString = "";
//
//
//
//
//
//
//
//
//
//
//
//
//

define('HOMEBASE',$homeBase);
define('SITENAME',$siteName);
define('AUTHOR',$author);
define('STYLEBASE',$styleBase);
define('IMGBASE',$imgBase);

define('RANDOM_STRING',$stringRandom);
define('NUMBER_RANDOM',$numberRandom);
define('ALL_RANDOM',$allRandom);

define('DB_DRIVER',$dbDriver);
define('DB_SERVER',$dbServer);
define('DB_USER',$dbUser);
define('DB_PASSWORD',$dbPassword);
define('DB_NAME',$dbName);
