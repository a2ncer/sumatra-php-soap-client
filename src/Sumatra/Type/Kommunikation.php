<?php

namespace Sumatra\Type;

class Kommunikation
{

    /**
     * @var string
     */
    private $type;

    /**
     * @var bool
     */
    private $hauptkommunikation;

    /**
     * @var string
     */
    private $email;

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
    private $fax;

    /**
     * @var string
     */
    private $webseite;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Kommunikation
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHauptkommunikation()
    {
        return $this->hauptkommunikation;
    }

    /**
     * @param bool $hauptkommunikation
     * @return Kommunikation
     */
    public function withHauptkommunikation($hauptkommunikation)
    {
        $new = clone $this;
        $new->hauptkommunikation = $hauptkommunikation;

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
     * @return Kommunikation
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
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * @param string $telefon
     * @return Kommunikation
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
     * @return Kommunikation
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
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     * @return Kommunikation
     */
    public function withFax($fax)
    {
        $new = clone $this;
        $new->fax = $fax;

        return $new;
    }

    /**
     * @return string
     */
    public function getWebseite()
    {
        return $this->webseite;
    }

    /**
     * @param string $webseite
     * @return Kommunikation
     */
    public function withWebseite($webseite)
    {
        $new = clone $this;
        $new->webseite = $webseite;

        return $new;
    }


}

