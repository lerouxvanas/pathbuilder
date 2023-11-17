<?php
define('APPROOT', dirname(dirname(__FILE__)));
define('URLROOT', 'http://localhost');
define('SITENAME', 'Path Builder v0.1');
define('ROOT', dirname(dirname(dirname(__FILE__))));

$dotenv = Dotenv\Dotenv::createImmutable(APPROOT);
$dotenv->load();

$host = $_ENV['MYSQL_HOST'];
$user = $_ENV['MYSQL_USER'];
$password = $_ENV['MYSQL_PASSWORD'];
$dbname = $_ENV['MYSQL_DATABASE'];

define('DB_HOST', $host);
define('DB_USER', $user);
define('DB_PASS', $password);
define('DB_NAME', $dbname);