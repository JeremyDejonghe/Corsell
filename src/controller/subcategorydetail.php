<?php

class SubcategorydetailController
{
    private $model;

    public function __construct(SubcategorydetailModel $model)
    {
        $this->model = $model;

    }
    public function getProductSubCategory()
    {
        $query = $this->model->db->prepare("select p.name,p.price,p.picture
        from products as p
        inner join subcategory as s 
        on p.id_subcategory = s.id 
        where s.id=:id");
        $query->bindParam(":id",$this->model->id,PDO::PARAM_INT);
        $query->execute(); 

        $res = $query->fetchAll();
        return $res;
    }
    public function getNameSubCategory()
    {
        $query = $this->model->db->prepare("select name from subcategory where id=:id");
        $query->bindParam(":id",$this->model->id,PDO::PARAM_INT);
        $query->execute(); 

        $res = $query->fetch();
        return $res;
    }
}