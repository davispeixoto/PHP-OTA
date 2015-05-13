<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType;

/**
 * Class representing AirTravelersAType
 */
class AirTravelersAType
{

    /**
     * Air traveler detail.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\AirTravelersAType\AirTravelerAType[]
     * $airTraveler
     */
    private $airTraveler = null;

    /**
     * Adds as airTraveler
     *
     * Air traveler detail.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\AirTravelersAType\AirTravelerAType
     * $airTraveler
     */
    public function addToAirTraveler(
        \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\AirTravelersAType\AirTravelerAType $airTraveler
    ) {
        $this->airTraveler[] = $airTraveler;

        return $this;
    }

    /**
     * isset airTraveler
     *
     * Air traveler detail.
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
     * Air traveler detail.
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
     * Air traveler detail.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\AirTravelersAType\AirTravelerAType[]
     */
    public function getAirTraveler()
    {
        return $this->airTraveler;
    }

    /**
     * Sets a new airTraveler
     *
     * Air traveler detail.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\AirTravelersAType\AirTravelerAType[]
     * $airTraveler
     * @return self
     */
    public function setAirTraveler(array $airTraveler)
    {
        $this->airTraveler = $airTraveler;

        return $this;
    }


}

