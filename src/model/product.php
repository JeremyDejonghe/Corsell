<?php
class ProductModel
{
    public function __construct($db){
        $this->db = $db;

        if (isset($_GET["id"])) {
            $this->id = trim(strip_tags($_GET["id"]));
        }
    }

}