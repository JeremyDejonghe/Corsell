<?php
class HomeController
{
    private $model;

    public function __construct(HomeModel $model)
    {
        $this->model = $model;
    }

    /**
     * Récupération des produits en bdd
     */
    // public function getProducts() {
    //     $res = $this->model->db->query("");
        
    //     return $res;
    // }
}