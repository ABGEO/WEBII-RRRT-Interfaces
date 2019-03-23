<?php

/**
 * This file interface form RRRT (Request, Response, Router, Templater) Request wrapper
 *
 * PHP version 5
 *
 * @category Interface
 * @package  RRRT\Interfaces\HttpUtils
 * @author   Temuri Takalandze <takalandzet@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     null
 */

namespace RRRT\Interfaces\HttpUtils;

/**
 * Interface RequestInterface
 *
 * @category Interface
 * @package  RRRT\Interfaces\HttpUtils
 * @author   Temuri Takalandze <takalandzet@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     null
 */
interface RequestInterface
{
    /**
     * Get request HTTP headers
     *
     * @param null|array|string $key One or more
     *                               HTTP Header for returning
     *
     * @return array|string          Requested HTTP Header or Headers
     */
    public function getHeaders($key = null);

    /**
     * Check if request has header
     *
     * @param string $key Header for checking
     *
     * @return bool
     */
    public function hasHeader($key): bool;

    /**
     * Get request HTTP method
     *
     * @return string Request HTTP Method
     */
    public function getMethod(): string;

    /**
     * Get request path
     *
     * @return string Request Path Info
     */
    public function getPath(): string;

    /**
     * Get request scheme(http or https)
     *
     * @return string Request Scheme http or https
     */
    public function getScheme(): string;

    /**
     * Get request query parameters
     *
     * @return array Request all query parameters
     */
    public function getQueryParams(): array;

    /**
     * Get request query parameter by key
     *
     * @param string $key Requested Parameter
     *
     * @return string|null Requested parameter from query string
     */
    public function getQuery($key): string;

    /**
     * Get request data by method
     *
     * @return array|null Request Data values
     */
    public function getData(): array;
}