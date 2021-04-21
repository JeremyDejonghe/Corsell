<?php

class ChestCommandView
{

    public function __construct(ChestCommandController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "chestcommand.php";
    }

    public function render()
    {
        $deliveries = $this->controller->getDelivery();
        $payments = $this->controller->getPayment();
        $products = $this->controller->getChest();
        $total = $this->controller->getTotal($products); 
        if (!empty($_POST)) {
            $data = $this->controller->getDataForm();
            $this->controller->addCommand();
            $_SESSION["chest"] = array();
            header("Location: ./espacepirate");
            
        }
        require($this->template);
    }
}
