<?php
    require_once('./src/models/Client.php');

    class ClientsController
    {
        private $model;

        public function __construct()
        {
            $this->model = new ClientModel();
        }

        public function home()
        {
            $data = $this->model->getAll();
            require_once('./src/views/home.php');
        }
    }

