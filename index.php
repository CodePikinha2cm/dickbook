<?php

require_once "./configPath.php";
require_once "./src/View.php";
require_once "./src/Controller.php";

if (!empty($_GET['url'])) {
    $path = explode('/', $_GET['url']);

    if ($path[0] == 'api') {
        $controller = new Controller($path[1], $path[2]);
        $controller->run();
        return;
    }

    $view = new View($path[0]);
    $view->run();
    return;
}

$baseUrl = getenv('BASE_URL');
header("location: {$baseUrl}/login");
