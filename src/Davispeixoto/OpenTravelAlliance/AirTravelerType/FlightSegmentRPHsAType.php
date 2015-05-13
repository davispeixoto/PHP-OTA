<?php

namespace Davispeixoto\OpenTravelAlliance\AirTravelerType;

/**
 * Class representing FlightSegmentRPHsAType
 */
class FlightSegmentRPHsAType
{

    /**
     * Reference to the flight segments for this traveler
     *
     * @property string[] $flightSegmentRPH
     */
    private $flightSegmentRPH = null;

    /**
     * Adds as flightSegmentRPH
     *
     * Reference to the flight segments for this traveler
     *
     * @return self
     * @param string $flightSegmentRPH
     */
    public function addToFlightSegmentRPH($flightSegmentRPH)
    {
        $this->flightSegmentRPH[] = $flightSegmentRPH;

        return $this;
    }

    /**
     * isset flightSegmentRPH
     *
     * Reference to the flight segments for this traveler
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightSegmentRPH($index)
    {
        return isset($this->flightSegmentRPH[$index]);
    }

    /**
     * unset flightSegmentRPH
     *
     * Reference to the flight segments for this traveler
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightSegmentRPH($index)
    {
        unset($this->flightSegmentRPH[$index]);
    }

    /**
     * Gets as flightSegmentRPH
     *
     * Reference to the flight segments for this traveler
     *
     * @return string[]
     */
    public function getFlightSegmentRPH()
    {
        return $this->flightSegmentRPH;
    }

    /**
     * Sets a new flightSegmentRPH
     *
     * Reference to the flight segments for this traveler
     *
     * @param string $flightSegmentRPH
     * @return self
     */
    public function setFlightSegmentRPH(array $flightSegmentRPH)
    {
        $this->flightSegmentRPH = $flightSegmentRPH;

        return $this;
    }


}

