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
        $query = $this->model->db->prepare("SELECT id, picture, name FROM products where  id_seller = :id");
        $query->bindParam(":id", $this->idUser);
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }

    public function deleteProduct(){
        $query = $this->model->db->prepare("DELETE from products where  id = :id");
        $query->bindParam(":id", $this->id);
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }
}
