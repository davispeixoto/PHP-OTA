<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ;

/**
 * Class representing AirTravelersAType
 */
class AirTravelersAType
{

    /**
     * This specifies the quantity and types of passengers.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\AirTravelersAType\AirTravelerAType[]
     * $airTraveler
     */
    private $airTraveler = null;

    /**
     * Adds as airTraveler
     *
     * This specifies the quantity and types of passengers.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\AirTravelersAType\AirTravelerAType
     * $airTraveler
     */
    public function addToAirTraveler(
        \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\AirTravelersAType\AirTravelerAType $airTraveler
    ) {
        $this->airTraveler[] = $airTraveler;

        return $this;
    }

    /**
     * isset airTraveler
     *
     * This specifies the quantity and types of passengers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirTraveler($index)
    {
        return isset($this->airTraveler[$index]);
    }

    /**
     * unset airTraveler
     *
     * This specifies the quantity and types of passengers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirTraveler($index)
    {
        unset($this->airTraveler[$index]);
    }

    /**
     * Gets as airTraveler
     *
     * This specifies the quantity and types of passengers.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\AirTravelersAType\AirTravelerAType[]
     */
    public function getAirTraveler()
    {
        return $this->airTraveler;
    }

    /**
     * Sets a new airTraveler
     *
     * This specifies the quantity and types of passengers.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\AirTravelersAType\AirTravelerAType[]
     * $airTraveler
     * @return self
     */
    public function setAirTraveler(array $airTraveler)
    {
        $this->airTraveler = $airTraveler;

        return $this;
    }


}

