<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType;

use Davispeixoto\OpenTravelAlliance\ParagraphType;

/**
 * Class representing SpecificRequestAType
 */
class SpecificRequestAType extends ParagraphType
{

    /**
     * When true, indicates the data requested by the Name attribute or Text element is
     * mandatory.
     *
     * @property boolean $mandatoryIndicator
     */
    private $mandatoryIndicator = null;

    /**
     * Gets as mandatoryIndicator
     *
     * When true, indicates the data requested by the Name attribute or Text element is
     * mandatory.
     *
     * @return boolean
     */
    public function getMandatoryIndicator()
    {
        return $this->mandatoryIndicator;
    }

    /**
     * Sets a new mandatoryIndicator
     *
     * When true, indicates the data requested by the Name attribute or Text element is
     * mandatory.
     *
     * @param boolean $mandatoryIndicator
     * @return self
     */
    public function setMandatoryIndicator($mandatoryIndicator)
    {
        $this->mandatoryIndicator = $mandatoryIndicator;

        return $this;
    }


}

