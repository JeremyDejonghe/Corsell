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
    }
}
