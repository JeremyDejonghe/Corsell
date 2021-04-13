<?php
require("common.php");

class BrandDetailController extends CommonController
{
    protected $model;

    public function __construct(BrandDetailModel $model)
    {
        $this->model=$model;
        
    }
// Recupération des catégories en bdd 

public function getBrandDetail()
{
    $query=$this->model->db->prepare("Select * from brands where id=:id");
    $query->bindParam(":id", $this->model->id, PDO::PARAM_INT);
    $query->execute();
    $res = $query->fetch();
    return $res;
} 

}

?>