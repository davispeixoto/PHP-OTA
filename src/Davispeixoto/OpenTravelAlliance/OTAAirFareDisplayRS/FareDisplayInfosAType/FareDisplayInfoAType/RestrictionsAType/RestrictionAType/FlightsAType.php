<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType;

/**
 * Class representing FlightsAType
 */
class FlightsAType
{

    /**
     * Include or exclude a specific flight number.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\FlightsAType\FlightAType[]
     * $flight
     */
    private $flight = null;

    /**
     * Adds as flight
     *
     * Include or exclude a specific flight number.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\FlightsAType\FlightAType
     * $flight
     */
    public function addToFlight(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\FlightsAType\FlightAType $flight
    ) {
        $this->flight[] = $flight;

        return $this;
    }

    /**
     * isset flight
     *
     * Include or exclude a specific flight number.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlight($index)
    {
        return isset($this->flight[$index]);
    }

    /**
     * unset flight
     *
     * Include or exclude a specific flight number.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlight($index)
    {
        unset($this->flight[$index]);
    }

    /**
     * Gets as flight
     *
     * Include or exclude a specific flight number.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\FlightsAType\FlightAType[]
     */
    public function getFlight()
    {
        return $this->flight;
    }

    /**
     * Sets a new flight
     *
     * Include or exclude a specific flight number.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\FlightsAType\FlightAType[]
     * $flight
     * @return self
     */
    public function setFlight(array $flight)
    {
        $this->flight = $flight;

        return $this;
    }


}

