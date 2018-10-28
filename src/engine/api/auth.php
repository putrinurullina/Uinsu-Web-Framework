<?php
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);

class dataLogin{}

$newDataLogin = new DataLogin;

$newDataLogin -> username = $username;
$newDataLogin -> password = $password;

$this -> send -> login($newDataLogin);
