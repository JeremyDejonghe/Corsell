<?php
class ChestController
{
    protected $model;

    public function __construct(ChestModel $model)
    {
        $this->model = $model;
    }

    public function getChest()
    {
        $id = implode("\",\"", $_SESSION["chest"]);
        $query = $this->model->db->prepare("SELECT id, name, picture, price FROM products WHERE id IN (\"{$id}\")");
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }

    public function getTotal($products)
    {
        $total = 0;
        foreach($products as $product) {
            $total += $product["price"];        
        }
        return $total;
    }
}
