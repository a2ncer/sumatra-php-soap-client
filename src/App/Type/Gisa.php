<?php

namespace App\Type;

class Gisa
{

    /**
     * @var string
     */
    private $bezeichnung;

    /**
     * @var bool
     */
    private $hauptgisa;

    /**
     * @return string
     */
    public function getBezeichnung()
    {
        return $this->bezeichnung;
    }

    /**
     * @param string $bezeichnung
     * @return Gisa
     */
    public function withBezeichnung($bezeichnung)
    {
        $new = clone $this;
        $new->bezeichnung = $bezeichnung;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHauptgisa()
    {
        return $this->hauptgisa;
    }

    /**
     * @param bool $hauptgisa
     * @return Gisa
     */
    public function withHauptgisa($hauptgisa)
    {
        $new = clone $this;
        $new->hauptgisa = $hauptgisa;

        return $new;
    }


}

