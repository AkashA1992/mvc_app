<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:25 PM
 */

class routes
{

    public static function getRoutes()
    {
        //bellow adds routes to your program, routes match the URL and request method with the controller and method.
        //You need to follow this pattern to add new URLS
        //You should improve this function by making functions to create routes in a factory. I will look for this when grading


        //this is the index.php route for POST
        $routes[]=self::create('GET','show','homepage','homepageController','show');
        $routes[]=self::create('POST','create','homepage','homepageController','create');
        $routes[]=self::create('GET','show','tasks','tasksController','show');
        $routes[]=self::create('GET','all','tasks','tasksController','all');
        $routes[]=self::create('GET','all','accounts','accountsController','all');
        $routes[]=self::create('GET','show','accounts','accountsController','show');
        $routes[]=self::create('POST','login','accounts','accountsController','login');
        $routes[]=self::create('GET','logout','accounts','accountsController','logout');
        $routes[]=self::create('POST','delete','tasks','tasksController','delete');        
        $routes[]=self::create('POST','insertTask','tasks','tasksController','insertTask');
        $routes[]=self::create('POST','delete','accounts','accountsController','delete');
        $routes[]=self::create('GET','edit','accounts','accountsController','edit');
        $routes[]=self::create('POST','save','accounts','accountsController','save');
        $routes[]=self::create('POST','save','tasks','tasksController','save');                
        $routes[]=self::create('GET','register','accounts','accountsController','register');
        $routes[]=self::create('POST','register','accounts','accountsController','store');
        $routes[]=self::create('GET','getAllTask','tasks','tasksController','getAllTask');     
           
        return $routes;
    }

    public static function create($http_method,$action,$page,$controller,$method) {
        $route = new route();
        $route->http_method = $http_method;
        $route->action = $action;
        $route->page = $page;
        $route->controller = $controller;
        $route->method = $method;
        
        
        return $route;
    }
}

//this is the route prototype object  you would make a factory to return this

class route
{
    public $page;
    public $action;
    public $method;
    public $controller;
}