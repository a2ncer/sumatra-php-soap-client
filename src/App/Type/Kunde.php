<?php

namespace App\Type;

class Kunde
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
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $beschaeftigt_bei;

    /**
     * @var \App\Type\fachgebiet
     */
    private $fachgebiet;

    /**
     * @var string
     */
    private $vermittler_id;

    /**
     * @var \App\Type\titel
     */
    private $titel;

    /**
     * @var string
     */
    private $anrede;

    /**
     * @var string
     */
    private $datenquelle;

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
    private $zuname2;

    /**
     * @var bool
     */
    private $kunde;

    /**
     * @var string
     */
    private $kunde_seit;

    /**
     * @var bool
     */
    private $mailing;

    /**
     * @var string
     */
    private $geburtsdatum;

    /**
     * @var string
     */
    private $ausbildung_beginn;

    /**
     * @var string
     */
    private $ausbildung_ende;

    /**
     * @var string
     */
    private $arztnummer;

    /**
     * @var \App\Type\aerztekammer
     */
    private $aerztekammer;

    /**
     * @var string
     */
    private $dienstnummer;

    /**
     * @var string
     */
    private $finanzamt;

    /**
     * @var string
     */
    private $steuernummer;

    /**
     * @var string
     */
    private $svnummer;

    /**
     * @var \App\Type\adresse
     */
    private $adresse;

    /**
     * @var \App\Type\kommunikation
     */
    private $kommunikation;

    /**
     * @var \App\Type\partner
     */
    private $partner;

    /**
     * @var \App\Type\kind
     */
    private $kind;

    /**
     * @var string
     */
    private $geaendert_am;

    /**
     * @var string
     */
    private $erstellt_am;

    /**
     * @return string
     */
    public function getSumatra_id()
    {
        return $this->sumatra_id;
    }

    /**
     * @param string $sumatra_id
     * @return Kunde
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
     * @return Kunde
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Kunde
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

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
     * @return Kunde
     */
    public function withBeschaeftigt_bei($beschaeftigt_bei)
    {
        $new = clone $this;
        $new->beschaeftigt_bei = $beschaeftigt_bei;

        return $new;
    }

    /**
     * @return \App\Type\fachgebiet
     */
    public function getFachgebiet()
    {
        return $this->fachgebiet;
    }

    /**
     * @param \App\Type\fachgebiet $fachgebiet
     * @return Kunde
     */
    public function withFachgebiet($fachgebiet)
    {
        $new = clone $this;
        $new->fachgebiet = $fachgebiet;

        return $new;
    }

    /**
     * @return string
     */
    public function getVermittler_id()
    {
        return $this->vermittler_id;
    }

    /**
     * @param string $vermittler_id
     * @return Kunde
     */
    public function withVermittler_id($vermittler_id)
    {
        $new = clone $this;
        $new->vermittler_id = $vermittler_id;

        return $new;
    }

    /**
     * @return \App\Type\titel
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * @param \App\Type\titel $titel
     * @return Kunde
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
    public function getAnrede()
    {
        return $this->anrede;
    }

    /**
     * @param string $anrede
     * @return Kunde
     */
    public function withAnrede($anrede)
    {
        $new = clone $this;
        $new->anrede = $anrede;

        return $new;
    }

    /**
     * @return string
     */
    public function getDatenquelle()
    {
        return $this->datenquelle;
    }

    /**
     * @param string $datenquelle
     * @return Kunde
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
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * @param string $vorname
     * @return Kunde
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
     * @return Kunde
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
    public function getZuname2()
    {
        return $this->zuname2;
    }

    /**
     * @param string $zuname2
     * @return Kunde
     */
    public function withZuname2($zuname2)
    {
        $new = clone $this;
        $new->zuname2 = $zuname2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getKunde()
    {
        return $this->kunde;
    }

    /**
     * @param bool $kunde
     * @return Kunde
     */
    public function withKunde($kunde)
    {
        $new = clone $this;
        $new->kunde = $kunde;

        return $new;
    }

    /**
     * @return string
     */
    public function getKunde_seit()
    {
        return $this->kunde_seit;
    }

    /**
     * @param string $kunde_seit
     * @return Kunde
     */
    public function withKunde_seit($kunde_seit)
    {
        $new = clone $this;
        $new->kunde_seit = $kunde_seit;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMailing()
    {
        return $this->mailing;
    }

    /**
     * @param bool $mailing
     * @return Kunde
     */
    public function withMailing($mailing)
    {
        $new = clone $this;
        $new->mailing = $mailing;

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
     * @return Kunde
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
    public function getAusbildung_beginn()
    {
        return $this->ausbildung_beginn;
    }

    /**
     * @param string $ausbildung_beginn
     * @return Kunde
     */
    public function withAusbildung_beginn($ausbildung_beginn)
    {
        $new = clone $this;
        $new->ausbildung_beginn = $ausbildung_beginn;

        return $new;
    }

    /**
     * @return string
     */
    public function getAusbildung_ende()
    {
        return $this->ausbildung_ende;
    }

    /**
     * @param string $ausbildung_ende
     * @return Kunde
     */
    public function withAusbildung_ende($ausbildung_ende)
    {
        $new = clone $this;
        $new->ausbildung_ende = $ausbildung_ende;

        return $new;
    }

    /**
     * @return string
     */
    public function getArztnummer()
    {
        return $this->arztnummer;
    }

    /**
     * @param string $arztnummer
     * @return Kunde
     */
    public function withArztnummer($arztnummer)
    {
        $new = clone $this;
        $new->arztnummer = $arztnummer;

        return $new;
    }

    /**
     * @return \App\Type\aerztekammer
     */
    public function getAerztekammer()
    {
        return $this->aerztekammer;
    }

    /**
     * @param \App\Type\aerztekammer $aerztekammer
     * @return Kunde
     */
    public function withAerztekammer($aerztekammer)
    {
        $new = clone $this;
        $new->aerztekammer = $aerztekammer;

        return $new;
    }

    /**
     * @return string
     */
    public function getDienstnummer()
    {
        return $this->dienstnummer;
    }

    /**
     * @param string $dienstnummer
     * @return Kunde
     */
    public function withDienstnummer($dienstnummer)
    {
        $new = clone $this;
        $new->dienstnummer = $dienstnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getFinanzamt()
    {
        return $this->finanzamt;
    }

    /**
     * @param string $finanzamt
     * @return Kunde
     */
    public function withFinanzamt($finanzamt)
    {
        $new = clone $this;
        $new->finanzamt = $finanzamt;

        return $new;
    }

    /**
     * @return string
     */
    public function getSteuernummer()
    {
        return $this->steuernummer;
    }

    /**
     * @param string $steuernummer
     * @return Kunde
     */
    public function withSteuernummer($steuernummer)
    {
        $new = clone $this;
        $new->steuernummer = $steuernummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getSvnummer()
    {
        return $this->svnummer;
    }

    /**
     * @param string $svnummer
     * @return Kunde
     */
    public function withSvnummer($svnummer)
    {
        $new = clone $this;
        $new->svnummer = $svnummer;

        return $new;
    }

    /**
     * @return \App\Type\adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param \App\Type\adresse $adresse
     * @return Kunde
     */
    public function withAdresse($adresse)
    {
        $new = clone $this;
        $new->adresse = $adresse;

        return $new;
    }

    /**
     * @return \App\Type\kommunikation
     */
    public function getKommunikation()
    {
        return $this->kommunikation;
    }

    /**
     * @param \App\Type\kommunikation $kommunikation
     * @return Kunde
     */
    public function withKommunikation($kommunikation)
    {
        $new = clone $this;
        $new->kommunikation = $kommunikation;

        return $new;
    }

    /**
     * @return \App\Type\partner
     */
    public function getPartner()
    {
        return $this->partner;
    }

    /**
     * @param \App\Type\partner $partner
     * @return Kunde
     */
    public function withPartner($partner)
    {
        $new = clone $this;
        $new->partner = $partner;

        return $new;
    }

    /**
     * @return \App\Type\kind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param \App\Type\kind $kind
     * @return Kunde
     */
    public function withKind($kind)
    {
        $new = clone $this;
        $new->kind = $kind;

        return $new;
    }

    /**
     * @return string
     */
    public function getGeaendert_am()
    {
        return $this->geaendert_am;
    }

    /**
     * @param string $geaendert_am
     * @return Kunde
     */
    public function withGeaendert_am($geaendert_am)
    {
        $new = clone $this;
        $new->geaendert_am = $geaendert_am;

        return $new;
    }

    /**
     * @return string
     */
    public function getErstellt_am()
    {
        return $this->erstellt_am;
    }

    /**
     * @param string $erstellt_am
     * @return Kunde
     */
    public function withErstellt_am($erstellt_am)
    {
        $new = clone $this;
        $new->erstellt_am = $erstellt_am;

        return $new;
    }


}

