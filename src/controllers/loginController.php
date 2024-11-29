<?php

    require_once('./src/models/Login.php');

    class LoginController
    {
        private $model;

        public function __construct()
        {
            $this->model = new LoginModel();
        }

        public function login()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $email = $_POST['email'] ?? null;
                $password = $_POST['password'] ?? null;

                $data = $this->model->login($email, $password);

                if ($data) {
                    header("Location: index.php?controller=clients&action=home");
                    exit;
                } else {
                    echo "Email ou senha inválidos!";
                }
            } else {
                require_once('./src/views/login.php');
            }
        }
    }

