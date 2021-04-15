<?php
class RegistrationView
{
    public function __construct(RegistrationController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "registration.php";
    }
    public function render()
    {
        $message = "";

        if (!empty($_POST)) {
            $data = $this->controller->getDataForm();

            if (!$this->controller->validateForm()) {
                $errors["message"] = "L'email ou le mot de passe ne correspondent pas, le mot de passe doit contenir 8 caractères minimum, une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial";
            }
            if (empty($errors)) {
                if ($this->controller->addUser()) {
                } else {
                    $message = "Erreur de bdd";
                }
            } else {
                // Message d'erreur
                $message = "<div class=\"alert alert-danger\">{$errors["message"]}</div>";
            }
        }
        $jobs = $this->controller->getJobs();
        require($this->template);
    }
}
