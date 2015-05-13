<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfCourseResRS;

use Davispeixoto\OpenTravelAlliance\TeeTimeBookingType;

/**
 * Class representing GolfCourseResAType
 */
class GolfCourseResAType extends TeeTimeBookingType
{

    /**
     * Information that describes the golf facility, including the unique facility ID.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolfFacilityType $facilityInfo
     */
    private $facilityInfo = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as facilityInfo
     *
     * Information that describes the golf facility, including the unique facility ID.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolfFacilityType
     */
    public function getFacilityInfo()
    {
        return $this->facilityInfo;
    }

    /**
     * Sets a new facilityInfo
     *
     * Information that describes the golf facility, including the unique facility ID.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType $facilityInfo
     * @return self
     */
    public function setFacilityInfo(\Davispeixoto\OpenTravelAlliance\GolfFacilityType $facilityInfo)
    {
        $this->facilityInfo = $facilityInfo;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

