<?php

require_once('src/controllers/clientsController.php');
require_once('src/controllers/loginController.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_URI'] === '/' && isset($_SESSION['user_logged']) && $_SESSION['user_logged'] === true) {
    header("Location: index.php?controller=clients&action=home");
    exit;
}

if (isset($_SESSION['user_logged']) && $_SESSION['user_logged'] === true) {
    if ($_GET['controller'] === 'login' && $_GET['action'] === 'logout') {
        $controller = new LoginController();
        $controller->logout();
        exit;
    }

    if ($_GET['controller'] === 'login') {
        header("Location: index.php?controller=clients&action=home");
        exit;
    }
}

if (!isset($_SESSION['user_logged']) || $_SESSION['user_logged'] !== true) {
    $allowed = ['login', 'logout'];
    $action = $_GET['action'] ?? 'login';

    if (!in_array($action, $allowed)) {
        header("Location: index.php?controller=login&action=login");
        exit;
    }
}

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
    echo "Erro 404! Página não encontrada!";
}
