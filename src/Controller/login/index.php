<?php

use Api\Controller\login\ClasseTeste;

require_once __DIR__ . '../../../../vendor/autoload.php';

class LoginController
{
    public function logar()
    {
        new ClasseTeste();
        return ['id' => 1];
    }
}

function make()
{
    return new LoginController();
}
