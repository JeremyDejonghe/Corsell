<?php

class LastnewView
{

    public function __construct(LastnewController $controller)
    {
        $this->controller=$controller;
        $this->template=DIR_TEMPLATE."lastnew.php";
    }

    public function render()
    {
        $categories = $this->controller->getCategoryDetail();
        $idCategories = $this->controller->getCategories();
        $products = $this->controller->getBestsellsProducts($idCategories);
        require($this->template);
    }

}