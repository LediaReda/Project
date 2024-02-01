<?php
session_start();
define("MAIN_PATH", dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
define("URL", "http://127.0.0.1:82/G-139/G-139/news-app/news-app/");

// autoload required files
require_once MAIN_PATH . "app/request.php";
require_once MAIN_PATH . "app/database.php";
require_once MAIN_PATH . "app/session.php";
require_once MAIN_PATH . "app/validation.php";
