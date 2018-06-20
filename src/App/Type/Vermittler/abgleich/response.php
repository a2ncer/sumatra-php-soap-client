<?php

namespace Sumatra\Type;

use Phpro\SoapClient\Type\ResultInterface;

class Vermittler_abgleich_response  implements ResultInterface
{

    /**
     * @var \Sumatra\Type\status
     */
    private $status;

    /**
     * @return \Sumatra\Type\status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param \Sumatra\Type\status $status
     * @return Vermittler_abgleich_response
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }


}

