<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundAvailRQ;

/**
 * Class representing DisabilityInfoAType
 */
class DisabilityInfoAType
{

    /**
     * If TRUE, a disability compatible vehicle is required.
     *
     * @property boolean $requiredInd
     */
    private $requiredInd = null;

    /**
     * Gets as requiredInd
     *
     * If TRUE, a disability compatible vehicle is required.
     *
     * @return boolean
     */
    public function getRequiredInd()
    {
        return $this->requiredInd;
    }

    /**
     * Sets a new requiredInd
     *
     * If TRUE, a disability compatible vehicle is required.
     *
     * @param boolean $requiredInd
     * @return self
     */
    public function setRequiredInd($requiredInd)
    {
        $this->requiredInd = $requiredInd;

        return $this;
    }


}

