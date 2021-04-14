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
        $idCategories = $this->controller->getCategories();
        $products = $this->controller->getBestsellsProducts($idCategories);
        require($this->template);
    }

}