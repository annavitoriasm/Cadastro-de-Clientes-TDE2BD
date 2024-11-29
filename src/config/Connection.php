<?php

require_once './vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

define('DBHOST', $_ENV['dbHost']);
define('DBPORT', $_ENV['dbPort']);
define('DBNAME', $_ENV['dbName']);
define('DBUSER', $_ENV['dbUser']);
define('DBPASS', $_ENV['dbPass']);

define('DSN', 'pgsql:host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME);

class Connection {
    protected $connection;

    public function __construct()
    {
        $this->connectDatabase();
    }

    public function connectDatabase()
    {
        try {
            $this->connection = new PDO(dsn: DSN, username: DBUSER, password: DBPASS, options: [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
