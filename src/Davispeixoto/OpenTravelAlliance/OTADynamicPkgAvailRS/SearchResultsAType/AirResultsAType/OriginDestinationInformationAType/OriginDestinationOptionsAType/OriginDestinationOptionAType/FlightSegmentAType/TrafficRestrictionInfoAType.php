<?php

namespace Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType;

use Davispeixoto\OpenTravelAlliance\FreeTextType;

/**
 * Class representing TrafficRestrictionInfoAType
 */
class TrafficRestrictionInfoAType extends FreeTextType
{

    /**
     * The traffic restriction that applies to this flight segment. Refer to OpenTravel
     * Code list TRC (Traffic Restriction Code).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * The traffic restriction that applies to this flight segment. Refer to OpenTravel
     * Code list TRC (Traffic Restriction Code).
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The traffic restriction that applies to this flight segment. Refer to OpenTravel
     * Code list TRC (Traffic Restriction Code).
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }


}

