<?php
class EspacePirateController
{
    private $model;

    public function __construct(EspacePirateModel $model)
    {
        $this->model = $model;
    }

    public function getUserInfos(){

        $query=$this->model->db->prepare("Select id,email,pseudo,avatar from users where id = :id ");
        $query->bindValue(":id", $this->model->idUser);
        $query->execute();
        $res = $query->fetch();
        
    return $res;
    }

    public function getProductsforUser(){

        $res = $this->model->db->query("SELECT id, name, picture FROM products order by rand() limit 0,7 ");

        return $res;

    }
}