<?php
/**
* UINSU Web Framework Config & Rule File
* File ini memuat konfigurasi dasar website
*
*/


/**
* Home base (alamat website/server) 
* cth : localhost/uinsuWf atau http://haxorsprogramming.id
*/
$homeBase = '';

/**
* Site name (nama situs web)
*/
$siteName = 'Uinsu Web Framework';

/**
* Author (Pengembang / pemilik website)
*/
$author = '';

//Path style(css/js/sass/dll)
$styleBase = $homeBase.'ladun/';

//Path img
$imgBase = $homeBase.'ladun/site/img';

//Kode UTC
$utf = '+07';

$tanggal = date("Y-m-d");
$waktu = date("m:s:H");

//main route,not index
$mainRoute = 'home';
/**
*
*
*
*/


//------ Fungsi ------//
$stringRandom = "QWERTYUIOPLKJHGFDSAZXCVBNMQWERTYUIOPLKJHGFDSAZXCVBNM";
$numberRandom = "789456123";
$allRandom = $stringRandom.$numberRandom;
$newRandomString = "";



/**
*------------------- Definisikan semua variabel ke global ------------------------
*semua variabel dapat dipanggil di route, bind, maupun state
*
*/

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


