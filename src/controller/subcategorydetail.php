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
        $query = $this->model->db->prepare("select p.id, p.name,p.price,p.picture,p.promo
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

        $res = $query->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
    public function getCategoryDetail()
    {
        $query = $this->model->db->query("select c.id , c.name , c.picture, group_concat(s.name) as subname , group_concat(s.id) as subid from category as c inner join subcategory as s on c.id= s.id_category group by c.name");
        $res=$query->fetchAll();
        return $res;
    }
}