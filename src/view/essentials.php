<?php

class EssentialsView
{

    public function __construct(EssentialsController $controller)
    {
        $this->controller=$controller;
        $this->template=DIR_TEMPLATE."essentials.php";
    }

    public function render()
    {
        $categories = $this->controller->getCategoryDetail();
        $essentials = $this->controller->getEssentials();
        require($this->template);
    }

}