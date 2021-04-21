<?php

class MyCommandsView
{

    public function __construct(MyCommandsController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "mycommands.php";
    }

    public function render()
    {

        if (isset($_SESSION["user_id"]) && $_SESSION["user_ip"] == $_SERVER["REMOTE_ADDR"] && $_SESSION["user_category"] == 1) {
            $products=$this->controller->getProductsCommands();
            require($this->template);
        } else {
            header("Location: ./");
        }
    }
}