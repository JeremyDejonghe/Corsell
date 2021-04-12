<?php
class ProductView
{
    public function __construct(ProductController $controller) {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "product.php";
    }

    public function render()
    {
        $product = $this->controller->getProduct();
        $categories = $this->controller->getCategoryDetail();
        require($this->template);
    }
}