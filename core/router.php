
<?php

class Router {
    private array $routes = [];

    public function __construct() {
        global $routes;
        $this->routes = $routes;
    }

    public function dispatch(string $url): void {
        $url = $url === '' ? '/' : $url;

        if (!isset($this->routes[$url])) {
            require_once ROOT . "/app/controllers/error.controler.php";
            $controller = new ErreurController();
            $controller->index();

            return;
        }


        $route = $this->routes[$url];

        $controllerName = $route['controller'];
        $method = $route['method'];

        $file = strtolower($controllerName) . '.controler.php';
        require_once ROOT . "/app/controllers/" . $file;

        $controller = new $controllerName();

        call_user_func([$controller, $method]);
    }

}


?>







 