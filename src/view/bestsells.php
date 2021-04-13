<?php

class BestsellsView
{

    public function __construct(BestsellsController $controller)
    {
        $this->controller=$controller;
        $this->template=DIR_TEMPLATE."bestsells.php";
    }

    public function render()
    {
        $categories = $this->controller->getCategoryDetail();
        $bestSellC = $this->controller->getProductsFromCategory();
        $products = $this->controller->getBestsellsProducts($bestSellC);
        require($this->template);
    }

}