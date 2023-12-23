<?php
    include '../app/config/config.php';
    include APP_ROOT.'/app/controllers/TourController.php';

    $controller = $_GET['c'] ?? 'tour';
    $action = $_GET['a'] ?? 'index';

    $controller = ucfirst($controller);
    $controllerClass = $controller . "Controller";

    $path = "controllers/" . $controllerClass . ".php";

    include_once APP_ROOT . '/app/' . $path;
    $controllerPath = new $controllerClass();
    $controllerPath->$action();

