<?php

class AddProductModel
{
    public $picture;

    public function __construct($db)
    {
        $this->db =$db;

        if(!empty($_POST))
        {
            $this->name = trim(strip_tags($_POST["name"]));
            // $this->picture = trim(strip_tags($_POST["picture"]));
            $this->description = trim(strip_tags($_POST["description"]));
            $this->price = trim(strip_tags($_POST["price"]));
            $this->promo = trim(strip_tags($_POST["promo"]));
            $this->quantity = trim(strip_tags($_POST["quantity"]));
            $this->id_category = trim(strip_tags($_POST["category"]));
            $this->id_brands= trim(strip_tags($_POST["brands"]));
            $this->id_subcategory = trim(strip_tags($_POST["subcategory"]));
            $this->id_seller = trim(strip_tags($_SESSION["user_id"]));

        }
    }
}