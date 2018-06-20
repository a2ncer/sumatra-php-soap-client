<?php

namespace App\Type;

class Aerztekammer
{

    /**
     * @var string
     */
    private $bezeichnung;

    /**
     * @var bool
     */
    private $hauptaerztekammer;

    /**
     * @return string
     */
    public function getBezeichnung()
    {
        return $this->bezeichnung;
    }

    /**
     * @param string $bezeichnung
     * @return Aerztekammer
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
    public function getHauptaerztekammer()
    {
        return $this->hauptaerztekammer;
    }

    /**
     * @param bool $hauptaerztekammer
     * @return Aerztekammer
     */
    public function withHauptaerztekammer($hauptaerztekammer)
    {
        $new = clone $this;
        $new->hauptaerztekammer = $hauptaerztekammer;

        return $new;
    }


}

