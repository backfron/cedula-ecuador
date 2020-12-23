# Cédulas Ecuador
Validator for ecuadorian CI.

## Instalation
```
composer require backfron/cedula-ecuador
```

## Usage
You may initialize a new Cedula object providing the CI number as a `string`. Is important that you provide a `string` because some CI numbers start with a 0.

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

### Obtaining info
You can also get the province where the CI was issued.

```php
use  \Backfron\CedulaEcuador\Cedula;

$cedula = new Cedula('1003495585');
$cedula->getProvince(); // Imbabura
```

## Tests
You can run the test running `vendor/bin/phpunit`.

## Contributions
If you have a contribution or a bug fix, please open a PR including a tests for your code.

## Credits
- [Jairo Ushiña](https://github.com/jago86)
