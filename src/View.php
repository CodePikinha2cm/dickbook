<?php

class View
{
    public function __construct(public $path)
    {
    }

    public function run()
    {
        require_once __DIR__ . "../../Layout/header.php";
        require_once "./views/{$this->path}/index.php";
        require_once __DIR__ . "../../Layout/footer.php";
    }
}
