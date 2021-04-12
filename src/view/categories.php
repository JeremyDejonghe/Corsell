<?php

class CategoriesView
{

    public function __construct(CategoriesController $controller)
    {
        $this->controller=$controller;
        $this->template=DIR_TEMPLATE."categories.php";
    }

    public function render()
    {
        $categories=$this->controller->getCategories();
        require($this->template);
    }

}
