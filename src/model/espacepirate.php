<?php
class EspacePirateModel
{
    public function __construct($db)
    {
        $this->db = $db;
        $this->idUser = $_SESSION["user_id"];
    }
}
