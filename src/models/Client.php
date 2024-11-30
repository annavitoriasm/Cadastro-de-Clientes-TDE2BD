<?php

    require_once('./src/config/Connection.php');
    class ClientModel extends Connection
    {
        private $table;

        public function __construct()
        {
            parent::__construct();

            $this->table = 'clients';
        }

        public function getAll()
        {
            $sqlSelect = $this->connection->query("SELECT *FROM {$this->table} ORDER BY id ASC");
            return $sqlSelect->fetchAll(PDO::FETCH_ASSOC);
        }
    }

