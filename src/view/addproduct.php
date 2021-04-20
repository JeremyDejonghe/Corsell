<?php
class AddProductView
{
    public function __construct(AddProductController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "addproduct.php";
    }
    public function render()
    {
        if (isset($_SESSION["user_id"]) && $_SESSION["user_ip"] == $_SERVER["REMOTE_ADDR"] && isset($_SESSION["user_category"]) == 2) {
            $message = "";
            if (!empty($_POST)) {
                
                $data = $this->controller->getDataForm();

                if ($this->controller->addProduct()) {
                    header("Location: connexion");
                } else {
                    $message = "Erreur de bdd";
                }
            }
            $categorys = $this->controller->getCategory();
            $brands = $this->controller->getBrands();
            $subcategorys = $this->controller->getSubcategory();

            require($this->template);
        } else {
            header("Location: ./");
        }
    }
}
