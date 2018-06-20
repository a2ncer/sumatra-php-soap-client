<?php

namespace App\Type;

class Fachgebiet
{

    /**
     * @var string
     */
    private $sumatra_id;

    /**
     * @var \App\Type\integer
     */
    private $winmakler_id;

    /**
     * @var string
     */
    private $bezeichnung;

    /**
     * @return string
     */
    public function getSumatra_id()
    {
        return $this->sumatra_id;
    }

    /**
     * @param string $sumatra_id
     * @return Fachgebiet
     */
    public function withSumatra_id($sumatra_id)
    {
        $new = clone $this;
        $new->sumatra_id = $sumatra_id;

        return $new;
    }

    /**
     * @return \App\Type\integer
     */
    public function getWinmakler_id()
    {
        return $this->winmakler_id;
    }

    /**
     * @param \App\Type\integer $winmakler_id
     * @return Fachgebiet
     */
    public function withWinmakler_id($winmakler_id)
    {
        $new = clone $this;
        $new->winmakler_id = $winmakler_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getBezeichnung()
    {
        return $this->bezeichnung;
    }

    /**
     * @param string $bezeichnung
     * @return Fachgebiet
     */
    public function withBezeichnung($bezeichnung)
    {
        $new = clone $this;
        $new->bezeichnung = $bezeichnung;

        return $new;
    }


}

