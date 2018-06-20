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
    ->withBegruendung('Eine Begruendung')
    ->withAnrede('Herr')
    ->withEmail('matthias@doloops.net');

try {
    $response = $client->kunden_einwilligung($argument);

    var_dump($response);

} catch (Exception $exception) {

    var_dump($exception->getMessage());
}
