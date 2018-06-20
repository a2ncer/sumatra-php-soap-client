<?php

namespace App\Type;

class Person
{

    /**
     * @var \App\Type\titel
     */
    private $titel;

    /**
     * @var string
     */
    private $zuname;

    /**
     * @var string
     */
    private $vorname;

    /**
     * @var string
     */
    private $telefon;

    /**
     * @var string
     */
    private $mobil;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $position;

    /**
     * @var string
     */
    private $zustaendigkeit;

    /**
     * @return \App\Type\titel
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * @param \App\Type\titel $titel
     * @return Person
     */
    public function withTitel($titel)
    {
        $new = clone $this;
        $new->titel = $titel;

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
     * @return Person
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
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * @param string $vorname
     * @return Person
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
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * @param string $telefon
     * @return Person
     */
    public function withTelefon($telefon)
    {
        $new = clone $this;
        $new->telefon = $telefon;

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
     * @return Person
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
     * @return Person
     */
    public function withEmail($email)
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $position
     * @return Person
     */
    public function withPosition($position)
    {
        $new = clone $this;
        $new->position = $position;

        return $new;
    }

    /**
     * @return string
     */
    public function getZustaendigkeit()
    {
        return $this->zustaendigkeit;
    }

    /**
     * @param string $zustaendigkeit
     * @return Person
     */
    public function withZustaendigkeit($zustaendigkeit)
    {
        $new = clone $this;
        $new->zustaendigkeit = $zustaendigkeit;

        return $new;
    }


}

