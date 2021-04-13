<?php


class CommonController 
{
    // Recupération des catégories en bdd 
    public function getCategoryDetail()
    {
        $query = $this->model->db->query("select c.id , c.name , c.picture, group_concat(s.name) as subname , group_concat(s.id) as subid from category as c inner join subcategory as s on c.id= s.id_category group by c.id");
        $res = $query->fetchAll();
        return $res;
    }
}