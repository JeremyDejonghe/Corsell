<?php

class MarchandProductsView
{
    public function __construct(MarchandProductsController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "marchandproducts.php";
    }

    public function render()
    {
        if (isset($_SESSION["user_id"]) && $_SESSION["user_ip"] == $_SERVER["REMOTE_ADDR"] && $_SESSION["user_category"] == 2) {
            $products = $this->controller->getMyProducts();
$del_id= $this->controller->deleteProduct();
            require($this->template);
        } else {
            header("Location: ./");
        }
    }
}
