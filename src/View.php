<?php

class View
{
    public function __construct(public $path)
    {
    }

    public function run()
    {
        match ($this->path) {
            'login' => $this->semLayout(),
            default => $this->comLayout()
        };
    }

    private function comLayout()
    {
        require_once __DIR__ . "../../Layout/header.php";
        require_once "./views/{$this->path}/index.php";
        require_once __DIR__ . "../../Layout/footer.php";
    }

    private function semLayout()
    {
        require_once "./views/{$this->path}/index.php";
    }
}
