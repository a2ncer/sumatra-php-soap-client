<?php

namespace Sumatra\Type;

class Adresse
{

    /**
     * @var string
     */
    private $type;

    /**
     * @var bool
     */
    private $hauptadresse;

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
    private $ortszusatz;

    /**
     * @var string
     */
    private $land;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Adresse
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
    public function getHauptadresse()
    {
        return $this->hauptadresse;
    }

    /**
     * @param bool $hauptadresse
     * @return Adresse
     */
    public function withHauptadresse($hauptadresse)
    {
        $new = clone $this;
        $new->hauptadresse = $hauptadresse;

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
     * @return Adresse
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
     * @return Adresse
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
     * @return Adresse
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
     * @return Adresse
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
    public function getOrtszusatz()
    {
        return $this->ortszusatz;
    }

    /**
     * @param string $ortszusatz
     * @return Adresse
     */
    public function withOrtszusatz($ortszusatz)
    {
        $new = clone $this;
        $new->ortszusatz = $ortszusatz;

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
     * @return Adresse
     */
    public function withLand($land)
    {
        $new = clone $this;
        $new->land = $land;

        return $new;
    }


}

