<?php

namespace Sumatra\Type;

class Kind
{

    /**
     * @var string
     */
    private $vorname;

    /**
     * @var string
     */
    private $zuname;

    /**
     * @var string
     */
    private $geburtsdatum;

    /**
     * @var string
     */
    private $studium;

    /**
     * @var string
     */
    private $mobil;

    /**
     * @var string
     */
    private $email;

    /**
     * @return string
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * @param string $vorname
     * @return Kind
     */
    public function withVorname($vorname)
    {
        $new = clone $this;
        $new->vorname = $vorname;

        return $new;
    }

    /**
     * @return string
     */
    public function getZuname()
    {
        return $this->zuname;
    }

    /**
     * @param string $zuname
     * @return Kind
     */
    public function withZuname($zuname)
    {
        $new = clone $this;
        $new->zuname = $zuname;

        return $new;
    }

    /**
     * @return string
     */
    public function getGeburtsdatum()
    {
        return $this->geburtsdatum;
    }

    /**
     * @param string $geburtsdatum
     * @return Kind
     */
    public function withGeburtsdatum($geburtsdatum)
    {
        $new = clone $this;
        $new->geburtsdatum = $geburtsdatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getStudium()
    {
        return $this->studium;
    }

    /**
     * @param string $studium
     * @return Kind
     */
    public function withStudium($studium)
    {
        $new = clone $this;
        $new->studium = $studium;

        return $new;
    }

    /**
     * @return string
     */
    public function getMobil()
    {
        return $this->mobil;
    }

    /**
     * @param string $mobil
     * @return Kind
     */
    public function withMobil($mobil)
    {
        $new = clone $this;
        $new->mobil = $mobil;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Kind
     */
    public function withEmail($email)
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }


}

