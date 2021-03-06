<?php

class Route {

    static function initial() {
        $controllerName = 'Main';
        $actionName = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($routes[1])) {
            $controllerName = $routes[1];
        }
        if (!empty($routes[2])) {
            $actionName = $routes[2];
        }
        
        $modelName = 'Model_'.$controllerName;
        $controllerName = 'Controller_'.$controllerName;

        $modelFile = strtolower($modelName).'.php';
        $modelPath = "models/".$modelFile;
        if (file_exists($modelPath)) {
            include "models/".$modelFile;
        }
        
        $controllerFile = strtolower($controllerName).'.php';
        $controllerPath = "controllers/".$controllerFile;
        if (file_exists($controllerPath)) {
            include "controllers/".$controllerFile;
        } else {
            Route::Error();
        }
        
        $controller = new $controllerName();
        $action = $actionName;

        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            Route::Error();
        }
    }
    
    static function Error() {
        include "views/404.php";
    }
}
