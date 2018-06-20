[![Installs](https://img.shields.io/packagist/dt/phpro/soap-client.svg)](https://packagist.org/packages/phpro/soap-client/stats)
[![Packagist](https://img.shields.io/packagist/v/phpro/soap-client.svg)](https://packagist.org/packages/phpro/soap-client)
## SOAP Client for Sumatra


### Development Setup

```bash
composer install
docker-compose up -d
docker-compose exec php bash
php -S 0.0.0.0:80
```


### Usage 
```php
<?php
include_once 'vendor/autoload.php';

use App\SumatraClientFactory;
use App\Type\Kunden_einwilligung_argument;

$client = SumatraClientFactory::factory(
    config('wsdl'),
    config('username'),
    config('password')
);

$argument = (new Kunden_einwilligung_argument())
    ->withBegruendung('John Snow')
    ->withAnrede('Herr')
    ->withEmail('test@example.com');

try {
    $response = $client->kunden_einwilligung($argument);

    print $response->getStatus()->getInformation();

} catch (Exception $exception) {

    print $exception->getMessage();
}

```


