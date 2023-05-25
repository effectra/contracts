<?php

namespace Effectra\Contracts\Http;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents the Router Dispatcher Interface.
 */
interface RouterDispatcher extends RouterInterface
{
    /**
     * Adds a request to the dispatcher.
     *
     * @param RequestInterface $request The request to add.
     * @return void
     */
    public function addRequest(RequestInterface $request): void;

    /**
     * Adds a response to the dispatcher.
     *
     * @param ResponseInterface $response The response to add.
     * @return void
     */
    public function addResponse(ResponseInterface $response): void;
}
