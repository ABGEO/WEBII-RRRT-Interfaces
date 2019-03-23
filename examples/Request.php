<?php

namespace RRRT\HttpUtils;

use RRRT\Interfaces\HttpUtils\RequestInterface;

class Request implements RequestInterface
{
    public function getData(): array
    {
        // TODO: Implement getData() method.
    }

    public function getHeaders($key = null)
    {
        // TODO: Implement getHeaders() method.
    }

    public function getMethod(): string
    {
        // TODO: Implement getMethod() method.
    }

    public function getPath(): string
    {
        // TODO: Implement getPath() method.
    }

    public function getQuery($key): string
    {
        // TODO: Implement getQuery() method.
    }

    public function getQueryParams(): array
    {
        // TODO: Implement getQueryParams() method.
    }

    public function getScheme(): string
    {
        // TODO: Implement getScheme() method.
    }

    public function hasHeader($key): bool
    {
        // TODO: Implement hasHeader() method.
    }
}