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

namespace RRRT\Interfaces\Templater;

/**
 * Interface TemplaterInterface
 *
 *
 * addRoute() and matchRoutes() could be protected functions
 *
 * @category Interface
 * @package  RRRT\Interfaces\Router
 * @author   Giorgi Kapanadze <kapanadzeg41@gmail.com>
 */
interface TemplaterInterface
{
    /**
     * Render templates feel free to use your logic in this function , recommendation use output buffering
     *
     *
     * @param String $template template name you are going to render
     *
     * @param String $title title you wont to see in this template
     *
     * @param array $params array of parameters you are going to use in template , recommendation use extract() function
     */

    public function render($template,$title,$params);


    /**
     * Function for rendering template for error pages
     *
     * Make template for your error pages and render them with specific headers
     * usage e.g  http_response_code($code)
     *
     *
     * @param  Int $code
     */
    public function errorPage($code);

    
}