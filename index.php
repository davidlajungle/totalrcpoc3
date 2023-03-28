<?php

echo '<pre>';
$e = getenv();
// var_dump($e);
echo '======';
// var_dump($_SERVER);

$host = 'azrimdbrcnews.mariadb.database.azure.com';
$user = getenv('APPSETTING_MariaDbUser');
$password = getenv('APPSETTING_MariaDbPwd');
$db = null;

// $con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "azrimdbrcnews.mariadb.database.azure.com", "admins@azrimdbrcnews", {your_password}, {your_database}, 3306);

var_dump($user, $password);
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// $mysqli = mysqli_init();
// mysqli_ssl_set($mysqli, null, null, null, null, null);
// mysqli_real_connect(mysqli, $host, $user, $password, $db, 3306);
// var_dump($mysqli);

$user = 'admins@azrimdbrcnews';
$password = 'Password@12345';
// $mysqli2 = mysqli_init();
// mysqli_ssl_set($mysqli2, null, null, null, null, null);
$mysqli2 = new mysqli($host, $user, $password, $db, 3306);
var_dump($mysqli2);
