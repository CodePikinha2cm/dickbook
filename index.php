<?php

require_once "./src/View.php";

if (!empty($_GET['url'])) {
    $view = new View($_GET['url']);
    $view->run();
}
