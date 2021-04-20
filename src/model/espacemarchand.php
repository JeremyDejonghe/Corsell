<?php
class EspaceMarchandModel
{
    public function __construct($db)
    {
        $this->db = $db;
        $this->idUser = $_SESSION["user_id"];
    }
}