<?php
require_once("../config/index.php");
require_once("../config/db.php");

$db = new DB(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);

$query = $db->query("SELECT * FROM subcategory");
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res);

