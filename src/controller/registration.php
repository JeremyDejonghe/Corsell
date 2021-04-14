<?php
class RegistrationController
    {
        private $model;

        public function __construct(RegistrationController $model)
    {
        $this->model = $model;
        
    }
    public function registration()
    {
        $query = $this->model->db->prepare("INSERT INTO users (firstname, lastname, pseudo, adress, age,email,password,avatar,prime, id_users_category) VALUES(:firstname, :lastname, :pseudo,:adress,:age,:email,:password,:avatar,:user_category)");
        $query->bindParam(":firstname", $this->model->firstname);
        $query->bindParam(":lastname", $this->model->lastname);
        $query->bindParam(":pseudo", $this->model->pseudo);
        $query->bindParam(":adress", $this->model->adress);
        $query->bindParam(":age", $this->model->age);
        $query->bindParam(":email", $this->model->email);
        $query->bindParam(":password", $this->model->password);
        $query->bindParam(":avatar", $this->model->avatar);
        $query->bindParam(":prime", $this->model->prime);
        $query->bindParam(":user_category", $this->model->id_user_category);


 
        if ($query->execute()) {
            return true;
        } else {
            return $query->errorInfo();
        }
    }
    ?>