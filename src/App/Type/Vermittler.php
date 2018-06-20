<?php

namespace App\Type;

class Vermittler
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
    private $datenquelle;

    /**
     * @var string
     */
    private $firmenname;

    /**
     * @var string
     */
    private $firmenname2;

    /**
     * @var string
     */
    private $vorname;

    /**
     * @var string
     */
    private $anrede;

    /**
     * @var \App\Type\titel
     */
    private $titel;

    /**
     * @var string
     */
    private $gesellschaftsform;

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
    private $email;

    /**
     * @var string
     */
    private $webseite;

    /**
     * @var \App\Type\person
     */
    private $person;

    /**
     * @var string
     */
    private $steuernummer;

    /**
     * @var string
     */
    private $svnummer;

    /**
     * @var string
     */
    private $handelsgericht;

    /**
     * @var string
     */
    private $finanzamt;

    /**
     * @var string
     */
    private $firmenbuchnummer;

    /**
     * @var string
     */
    private $gewerbe;

    /**
     * @var \App\Type\gisa
     */
    private $gisa;

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
     * @var string
     */
    private $mitgliedschaft;

    /**
     * @var string
     */
    private $vermittler_seit;

    /**
     * @var string
     */
    private $vermittler_bis;

    /**
     * @var string
     */
    private $vermittlerkennzeichen;

    /**
     * @var string
     */
    private $vermittlernummer;

    /**
     * @var bool
     */
    private $courtage;

    /**
     * @var bool
     */
    private $mailing;

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
     * @return Vermittler
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
     * @return Vermittler
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
    public function getDatenquelle()
    {
        return $this->datenquelle;
    }

    /**
     * @param string $datenquelle
     * @return Vermittler
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
    public function getFirmenname()
    {
        return $this->firmenname;
    }

    /**
     * @param string $firmenname
     * @return Vermittler
     */
    public function withFirmenname($firmenname)
    {
        $new = clone $this;
        $new->firmenname = $firmenname;

        return $new;
    }

    /**
     * @return string
     */
    public function getFirmenname2()
    {
        return $this->firmenname2;
    }

    /**
     * @param string $firmenname2
     * @return Vermittler
     */
    public function withFirmenname2($firmenname2)
    {
        $new = clone $this;
        $new->firmenname2 = $firmenname2;

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
     * @return Vermittler
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
    public function getAnrede()
    {
        return $this->anrede;
    }

    /**
     * @param string $anrede
     * @return Vermittler
     */
    public function withAnrede($anrede)
    {
        $new = clone $this;
        $new->anrede = $anrede;

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
     * @return Vermittler
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
    public function getGesellschaftsform()
    {
        return $this->gesellschaftsform;
    }

    /**
     * @param string $gesellschaftsform
     * @return Vermittler
     */
    public function withGesellschaftsform($gesellschaftsform)
    {
        $new = clone $this;
        $new->gesellschaftsform = $gesellschaftsform;

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
     * @return Vermittler
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
     * @return Vermittler
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
     * @return Vermittler
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Vermittler
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
    public function getWebseite()
    {
        return $this->webseite;
    }

    /**
     * @param string $webseite
     * @return Vermittler
     */
    public function withWebseite($webseite)
    {
        $new = clone $this;
        $new->webseite = $webseite;

        return $new;
    }

    /**
     * @return \App\Type\person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param \App\Type\person $person
     * @return Vermittler
     */
    public function withPerson($person)
    {
        $new = clone $this;
        $new->person = $person;

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
     * @return Vermittler
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
     * @return Vermittler
     */
    public function withSvnummer($svnummer)
    {
        $new = clone $this;
        $new->svnummer = $svnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getHandelsgericht()
    {
        return $this->handelsgericht;
    }

    /**
     * @param string $handelsgericht
     * @return Vermittler
     */
    public function withHandelsgericht($handelsgericht)
    {
        $new = clone $this;
        $new->handelsgericht = $handelsgericht;

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
     * @return Vermittler
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
    public function getFirmenbuchnummer()
    {
        return $this->firmenbuchnummer;
    }

    /**
     * @param string $firmenbuchnummer
     * @return Vermittler
     */
    public function withFirmenbuchnummer($firmenbuchnummer)
    {
        $new = clone $this;
        $new->firmenbuchnummer = $firmenbuchnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getGewerbe()
    {
        return $this->gewerbe;
    }

    /**
     * @param string $gewerbe
     * @return Vermittler
     */
    public function withGewerbe($gewerbe)
    {
        $new = clone $this;
        $new->gewerbe = $gewerbe;

        return $new;
    }

    /**
     * @return \App\Type\gisa
     */
    public function getGisa()
    {
        return $this->gisa;
    }

    /**
     * @param \App\Type\gisa $gisa
     * @return Vermittler
     */
    public function withGisa($gisa)
    {
        $new = clone $this;
        $new->gisa = $gisa;

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
     * @return Vermittler
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
     * @return Vermittler
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
     * @return Vermittler
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
     * @return Vermittler
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
     * @return Vermittler
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
     * @return Vermittler
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
    public function getMitgliedschaft()
    {
        return $this->mitgliedschaft;
    }

    /**
     * @param string $mitgliedschaft
     * @return Vermittler
     */
    public function withMitgliedschaft($mitgliedschaft)
    {
        $new = clone $this;
        $new->mitgliedschaft = $mitgliedschaft;

        return $new;
    }

    /**
     * @return string
     */
    public function getVermittler_seit()
    {
        return $this->vermittler_seit;
    }

    /**
     * @param string $vermittler_seit
     * @return Vermittler
     */
    public function withVermittler_seit($vermittler_seit)
    {
        $new = clone $this;
        $new->vermittler_seit = $vermittler_seit;

        return $new;
    }

    /**
     * @return string
     */
    public function getVermittler_bis()
    {
        return $this->vermittler_bis;
    }

    /**
     * @param string $vermittler_bis
     * @return Vermittler
     */
    public function withVermittler_bis($vermittler_bis)
    {
        $new = clone $this;
        $new->vermittler_bis = $vermittler_bis;

        return $new;
    }

    /**
     * @return string
     */
    public function getVermittlerkennzeichen()
    {
        return $this->vermittlerkennzeichen;
    }

    /**
     * @param string $vermittlerkennzeichen
     * @return Vermittler
     */
    public function withVermittlerkennzeichen($vermittlerkennzeichen)
    {
        $new = clone $this;
        $new->vermittlerkennzeichen = $vermittlerkennzeichen;

        return $new;
    }

    /**
     * @return string
     */
    public function getVermittlernummer()
    {
        return $this->vermittlernummer;
    }

    /**
     * @param string $vermittlernummer
     * @return Vermittler
     */
    public function withVermittlernummer($vermittlernummer)
    {
        $new = clone $this;
        $new->vermittlernummer = $vermittlernummer;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCourtage()
    {
        return $this->courtage;
    }

    /**
     * @param bool $courtage
     * @return Vermittler
     */
    public function withCourtage($courtage)
    {
        $new = clone $this;
        $new->courtage = $courtage;

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
     * @return Vermittler
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
    public function getGeaendert_am()
    {
        return $this->geaendert_am;
    }

    /**
     * @param string $geaendert_am
     * @return Vermittler
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
     * @return Vermittler
     */
    public function withErstellt_am($erstellt_am)
    {
        $new = clone $this;
        $new->erstellt_am = $erstellt_am;

        return $new;
    }


}

