# AccentStringRegexBuilder

[![Build Status](https://travis-ci.org/cacdigital/accent-string-regex-builder.svg?branch=master)](https://travis-ci.org/cacdigital/accent-string-regex-builder)

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