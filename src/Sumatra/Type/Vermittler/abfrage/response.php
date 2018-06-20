<?php

namespace Sumatra\Type;

use Phpro\SoapClient\Type\ResultInterface;

class Vermittler_abfrage_response  implements ResultInterface
{

    /**
     * @var \Sumatra\Type\vermittler
     */
    private $vermittler;

    /**
     * @var \Sumatra\Type\status
     */
    private $status;

    /**
     * @return \Sumatra\Type\vermittler
     */
    public function getVermittler()
    {
        return $this->vermittler;
    }

    /**
     * @param \Sumatra\Type\vermittler $vermittler
     * @return Vermittler_abfrage_response
     */
    public function withVermittler($vermittler)
    {
        $new = clone $this;
        $new->vermittler = $vermittler;

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
     * @return Vermittler_abfrage_response
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }


}

