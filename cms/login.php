<?php


$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

require_once 'functions.php';

$credentials = getUserCredentials($db);

$actualUserName = $credentials[0]['name'];
$actualPassword = $credentials[0]['password'];

$inputUserName = $_POST['userName'];
$inputPassword = $_POST['password'];

loggedInSession($actualUserName, $actualPassword, $inputUserName, $inputPassword);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
<form method="post" action="login.php">
    <input type="name" name="userName">
    <input type="name" name="password">
    <input type="submit">
</form>

</body>
