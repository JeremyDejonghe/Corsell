<?php
class MyCommandsController
{
    private $model;

    public function __construct(MyCommandsModel $model)
    {
        $this->model = $model;
    }

    public function getCommands()
    {
        $query = $this->model->db->prepare("SELECT c.id  FROM commands AS c 
        INNER JOIN users AS u 
        ON u.id = c.id_user 
        WHERE  c.id_user = :id_user");
        $query->bindParam(":id_user", $this->model->idUser, PDO::PARAM_INT);
        $query->execute();
        $res = $query->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getProductsCommands($id)
    {
        $query = $this->model->db->prepare("SELECT p.id, p.name, p.picture
        FROM commands AS c
        INNER JOIN products_command AS pc 
        ON c.id = pc.id_command
        INNER JOIN products AS p 
        ON pc.id_products = p.id
        WHERE c.id = :id");
        $query->bindParam(":id", $id);
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }

    public function getIdCommands($commands)
    {
        $data = array();

        foreach ($commands as $command) {
            $data[$command["id"]] = $this->getProductsCommands($command["id"]);
        }
        return $data;
    }
}