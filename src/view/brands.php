<?php

class BrandsView
{

    public function __construct(BrandsController $controller)
    {
        $this->controller=$controller;
        $this->template=DIR_TEMPLATE."brands.php";
    }

    public function render()
    {
        $brands=$this->controller->getBrands();
        require($this->template);
    }

}