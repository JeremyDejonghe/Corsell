<?php
require("common.php");

class EssentialsController extends CommonController
{
    protected $model;

    public function __construct(EssentialsModel $model)
    {
        $this->model = $model;
    }
    
    // Recupération des essentiels du pirate en bdd 
    public function getEssentials()
    {
        $res = $this->model->db->query("SELECT id, picture, name FROM products ORDER BY rand() LIMIT 0, 21");
        return $res;
    }
}
