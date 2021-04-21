<?php
session_start();
require_once("config/index.php");
require_once("config/db.php");
$id_del = $_GET["id"];

$db = new DB(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);

if (isset($_SESSION["user_id"]) && $_SESSION["user_ip"] == $_SERVER["REMOTE_ADDR"] && isset($_SESSION["user_category"]) == 2) {
    $query = $db->prepare("Select id,picture from products where  id = :id");
    $query->bindParam(":id", $id_del);
    $query->execute();
    $product_del = $query->fetch();
    $picture_del = "./assets/img/" . $product_del["picture"];

    if (unlink($picture_del)) {

        $query = $db->prepare("DELETE from products where  id = :id");
        $query->bindParam(":id", $id_del);

        if ($query->execute()) {

            header("Location: mesproduitsvendus");
        } else {

            header("Location: espacemarchand");
        }
    }
} else {

    header("Location: ./");
}
