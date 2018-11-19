<?php
$username = addslashes($this -> getInput($username));
$password = addslashes($this -> getInput($password));

class dataLogin{}

$newDataLogin = new DataLogin;

$newDataLogin -> username = $username;
$newDataLogin -> password = $password;

$this -> send -> login($newDataLogin);
