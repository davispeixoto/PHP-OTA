<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType\AirAccommodationsAType;

use Davispeixoto\OpenTravelAlliance\AirInfoType;

/**
 * Class representing AirAccommodationAType
 */
class AirAccommodationAType extends AirInfoType
{

    /**
     * Used for additional info regarding the flight deviation.
     *
     * @property string $comment
     */
    private $comment = null;

    /**
     * Identifies the type of air accommodation (e.g., Regular, Premium, Deviation).
     *
     * @property string $airAccommodationType
     */
    private $airAccommodationType = null;

    /**
     * Gets as comment
     *
     * Used for additional info regarding the flight deviation.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Used for additional info regarding the flight deviation.
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Gets as airAccommodationType
     *
     * Identifies the type of air accommodation (e.g., Regular, Premium, Deviation).
     *
     * @return string
     */
    public function getAirAccommodationType()
    {
        return $this->airAccommodationType;
    }

    /**
     * Sets a new airAccommodationType
     *
     * Identifies the type of air accommodation (e.g., Regular, Premium, Deviation).
     *
     * @param string $airAccommodationType
     * @return self
     */
    public function setAirAccommodationType($airAccommodationType)
    {
        $this->airAccommodationType = $airAccommodationType;

        return $this;
    }


}

