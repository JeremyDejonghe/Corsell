<?php
class Reset_PasswordController
{
    private $model;

    public function __construct(Reset_PasswordModel $model)
    {
        $this->model = $model;
    }

}