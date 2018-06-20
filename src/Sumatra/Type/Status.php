<?php

namespace Sumatra\Type;

class Status
{

    /**
     * @var \Sumatra\Type\integer
     */
    private $code;

    /**
     * @var string
     */
    private $information;

    /**
     * @return \Sumatra\Type\integer
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param \Sumatra\Type\integer $code
     * @return Status
     */
    public function withCode($code)
    {
        $new = clone $this;
        $new->code = $code;

        return $new;
    }

    /**
     * @return string
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * @param string $information
     * @return Status
     */
    public function withInformation($information)
    {
        $new = clone $this;
        $new->information = $information;

        return $new;
    }


}

