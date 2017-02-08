<?php
define ('ROOT', dirname(__FILE__));
require_once (ROOT . '/components/Router.php');
require_once (ROOT . '/config/db_connect.php');
$router = new Router();
$router->appStart();
