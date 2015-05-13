<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\LengthsOfStayCandidatesAType;

/**
 * Class representing LengthOfStayCandidateAType
 */
class LengthOfStayCandidateAType
{

    /**
     * An enumerated type used to define how the minimum and maximum LOS is applied.
     * Values: Set Minimum LOS, Remove Minimum LOS, Set Maximum LOS, Remove Maximum
     * LOS, Set Forward Minimum Stay, Remove Forward Minimum Stay, Set Forward Maximum
     * Stay, Remove Forward Maximum Stay.
     *
     * @property string $minMaxMessageType
     */
    private $minMaxMessageType = null;

    /**
     * Gets as minMaxMessageType
     *
     * An enumerated type used to define how the minimum and maximum LOS is applied.
     * Values: Set Minimum LOS, Remove Minimum LOS, Set Maximum LOS, Remove Maximum
     * LOS, Set Forward Minimum Stay, Remove Forward Minimum Stay, Set Forward Maximum
     * Stay, Remove Forward Maximum Stay.
     *
     * @return string
     */
    public function getMinMaxMessageType()
    {
        return $this->minMaxMessageType;
    }

    /**
     * Sets a new minMaxMessageType
     *
     * An enumerated type used to define how the minimum and maximum LOS is applied.
     * Values: Set Minimum LOS, Remove Minimum LOS, Set Maximum LOS, Remove Maximum
     * LOS, Set Forward Minimum Stay, Remove Forward Minimum Stay, Set Forward Maximum
     * Stay, Remove Forward Maximum Stay.
     *
     * @param string $minMaxMessageType
     * @return self
     */
    public function setMinMaxMessageType($minMaxMessageType)
    {
        $this->minMaxMessageType = $minMaxMessageType;

        return $this;
    }


}

