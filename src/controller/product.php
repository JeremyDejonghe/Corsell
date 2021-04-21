<?php
require("common.php");
class ProductController extends CommonController
{
    protected $model;

    public function __construct(ProductModel $model)
    {
        $this->model = $model;
    }

    /**
     * Récupération des produits en bdd
     */
    public function getProduct()
    {
        $query = $this->model->db->prepare("SELECT p.name as productName, p.id, p.picture, p.description, p.price, p.promo, p.quantity ,b.name as productBrand, c.name as productCategory, c.picture as pictureCategory, s.name as productSubcategory, b.id as idBrand, b.picture as pictureBrand, c.id as idCategory, s.id as idSubcategory
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
}

