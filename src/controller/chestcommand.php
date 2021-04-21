<?php
class ChestCommandController
{
    protected $model;

    public function __construct(ChestCommandModel $model)
    {
        $this->model = $model;
    }

    public function getDataForm()
    {
        
        return array(
            "id_payment" => $this->model->id_payment,
            "id_delivery" => $this->model->id_delivery
        );
    }

    public function getDelivery()
    {
        $query = $this->model->db->query("SELECT id, name FROM delivery");
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }

    public function getPayment()
    {
        $query = $this->model->db->query("SELECT id, name FROM payment");
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }

    public function getChest()
    {
        $id = implode("\",\"", $_SESSION["chest"]);
        $query = $this->model->db->prepare("SELECT id, name, picture, price FROM products WHERE id IN (\"{$id}\")");
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }

    public function getTotal($products)
    {
        $total = 0;
        foreach($products as $product) {
            $total += $product["price"];        
        }
        return $total;
    }
    
    public function addCommand()
    {
        $query = $this->model->db->prepare("INSERT INTO commands (id_user, id_payment, id_delivery) VALUES (:id_user, :id_payment, :id_delivery)");
        $query->bindParam(":id_user", $_SESSION["user_id"]);
        $query->bindParam(":id_payment", $this->model->id_payment);
        $query->bindParam(":id_delivery", $this->model->id_delivery);
        if ($query->execute()) {
            $idCommand = $this->model->db->lastInsertId();
            foreach ($_SESSION["chest"] as $data) {
                $query = $this->model->db->prepare("INSERT INTO products_command (id_command, id_products) VALUES (:id_command, :id_product)");
                $query->bindParam(":id_command", $idCommand);
                $query->bindParam(":id_product", $data);
                $query->execute();
            }     
        }
    }
}