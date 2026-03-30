<?php
class App
{
    // Default Controller, Method, and Parameters
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    // Constructor 
    public function __construct()
    {
        // Set URL Formatter
        $url = $this->parseUrl();

        // Check & call Controller name
        if (isset($url[0])) {
            $controllerName = ucfirst($url[0]) . 'Controller';
            // Check if controller exists in directory
            if (file_exists(BACKEND_PATH . '/controllers/' . $controllerName . '.php')) {
                $this->controller = $controllerName;
                unset($url[0]); // Remove controller from URL array
            }
        }

        // Get Controller 
        require_once BACKEND_PATH . '/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Check & call method in Controller
        if (isset($url[1])) {
            // Check if method exists in controller
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Get Parameters
        $this->params = $url ? array_values($url) : [];

        // Get Controller, Method & Parameters
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    // URL Formatter
    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return explode('/', $url);
        }
        return [];
    }
}
?>