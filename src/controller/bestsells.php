<?php
require("common.php");

class BestsellsController extends CommonController
{
    protected $model;

    public function __construct(BestsellsModel $model)
    {
        $this->model=$model;
        
    }
    // Recupération des produits les plus vendus en bdd
    public function getCategories()
    {
        $res = $this->model->db->query("SELECT id FROM category");
        return $res;
    }
    
    public function getProductsFromCategory($id)
    {
        $query = $this->model->db->prepare("SELECT p.name AS productname,p.id AS productid, p.picture, p.price, c.name, p.sell_number, c.id as categoryid 
        FROM products AS p
        INNER JOIN  category AS c 
        ON p.id_category = c.id 
        WHERE c.id = :id 
        ORDER BY p.sell_number DESC 
        LIMIT 0,3");
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        $query->execute();
        $res = $query->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getBestsellsProducts($categories)
    {
        $data = array();

        foreach ($categories as $category) {
            $data[$category["id"]] = $this->getCategories($category["id"]);
        }
        return $data;
    }

}