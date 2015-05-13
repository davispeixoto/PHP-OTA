<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFlifoRQ;

/**
 * Class representing FlightSegmentAType
 */
class FlightSegmentAType
{

    /**
     * When true, times should be returned in UTC (Universal Time Coordinate). When
     * false, times should be returned in local time. If attribute is not included time
     * is assumed to be local time.
     *
     * @property boolean $uTCPreferenceInd
     */
    private $uTCPreferenceInd = null;

    /**
     * Specify airline to request FLIFO details.
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
     * Date of departure for flight information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRQ\FlightSegmentAType\DepartureDateAType
     * $departureDate
     */
    private $departureDate = null;

    /**
     * Specifies the departure location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $departureAirport
     */
    private $departureAirport = null;

    /**
     * Specifies the arrival location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $arrivalAirport
     */
    private $arrivalAirport = null;

    /**
     * Gets as uTCPreferenceInd
     *
     * When true, times should be returned in UTC (Universal Time Coordinate). When
     * false, times should be returned in local time. If attribute is not included time
     * is assumed to be local time.
     *
     * @return boolean
     */
    public function getUTCPreferenceInd()
    {
        return $this->uTCPreferenceInd;
    }

    /**
     * Sets a new uTCPreferenceInd
     *
     * When true, times should be returned in UTC (Universal Time Coordinate). When
     * false, times should be returned in local time. If attribute is not included time
     * is assumed to be local time.
     *
     * @param boolean $uTCPreferenceInd
     * @return self
     */
    public function setUTCPreferenceInd($uTCPreferenceInd)
    {
        $this->uTCPreferenceInd = $uTCPreferenceInd;

        return $this;
    }

    /**
     * Gets as airline
     *
     * Specify airline to request FLIFO details.
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
     * Specify airline to request FLIFO details.
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
     * Gets as departureDate
     *
     * Date of departure for flight information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRQ\FlightSegmentAType\DepartureDateAType
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Sets a new departureDate
     *
     * Date of departure for flight information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRQ\FlightSegmentAType\DepartureDateAType
     * $departureDate
     * @return self
     */
    public function setDepartureDate(
        \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRQ\FlightSegmentAType\DepartureDateAType $departureDate
    ) {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * Gets as departureAirport
     *
     * Specifies the departure location.
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
     * Specifies the departure location.
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
     * Specifies the arrival location.
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
     * Specifies the arrival location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $arrivalAirport
     * @return self
     */
    public function setArrivalAirport(\Davispeixoto\OpenTravelAlliance\LocationType $arrivalAirport)
    {
        $this->arrivalAirport = $arrivalAirport;

        return $this;
    }


}

