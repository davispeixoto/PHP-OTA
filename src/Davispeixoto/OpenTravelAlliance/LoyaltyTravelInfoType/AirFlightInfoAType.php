<?php

namespace Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType;

/**
 * Class representing AirFlightInfoAType
 */
class AirFlightInfoAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType[]
     * $flightSegment
     */
    private $flightSegment = null;

    /**
     * Adds as flightSegment
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType $flightSegment
     */
    public function addToFlightSegment(\Davispeixoto\OpenTravelAlliance\BookFlightSegmentType $flightSegment)
    {
        $this->flightSegment[] = $flightSegment;

        return $this;
    }

    /**
     * isset flightSegment
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightSegment($index)
    {
        return isset($this->flightSegment[$index]);
    }

    /**
     * unset flightSegment
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightSegment($index)
    {
        unset($this->flightSegment[$index]);
    }

    /**
     * Gets as flightSegment
     *
     * @return \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType[]
     */
    public function getFlightSegment()
    {
        return $this->flightSegment;
    }

    /**
     * Sets a new flightSegment
     *
     * @param \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType[] $flightSegment
     * @return self
     */
    public function setFlightSegment(array $flightSegment)
    {
        $this->flightSegment = $flightSegment;

        return $this;
    }


}

