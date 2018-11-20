<?php
//----- Settingan umum -------//
$homeBase = 'http://localhost/uinsuWf/';
$siteName = 'Uinsu Web Framework';
$author = 'Uinsu';
$styleBase = $homeBase.'ladun/style/';
$imgBase = $homeBase.'ladun/img/';
$utf = '+07';
$tanggal = date("Y-m-d");

//
//
//
//---- Database -----//

$dbServer = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'dbs_mahasiswa';
$dbDriver = 'mysql';

//---- Database Wrapper Caption -----///
$insert = 'INSERT INTO ';
$select = 'SELECT ';
$delete = 'DELETE FROM ';
$update = 'UPDATE ';
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
//-------- Define to Global -------//
define('HOMEBASE',$homeBase);
define('SITENAME',$siteName);
define('AUTHOR',$author);
define('STYLEBASE',$styleBase);
define('IMGBASE',$imgBase);
//
define('TANGGAL',$tanggal);
//
define('RANDOM_STRING',$stringRandom);
define('NUMBER_RANDOM',$numberRandom);
define('ALL_RANDOM',$allRandom);

define('DB_DRIVER',$dbDriver);
define('DB_SERVER',$dbServer);
define('DB_USER',$dbUser);
define('DB_PASSWORD',$dbPassword);
define('DB_NAME',$dbName);
//
define('DB_INSERT', $insert);
define('DB_SELECT',$select);
define('DB_UPDATE',$update);
define('DB_DELETE',$delete);
