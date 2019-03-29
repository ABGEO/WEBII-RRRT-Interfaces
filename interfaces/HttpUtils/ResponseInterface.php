<?php

/**
 * This file interface for RRRT (Request, Response, Router, Templater)
 * Response wrapper
 *
 * PHP version 5
 *
 * @category Interface
 * @package  RRRT\Interfaces\HttpUtils
 * @author   Temuri Takalandze <takalandzet@gmail.com>
 * @license  https://github.com/ABGEO07/-WEBII-RRRT-Interfaces/blob/master/LICENSE MIT License
 * @link     https://github.com/ABGEO07/WEBII-RRRT-Interfaces
 */

namespace RRRT\Interfaces\HttpUtils;

/**
 * Interface ResponseInterface
 *
 * @category Interface
 * @package  RRRT\Interfaces\HttpUtils
 * @author   Temuri Takalandze <takalandzet@gmail.com>
 * @license  https://github.com/ABGEO07/-WEBII-RRRT-Interfaces/blob/master/LICENSE MIT License
 * @link     https://github.com/ABGEO07/WEBII-RRRT-Interfaces
 */
interface ResponseInterface
{
    /**
     * Get http status code full text.
     *
     * @param int $statusCode HTTP Status Code
     *
     * @return string
     */
    public function getStatusCodeMsg($statusCode);

    /**
     * Set HTTP Headers.
     *
     * @param int   $statusCode HTTP Status Code
     * @param array $headers    HTTP Headers
     *
     * @return void
     */
    public function setHTTPHeaders($statusCode, $headers);

    /**
     * Send Response.
     *
     * @param string $content    Content value
     * @param int    $statusCode HTTP Status Code
     * @param array  $headers    HTTP Headers
     *
     * @return mixed             Content for printing
     */
    public function sendResponse($content, $statusCode = 200, $headers = []);
}