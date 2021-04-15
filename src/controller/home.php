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
    public function getMostSell() {
        $res = $this->model->db->query("SELECT id, picture FROM products ORDER BY sell_number DESC LIMIT 0,4");
        
        return $res;
    }

    public function getLastProducts() {
        $res = $this->model->db->query("SELECT id, picture FROM products ORDER BY id DESC LIMIT 0,4");

        return $res;
    }

    public function getMostSellWeapons() {
        $res = $this->model->db->query("SELECT id, picture FROM products WHERE id_category = 2  ORDER BY sell_number DESC LIMIT 0,6");

        return $res;
    }

    public function getCategory() {
        $res = $this->model->db->query("SELECT id, name, picture FROM category order by rand() limit 0,3 ");

        return $res;
    }
}