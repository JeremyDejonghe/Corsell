<?php

class CategoryDetailController
{
    private $model;

    public function __construct(CategoryDetailModel $model)
    {
        $this->model = $model;
    }

    // Recupération des catégories en bdd 
    public function getCategoryDetail()
    {
        $query = $this->model->db->query("select c.id , c.name , c.picture, group_concat(s.name) as subname , group_concat(s.id) as subid from category as c inner join subcategory as s on c.id= s.id_category group by c.name");
        $res=$query->fetchAll();
        return $res;
    }
    public function getCategorySubcategories()
    {
        $query = $this->model->db->prepare("select p.name as productname, p.picture, p.price, s.name from products as p
        inner  join  subcategory as s 
        on p.id_subcategory = s.id where s.id = :id order by s.name");
        $query->bindParam(":id", $this->model->id,PDO::PARAM_INT);
        $query->execute();
        $res=$query->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    public function getSubcategoryName()
    {
        $query = $this->model->db->prepare("select s.name, s.id  from subcategory as s 
        inner join category as c on c.id = s.id_category 
        where  c.id = :id");
        $query->bindParam(":id", $this->model->id,PDO::PARAM_INT);
        $query->execute();
        $res=$query->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    public function getCategoryName()
    {
        $query = $this->model->db->prepare("select name from category where id = :id");
        $query->bindParam(":id", $this->model->id,PDO::PARAM_INT);
        $query->execute();
        $res=$query->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
}
