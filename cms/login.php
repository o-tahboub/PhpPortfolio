<?php


$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

require_once 'functions.php';

$credentials = getUserCredentials($db);

$inputUserName = $credentials[0]['name'];
$inputPassword = $credentials[0]['password'];
