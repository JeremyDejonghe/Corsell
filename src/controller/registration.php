<?php
require("cryptPassword.php");
class RegistrationController extends CryptPasswordController
{
    private $model;

    public function __construct(RegistrationModel $model)
    {
        $this->model = $model;
    }

    public function getDataForm()
    {
        return array(
            "email" => $this->model->email,
            "emailConfirm" => $this->model->emailConfirm,
            "password" => $this->model->password,
            "passwordConfirm" => $this->model->passwordConfirm,
            "firstname" => $this->model->firstname,
            "lastname" => $this->model->lastname,
            "age" => $this->model->age,
            "pseudo" => $this->model->pseudo,
            "avatar" => $this->model->avatar,
            "adress" => $this->model->adress,
            "user_category" => $this->model->id_user_category




        );
    }

    public function validateForm()
    {
        if (($this->model->email != $this->model->emailConfirm) || ($this->model->password != $this->model->passwordConfirm)) {
            return false;
        } else {
            // On valide la présence ou non d'une lettre majuscule, minuscule et d'un chiffre
            $uppercase = preg_match("/[A-Z]/", $this->model->password);
            $lowercase = preg_match("/[a-z]/", $this->model->password);
            $number = preg_match("/[0-9]/", $this->model->password);
            // Caractère spécial
            $specialChar = preg_match("/[^a-zA-Z0-9]/", $this->model->password);

            if (!$uppercase || !$lowercase || !$number || !$specialChar || strlen($this->model->password) < 8) {
                return false;
            }
        }

        return true;
    }



    public function addUser(): bool
    {
        $password = $this->cryptPassword($this->model->password);

        $query = $this->model->db->prepare("INSERT INTO users (firstname, lastname, pseudo, adress, age,email,password,avatar,id_users_category) VALUES(:firstname, :lastname, :pseudo,:adress,:age,:email,:password,:avatar,:user_category)");
        $query->bindParam(":firstname", $this->model->firstname);
        $query->bindParam(":lastname", $this->model->lastname);
        $query->bindParam(":pseudo", $this->model->pseudo);
        $query->bindParam(":adress", $this->model->adress);
        $query->bindParam(":age", $this->model->age);
        $query->bindParam(":email", $this->model->email);
        $query->bindParam(":password", $password);
        $query->bindParam(":avatar", $this->model->avatar);
        $query->bindParam(":user_category", $this->model->id_user_category);


        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getJobs()
    {
        $query = $this->model->db->query("SELECT * FROM users_category LIMIT 0,2");
        $res = $query->fetchAll();
        return $res;
    }
}
