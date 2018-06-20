<?php

namespace Sumatra\Type;

class Aenderungen_argument
{

    /**
     * @var string
     */
    private $seit;

    /**
     * @return string
     */
    public function getSeit()
    {
        return $this->seit;
    }

    /**
     * @param string $seit
     * @return Aenderungen_argument
     */
    public function withSeit($seit)
    {
        $new = clone $this;
        $new->seit = $seit;

        return $new;
    }


}

