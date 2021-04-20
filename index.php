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
	),
	"subcategorydetail"=>array(
		"model"=>"SubcategorydetailModel",
		"view"=>"SubcategorydetailView",
		"controller"=>"SubcategorydetailController"
	),
	"categories" => array(
		"model" => "CategoriesModel",
		"view" => "CategoriesView",
		"controller" => "CategoriesController"
	),
	"categorydetail" => array(
		"model" => "CategoryDetailModel",
		"view" => "CategoryDetailView",
		"controller" => "CategoryDetailController"
	),
	"brands" => array(
		"model" => "BrandsModel",
		"view" => "BrandsView",
		"controller" => "BrandsController"
	),
	"branddetail" => array(
		"model" => "BrandDetailModel",
		"view" => "BrandDetailView",
		"controller" => "BrandDetailController"
	),
	"bestsells" => array(
		"model" => "BestsellsModel",
		"view" => "BestsellsView",
		"controller" => "BestsellsController"
	),
	"lastnew" => array(
		"model" => "LastnewModel",
		"view" => "LastnewView",
		"controller" => "LastnewController"
	),
	"essentials" => array(
		"model" => "EssentialsModel",
		"view" => "EssentialsView",
		"controller" => "EssentialsController"
	), 
	"connexion" => array(
		"model" => "ConnexionModel",
		"view" => "ConnexionView",
		"controller" => "ConnexionController"
	),
	"registration" => array(
		"model" => "RegistrationModel",
		"view" => "RegistrationView",
		"controller" => "RegistrationController"
	),
	"search" => array(
		"model" => "SearchModel",
		"view" => "SearchView",
		"controller" => "SearchController"
	),
	"security" => array(
		"model" => "SecurityModel",
		"view" => "SecurityView",
		"controller" => "SecurityController"
	),
	"edit_user" => array(
		"model" => "Edit_UserModel",
		"view" => "Edit_UserView",
		"controller" => "Edit_UserController"
	),
	"reset_password" => array(
		"model" => "Reset_PasswordModel",
		"view" => "Reset_PasswordView",
		"controller" => "Reset_PasswordController"
	),
	"espacepirate" => array(
		"model" => "EspacePirateModel",
		"view" => "EspacePirateView",
		"controller" => "EspacePirateController"
	),
	"espacemarchand" => array(
		"model" => "EspaceMarchandModel",
		"view" => "EspaceMarchandView",
		"controller" => "EspaceMarchandController"
	)
);

$find = false;
foreach ($data as $key => $components) {
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
