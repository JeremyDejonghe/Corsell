<?php

class EditProductController
{

    private $model;
    public function __construct(EditProductModel $model)
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


    // Récupération d'un produit

    public function getproduct()
    {

        $query = $this->model->db->prepare("SELECT name,picture,description,price,promo,quantity,id_category,id_brands,id_subcategory 
            FROM products
            WHERE id=:id");
        $query->bindParam(":id", $this->model->id);
        $query->execute();
        $res = $query->fetch();

        return $res;
    }


    public function editproduct()
    {
        $query = $this->model->db->prepare("SELECT id,picture FROM products WHERE id=:id");
        $query->bindParam(":id", $this->model->id);
        $query->execute();
        $product_del = $query->fetch();
        $picture_del = "./assets/img/" . $product_del["picture"];
        unlink($picture_del);

        $query = $this->model->db->prepare("UPDATE products 
                    SET name=:name, picture=:picture, description=:description, price=:price, promo=:promo, quantity=:quantity, id_category=:category, id_brands=:brands, id_subcategory=:subcategory
                    WHERE id=:id");
        $query->bindParam(":name", $this->model->name);
        $query->bindParam(":picture", $this->model->picture);
        $query->bindParam(":description", $this->model->description);
        $query->bindParam(":price", $this->model->price);
        $query->bindParam(":promo", $this->model->promo);
        $query->bindParam(":quantity", $this->model->quantity);
        $query->bindParam(":category", $this->model->id_category);
        $query->bindParam(":brands", $this->model->id_brands);
        $query->bindParam(":subcategory", $this->model->id_subcategory);
        $query->bindParam(":id", $this->model->id);

        if ($query->execute()) {
            return true;
        } else {
            return $query->errorInfo();
        }
    }

    public function uploadImage($file)
    {

        $fileTmpPath = $file["tmp_name"];
        $fileName = $file["name"];
        $fileType = $file["type"];

        $fileNameArray = explode(".", $fileName);
        $fileExtension = end($fileNameArray);
        $newFileName = md5(time() . $fileName) . "." . $fileExtension;

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
