<?php

namespace Sumatra;

use Sumatra\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class SumatraClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('kunden_einwilligung_response', Type\Kunden_einwilligung_response::class),
            new ClassMap('kunden_abgleich_response', Type\Kunden_abgleich_response::class),
            new ClassMap('kunden_aenderungen_response', Type\Kunden_aenderungen_response::class),
            new ClassMap('kunden_abfrage_response', Type\Kunden_abfrage_response::class),
            new ClassMap('kunde', Type\Kunde::class),
            new ClassMap('gisa', Type\Gisa::class),
            new ClassMap('aerztekammer', Type\Aerztekammer::class),
            new ClassMap('titel', Type\Titel::class),
            new ClassMap('fachgebiet', Type\Fachgebiet::class),
            new ClassMap('partner', Type\Partner::class),
            new ClassMap('kind', Type\Kind::class),
            new ClassMap('kommunikation', Type\Kommunikation::class),
            new ClassMap('adresse', Type\Adresse::class),
            new ClassMap('vermittler_einwilligung_argument', Type\Vermittler_einwilligung_argument::class),
            new ClassMap('kunden_einwilligung_argument', Type\Kunden_einwilligung_argument::class),
            new ClassMap('aenderungen_argument', Type\Aenderungen_argument::class),
            new ClassMap('abgleich_argument', Type\Abgleich_argument::class),
            new ClassMap('abfrage_argument', Type\Abfrage_argument::class),
            new ClassMap('vermittler_einwilligung_response', Type\Vermittler_einwilligung_response::class),
            new ClassMap('vermittler_abgleich_response', Type\Vermittler_abgleich_response::class),
            new ClassMap('vermittler_aenderungen_response', Type\Vermittler_aenderungen_response::class),
            new ClassMap('vermittler_abfrage_response', Type\Vermittler_abfrage_response::class),
            new ClassMap('vermittler', Type\Vermittler::class),
            new ClassMap('person', Type\Person::class),
            new ClassMap('kundenvertraege_uebermittlung_response', Type\Kundenvertraege_uebermittlung_response::class),
            new ClassMap('kundenvertraege_uebermittlung_argument', Type\Kundenvertraege_uebermittlung_argument::class),
            new ClassMap('vertrag', Type\Vertrag::class),
            new ClassMap('status', Type\Status::class),
        ]);
    }


}

