<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\ExhibitionAType;

/**
 * Class representing ExhibitDetailAType
 */
class ExhibitDetailAType
{

    /**
     * Type of booths for the entire exhibition. Refer to OpenTravel Code Table Exhibit
     * Type (EXH).
     *
     * @property string $exhibitTypeCode
     */
    private $exhibitTypeCode = null;

    /**
     * Gets as exhibitTypeCode
     *
     * Type of booths for the entire exhibition. Refer to OpenTravel Code Table Exhibit
     * Type (EXH).
     *
     * @return string
     */
    public function getExhibitTypeCode()
    {
        return $this->exhibitTypeCode;
    }

    /**
     * Sets a new exhibitTypeCode
     *
     * Type of booths for the entire exhibition. Refer to OpenTravel Code Table Exhibit
     * Type (EXH).
     *
     * @param string $exhibitTypeCode
     * @return self
     */
    public function setExhibitTypeCode($exhibitTypeCode)
    {
        $this->exhibitTypeCode = $exhibitTypeCode;

        return $this;
    }


}

