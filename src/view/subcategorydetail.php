<?php

class SubcategorydetailView
{
    public function __construct(SubcategorydetailController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE."subcategorydetail.php";
    }

    public function render()
    {
        $products = $this->controller->getProductSubCategory();
        $names = $this->controller->getNameSubCategory();
        require($this->template);
    }

}