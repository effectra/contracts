<?php

namespace Effectra\Contracts\Http;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Represents the Request Foundation Interface.
 */
interface RequestFoundationInterface
{
    /**
     * Creates a ServerRequestInterface instance from the global variables.
     *
     * @return ServerRequestInterface The created ServerRequestInterface instance.
     */
    public static function createFromGlobals(): ServerRequestInterface;
}
