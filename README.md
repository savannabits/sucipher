# SUCIPHER

[![Latest Version on Packagist](https://img.shields.io/packagist/v/savannabits/sucipher.svg?style=flat-square)](https://packagist.org/packages/savannabits/sucipher)
[![Total Downloads](https://img.shields.io/packagist/dt/savannabits/sucipher.svg?style=flat-square)](https://packagist.org/packages/savannabits/sucipher)
![GitHub Actions](https://github.com/savannabits/sucipher/actions/workflows/main.yml/badge.svg)

A simple tool to manage AES encryption using openssl. This is designed to gain compatibility with Java's `javax.crypto`
package.

## Installation

You can install the package via composer:

```bash
composer require savannabits/sucipher
```

## Usage

### Config:
Add the following keys to your .env file:
```dotenv
SUCIPHER_IV="" #Your Initialization vector
SUCIPHER_SECRET_KEY="" #16, 24 or 32 chars depending on the CIPHER used
SUCIPHER_CIPHER="" # e.g aes-128-cbc
```
```php
// Encrypt A Plain String:
$data = "Test Message"
$encrypted = app('sucipher')->encrypt($data); // The output is base64 encoded

// Decrypt an encrypted string: (The input should be a base64-encoded decrypted string
$decrypted = app('sucipher')->decrypt($encrypted); // Output: 'Test Message'
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email smaosa@savannabits.com instead of using the issue tracker.

## Credits

-   [Sam Maosa](https://github.com/savannabits)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.