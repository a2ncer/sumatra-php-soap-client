<?php

namespace Sumatra;

use Phpro\SoapClient\Client;

class SumatraClient extends Client
{
    public function kunden_einwilligung(\Sumatra\Type\kunden_einwilligung_argument $kunden_einwilligung_argument): \Sumatra\Type\kunden_einwilligung_response
    {
        return $this->call('kunden_einwilligung', $kunden_einwilligung_argument);
    }

    public function kunden_abgleich(\Sumatra\Type\abgleich_argument $abgleich_argument): \Sumatra\Type\kunden_abgleich_response
    {
        return $this->call('abgleich_argument', $abgleich_argument);
    }

    public function kunden_aenderungen(\Sumatra\Type\aenderungen_argument $aenderungen_argument): \Sumatra\Type\kunden_aenderungen_response
    {
        return $this->call('aenderungen_argument', $aenderungen_argument);
    }

    public function kunden_abfrage(\Sumatra\Type\abfrage_argument $abfrage_argument): \Sumatra\Type\kunden_abfrage_response
    {
        return $this->call('abfrage_argument', $abfrage_argument);
    }

    public function vermittler_einwilligung(\Sumatra\Type\vermittler_einwilligung_argument $vermittler_einwilligung_argument): \Sumatra\Type\vermittler_einwilligung_response
    {
        return $this->call('vermittler_einwilligung_argument', $vermittler_einwilligung_argument);
    }

    public function vermittler_abgleich(\Sumatra\Type\abgleich_argument $abgleich_argument): \Sumatra\Type\vermittler_abgleich_response
    {
        return $this->call('abgleich_argument', $abgleich_argument);
    }

    public function vermittler_aenderungen(\Sumatra\Type\aenderungen_argument $aenderungen_argument): \Sumatra\Type\vermittler_aenderungen_response
    {
        return $this->call('aenderungen_argument', $aenderungen_argument);
    }

    public function vermittler_abfrage(\Sumatra\Type\abfrage_argument $abfrage_argument): \Sumatra\Type\vermittler_abfrage_response
    {
        return $this->call('abfrage_argument', $abfrage_argument);
    }

    public function kundenvertraege_uebermittlung(\Sumatra\Type\kundenvertraege_uebermittlung_argument $kundenvertraege_uebermittlung_argument): \Sumatra\Type\kundenvertraege_uebermittlung_response
    {
        return $this->call('kundenvertraege_uebermittlung_argument', $kundenvertraege_uebermittlung_argument);
    }
}
