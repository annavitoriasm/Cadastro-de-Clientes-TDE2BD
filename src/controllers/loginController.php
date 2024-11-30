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
                    $_SESSION['user_logged'] = true;
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['imgUrl'] = $data['imgUrl'];
                    header("Location: index.php?controller=clients&action=home");
                    exit;
                } else {
                    $error = "Email ou senha inválidos!";
                    require_once('./src/views/login.php');
                }
            } else {
                require_once('./src/views/login.php');
            }
        }

        public function logout()
        {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            session_unset();
            session_destroy();

            header("Location: index.php?controller=login&action=login");
            exit;
        }
    }

