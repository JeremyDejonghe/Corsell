<?php
require("cryptPassword.php");
class Edit_UserController extends CryptPasswordController
    {
        private $model;

        public function __construct(Edit_UserModel $model)
    {
        $this->model = $model;
        
    }

    public function getDataUser() {
        $query = $this->model->db->prepare("SELECT firstname, lastname, pseudo, avatar, adress, age, id_users_category FROM users WHERE id = :id");
        $query->bindParam(":id", $_SESSION["user_id"]);
        $query->execute();
        $res = $query->fetch();
        return $res;
    }

    public function validateForm() {
        return true;
    }



    public function editUser() : bool
    {
        $query = $this->model->db->prepare("UPDATE users SET firstname = :firstname, lastname = :lastname, pseudo = :pseudo, adress = :adress, age = :age, avatar = :avatar, id_users_category = :id_users_category WHERE id = :id");
        $query->bindParam(":firstname", $this->model->firstname);
        $query->bindParam(":lastname", $this->model->lastname);
        $query->bindParam(":pseudo", $this->model->pseudo);
        $query->bindParam(":adress", $this->model->adress);
        $query->bindParam(":age", $this->model->age);
        $query->bindParam(":avatar", $this->model->avatar);
        $query->bindParam(":id_users_category", $this->model->id_users_category);
        $query->bindParam(":id", $_SESSION["user_id"]);

        if ($query->execute()) { 
            $_SESSION["user_name"] = $this->model->pseudo;
            return true;
        } else {
            return false;
        }
    }
    public function getJobs(){
        $query = $this->model->db->query("SELECT * FROM users_category LIMIT 0,2");
        $res = $query->fetchAll();
        return $res; 
    }
}