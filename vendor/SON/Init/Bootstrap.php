<?php

namespace SON\Init;

abstract class Bootstrap {
    
    protected $routes;

    public function __construct() {   
        $this->_initRoutes();
        $this->run($this->getUrl());
    }
    
    public function setRoutes(array $routes) {
        
        $this->routes = $routes;
    }
    
    protected function run($url) {
        array_walk($this->routes, function($route) use($url) {
            
            if($url==$route['route']) {
                $class = "App\\Controllers\\".ucfirst($route['controller']);
                $controller = new $class;
                $controller->$route['action']();
            }
        });
    }
    
    protected function getUrl() {
        #return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        $pattern = "#([a-zA-Z0-9\/]+)(\?.*)?#";
        $x = preg_replace($pattern,"$1",$_SERVER['REQUEST_URI']);
        return $x;
    }
    
    abstract protected function _initRoutes();
    
}
