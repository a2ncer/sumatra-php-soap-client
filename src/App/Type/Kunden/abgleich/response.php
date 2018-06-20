<?php

namespace App\Type;

use Phpro\SoapClient\Type\ResultInterface;

class Kunden_abgleich_response implements ResultInterface
{

    /**
     * @var \App\Type\status
     */
    private $status;

    /**
     * @return \App\Type\status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param \App\Type\status $status
     * @return Kunden_abgleich_response
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }


}

