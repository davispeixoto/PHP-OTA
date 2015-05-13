<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDetailsRQ;

/**
 * Class representing AirDetailAType
 */
class AirDetailAType
{

    /**
     * Airline specified for details request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $airline
     */
    private $airline = null;

    /**
     * Specific flight number to request details for. Requires that Airline is also
     * supplied.
     *
     * @property string $flightNumber
     */
    private $flightNumber = null;

    /**
     * Flight Origin - IATA 3 letter code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $departureAirport
     */
    private $departureAirport = null;

    /**
     * Flight Destination- IATA 3 letter code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $arrivalAirport
     */
    private $arrivalAirport = null;

    /**
     * The scheduled date of departure for the requested flight.
     *
     * @property \DateTime $departureDate
     */
    private $departureDate = null;

    /**
     * Gets as airline
     *
     * Airline specified for details request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * Sets a new airline
     *
     * Airline specified for details request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $airline
     * @return self
     */
    public function setAirline(\Davispeixoto\OpenTravelAlliance\CompanyNameType $airline)
    {
        $this->airline = $airline;

        return $this;
    }

    /**
     * Gets as flightNumber
     *
     * Specific flight number to request details for. Requires that Airline is also
     * supplied.
     *
     * @return string
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * Sets a new flightNumber
     *
     * Specific flight number to request details for. Requires that Airline is also
     * supplied.
     *
     * @param string $flightNumber
     * @return self
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;

        return $this;
    }

    /**
     * Gets as departureAirport
     *
     * Flight Origin - IATA 3 letter code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getDepartureAirport()
    {
        return $this->departureAirport;
    }

    /**
     * Sets a new departureAirport
     *
     * Flight Origin - IATA 3 letter code.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $departureAirport
     * @return self
     */
    public function setDepartureAirport(\Davispeixoto\OpenTravelAlliance\LocationType $departureAirport)
    {
        $this->departureAirport = $departureAirport;

        return $this;
    }

    /**
     * Gets as arrivalAirport
     *
     * Flight Destination- IATA 3 letter code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getArrivalAirport()
    {
        return $this->arrivalAirport;
    }

    /**
     * Sets a new arrivalAirport
     *
     * Flight Destination- IATA 3 letter code.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $arrivalAirport
     * @return self
     */
    public function setArrivalAirport(\Davispeixoto\OpenTravelAlliance\LocationType $arrivalAirport)
    {
        $this->arrivalAirport = $arrivalAirport;

        return $this;
    }

    /**
     * Gets as departureDate
     *
     * The scheduled date of departure for the requested flight.
     *
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Sets a new departureDate
     *
     * The scheduled date of departure for the requested flight.
     *
     * @param \DateTime $departureDate
     * @return self
     */
    public function setDepartureDate(\DateTime $departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }


}

