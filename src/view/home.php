<?php
class HomeView
{
    public function __construct(HomeController $controller) {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "home.php";
    }

    public function render()
    {
        $mostSells = $this->controller->getMostSell();
        $lastProducts = $this->controller->getLastProducts();
        $mostSellWeapons = $this->controller->getMostSellWeapons();
        $categories = $this->controller->getCategory();
        require($this->template);
    }
}