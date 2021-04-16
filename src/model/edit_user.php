<?php

class Edit_UserModel
{
    public function __construct($db)
    {
        $this->db = $db;

        if(!empty($_POST))
        {
            $this->firstname = trim(strip_tags($_POST["firstname"]));
            $this->lastname = trim(strip_tags($_POST["lastname"]));
            $this->pseudo = trim(strip_tags($_POST["pseudo"]));
            $this->adress = trim(strip_tags($_POST["adress"]));
            $this->age = trim(strip_tags($_POST["age"]));
            $this->avatar = trim(strip_tags($_POST["avatar"]));
            $this->id_users_category = trim(strip_tags($_POST["id_users_category"]));
        }
    }
}