<?php

class CategoriesController
{
    private $model;

    public function __construct(CategoriesModel $model)
    {
        $this->model=$model;
        
    }
// Recupération des catégories en bdd 

public function getCategories()
{
    $res=$this->model->db->query("Select * from category");
    return $res;
} 

}


