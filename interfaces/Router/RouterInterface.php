<?php

/**
 * This file interface form RRRT (Request, Response, Router, Templater) Router
 *
 * PHP version 7.2
 *
 * @category Interface
 * @package  RRRT\Interfaces\Router
 * @author   Giorgi Kapanadze <kapanadzeg41@gmail.com>
 */

namespace RRRT\Interfaces\Router;

/**
 * Interface RouterInterface
 * This interface is about basic OOP router
 *
 * First of all you should store your routs in specific file e.g routes.json
 *
 * Second step is to get this file in constructor and use addRoute function to add this file in separate
 *      array for future checking e.g $this->routes[$route] = $params,  you can also use regEx for your routes e.g $route = '#^'.$route.'$#';
 *
 * Third step is to match the route with path you can use getPatch function from requestInterface
 *
 * The last step is to write logic of how you would like to run your router in RouterRun() function
 *
 *
 * addRoute() and matchRoutes() could be protected functions
 *
 * My implementation of this interface  https://github.com/GGKapanadze/Go-phpframework/blob/master/src/Core/Service/Router.php
 *
 * @category Interface
 * @package  RRRT\Interfaces\Router
 * @author   Giorgi Kapanadze <kapanadzeg41@gmail.com>
 */
interface RouterInterface
{

    /**
     * Add routes to array
     *
     * @param string $route Routes to add in array
     *
     * @param string | array $params Parameters for added route e.g path,method
     *
     * @return array|string          Requested HTTP Header or Headers
     */
    public function addRoute($route,$params);


    /**
     * Match routes
     *
     *
     * @return bool   true or false in case of matching
     */
    public function matchRoute() : bool ;


    /**
     * Main function to run your router, this function should be used in index.php
     *
     */
    public function routerRun();
}