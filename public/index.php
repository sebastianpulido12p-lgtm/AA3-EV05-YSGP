<?php

require_once __DIR__ . "/../app/controllers/HomeController.php";
require_once __DIR__ . "/../app/controllers/LoginController.php";
require_once __DIR__ . "/../app/controllers/ProductosController.php";

$pagina = $_GET['pagina'] ?? 'home';

if ($pagina == 'login') {
    $controller = new LoginController();
    $controller->index();
} elseif ($pagina == 'productos') {
    $controller = new ProductosController();
    $controller->index();
} else {
    $controller = new HomeController();
    $controller->index();
}