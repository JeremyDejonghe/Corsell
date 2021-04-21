<?php

class ChestView
{

    public function __construct(ChestController $controller)
    {
        $this->controller=$controller;
        $this->template=DIR_TEMPLATE."chest.php";
    }

    public function render()
    {
        $products = $this->controller->getChest();
        $total = $this->controller->getTotal($products);
        require($this->template);
    }

}