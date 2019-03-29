<?php

namespace RRRT\HttpUtils;

use RRRT\Interfaces\HttpUtils\ResponseInterface;

class Response implements ResponseInterface
{
    public function getStatusCodeMsg($statusCode)
    {
        // TODO: Implement getStatusCodeMsg() method.
    }

    public function sendResponse($content, $statusCode = 200, $headers = [])
    {
        // TODO: Implement sendResponse() method.
    }

    public function setHTTPHeaders($statusCode, $headers)
    {
        // TODO: Implement setHTTPHeaders() method.
    }
}