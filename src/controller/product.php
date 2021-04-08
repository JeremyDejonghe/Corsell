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
    public function getProducts() {
        $query = $this->model->db->prepare("SELECT name, picture, description, price, promo, id_brand as brand, id_category as category, id_subcategory as subcategory FROM products WHERE id = :id");
        $query->bindParam(":id", $this->model->id);
        $query->execute();
        $res = $query->fetch();
                
        return $res;
    }
}