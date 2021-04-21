<?php
class MyCommandsController
{
    private $model;

    public function __construct(MyCommandsModel $model)
    {
        $this->model = $model;
    }

    public function getProductsCommands()
    {
        $query = $this->model->db->prepare("SELECT p.id, p.name, p.picture
        FROM commands AS c
        INNER JOIN products_command AS pc 
        ON c.id = pc.id_command
        INNER JOIN products AS p 
        ON pc.id_products = p.id
        WHERE c.id_user = :id_user");
        $query->bindParam(":id_user", $this->model->idUser);
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }
}