<?php

namespace App;

class SumatraClientFactory
{
    public static function factory(string $wsdl, string $username, string $password): \App\SumatraClient
    {
        $clientFactory = new \Phpro\SoapClient\ClientFactory(\App\SumatraClient::class);
        $clientBuilder = new \Phpro\SoapClient\ClientBuilder($clientFactory, $wsdl);
        $clientBuilder->withClassMaps(SumatraClassmap::getCollection());
        $clientBuilder->withHandler(\Phpro\SoapClient\Soap\Handler\HttPlugHandle::createWithDefaultClient());
        $clientBuilder->addMiddleware(new \App\AuthMiddleware($username, $password));

        /** @var \App\SumatraClient $client */
        $client = $clientBuilder->build();

        return $client;
    }
}
