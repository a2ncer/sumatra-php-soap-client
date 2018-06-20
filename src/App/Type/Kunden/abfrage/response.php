<?php

namespace App\Type;

use Phpro\SoapClient\Type\ResultInterface;

class Kunden_abfrage_response implements ResultInterface
{

    /**
     * @var \App\Type\kunde
     */
    private $kunde;

    /**
     * @var \App\Type\status
     */
    private $status;

    /**
     * @return \App\Type\kunde
     */
    public function getKunde()
    {
        return $this->kunde;
    }

    /**
     * @param \App\Type\kunde $kunde
     * @return Kunden_abfrage_response
     */
    public function withKunde($kunde)
    {
        $new = clone $this;
        $new->kunde = $kunde;

        return $new;
    }

    /**
     * @return \App\Type\status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param \App\Type\status $status
     * @return Kunden_abfrage_response
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }


}

