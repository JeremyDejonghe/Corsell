<?php
class ConnexionController
{
    private $model;

    public function __construct(ConnexionModel $model)
    {
        $this->model = $model;
    }

    public function getUsers()
    {
        $res = $this->model->db->query("select * from users");
        return $res;
    }
}