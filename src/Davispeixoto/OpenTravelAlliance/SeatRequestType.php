<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SeatRequestType
 *
 * Object to hold a passengers' seat request
 * XSD Type: SeatRequestType
 */
class SeatRequestType
{

    /**
     * Used to provide the seat number.
     *
     * @property string $seatNumber
     */
    private $seatNumber = null;

    /**
     * Refer to OpenTravel Code List Seat Preference (STP).
     *
     * @property string[] $seatPreference
     */
    private $seatPreference = null;

    /**
     * The level of the deck, e.g. "Upper."
     *
     * @property string $deckLevel
     */
    private $deckLevel = null;

    /**
     * Sequence number of a row.
     *
     * @property integer $rowNumber
     */
    private $rowNumber = null;

    /**
     * Seat number within a row.
     *
     * @property string $seatInRow
     */
    private $seatInRow = null;

    /**
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @property boolean $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * The departure date of the flight for the seat requested.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $departureDate
     */
    private $departureDate = null;

    /**
     * The number of the flight for which this seat is requested.
     *
     * @property string $flightNumber
     */
    private $flightNumber = null;

    /**
     * Code providing status information for this seat request. Refer to OpenTravel
     * Code List Status (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Departure point of flight segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $departureAirport
     */
    private $departureAirport = null;

    /**
     * Arrival point of flight segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $arrivalAirport
     */
    private $arrivalAirport = null;

    /**
     * Specify the airline the seat was requested for.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $airline
     */
    private $airline = null;

    /**
     * Summary offer information that applies to this seat.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirOfferType[] $offers
     */
    private $offers = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as seatNumber
     *
     * Used to provide the seat number.
     *
     * @return string
     */
    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    /**
     * Sets a new seatNumber
     *
     * Used to provide the seat number.
     *
     * @param string $seatNumber
     * @return self
     */
    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;

        return $this;
    }

    /**
     * Adds as seatPreference
     *
     * Refer to OpenTravel Code List Seat Preference (STP).
     *
     * @return self
     * @param string $seatPreference
     */
    public function addToSeatPreference($seatPreference)
    {
        $this->seatPreference[] = $seatPreference;

        return $this;
    }

    /**
     * isset seatPreference
     *
     * Refer to OpenTravel Code List Seat Preference (STP).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeatPreference($index)
    {
        return isset($this->seatPreference[$index]);
    }

    /**
     * unset seatPreference
     *
     * Refer to OpenTravel Code List Seat Preference (STP).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeatPreference($index)
    {
        unset($this->seatPreference[$index]);
    }

    /**
     * Gets as seatPreference
     *
     * Refer to OpenTravel Code List Seat Preference (STP).
     *
     * @return string[]
     */
    public function getSeatPreference()
    {
        return $this->seatPreference;
    }

    /**
     * Sets a new seatPreference
     *
     * Refer to OpenTravel Code List Seat Preference (STP).
     *
     * @param string $seatPreference
     * @return self
     */
    public function setSeatPreference(array $seatPreference)
    {
        $this->seatPreference = $seatPreference;

        return $this;
    }

    /**
     * Gets as deckLevel
     *
     * The level of the deck, e.g. "Upper."
     *
     * @return string
     */
    public function getDeckLevel()
    {
        return $this->deckLevel;
    }

    /**
     * Sets a new deckLevel
     *
     * The level of the deck, e.g. "Upper."
     *
     * @param string $deckLevel
     * @return self
     */
    public function setDeckLevel($deckLevel)
    {
        $this->deckLevel = $deckLevel;

        return $this;
    }

    /**
     * Gets as rowNumber
     *
     * Sequence number of a row.
     *
     * @return integer
     */
    public function getRowNumber()
    {
        return $this->rowNumber;
    }

    /**
     * Sets a new rowNumber
     *
     * Sequence number of a row.
     *
     * @param integer $rowNumber
     * @return self
     */
    public function setRowNumber($rowNumber)
    {
        $this->rowNumber = $rowNumber;

        return $this;
    }

    /**
     * Gets as seatInRow
     *
     * Seat number within a row.
     *
     * @return string
     */
    public function getSeatInRow()
    {
        return $this->seatInRow;
    }

    /**
     * Sets a new seatInRow
     *
     * Seat number within a row.
     *
     * @param string $seatInRow
     * @return self
     */
    public function setSeatInRow($seatInRow)
    {
        $this->seatInRow = $seatInRow;

        return $this;
    }

    /**
     * Gets as smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @return boolean
     */
    public function getSmokingAllowed()
    {
        return $this->smokingAllowed;
    }

    /**
     * Sets a new smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @param boolean $smokingAllowed
     * @return self
     */
    public function setSmokingAllowed($smokingAllowed)
    {
        $this->smokingAllowed = $smokingAllowed;

        return $this;
    }

    /**
     * Gets as departureDate
     *
     * The departure date of the flight for the seat requested.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Sets a new departureDate
     *
     * The departure date of the flight for the seat requested.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $departureDate
     * @return self
     */
    public function setDepartureDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * Gets as flightNumber
     *
     * The number of the flight for which this seat is requested.
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
     * The number of the flight for which this seat is requested.
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
     * Gets as status
     *
     * Code providing status information for this seat request. Refer to OpenTravel
     * Code List Status (STS).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Code providing status information for this seat request. Refer to OpenTravel
     * Code List Status (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as departureAirport
     *
     * Departure point of flight segment.
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
     * Departure point of flight segment.
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
     * Arrival point of flight segment.
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
     * Arrival point of flight segment.
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
     * Gets as airline
     *
     * Specify the airline the seat was requested for.
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
     * Specify the airline the seat was requested for.
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
     * Adds as offers
     *
     * Summary offer information that applies to this seat.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirOfferType $offers
     */
    public function addToOffers(\Davispeixoto\OpenTravelAlliance\AirOfferType $offers)
    {
        $this->offers[] = $offers;

        return $this;
    }

    /**
     * isset offers
     *
     * Summary offer information that applies to this seat.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOffers($index)
    {
        return isset($this->offers[$index]);
    }

    /**
     * unset offers
     *
     * Summary offer information that applies to this seat.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOffers($index)
    {
        unset($this->offers[$index]);
    }

    /**
     * Gets as offers
     *
     * Summary offer information that applies to this seat.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirOfferType[]
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * Sets a new offers
     *
     * Summary offer information that applies to this seat.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirOfferType[] $offers
     * @return self
     */
    public function setOffers(array $offers)
    {
        $this->offers = $offers;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

