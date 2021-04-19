<?php 

class AddProductController
{
    private $model;
    public function __construct(AddProductModel $model)
    {
        $this->model = $model;
        
    }

    public function getDataForm()
    {
        return array(
            "name" => $this->model->name,
            "picture" => $this->model->picture,
            "description" => $this->model->description,
            "price" => $this->model->price,
            "promo" => $this->model->promo,
            "quantity" => $this->model->quantity,
            "category" => $this->model->id_category,
            "brands" => $this->id_model->brands,
            "subcategory" => $this->model->id_subcategory
        );
    }
    public function addProduct()
    {
        $query = $this->model->db->prepare("INSERT INTO products (name,picture,description,price,promo,quantity,id_category,id_brands,id_subcategory) VALUES(:name, :picture, :description, :price, :promo, :quantity, :category, :brands, :subcategory) ");
        $query->bindParam(":name", $this->model->name);
        $query->bindParam(":picture", $this->model->picture);
        $query->bindParam(":description", $this->model->description);
        $query->bindParam(":price", $this->model->price);
        $query->bindParam(":promo", $this->model->promo);
        $query->bindParam(":quantity", $this->model->quantity);
        $query->bindParam(":category", $this->model->id_category);
        $query->bindParam(":brands", $this->model->id_brands);
        $query->bindParam(":subcategory", $this->model->id_subcategory);
       
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    public function getCategory()
    {
        $query = $this->model->db->query("SELECT * FROM category");
        $res = $query->fetchAll();
        return $res;
    }

    public function getBrands()
    {
        $query = $this->model->db->query("SELECT * FROM brands");
        $res = $query->fetchAll();
        return $res;
    }

    public function getSubcategory()
    {
        $query = $this->model->db->query("SELECT * FROM subcategory");
        $res = $query->fetchAll();
        return $res;
    }    

}