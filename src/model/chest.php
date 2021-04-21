<?php
class ChestModel
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
    }
}