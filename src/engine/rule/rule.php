<?php
//
//Uinsu Web Framework - Config File
//Catatan : JANGAN UBAH NAMA VARIABEL & DEFINE
//


//----- Settingan umum -------//
//-> Home base (alamat website/server)
$homeBase = 'http://localhost/aditPos/';
//-> Site name (Nama website)
$siteName = 'Simple POS (Point of Sales)';
//Nama pemilik/pengembang
$author = 'Aditia Darma Nasution';
//Path style(css/js/sass/dll)
$styleBase = $homeBase.'ladun/style/';
//Path img
$imgBase = $homeBase.'ladun/site/img';
//Kode UTC
$utf = '+07';
$tanggal = date("Y-m-d");

//
//
//
//---- Database Config-----//

$dbServer = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'dbs_adit_pos';
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
