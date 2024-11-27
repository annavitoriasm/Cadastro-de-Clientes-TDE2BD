<?php

require_once '../../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

$dbHost = $_ENV['dbHost'];
$dbPort = $_ENV['dbPort'];
$dbName = $_ENV['dbName'];
$dbUser = $_ENV['dbUser'];
$dbPass = $_ENV['dbPass'];

$dsn = "pgsql:host=$dbHost;port=$dbPort;dbname=$dbName";

