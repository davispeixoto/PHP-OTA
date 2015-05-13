<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType;

/**
 * Class representing TimeRestrictionsAType
 */
class TimeRestrictionsAType
{

    /**
     * Allows fare contract to be restricted by time of day.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\TimeRestrictionsAType\TimeRestrictionAType[]
     * $timeRestriction
     */
    private $timeRestriction = null;

    /**
     * Adds as timeRestriction
     *
     * Allows fare contract to be restricted by time of day.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\TimeRestrictionsAType\TimeRestrictionAType
     * $timeRestriction
     */
    public function addToTimeRestriction(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\TimeRestrictionsAType\TimeRestrictionAType $timeRestriction
    ) {
        $this->timeRestriction[] = $timeRestriction;

        return $this;
    }

    /**
     * isset timeRestriction
     *
     * Allows fare contract to be restricted by time of day.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTimeRestriction($index)
    {
        return isset($this->timeRestriction[$index]);
    }

    /**
     * unset timeRestriction
     *
     * Allows fare contract to be restricted by time of day.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTimeRestriction($index)
    {
        unset($this->timeRestriction[$index]);
    }

    /**
     * Gets as timeRestriction
     *
     * Allows fare contract to be restricted by time of day.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\TimeRestrictionsAType\TimeRestrictionAType[]
     */
    public function getTimeRestriction()
    {
        return $this->timeRestriction;
    }

    /**
     * Sets a new timeRestriction
     *
     * Allows fare contract to be restricted by time of day.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\TimeRestrictionsAType\TimeRestrictionAType[]
     * $timeRestriction
     * @return self
     */
    public function setTimeRestriction(array $timeRestriction)
    {
        $this->timeRestriction = $timeRestriction;

        return $this;
    }


}

