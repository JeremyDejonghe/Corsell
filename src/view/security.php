<?php

class SecurityView
{

    public function __construct(SecurityController $controller)
    {
        $this->controller=$controller;
        $this->template=DIR_TEMPLATE."security.php";
    }

    public function render()
    {
        if (isset(  $_SESSION["user_id"]) && isset($_SESSION["user_ip"]) ) {
        require($this->template);
        }else{
            header("Location: ./");
        }
    }

}