<?php

$mysql_host = mysql;        // this is automatically set to the hostname of the database because we linked them in docker-compose.yml
$mysql_db = 'db_default';   // set in docker-compose.yml
$mysql_user = 'dev';        // set in docker-compose.yml
$mysql_pass = 'dev';        // set in docker-compose.yml

echo "MYSQL_HOST: {$mysql_host}<br>" . PHP_EOL;
echo "MYSQL_DATABASE: {$mysql_db}<br>" . PHP_EOL;
echo "MYSQL_USER: {$mysql_user}<br>" . PHP_EOL;
echo "MYSQL_PASSWORD: {$mysql_pass}<br>" . PHP_EOL;

$link = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

if (!$link) {
    echo "Error: Unable to connect to MySQL.<br>" . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . "<br>" . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . "<br>" . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The db_default database is great.<br>" . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . "<br>" . PHP_EOL;

mysqli_close($link);

phpinfo();
