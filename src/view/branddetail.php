<?php

class BrandDetailView
{

    public function __construct(BrandDetailController $controller)
    {
        $this->controller=$controller;
        $this->template=DIR_TEMPLATE."branddetail.php";
    }

    public function render()
    {
        $brand=$this->controller->getBrandDetail();
        $categories = $this->controller->getCategoryDetail();
        require($this->template);
    }

}