<?php


namespace App;


use Phpro\SoapClient\Middleware\Middleware;
use Phpro\SoapClient\Xml\SoapXml;
use Psr\Http\Message\RequestInterface;
use Http\Promise\Promise;

class AuthMiddleware extends Middleware
{
    /**
     * @var string
     */
    private $username;
    /**
     * @var string
     */
    private $password;


    /**
     * AuthMiddleware constructor.
     */
    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function getName(): string
    {
        return 'auth_middleware';
    }

    public function beforeRequest(callable $handler, RequestInterface $request): Promise
    {
        $xml = SoapXml::fromStream($request->getBody());

        // Fetch specific elements:
        $namespace = $xml->getSoapNamespaceUri();

        /** @var \DOMElement $header */
        $header = $xml->createSoapHeader();

        $credentials = $xml->getXmlDocument()->createElementNS("security", "s:credentials");


        $userName = $xml->getXmlDocument()->createElementNS($namespace, "sec:benutzername",$this->username );
        $passWord = $xml->getXmlDocument()->createElementNS($namespace, "sec:kennwort",$this->password);


        $credentials->appendChild($userName);
        $credentials->appendChild($passWord);

        $header->appendChild($credentials);

        $xml->prependSoapHeader($header);

        // Use the manipulated XML in your PSR7 request or response:
        $request = $request->withBody($xml->toStream());

        return $handler($request);
    }

}