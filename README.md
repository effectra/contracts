# Effectra\Contracts Package

The `Effectra\Contracts` package provides a set of contracts/interfaces that define the standardized behavior and contracts for various components used in the Effectra application.

## Installation

You can install the package via Composer by running the following command:

```bash
composer require effectra/contracts
```

## Usage

The package includes the following contracts/interfaces:

- `Http\RequestFoundationInterface`: Defines the contract for creating a `ServerRequestInterface` instance from global variables.
- `Http\ResponseFoundationInterface`: Defines the contract for sending a `ResponseInterface` instance.
- `Http\RouterDispatcher`: Extends `RouterInterface` and provides additional methods for adding requests and responses to the dispatcher.
- `Http\RouterInterface`: Defines the contract for a router that dispatches server requests and returns responses.

To use any of these interfaces, simply implement them in your classes:

```php
use Effectra\Contracts\Http\RequestFoundationInterface;
use Psr\Http\Message\ServerRequestInterface;

class MyRequestFoundation implements RequestFoundationInterface
{
    public static function createFromGlobals(): ServerRequestInterface
    {
        // Implement your logic here to create and return a ServerRequestInterface instance from global variables
    }
}
```

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request on the GitHub repository of this package.

## License

This package is open-source and licensed under the [MIT License](https://opensource.org/licenses/MIT).

## About Effectra

Effectra is a leading technology company specializing in innovative solutions for [describe what Effectra does and its main areas of expertise].

For more information about Effectra, visit our website: [https://www.effectra.com](https://www.effectra.com)
