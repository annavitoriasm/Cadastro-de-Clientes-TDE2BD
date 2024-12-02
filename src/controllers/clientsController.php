<?php
    require_once('./src/models/Client.php');
    require_once('./src/services/ClientDataExport.php');

    class ClientsController
    {
        private $model;
        private $exportService;

        public function __construct()
        {
            $this->model = new ClientModel();
            $this->exportService = new ClientExportService();
        }

        public function home()
        {
            $data = $this->model->getAll();
            require_once('./src/views/home.php');
        }

        public function add()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $params = [
                    'nome' => $_POST['nome'] ?? '',
                    'pessoa_fisica' => $_POST['pessoa_select'] ?? '',
                    'cpf_cnpj' => $_POST['cpf_cnpj'] ?? '',
                    'contato' => $_POST['contato'] ?? '',
                    'email' => $_POST['email'] ?? '',
                    'cep' => $_POST['cep'] ?? '',
                    'endereco' => $_POST['endereco'] ?? '',
                    'numero' => $_POST['numeroend'] ?? '',
                    'complemento' => $_POST['complementoend'] ?? '',
                    'observacoes' => $_POST['observacoes'] ?? ''
                ];

                $this->model->newClient($params);

                header('Location: index.php?controller=clients&action=home');
                exit;
            }
        }

        public function del()
        {
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                $id = $_GET['id'];

                $this->model->deleteClient($id);

                header('Location: index.php?controller=clients&action=home');
                exit;
            } else {
                header('Location: index.php?controller=clients&action=home');
            }
        }

        public function edit()
        {
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                $id = $_GET['id'];

                # $this->model->editClient($id, $_POST);

                header('Location: index.php?controller=clients&action=home');
                exit;
            } else {
                header('Location: index.php?controller=clients&action=home');
            }
        }

        public function exportToSheet()
        {
            $clients = $this->model->getAll();

            $this->exportService->exportToSheet($clients);
        }
    }
