<?php
class ChestController
{
    protected $model;

    public function __construct(ChestModel $model)
    {
        $this->model=$model;
        
    }

    public function getProductsCommand()
    {
        $query = $this->model->db->prepare("");
        $query->execute();
        $res = $query->fetch();
        return $res;
    }

}