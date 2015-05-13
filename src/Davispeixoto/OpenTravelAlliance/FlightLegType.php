<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing FlightLegType
 *
 * Specifies minimal information about a flight.
 * XSD Type: FlightLegType
 */
class FlightLegType
{

    /**
     * A flight number.
     *
     * @property string $flightNumber
     */
    private $flightNumber = null;

    /**
     * The reservation booking designator for a flight.
     *
     * @property string $resBookDesigCode
     */
    private $resBookDesigCode = null;

    /**
     * A date for the flight.
     *
     * @property \DateTime $date
     */
    private $date = null;

    /**
     * The departure airport for the flight.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FlightLegType\DepartureAirportAType
     * $departureAirport
     */
    private $departureAirport = null;

    /**
     * The arrival airport for the flight.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FlightLegType\ArrivalAirportAType
     * $arrivalAirport
     */
    private $arrivalAirport = null;

    /**
     * Gets as flightNumber
     *
     * A flight number.
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
     * A flight number.
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
     * Gets as resBookDesigCode
     *
     * The reservation booking designator for a flight.
     *
     * @return string
     */
    public function getResBookDesigCode()
    {
        return $this->resBookDesigCode;
    }

    /**
     * Sets a new resBookDesigCode
     *
     * The reservation booking designator for a flight.
     *
     * @param string $resBookDesigCode
     * @return self
     */
    public function setResBookDesigCode($resBookDesigCode)
    {
        $this->resBookDesigCode = $resBookDesigCode;

        return $this;
    }

    /**
     * Gets as date
     *
     * A date for the flight.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * A date for the flight.
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as departureAirport
     *
     * The departure airport for the flight.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FlightLegType\DepartureAirportAType
     */
    public function getDepartureAirport()
    {
        return $this->departureAirport;
    }

    /**
     * Sets a new departureAirport
     *
     * The departure airport for the flight.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FlightLegType\DepartureAirportAType
     * $departureAirport
     * @return self
     */
    public function setDepartureAirport(
        \Davispeixoto\OpenTravelAlliance\FlightLegType\DepartureAirportAType $departureAirport
    ) {
        $this->departureAirport = $departureAirport;

        return $this;
    }

    /**
     * Gets as arrivalAirport
     *
     * The arrival airport for the flight.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FlightLegType\ArrivalAirportAType
     */
    public function getArrivalAirport()
    {
        return $this->arrivalAirport;
    }

    /**
     * Sets a new arrivalAirport
     *
     * The arrival airport for the flight.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FlightLegType\ArrivalAirportAType
     * $arrivalAirport
     * @return self
     */
    public function setArrivalAirport(
        \Davispeixoto\OpenTravelAlliance\FlightLegType\ArrivalAirportAType $arrivalAirport
    ) {
        $this->arrivalAirport = $arrivalAirport;

        return $this;
    }


}

