<?php

    require_once('src/controllers/clientsController.php');
    require_once('src/controllers/loginController.php');

    $controllerName = !empty($_GET['controller']) ? $_GET['controller'] : 'login';
    $action = !empty($_GET['action']) ? $_GET['action'] : 'login';

    switch ($controllerName) {
        case 'clients':
            $controller = new ClientsController();
            break;
        case 'login':
        default:
            $controller = new LoginController();
            break;
    }

    if (method_exists($controller, $action)) {
        $controller->{$action}();
    } else {
        http_response_code(404);
        echo "Ação não encontrada!";
    }