<?php
require("common.php");

class SearchController extends CommonController
{
    protected $model;

    public function __construct(SearchModel $model)
    {
        $this->model = $model;
    }
    // Recupération des produits en bdd via une recherche
    public function getProducts()
    {
        $query = $this->model->db->prepare("SELECT id, name, picture  
        FROM products
        WHERE name
        LIKE :search");
        $query->bindValue(":search", "%{$this->model->search}%");
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }
}
