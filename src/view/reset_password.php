<?php

class Reset_PasswordView
{

    public function __construct(Reset_PasswordController $controller)
    {
        $this->controller=$controller;
        $this->template=DIR_TEMPLATE."reset_password.php";
    }

    public function render()
    {
        require($this->template);
    }

}