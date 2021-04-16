<?php
class SearchView
{
    public function __construct(SearchController $controller) {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "search.php";
    }

    public function render()
    {
        $categories = $this->controller->getCategoryDetail();
        $products = $this->controller->getProducts();
        require($this->template);
    }
}