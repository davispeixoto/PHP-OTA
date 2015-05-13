<?php

namespace Davispeixoto\OpenTravelAlliance\HotelInfoType;

/**
 * Class representing ClosedSeasonsAType
 */
class ClosedSeasonsAType
{

    /**
     * A date and time period when a hotel facility is closed.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[] $closedSeason
     */
    private $closedSeason = null;

    /**
     * Adds as closedSeason
     *
     * A date and time period when a hotel facility is closed.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType $closedSeason
     */
    public function addToClosedSeason(\Davispeixoto\OpenTravelAlliance\DateTimeSpanType $closedSeason)
    {
        $this->closedSeason[] = $closedSeason;

        return $this;
    }

    /**
     * isset closedSeason
     *
     * A date and time period when a hotel facility is closed.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetClosedSeason($index)
    {
        return isset($this->closedSeason[$index]);
    }

    /**
     * unset closedSeason
     *
     * A date and time period when a hotel facility is closed.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetClosedSeason($index)
    {
        unset($this->closedSeason[$index]);
    }

    /**
     * Gets as closedSeason
     *
     * A date and time period when a hotel facility is closed.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[]
     */
    public function getClosedSeason()
    {
        return $this->closedSeason;
    }

    /**
     * Sets a new closedSeason
     *
     * A date and time period when a hotel facility is closed.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[] $closedSeason
     * @return self
     */
    public function setClosedSeason(array $closedSeason)
    {
        $this->closedSeason = $closedSeason;

        return $this;
    }


}

