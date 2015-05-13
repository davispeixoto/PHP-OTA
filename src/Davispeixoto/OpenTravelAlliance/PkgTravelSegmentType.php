<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PkgTravelSegmentType
 *
 * A full definition of a travel segment including supplemental price and
 * facilities.
 * XSD Type: PkgTravelSegment
 */
class PkgTravelSegmentType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PkgAirSegmentType $airSegment
     */
    private $airSegment = null;

    /**
     * Gets as airSegment
     *
     * @return \Davispeixoto\OpenTravelAlliance\PkgAirSegmentType
     */
    public function getAirSegment()
    {
        return $this->airSegment;
    }

    /**
     * Sets a new airSegment
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgAirSegmentType $airSegment
     * @return self
     */
    public function setAirSegment(\Davispeixoto\OpenTravelAlliance\PkgAirSegmentType $airSegment)
    {
        $this->airSegment = $airSegment;

        return $this;
    }


}

