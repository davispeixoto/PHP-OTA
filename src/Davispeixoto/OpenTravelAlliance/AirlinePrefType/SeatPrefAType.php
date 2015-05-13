<?php

namespace Davispeixoto\OpenTravelAlliance\AirlinePrefType;

/**
 * Class representing SeatPrefAType
 */
class SeatPrefAType
{

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

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
     * Used to distingish a flight as long haul or short haul.
     *
     * @property string $flightDistanceQualifier
     */
    private $flightDistanceQualifier = null;

    /**
     * When true, indicates an international flight.
     *
     * @property boolean $internationalIndicator
     */
    private $internationalIndicator = null;

    /**
     * Reference to one or more airlines in VendorPref.
     *
     * @property string[] $airlineVendorPrefRPH
     */
    private $airlineVendorPrefRPH = null;

    /**
     * Code used to indicate the type of traveler (e.g., ADT, CHD, INF, GRP).
     *
     * @property string $passengerTypeCode
     */
    private $passengerTypeCode = null;

    /**
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @property string $transferAction
     */
    private $transferAction = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

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
     * Gets as flightDistanceQualifier
     *
     * Used to distingish a flight as long haul or short haul.
     *
     * @return string
     */
    public function getFlightDistanceQualifier()
    {
        return $this->flightDistanceQualifier;
    }

    /**
     * Sets a new flightDistanceQualifier
     *
     * Used to distingish a flight as long haul or short haul.
     *
     * @param string $flightDistanceQualifier
     * @return self
     */
    public function setFlightDistanceQualifier($flightDistanceQualifier)
    {
        $this->flightDistanceQualifier = $flightDistanceQualifier;

        return $this;
    }

    /**
     * Gets as internationalIndicator
     *
     * When true, indicates an international flight.
     *
     * @return boolean
     */
    public function getInternationalIndicator()
    {
        return $this->internationalIndicator;
    }

    /**
     * Sets a new internationalIndicator
     *
     * When true, indicates an international flight.
     *
     * @param boolean $internationalIndicator
     * @return self
     */
    public function setInternationalIndicator($internationalIndicator)
    {
        $this->internationalIndicator = $internationalIndicator;

        return $this;
    }

    /**
     * Adds as airlineVendorPrefRPH
     *
     * Reference to one or more airlines in VendorPref.
     *
     * @return self
     * @param string $airlineVendorPrefRPH
     */
    public function addToAirlineVendorPrefRPH($airlineVendorPrefRPH)
    {
        $this->airlineVendorPrefRPH[] = $airlineVendorPrefRPH;

        return $this;
    }

    /**
     * isset airlineVendorPrefRPH
     *
     * Reference to one or more airlines in VendorPref.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirlineVendorPrefRPH($index)
    {
        return isset($this->airlineVendorPrefRPH[$index]);
    }

    /**
     * unset airlineVendorPrefRPH
     *
     * Reference to one or more airlines in VendorPref.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirlineVendorPrefRPH($index)
    {
        unset($this->airlineVendorPrefRPH[$index]);
    }

    /**
     * Gets as airlineVendorPrefRPH
     *
     * Reference to one or more airlines in VendorPref.
     *
     * @return string[]
     */
    public function getAirlineVendorPrefRPH()
    {
        return $this->airlineVendorPrefRPH;
    }

    /**
     * Sets a new airlineVendorPrefRPH
     *
     * Reference to one or more airlines in VendorPref.
     *
     * @param string $airlineVendorPrefRPH
     * @return self
     */
    public function setAirlineVendorPrefRPH(array $airlineVendorPrefRPH)
    {
        $this->airlineVendorPrefRPH = $airlineVendorPrefRPH;

        return $this;
    }

    /**
     * Gets as passengerTypeCode
     *
     * Code used to indicate the type of traveler (e.g., ADT, CHD, INF, GRP).
     *
     * @return string
     */
    public function getPassengerTypeCode()
    {
        return $this->passengerTypeCode;
    }

    /**
     * Sets a new passengerTypeCode
     *
     * Code used to indicate the type of traveler (e.g., ADT, CHD, INF, GRP).
     *
     * @param string $passengerTypeCode
     * @return self
     */
    public function setPassengerTypeCode($passengerTypeCode)
    {
        $this->passengerTypeCode = $passengerTypeCode;

        return $this;
    }

    /**
     * Gets as transferAction
     *
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @return string
     */
    public function getTransferAction()
    {
        return $this->transferAction;
    }

    /**
     * Sets a new transferAction
     *
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @param string $transferAction
     * @return self
     */
    public function setTransferAction($transferAction)
    {
        $this->transferAction = $transferAction;

        return $this;
    }


}

