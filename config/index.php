<?php
require_once("db.php");

// Définir des constantes pour stocker les chemins vers différents dossiers
define("HOST", "http://localhost/corsell");
define("DIR_TEMPLATE", "templates/");
define("DIR_APPLICATION", "src/");
define("DIR_MODEL", DIR_APPLICATION."model/");
define("DIR_VIEW", DIR_APPLICATION."view/");
define("DIR_CONTROLLER", DIR_APPLICATION."controller/");

// DB
define("DB_HOSTNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "corsell_db");
define("DB_PORT", "3306");

$db = new DB(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);