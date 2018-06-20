<?php

namespace App\Type;

use Phpro\SoapClient\Type\ResultInterface;

class Vermittler_abfrage_response  implements ResultInterface
{

    /**
     * @var \App\Type\vermittler
     */
    private $vermittler;

    /**
     * @var \App\Type\status
     */
    private $status;

    /**
     * @return \App\Type\vermittler
     */
    public function getVermittler()
    {
        return $this->vermittler;
    }

    /**
     * @param \App\Type\vermittler $vermittler
     * @return Vermittler_abfrage_response
     */
    public function withVermittler($vermittler)
    {
        $new = clone $this;
        $new->vermittler = $vermittler;

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
     * @return Vermittler_abfrage_response
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }


}

