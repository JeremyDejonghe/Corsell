<?php
class ProductView
{
    public function __construct(ProductController $controller) {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "product.php";
    }

    public function render()
    {
        $message = "";
        $product = $this->controller->getProduct();
        $categories = $this->controller->getCategoryDetail();
        if ($this->controller->addProductsCommand()) {
            header("Location: ./");
        } else {
            $message = "Erreur de bdd";
        }
        require($this->template);
    }
}