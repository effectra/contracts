<?php

namespace Effectra\Contracts\Http;

use Psr\Http\Message\ResponseInterface;

/**
 * Represents the Response Foundation Interface.
 */
interface ResponseFoundationInterface
{
    /**
     * Sends the provided response.
     *
     * @param ResponseInterface $response The response to send.
     * @return void
     */
    public static function send(ResponseInterface $response): void;
}
