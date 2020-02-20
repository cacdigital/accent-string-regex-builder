# AccentStringRegexBuilder

[![Build Status](https://travis-ci.org/cacdigital/accent-string-regex-builder.svg?branch=master)](https://travis-ci.org/cacdigital/accent-string-regex-builder)
[![License MIT](http://img.shields.io/badge/license-MIT-blue.svg?style=flat)](https://github.com/cacdigital/accent-string-regex-builder/blob/master/LICENSE)
[![Packagist](http://img.shields.io/packagist/v/cacdigital/accent-string-regex-builder.svg?style=flat)](https://packagist.org/packages/cacdigital/accent-string-regex-builder)

Simple helper to create a regex from string to match all the results ignoring accents.

## Installation
```
composer require cacdigital/accent-string-regex-builder
```
    
## Usage
```php
    use AccentStringRegexBuilder\AccentString;
    
    $input = 'A E I O U C';
    var_dump(AccentString::toRegex($input));
    
    // Output: '[aáàãâä] [eéèêë] [iíìîï] [oóòõôö] [uúùûü] [cç]'       
```
   
## Contributing ##

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

ArrayKeysCaseTransform is released under the MIT License. Please see [License File](LICENSE) for more information.