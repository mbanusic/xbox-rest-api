# Xbox REST API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mbanusic/xbox-rest-api.svg?style=flat-square)](https://packagist.org/packages/mbanusic/xbox-rest-api)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/mbanusic/xbox-rest-api/run-tests?label=tests)](https://github.com/mbanusic/xbox-rest-api/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/mbanusic/xbox-rest-api/Check%20&%20fix%20styling?label=code%20style)](https://github.com/mbanusic/xbox-rest-api/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mbanusic/xbox-rest-api.svg?style=flat-square)](https://packagist.org/packages/mbanusic/xbox-rest-api)

Xbox REST API in PHP for Laravel. More info later

## Installation

You can install the package via composer:

```bash
composer require mbanusic/xbox-rest-api
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="xbox-rest-api_without_prefix-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --tag="xbox-rest-api_without_prefix-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$xbox-rest-api = new Neznam\XboxRestApi();
echo $xbox-rest-api->echoPhrase('Hello, Neznam!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Marko Banušić](https://github.com/mbanusic)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
