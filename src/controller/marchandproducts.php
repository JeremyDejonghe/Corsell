<?php

class MarchandProductsController
{
    protected $model;

    public function __construct(MarchandProductsModel $model)
    {
        $this->model = $model;
    }


    public function getMyProducts()
    {
        $query = $this->model->db->prepare("SELECT id, picture, name, price , promo FROM products where  id_seller = :id");
        $query->bindParam(":id", $this->model->idUser);
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }


}
