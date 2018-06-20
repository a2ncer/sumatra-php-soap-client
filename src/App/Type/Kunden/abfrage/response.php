<?php

namespace Sumatra\Type;

use Phpro\SoapClient\Type\ResultInterface;

class Kunden_abfrage_response implements ResultInterface
{

    /**
     * @var \Sumatra\Type\kunde
     */
    private $kunde;

    /**
     * @var \Sumatra\Type\status
     */
    private $status;

    /**
     * @return \Sumatra\Type\kunde
     */
    public function getKunde()
    {
        return $this->kunde;
    }

    /**
     * @param \Sumatra\Type\kunde $kunde
     * @return Kunden_abfrage_response
     */
    public function withKunde($kunde)
    {
        $new = clone $this;
        $new->kunde = $kunde;

        return $new;
    }

    /**
     * @return \Sumatra\Type\status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param \Sumatra\Type\status $status
     * @return Kunden_abfrage_response
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }


}

