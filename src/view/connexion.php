<?php

class ConnexionView
{

    public function __construct(ConnexionController $controller)
    {
        $this->controller=$controller;
        $this->template=DIR_TEMPLATE."connexion.php";
    }

    public function render()
    {
        $users=$this->controller->getUsers();
        require($this->template);
    }

}