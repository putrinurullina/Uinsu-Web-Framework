<?php
/**
@package : Uinsu Web Framework

*/
//-> Home base (alamat website/server)
$homeBase = '';
//-> Site name (Nama website)
$siteName = '';
//Nama pemilik/pengembang
$author = '';
//Path style(css/js/sass/dll)
$styleBase = $homeBase.'ladun/';
//Path img
$imgBase = $homeBase.'ladun/site/img';
//Kode UTC
$utf = '+07';
$tanggal = date("Y-m-d");
//main route,not index
$mainRoute = 'home';
//

//
//
//
//---- Database Config-----//

$dbServer = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'db_mhs_tes';
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
//
//
//
//-------- Define to Global -------//
define('HOMEBASE',$homeBase);
define('SITENAME',$siteName);
define('AUTHOR',$author);
define('MAINROUTE',$mainRoute);
define('STYLEBASE',$styleBase);
define('IMGBASE',$imgBase);
//
define('TANGGAL',$tanggal);
define('WAKTU',"Waktu");
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
