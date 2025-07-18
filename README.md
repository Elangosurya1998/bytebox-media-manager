# This is my package bytebox-media-manager

[![Latest Version on Packagist](https://img.shields.io/packagist/v/elangosurya1998/bytebox-media-manager.svg?style=flat-square)](https://packagist.org/packages/elangosurya1998/bytebox-media-manager)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/elangosurya1998/bytebox-media-manager/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/elangosurya1998/bytebox-media-manager/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/elangosurya1998/bytebox-media-manager/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/elangosurya1998/bytebox-media-manager/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/elangosurya1998/bytebox-media-manager.svg?style=flat-square)](https://packagist.org/packages/elangosurya1998/bytebox-media-manager)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require elangosurya1998/bytebox-media-manager
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="bytebox-media-manager-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="bytebox-media-manager-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="bytebox-media-manager-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$byteboxMediaManager = new Elangosurya1998\ByteboxMediaManager();
echo $byteboxMediaManager->echoPhrase('Hello, Elangosurya1998!');
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

- [elango surya](https://github.com/Elangosurya1998)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
