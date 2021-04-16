<?php

class SecurityView
{

    public function __construct(SecurityController $controller)
    {
        $this->controller=$controller;
        $this->template=DIR_TEMPLATE."security.php";
    }

    public function render()
    {
        require($this->template);
    }

}