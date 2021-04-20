<?php

class EspacePirateView
{

    public function __construct(EspacePirateController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "espacepirate.php";
    }

    public function render()
    {

        if (isset(  $_SESSION["user_id"]) && $_SESSION["user_ip"] == $_SERVER["REMOTE_ADDR"] && $_SESSION["user_category"] == 1) {
            $userInfos= $this->controller->getUserInfos();
            $products=$this->controller->getProductsforUser();
            require($this->template);
            
        } else {
            header("Location: ./");
        }
    }
}
