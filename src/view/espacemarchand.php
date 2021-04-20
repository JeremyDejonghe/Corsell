<?php

class EspaceMarchandView
{

    public function __construct(EspaceMarchandController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "espacemarchand.php";
    }

    public function render()
    {

        if (isset($_SESSION["session_id"]) && $_SESSION["user_ip"] == $_SERVER["REMOTE_ADDR"] && $_SESSION["user_category"] == 2) {
            $userInfos= $this->controller->getUserInfos();
            $products=$this->controller->getProductsforUser();
            require($this->template);
            
        } else {
            header("Location: ./");
        }
    }
}