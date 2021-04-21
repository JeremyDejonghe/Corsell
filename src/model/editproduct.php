<?php

class EditProductModel
{
   
    public $picture;

    public function __construct($db)
    {
        $this->db =$db;

        if(!empty($_POST))
        {
            $this->name = trim(strip_tags($_POST["name"]));
            $this->description = trim(strip_tags($_POST["description"]));
            $this->price = trim(strip_tags($_POST["price"]));
            $this->promo = trim(strip_tags($_POST["promo"]));
            $this->quantity = trim(strip_tags($_POST["quantity"]));
            $this->id_category = trim(strip_tags($_POST["category"]));
            $this->id_brands= trim(strip_tags($_POST["brands"]));
            $this->id_subcategory = trim(strip_tags($_POST["subcategory"]));

        }
        if(isset($_GET["id"])){
            $this->id = trim(strip_tags($_GET["id"]));
        }
    }
}