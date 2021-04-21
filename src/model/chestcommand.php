<?php
class ChestCommandModel
{

    public function __construct($db)
    {
        $this->db=$db;

        if(isset($_GET["id"])){
            $this->id=trim(strip_tags($_GET["id"]));
        }

        if(isset($_SESSION["user_id"])){
            $this->id=trim(strip_tags($_SESSION["user_id"]));
        }

        if(!empty($_POST))
        {
            $this->id_payment = trim(strip_tags($_POST["id_payment"]));
            $this->id_delivery = trim(strip_tags($_POST["id_delivery"]));
        }
    }
}