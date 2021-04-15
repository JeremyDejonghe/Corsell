<?php

class RegistrationModel
{
    public function __construct($db)
    {
        $this->db =$db;

        if(!empty($_POST))
        {
            $this->firstname = trim(strip_tags($_POST["firstname"]));
            $this->lastname = trim(strip_tags($_POST["lastname"]));
            $this->pseudo = trim(strip_tags($_POST["pseudo"]));
            $this->adress = trim(strip_tags($_POST["adress"]));
            $this->age = trim(strip_tags($_POST["age"]));
            $this->email = trim(strip_tags($_POST["email"]));
            $this->emailConfirm = trim(strip_tags($_POST['emailConfirm']));
            $this->password = trim(strip_tags($_POST["password"]));
            $this->passwordConfirm = trim(strip_tags($_POST['passwordConfirm']));
            $this->avatar = trim(strip_tags($_POST["avatar"]));
            $this->id_user_category = trim(strip_tags($_POST["user_category"]));

        }
    }
}