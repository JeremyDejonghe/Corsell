<?php
class ProductController
{
    private $model;

    public function __construct(ProductModel $model)
    {
        $this->model = $model;
    }

    /**
     * Récupération des produits en bdd
     */
    public function getProduct()
    {
        $query = $this->model->db->prepare("SELECT p.name as productName, p.picture, p.description, p.price, p.promo, p.quantity ,b.name as productBrand, c.name as productCategory, c.picture as pictureCategory, s.name as productSubcategory, b.id as idBrand, b.picture as pictureBrand, c.id as idCategory, s.id as idSubcategory
        FROM products as p
        inner join category as c 
        on p.id_category = c.id
        inner join brands as b 
        on p.id_brands = b.id
        inner join subcategory as s
        on p.id_subcategory = s.id WHERE p.id = :id");
        $query->bindParam(":id", $this->model->id, PDO::PARAM_INT);
        $query->execute();
        $res = $query->fetch();
        return $res;
    }

    public function getCategoryDetail()
    {
        $query = $this->model->db->query("SELECT c.id , c.name , c.picture, group_concat(s.name) as subname , group_concat(s.id) as subid 
        FROM category as c 
        INNER JOIN subcategory as s 
        ON c.id= s.id_category 
        GROUP BY c.name");
        $res=$query->fetchAll();
        return $res;
    }
}

