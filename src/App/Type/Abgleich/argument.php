<?php

namespace App\Type;

class Abgleich_argument
{

    /**
     * @var string
     */
    private $sumatra_id;

    /**
     * @var string
     */
    private $winmakler_id;

    /**
     * @return string
     */
    public function getSumatra_id()
    {
        return $this->sumatra_id;
    }

    /**
     * @param string $sumatra_id
     * @return Abgleich_argument
     */
    public function withSumatra_id($sumatra_id)
    {
        $new = clone $this;
        $new->sumatra_id = $sumatra_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getWinmakler_id()
    {
        return $this->winmakler_id;
    }

    /**
     * @param string $winmakler_id
     * @return Abgleich_argument
     */
    public function withWinmakler_id($winmakler_id)
    {
        $new = clone $this;
        $new->winmakler_id = $winmakler_id;

        return $new;
    }


}

