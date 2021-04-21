<?php
session_start();

$id = $_GET["id"];
$_SESSION["chest"][] = $id;

header("Location: ./chest");
?>