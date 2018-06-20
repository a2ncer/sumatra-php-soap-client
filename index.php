<?php

include_once 'vendor/autoload.php';

use Sumatra\SumatraClientFactory;
use Sumatra\Type\Kunden_einwilligung_argument;

$wsdl = 'http://example.com/sumatra.wsdl';
$username = 'username';
$password = 'password';

$client = SumatraClientFactory::factory(
    $wsdl,
    $username,
    $password
);

$argument = (new Kunden_einwilligung_argument())
    ->withBegruendung('John Snow')
    ->withAnrede('Herr')
    ->withEmail('test@example.com');

try {
    $response = $client->kunden_einwilligung($argument);

    echo $response->getStatus()->getInformation();
} catch (Exception $exception) {
    echo $exception->getMessage();
}
