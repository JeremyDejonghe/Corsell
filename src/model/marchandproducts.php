<?php 
class MarchandProductsModel
{
    public function __construct($db)
    {
        $this->db =$db;
        $this->idUser = $_SESSION["user_id"];
        
        if (isset($_GET["id"])) {
            $this->id = trim(strip_tags($_GET["id"]));
        }
    }
}
