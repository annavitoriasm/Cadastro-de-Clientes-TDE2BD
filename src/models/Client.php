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

        public function newClient(array $params)
        {
            $sql = "
                INSERT INTO {$this->table}
                (nome, pessoa_fisica, cpf_cnpj, contato, email, cep, endereco, numero, complemento, observacoes)
                VALUES
                (:nome, :pessoa_fisica, :cpf_cnpj, :contato, :email, :cep, :endereco, :numero, :complemento, :observacoes)
            ";

            $stmt = $this->connection->prepare($sql);

            try {
                $stmt->execute($params);
            } catch (PDOException $e) {
                throw new Exception($e->getMessage());
            }
        }

        # public function editClient(int $id, array $params)

        public function deleteClient(int $id)
        {
            $this->connection->query("DELETE FROM {$this->table} WHERE id = $id");
        }
    }
