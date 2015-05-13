<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfFacilityInfoRS;

use Davispeixoto\OpenTravelAlliance\GolfFacilityType;

/**
 * Class representing GolfCourseAType
 */
class GolfCourseAType extends GolfFacilityType
{

    /**
     * If true, this facility has been marked as a featured course by the supplier.
     *
     * @property boolean $featuredInd
     */
    private $featuredInd = null;

    /**
     * Gets as featuredInd
     *
     * If true, this facility has been marked as a featured course by the supplier.
     *
     * @return boolean
     */
    public function getFeaturedInd()
    {
        return $this->featuredInd;
    }

    /**
     * Sets a new featuredInd
     *
     * If true, this facility has been marked as a featured course by the supplier.
     *
     * @param boolean $featuredInd
     * @return self
     */
    public function setFeaturedInd($featuredInd)
    {
        $this->featuredInd = $featuredInd;

        return $this;
    }


}

