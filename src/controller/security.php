<?php
class SecurityController
{
    private $model;

    public function __construct(SecurityModel $model)
    {
        $this->model = $model;
    }
}