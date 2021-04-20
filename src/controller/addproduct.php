<?php 

class AddProductController
{
    private $model;
    public function __construct(AddProductModel $model)
    {
        $this->model = $model;
        
    }

    public function getDataForm()
    {
        return array(
            "name" => $this->model->name,
            "picture" => $this->model->picture,
            "description" => $this->model->description,
            "price" => $this->model->price,
            "promo" => $this->model->promo,
            "quantity" => $this->model->quantity,
            "category" => $this->model->id_category,
            "brands" => $this->model->id_brands,
            "subcategory" => $this->model->id_subcategory
        );
    }
    public function addProduct()
    {
        var_dump($this->model);

        $query = $this->model->db->prepare("INSERT INTO products (name,picture,description,price,promo,quantity,id_category,id_brands,id_subcategory) VALUES(:name, :picture, :description, :price, :promo, :quantity, :category, :brands, :subcategory) ");
        $query->bindParam(":name", $this->model->name);
        $query->bindParam(":picture", $this->model->picture);
        $query->bindParam(":description", $this->model->description);
        $query->bindParam(":price", $this->model->price);
        $query->bindParam(":promo", $this->model->promo);
        $query->bindParam(":quantity", $this->model->quantity);
        $query->bindParam(":category", $this->model->id_category);
        $query->bindParam(":brands", $this->model->id_brands);
        $query->bindParam(":subcategory", $this->model->id_subcategory);
       
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    
    /**
     * Upload d'une image pour le matelas dans le dossier assets/img/products
     */
    public function uploadImage($file)
    {

        $fileTmpPath = $file["tmp_name"];
        $fileName = $file["name"];
        $fileType = $file["type"];

        $fileNameArray = explode(".", $fileName);
        $fileExtension = end($fileNameArray);
        $newFileName = md5(time() . $fileName) . "." . $fileExtension;
        var_dump($newFileName);

        $fileDestPath = "./assets/img/{$newFileName}";

        $allowedTypes = array("image/jpeg", "image/png");
        if (in_array($fileType, $allowedTypes)) {
            // Le type de fichier est bien valide on peut donc ajouter le fichier à notre serveur
            move_uploaded_file($fileTmpPath, $fileDestPath);

            $this->model->picture = $newFileName;
        } else {
            // Le type du fichier est incorrect
            return false;
        }

        return true;
    }

    public function getCategory()
    {
        $query = $this->model->db->query("SELECT * FROM category");
        $res = $query->fetchAll();
        return $res;
    }

    public function getBrands()
    {
        $query = $this->model->db->query("SELECT * FROM brands");
        $res = $query->fetchAll();
        return $res;
    }

    public function getSubcategory()
    {
        $query = $this->model->db->query("SELECT * FROM subcategory");
        $res = $query->fetchAll();
        return $res;
    }    

}