<?php

namespace App;

class SumatraClient extends \Phpro\SoapClient\Client
{

    public function kunden_einwilligung(\App\Type\kunden_einwilligung_argument $kunden_einwilligung_argument) : \App\Type\kunden_einwilligung_response
    {
        return $this->call('kunden_einwilligung', $kunden_einwilligung_argument);
    }

    public function kunden_abgleich(\App\Type\abgleich_argument $abgleich_argument) : \App\Type\kunden_abgleich_response
    {
        return $this->call('abgleich_argument', $abgleich_argument);
    }

    public function kunden_aenderungen(\App\Type\aenderungen_argument $aenderungen_argument) : \App\Type\kunden_aenderungen_response
    {
        return $this->call('aenderungen_argument', $aenderungen_argument);
    }

    public function kunden_abfrage(\App\Type\abfrage_argument $abfrage_argument) : \App\Type\kunden_abfrage_response
    {
        return $this->call('abfrage_argument', $abfrage_argument);
    }

    public function vermittler_einwilligung(\App\Type\vermittler_einwilligung_argument $vermittler_einwilligung_argument) : \App\Type\vermittler_einwilligung_response
    {
        return $this->call('vermittler_einwilligung_argument', $vermittler_einwilligung_argument);
    }

    public function vermittler_abgleich(\App\Type\abgleich_argument $abgleich_argument) : \App\Type\vermittler_abgleich_response
    {
        return $this->call('abgleich_argument', $abgleich_argument);
    }

    public function vermittler_aenderungen(\App\Type\aenderungen_argument $aenderungen_argument) : \App\Type\vermittler_aenderungen_response
    {
        return $this->call('aenderungen_argument', $aenderungen_argument);
    }

    public function vermittler_abfrage(\App\Type\abfrage_argument $abfrage_argument) : \App\Type\vermittler_abfrage_response
    {
        return $this->call('abfrage_argument', $abfrage_argument);
    }

    public function kundenvertraege_uebermittlung(\App\Type\kundenvertraege_uebermittlung_argument $kundenvertraege_uebermittlung_argument) : \App\Type\kundenvertraege_uebermittlung_response
    {
        return $this->call('kundenvertraege_uebermittlung_argument', $kundenvertraege_uebermittlung_argument);
    }


}

