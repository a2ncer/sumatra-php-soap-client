<?php

namespace App\Type;

class Partner
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
    private $geburtsdatum;

    /**
     * @var string
     */
    private $strasse;

    /**
     * @var string
     */
    private $hausnummer;

    /**
     * @var string
     */
    private $plz;

    /**
     * @var string
     */
    private $ort;

    /**
     * @var string
     */
    private $land;

    /**
     * @var string
     */
    private $telefon;

    /**
     * @var string
     */
    private $email_privat;

    /**
     * @var string
     */
    private $email_beruflich;

    /**
     * @var string
     */
    private $beschaeftigt_bei;

    /**
     * @return \App\Type\titel
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * @param \App\Type\titel $titel
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
    public function getGeburtsdatum()
    {
        return $this->geburtsdatum;
    }

    /**
     * @param string $geburtsdatum
     * @return Partner
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
    public function getStrasse()
    {
        return $this->strasse;
    }

    /**
     * @param string $strasse
     * @return Partner
     */
    public function withStrasse($strasse)
    {
        $new = clone $this;
        $new->strasse = $strasse;

        return $new;
    }

    /**
     * @return string
     */
    public function getHausnummer()
    {
        return $this->hausnummer;
    }

    /**
     * @param string $hausnummer
     * @return Partner
     */
    public function withHausnummer($hausnummer)
    {
        $new = clone $this;
        $new->hausnummer = $hausnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getPlz()
    {
        return $this->plz;
    }

    /**
     * @param string $plz
     * @return Partner
     */
    public function withPlz($plz)
    {
        $new = clone $this;
        $new->plz = $plz;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * @param string $ort
     * @return Partner
     */
    public function withOrt($ort)
    {
        $new = clone $this;
        $new->ort = $ort;

        return $new;
    }

    /**
     * @return string
     */
    public function getLand()
    {
        return $this->land;
    }

    /**
     * @param string $land
     * @return Partner
     */
    public function withLand($land)
    {
        $new = clone $this;
        $new->land = $land;

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
     * @return Partner
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
    public function getEmail_privat()
    {
        return $this->email_privat;
    }

    /**
     * @param string $email_privat
     * @return Partner
     */
    public function withEmail_privat($email_privat)
    {
        $new = clone $this;
        $new->email_privat = $email_privat;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmail_beruflich()
    {
        return $this->email_beruflich;
    }

    /**
     * @param string $email_beruflich
     * @return Partner
     */
    public function withEmail_beruflich($email_beruflich)
    {
        $new = clone $this;
        $new->email_beruflich = $email_beruflich;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeschaeftigt_bei()
    {
        return $this->beschaeftigt_bei;
    }

    /**
     * @param string $beschaeftigt_bei
     * @return Partner
     */
    public function withBeschaeftigt_bei($beschaeftigt_bei)
    {
        $new = clone $this;
        $new->beschaeftigt_bei = $beschaeftigt_bei;

        return $new;
    }


}

