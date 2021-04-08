<?php
class ProductView
{
    public function __construct(ProductController $controller) {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "product.php";
    }

    public function render()
    {
        $products = $this->controller->getProducts();
        require($this->template);
    }
}