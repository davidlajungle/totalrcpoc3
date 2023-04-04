<?php

echo '<pre>';
$e = getenv();
var_dump($e);
// echo '======';
// var_dump($_SERVER);

$host = 'azrimdbrcnews.mariadb.database.azure.com';
$user = getenv('APPSETTING_MariaDbUser');
$password = getenv('APPSETTING_MariaDbPwd');
$db = null;

// $con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "azrimdbrcnews.mariadb.database.azure.com", "admins@azrimdbrcnews", {your_password}, {your_database}, 3306);

// $user = 'admins@azrimdbrcnews';
// $password = 'Password@12345';
var_dump($user, $password);

$mysqli = mysqli_init();
// $mysqli->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
$mysqli->ssl_set(NULL, NULL, "", NULL, NULL);
$mysqli->real_connect($host, $user, $password, null, 3306, null, MYSQLI_CLIENT_SSL | MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);
var_dump($mysqli);
