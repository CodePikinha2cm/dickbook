<?php

class Controller
{
    public function __construct(public $path, public $method)
    {
    }

    public function run()
    {
        require_once "./src/Controller/{$this->path}/index.php";

        $controller = make();
        $resultado = $controller->{$this->method}();

        echo json_encode($resultado);
    }
}
