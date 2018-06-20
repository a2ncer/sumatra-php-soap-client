<?php

namespace Sumatra\Type;

use Phpro\SoapClient\Type\ResultInterface;

class Kundenvertraege_uebermittlung_response  implements ResultInterface
{

    /**
     * @var string
     */
    private $sumatra_id;

    /**
     * @var \Sumatra\Type\status
     */
    private $status;

    /**
     * @return string
     */
    public function getSumatra_id()
    {
        return $this->sumatra_id;
    }

    /**
     * @param string $sumatra_id
     * @return Kundenvertraege_uebermittlung_response
     */
    public function withSumatra_id($sumatra_id)
    {
        $new = clone $this;
        $new->sumatra_id = $sumatra_id;

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
     * @return Kundenvertraege_uebermittlung_response
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }


}

