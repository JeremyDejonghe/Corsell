<?php


class BrandsController
{
    private $model;

    public function __construct(BrandsModel $model)
    {
        $this->model=$model;
        
    }
// Recupération des catégories en bdd 

public function getBrands()
{
    $res=$this->model->db->query("Select * from brands");
    return $res;
} 

}

?>