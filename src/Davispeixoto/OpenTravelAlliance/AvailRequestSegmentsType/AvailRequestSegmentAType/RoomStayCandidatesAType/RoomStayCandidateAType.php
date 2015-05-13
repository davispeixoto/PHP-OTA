<?php

namespace Davispeixoto\OpenTravelAlliance\AvailRequestSegmentsType\AvailRequestSegmentAType\RoomStayCandidatesAType;

use Davispeixoto\OpenTravelAlliance\RoomStayCandidateType;

/**
 * Class representing RoomStayCandidateAType
 */
class RoomStayCandidateAType extends RoomStayCandidateType
{

    /**
     * Indicates the segment of the RoomStay is an alternate offer. Default=false.
     *  false
     *
     * @property boolean $isAlternate
     */
    private $isAlternate = null;

    /**
     * Gets as isAlternate
     *
     * Indicates the segment of the RoomStay is an alternate offer. Default=false.
     *  false
     *
     * @return boolean
     */
    public function getIsAlternate()
    {
        return $this->isAlternate;
    }

    /**
     * Sets a new isAlternate
     *
     * Indicates the segment of the RoomStay is an alternate offer. Default=false.
     *  false
     *
     * @param boolean $isAlternate
     * @return self
     */
    public function setIsAlternate($isAlternate)
    {
        $this->isAlternate = $isAlternate;

        return $this;
    }


}

