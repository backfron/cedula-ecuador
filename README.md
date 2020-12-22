# Cédulas Ecuador
Validator for ecuadorian CI.
## Instalation
```
composer require backfron/cedula-ecuador
```
## Usage
```php
use  \Backfron\CedulaEcuador\Cedula;

$cedula = new Cedula('1234567890');

/**
 * The isValid() method will return true if the CI
 * number is valid or false otherwise.
 */

if($cedula->isValid()) {
    echo "The number is valid";
} else {
    echo "The number is invalid";
}
```

## Tests
You can run the test running `vendor/bin/phpunit`.

## Contributions
If you have a contribution or a bug fix, please open a PR including a tests for your code.

## Credits
- [Jairo Ushiña](https://github.com/jago86)
