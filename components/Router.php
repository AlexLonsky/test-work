<?php

class Router
{
    private $routes;
    public function __construct()
    {
        $rotersPath = (ROOT . '/config/routes.php');
        $this->routes = include ($rotersPath);
    }
    public function appStart()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            $uri = trim($_SERVER['REQUEST_URI'],'/');
            foreach ($this->routes as $uriPattern => $path) {
                if (preg_match("~$uriPattern~", $uri)) {
                    $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                    $segments = explode('/', $internalRoute);
                    $ctrlName = array_shift($segments) . 'Controller';
                    $actionName = 'action' . ucfirst(array_shift($segments));
                    $params = $segments;
                    $ctrlFile = ROOT . '/controllers/' . $ctrlName . '.php';
                    if (file_exists($ctrlFile)) {
                        include_once ($ctrlFile);
                    }
                    $ctrlObj = new $ctrlName;
                    $result = $ctrlObj->$actionName($params);
                    if ($result != NULL) {
                        break;
                    }
                }
            }
        }
    }
}