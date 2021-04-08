<?php
session_start();

// Configuration
require_once("config/index.php");

// Database
require_once("config/db.php");

$db = new DB(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);

$page = "home";
if (isset($_GET["page"]) && !empty($_GET["page"])) {
	$page = $_GET["page"];
}

$data = array(
	"home" => array(
        "model" => "HomeModel", 
        "view" => "HomeView", 
        "controller" => "HomeController"
    ),
	"product" => array(
		"model" => "ProductModel",
		"view" => "ProductView",
		"controller" => "ProductController"
	)
);

$find = false;
foreach($data as $key => $components){
	if ($page == $key) {
		$find = true;
		
		$model = $components["model"];
		$view = $components["view"];
		$controller = $components["controller"];

		break;
	}
}

if ($find) {
	require_once(DIR_MODEL . $page . ".php");
	require_once(DIR_CONTROLLER . $page . ".php");
	require_once(DIR_VIEW . $page . ".php");
	$pageModel = new $model($db);
	$pageController = new $controller($pageModel);
	$pageView = new $view($pageController);
	$pageView->render();
}