<?php

namespace Engine\Core;

class Router
{
    protected static $instance;

    public $routes = array();
    public $vars = array();
    public $requestUri;
    public $requestMethod;

    /**
     * Get Singleton instance of class.
     */
    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    protected function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }


    /**
     * Add route rule.
     *
     * @param string|array $route A URI route string or array
     * @param mixed $handler Any callable or string with controller classname and action method like "ControllerClass@methodAction"
     */
    public function add($route, $handler = null)
    {
        if ($handler != null && !is_array($route)) {
            $route = array($route => $handler);
        }
        $this->routes = array_merge($this->routes, $route);
    }

    /**
     * Current processed URI
     *
     * @return string
     */
    public static function currentUri()
    {
        return (self::getInstance()->requestUri ?: '/');
    }

    /**
     * Process requested URI.
     *
     */
    public function dispatch()
    {
        $uri = $_SERVER['REQUEST_URI'];

        $uri = rtrim($uri, '/');

        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }
        $uri = rawurldecode($uri);

        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->requestUri = $uri;

        // if URI equals to route
        if (isset($this->routes[$uri])) {
            return $this->routes[$uri];
        }

        foreach ($this->routes as $route => $handler) {
            // Replace wildcards by regex
            if (strpos($route, ':') !== false) {
                $route = str_replace(
                    [':any', ':num'],
                    ['(.+)', '([0-9]+)'],
                    $route
                );
            }

            // Route rule matched
            if (preg_match('#^' . $route . '$#', $uri, $matches)) {
                /* 
                // TODO: Handler placeholders
                if (strpos($handler, '$') !== false) {
                $handler = preg_replace('#^'.$route.'$#', $handler, $uri);
                } */
                $this->vars = array_slice($matches, 1);
                return $handler;
            }
        }
    }

    /**
     * Executing application action.
     *
     * @param string|callable $handler
     * @param array $vars
     */
    public static function execute($handler, $vars = null)
    {
        // execute action in callable
        if (is_callable($handler)) {
            return call_user_func_array($handler, $vars);
        } // execute action in controllers
        elseif (strpos($handler, '@')) {
            $ca = explode('@', $handler);
            $controllerName = $ca[0];
            $action = $ca[1];

            $controllerName = '\\App\\Controllers\\' . $controllerName;

            if (class_exists($controllerName)) {
                $controller = new $controllerName();
            } else {
                throw new \Exception("Controller class '{$controllerName}' not found");
            }
            if (!method_exists($controller, $action)) {
                throw new \Exception("Method '{$controllerName}::{$action}' not defined");
            }
            return call_user_func_array(array($controller, $action), $vars);
        }
    }
}
