<?php

class CategoryDetailView
{

    public function __construct(CategoryDetailController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "categorydetail.php";
    }

    public function render()
    {
        $categories = $this->controller->getCategoryDetail();
        $subcategories = $this->controller->getCategorySubcategories();
        $categoriesname= $this->controller->getCategoryName();
        $subcategoriesname= $this->controller->getSubcategoryName();
        require($this->template);
    }
}
