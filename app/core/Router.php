<?php

namespace App\Core;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function get($uri, $controllerAction)
    {
        $this->routes['GET'][$uri] = $controllerAction;
    }

    public function post($uri, $controllerAction)
    {
        $this->routes['POST'][$uri] = $controllerAction;
    }


    public function direct($uri, $method)
    {

        if (array_key_exists($uri, $this->routes[$method])) {
            list($controller, $action) = explode('@', $this->routes[$method][$uri]);
            $controller = new $controller();
            $controller->$action();
        } else {
            $this->render404();
        }
    }

    public function render404()
    {
        http_response_code(404);
        include __DIR__ . '/../views/front/404.php';
    }

    public function run()
    {
        $uri = strtok($_SERVER['REQUEST_URI'], '?');
        $method = $_SERVER['REQUEST_METHOD'];
        $this->direct($uri, $method);
    }
}