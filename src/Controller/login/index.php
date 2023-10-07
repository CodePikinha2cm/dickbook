<?php

class LoginController
{
    public function logar()
    {
        return ['id' => 1];
    }
}

function make()
{
    return new LoginController();
}
