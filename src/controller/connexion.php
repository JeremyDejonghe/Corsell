<?php
class ConnexionController
{
    private $model;

    public function __construct(ConnexionModel $model)
    {
        $this->model = $model;
    }

    public function getUser($email)
    {
        $res = $this->model->db->prepare("SELECT id, pseudo,firstname, email, avatar , id_users_category, password FROM users WHERE email = :email");
        $res->bindValue(":email", $email, PDO::PARAM_STR);
        $res->execute();
        $res = $res->fetch();
        return $res;
    }

    
    public function validateLogin(): bool
    {
        $result = $this->getUser($this->model->email);
        
        if (!empty($result) && password_verify($this->model->password, $result["password"])) {
            $_SESSION["session_id"] = md5($result["email"]);
            $_SESSION["user_name"] = $result["pseudo"];
            $_SESSION["user_ip"] = $_SERVER["REMOTE_ADDR"];
            $_SESSION["user_category"] =$result["id_users_category"];

            return true;
        }

        return false;
    }
}