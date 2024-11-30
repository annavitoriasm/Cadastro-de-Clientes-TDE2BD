<?php

    require_once('./src/config/Connection.php');
    class LoginModel extends Connection
    {
        private $table;

        public function __construct()
        {
            parent::__construct();

            $this->table = 'users';
        }

        public function login($email, $password)
        {
            $query = "SELECT * FROM {$this->table} WHERE email = :email";

            $stmt = $this->connection->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                return $user;
            } else {
                return null;
            }
        }
    }
