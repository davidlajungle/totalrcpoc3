<?php

echo '<pre>';
$e = getenv();
var_dump($e);
echo '======';
var_dump($_SERVER);

$host = 'azrimdbrcnews.mariadb.database.azure.com';
$user = getenv('APPSETTING_MariaDbUser');
$password = getenv('APPSETTING_MariaDbPwd');
$db = null;

// $con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "azrimdbrcnews.mariadb.database.azure.com", "admins@azrimdbrcnews", {your_password}, {your_database}, 3306);

var_dump($user, $password);

$mysqli = new mysqli($host, $user, $password, $db);
var_dump($mysqli);

$user = 'admins@azrimdbrcnews';
$mysqli2 = new mysqli($host, $user, 'Password@12345', $db);
var_dump($mysqli2);

$mysqli3 = new mysqli($host, $user, 'Password@12345', 'test');
var_dump($mysqli3);
