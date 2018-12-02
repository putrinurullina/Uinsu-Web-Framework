<?php

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
