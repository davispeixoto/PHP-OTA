<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AirInfoType
 *
 * Specifies the Air Deviation Request information.
 * XSD Type: AirInfoType
 */
class AirInfoType
{

    /**
     * Specifies the requested departure date of the flight.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $departureDateTime
     */
    private $departureDateTime = null;

    /**
     * Specifies the requested arrival date of the flight.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $arrivalDateTime
     */
    private $arrivalDateTime = null;

    /**
     * Specifies the Cabin Class such as, BUSINESS, ECONOMY, FIRST etc.
     *
     * @property string $airlineCabinClass
     */
    private $airlineCabinClass = null;

    /**
     * Specifies the requested departure city.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $departureCity
     */
    private $departureCity = null;

    /**
     * Specifies the requested arrival city.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $arrivalCity
     */
    private $arrivalCity = null;

    /**
     * Specifies the requested Airline.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OperatingAirlineType $airline
     */
    private $airline = null;

    /**
     * Gets as departureDateTime
     *
     * Specifies the requested departure date of the flight.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDepartureDateTime()
    {
        return $this->departureDateTime;
    }

    /**
     * Sets a new departureDateTime
     *
     * Specifies the requested departure date of the flight.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $departureDateTime
     * @return self
     */
    public function setDepartureDateTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $departureDateTime)
    {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * Gets as arrivalDateTime
     *
     * Specifies the requested arrival date of the flight.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getArrivalDateTime()
    {
        return $this->arrivalDateTime;
    }

    /**
     * Sets a new arrivalDateTime
     *
     * Specifies the requested arrival date of the flight.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $arrivalDateTime
     * @return self
     */
    public function setArrivalDateTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $arrivalDateTime)
    {
        $this->arrivalDateTime = $arrivalDateTime;

        return $this;
    }

    /**
     * Gets as airlineCabinClass
     *
     * Specifies the Cabin Class such as, BUSINESS, ECONOMY, FIRST etc.
     *
     * @return string
     */
    public function getAirlineCabinClass()
    {
        return $this->airlineCabinClass;
    }

    /**
     * Sets a new airlineCabinClass
     *
     * Specifies the Cabin Class such as, BUSINESS, ECONOMY, FIRST etc.
     *
     * @param string $airlineCabinClass
     * @return self
     */
    public function setAirlineCabinClass($airlineCabinClass)
    {
        $this->airlineCabinClass = $airlineCabinClass;

        return $this;
    }

    /**
     * Gets as departureCity
     *
     * Specifies the requested departure city.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getDepartureCity()
    {
        return $this->departureCity;
    }

    /**
     * Sets a new departureCity
     *
     * Specifies the requested departure city.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $departureCity
     * @return self
     */
    public function setDepartureCity(\Davispeixoto\OpenTravelAlliance\LocationType $departureCity)
    {
        $this->departureCity = $departureCity;

        return $this;
    }

    /**
     * Gets as arrivalCity
     *
     * Specifies the requested arrival city.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getArrivalCity()
    {
        return $this->arrivalCity;
    }

    /**
     * Sets a new arrivalCity
     *
     * Specifies the requested arrival city.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $arrivalCity
     * @return self
     */
    public function setArrivalCity(\Davispeixoto\OpenTravelAlliance\LocationType $arrivalCity)
    {
        $this->arrivalCity = $arrivalCity;

        return $this;
    }

    /**
     * Gets as airline
     *
     * Specifies the requested Airline.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OperatingAirlineType
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * Sets a new airline
     *
     * Specifies the requested Airline.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OperatingAirlineType $airline
     * @return self
     */
    public function setAirline(\Davispeixoto\OpenTravelAlliance\OperatingAirlineType $airline)
    {
        $this->airline = $airline;

        return $this;
    }


}

