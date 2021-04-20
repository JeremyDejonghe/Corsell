<?php

class ChestView
{

    public function __construct(ChestController $controller)
    {
        $this->controller=$controller;
        $this->template=DIR_TEMPLATE."chest.php";
    }

    public function render()
    {
        require($this->template);
    }

}