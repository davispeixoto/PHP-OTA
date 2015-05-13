<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GroundLocationsType
 *
 * Pickup, interim stops and drop-off details.
 * XSD Type: GroundLocationsType
 */
class GroundLocationsType
{

    /**
     * Pickup details, including date and time, address, airport and airline
     * information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundLocationType $pickup
     */
    private $pickup = null;

    /**
     * A collection of Stop information, including address, airport and airline
     * details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GroundLocationsType\StopsAType\StopAType[]
     * $stops
     */
    private $stops = null;

    /**
     * Drop off information, including address, airport and airline details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundLocationType $dropoff
     */
    private $dropoff = null;

    /**
     * Gets as pickup
     *
     * Pickup details, including date and time, address, airport and airline
     * information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundLocationType
     */
    public function getPickup()
    {
        return $this->pickup;
    }

    /**
     * Sets a new pickup
     *
     * Pickup details, including date and time, address, airport and airline
     * information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundLocationType $pickup
     * @return self
     */
    public function setPickup(\Davispeixoto\OpenTravelAlliance\GroundLocationType $pickup)
    {
        $this->pickup = $pickup;

        return $this;
    }

    /**
     * Adds as stop
     *
     * A collection of Stop information, including address, airport and airline
     * details.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GroundLocationsType\StopsAType\StopAType
     * $stop
     */
    public function addToStops(\Davispeixoto\OpenTravelAlliance\GroundLocationsType\StopsAType\StopAType $stop)
    {
        $this->stops[] = $stop;

        return $this;
    }

    /**
     * isset stops
     *
     * A collection of Stop information, including address, airport and airline
     * details.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStops($index)
    {
        return isset($this->stops[$index]);
    }

    /**
     * unset stops
     *
     * A collection of Stop information, including address, airport and airline
     * details.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStops($index)
    {
        unset($this->stops[$index]);
    }

    /**
     * Gets as stops
     *
     * A collection of Stop information, including address, airport and airline
     * details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GroundLocationsType\StopsAType\StopAType[]
     */
    public function getStops()
    {
        return $this->stops;
    }

    /**
     * Sets a new stops
     *
     * A collection of Stop information, including address, airport and airline
     * details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundLocationsType\StopsAType\StopAType[]
     * $stops
     * @return self
     */
    public function setStops(array $stops)
    {
        $this->stops = $stops;

        return $this;
    }

    /**
     * Gets as dropoff
     *
     * Drop off information, including address, airport and airline details.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundLocationType
     */
    public function getDropoff()
    {
        return $this->dropoff;
    }

    /**
     * Sets a new dropoff
     *
     * Drop off information, including address, airport and airline details.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundLocationType $dropoff
     * @return self
     */
    public function setDropoff(\Davispeixoto\OpenTravelAlliance\GroundLocationType $dropoff)
    {
        $this->dropoff = $dropoff;

        return $this;
    }


}

