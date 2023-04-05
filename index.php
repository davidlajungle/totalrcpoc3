<?php

echo '<pre>';

$host = 'azrimdbrcnews.mariadb.database.azure.com';
$user = getenv('APPSETTING_MariaDbUser');
$password = getenv('APPSETTING_MariaDbPwd');
$db = null;

// $mysqli = mysqli_init();
// $mysqli->ssl_set(NULL, NULL, "", NULL, NULL);
// $mysqli->real_connect($host, $user, $password, null, 3306, null, MYSQLI_CLIENT_SSL | MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);
// var_dump($mysqli);

if (isset($_POST['test'])) {
	var_dump($_POST['test']);
}

echo '
	<form method="POST">
		<input type="text" name="test" />
		<input type="submit" value="Test" />
	</form>
';
