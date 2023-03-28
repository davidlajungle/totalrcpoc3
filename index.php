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

var_dump($user, $password);

$mysqli = new mysqli($host, $user, $password, $db);

var_dump($mysqli);
