<?php

namespace App\Type;

class Kundenvertraege_uebermittlung_argument
{

    /**
     * @var \App\Type\vertrag
     */
    private $vertrag;

    /**
     * @var string
     */
    private $kunde_winmakler_id;

    /**
     * @return \App\Type\vertrag
     */
    public function getVertrag()
    {
        return $this->vertrag;
    }

    /**
     * @param \App\Type\vertrag $vertrag
     * @return Kundenvertraege_uebermittlung_argument
     */
    public function withVertrag($vertrag)
    {
        $new = clone $this;
        $new->vertrag = $vertrag;

        return $new;
    }

    /**
     * @return string
     */
    public function getKunde_winmakler_id()
    {
        return $this->kunde_winmakler_id;
    }

    /**
     * @param string $kunde_winmakler_id
     * @return Kundenvertraege_uebermittlung_argument
     */
    public function withKunde_winmakler_id($kunde_winmakler_id)
    {
        $new = clone $this;
        $new->kunde_winmakler_id = $kunde_winmakler_id;

        return $new;
    }


}

