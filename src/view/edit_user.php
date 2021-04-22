<?php
class Edit_UserView
{
    public function __construct(Edit_UserController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "edit_user.php";
    }
    public function render()
    {
        $message = "";
        if (isset($_SESSION["user_id"]) && $_SESSION["user_ip"] == $_SERVER["REMOTE_ADDR"]) {
            
            if (!empty($_POST)) {
                if (!$this->controller->validateForm()) {
                    $errors["message"] = "L'email ou le mot de passe ne correspondent pas, le mot de passe doit contenir 8 caractères minimum, une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial";
                } else {
                    header("location: ./");
                }
                if (empty($errors)) {
                    if (!$this->controller->editUser()) {
                        $message = "Erreur de bdd";
                    }
                } else {
                    // Message d'erreur
                    $message = "<div class=\"alert alert-danger\">{$errors["message"]}</div>";
                }
            }
            $data = $this->controller->getDataUser();
            $jobs = $this->controller->getJobs();
            require($this->template);
        } else {
            header("Location: ./");
        }
    }
}
