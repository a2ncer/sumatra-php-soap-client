<?php

namespace Sumatra\Type;

class Vertrag
{

    /**
     * @var string
     */
    private $datenquelle;

    /**
     * @var string
     */
    private $winmakler_id;

    /**
     * @var string
     */
    private $kunde_winmakler_id;

    /**
     * @var string
     */
    private $tarifkennzeichen;

    /**
     * @var string
     */
    private $sparte_kurz;

    /**
     * @var string
     */
    private $sparte;

    /**
     * @var string
     */
    private $polizzennummer;

    /**
     * @var string
     */
    private $beginn;

    /**
     * @var string
     */
    private $ablauf;

    /**
     * @var string
     */
    private $versicherungssumme;

    /**
     * @var string
     */
    private $tarif;

    /**
     * @var string
     */
    private $jahresbruttopraemie;

    /**
     * @var string
     */
    private $zahlweise;

    /**
     * @var string
     */
    private $polizzenkennzeichen;

    /**
     * @var string
     */
    private $vertragsvermittlernummer;

    /**
     * @return string
     */
    public function getDatenquelle()
    {
        return $this->datenquelle;
    }

    /**
     * @param string $datenquelle
     * @return Vertrag
     */
    public function withDatenquelle($datenquelle)
    {
        $new = clone $this;
        $new->datenquelle = $datenquelle;

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
     * @return Vertrag
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
    public function getKunde_winmakler_id()
    {
        return $this->kunde_winmakler_id;
    }

    /**
     * @param string $kunde_winmakler_id
     * @return Vertrag
     */
    public function withKunde_winmakler_id($kunde_winmakler_id)
    {
        $new = clone $this;
        $new->kunde_winmakler_id = $kunde_winmakler_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getTarifkennzeichen()
    {
        return $this->tarifkennzeichen;
    }

    /**
     * @param string $tarifkennzeichen
     * @return Vertrag
     */
    public function withTarifkennzeichen($tarifkennzeichen)
    {
        $new = clone $this;
        $new->tarifkennzeichen = $tarifkennzeichen;

        return $new;
    }

    /**
     * @return string
     */
    public function getSparte_kurz()
    {
        return $this->sparte_kurz;
    }

    /**
     * @param string $sparte_kurz
     * @return Vertrag
     */
    public function withSparte_kurz($sparte_kurz)
    {
        $new = clone $this;
        $new->sparte_kurz = $sparte_kurz;

        return $new;
    }

    /**
     * @return string
     */
    public function getSparte()
    {
        return $this->sparte;
    }

    /**
     * @param string $sparte
     * @return Vertrag
     */
    public function withSparte($sparte)
    {
        $new = clone $this;
        $new->sparte = $sparte;

        return $new;
    }

    /**
     * @return string
     */
    public function getPolizzennummer()
    {
        return $this->polizzennummer;
    }

    /**
     * @param string $polizzennummer
     * @return Vertrag
     */
    public function withPolizzennummer($polizzennummer)
    {
        $new = clone $this;
        $new->polizzennummer = $polizzennummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeginn()
    {
        return $this->beginn;
    }

    /**
     * @param string $beginn
     * @return Vertrag
     */
    public function withBeginn($beginn)
    {
        $new = clone $this;
        $new->beginn = $beginn;

        return $new;
    }

    /**
     * @return string
     */
    public function getAblauf()
    {
        return $this->ablauf;
    }

    /**
     * @param string $ablauf
     * @return Vertrag
     */
    public function withAblauf($ablauf)
    {
        $new = clone $this;
        $new->ablauf = $ablauf;

        return $new;
    }

    /**
     * @return string
     */
    public function getVersicherungssumme()
    {
        return $this->versicherungssumme;
    }

    /**
     * @param string $versicherungssumme
     * @return Vertrag
     */
    public function withVersicherungssumme($versicherungssumme)
    {
        $new = clone $this;
        $new->versicherungssumme = $versicherungssumme;

        return $new;
    }

    /**
     * @return string
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * @param string $tarif
     * @return Vertrag
     */
    public function withTarif($tarif)
    {
        $new = clone $this;
        $new->tarif = $tarif;

        return $new;
    }

    /**
     * @return string
     */
    public function getJahresbruttopraemie()
    {
        return $this->jahresbruttopraemie;
    }

    /**
     * @param string $jahresbruttopraemie
     * @return Vertrag
     */
    public function withJahresbruttopraemie($jahresbruttopraemie)
    {
        $new = clone $this;
        $new->jahresbruttopraemie = $jahresbruttopraemie;

        return $new;
    }

    /**
     * @return string
     */
    public function getZahlweise()
    {
        return $this->zahlweise;
    }

    /**
     * @param string $zahlweise
     * @return Vertrag
     */
    public function withZahlweise($zahlweise)
    {
        $new = clone $this;
        $new->zahlweise = $zahlweise;

        return $new;
    }

    /**
     * @return string
     */
    public function getPolizzenkennzeichen()
    {
        return $this->polizzenkennzeichen;
    }

    /**
     * @param string $polizzenkennzeichen
     * @return Vertrag
     */
    public function withPolizzenkennzeichen($polizzenkennzeichen)
    {
        $new = clone $this;
        $new->polizzenkennzeichen = $polizzenkennzeichen;

        return $new;
    }

    /**
     * @return string
     */
    public function getVertragsvermittlernummer()
    {
        return $this->vertragsvermittlernummer;
    }

    /**
     * @param string $vertragsvermittlernummer
     * @return Vertrag
     */
    public function withVertragsvermittlernummer($vertragsvermittlernummer)
    {
        $new = clone $this;
        $new->vertragsvermittlernummer = $vertragsvermittlernummer;

        return $new;
    }


}

