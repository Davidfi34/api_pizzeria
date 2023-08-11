<?php


class Router {
    private $routes = [];

    public function get($url, $controllerAction) {
        $this->routes['GET'][$url] = $controllerAction;
    }

    public function post($url, $controllerAction) {
        $this->routes['POST'][$url] = $controllerAction;
    }

    public function patch($url, $controllerAction) {
        $this->routes['PATCH'][$url] = $controllerAction;
    }

    public function put($url, $controllerAction) {
        $this->routes['PUT'][$url] = $controllerAction;
    }


    public function delete($url, $controllerAction) {
        $this->routes['DELETE'][$url] = $controllerAction;
    }


    /**
     * run()
     * @VALIDA ESTRUCTURA DE URL
     *  
     */
    public function run() {
        $method = $_SERVER['REQUEST_METHOD'];
        $url = explode('/', URL);  
        $params = array_values(array_filter($url));

        print_r($params);
    
        $controllerAction = count($params) > 1  
            ? $this->routes[$method]['/'.$_GET['path'].'/id'] 
            : $this->routes[$method]['/'.$_GET['path']];
       
        if (isset($controllerAction)) {
          
            list($controllerName, $methodName) = explode('@', $controllerAction);
            // Cargar el controlador y llamar al método correspondiente
            require_once 'controllers/' . strtolower($controllerName) . '.php';

            $controllerInstance = new $controllerName();

                if (count($params) > 1) {
                    $controllerInstance->$methodName($params); // Pasar parámetros como argumentos separados
                } else {
                    $controllerInstance->$methodName(...$params); // Pasar el array completo como argumento
                }
       
        } else {
            // Manejar ruta no encontrada
            header('HTTP/1.1 404 Not Found');
            echo '404 - Ruta no encontrada';
        }
    }




}


