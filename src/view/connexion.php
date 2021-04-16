<?php

class ConnexionView
{

    public function __construct(ConnexionController $controller)
    {
        $this->controller=$controller;
        $this->template=DIR_TEMPLATE."connexion.php";
    }

    public function render()
    {
        $message = "";

        if (!empty($_POST)) {
            if($this->controller->validateLogin()) {
                if($_SESSION["user_category"] == 1){
                    header("Location: espacePirate"); 
                }
                elseif($_SESSION["user_category"] == 2){
                    header("Location: espaceMarchand");
                }
                elseif($_SESSION["user_category"] == 3){
                    header("Location: espaceCorsaire");
                }
                else{
                    header("Location: ./");
                }
               
            } else {
                // Message d'erreur
                $message = "<div class=\"alert \">Impossible de se connecter avec les informations saisies</div>";
            }
        }
        require($this->template);
    }

}