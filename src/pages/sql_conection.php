<?php 

require_once('autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$dbHost = $_ENV['dbHost'];
$dbPort = $_ENV['dbPort'];
$dbname = $_ENV['dbname'];
$dbUser = $_ENV['dbUser'];
$dbPass = $_ENV['dbPass'];

$dsn = "pgsql:host=$dbHost;port=$dbPort;dbname=$dbname";

?>