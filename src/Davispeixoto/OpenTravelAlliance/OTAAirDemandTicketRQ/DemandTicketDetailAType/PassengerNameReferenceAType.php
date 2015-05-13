<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType;

/**
 * Class representing PassengerNameReferenceAType
 */
class PassengerNameReferenceAType
{

    /**
     * Specifies the surname name number.
     *
     * @property integer $surnameRefNumber
     */
    private $surnameRefNumber = null;

    /**
     * Specifies the given name number.
     *
     * @property integer $givenNameRefNumber
     */
    private $givenNameRefNumber = null;

    /**
     * Specifies whether this is first or last passenger name number in a range.
     *
     * @property string $rangePosition
     */
    private $rangePosition = null;

    /**
     * Used to identify the PTC code (passenger type code) for the passenger (e.g.
     * infant).
     *
     * @property string $passengerTypeCode
     */
    private $passengerTypeCode = null;

    /**
     * Gets as surnameRefNumber
     *
     * Specifies the surname name number.
     *
     * @return integer
     */
    public function getSurnameRefNumber()
    {
        return $this->surnameRefNumber;
    }

    /**
     * Sets a new surnameRefNumber
     *
     * Specifies the surname name number.
     *
     * @param integer $surnameRefNumber
     * @return self
     */
    public function setSurnameRefNumber($surnameRefNumber)
    {
        $this->surnameRefNumber = $surnameRefNumber;

        return $this;
    }

    /**
     * Gets as givenNameRefNumber
     *
     * Specifies the given name number.
     *
     * @return integer
     */
    public function getGivenNameRefNumber()
    {
        return $this->givenNameRefNumber;
    }

    /**
     * Sets a new givenNameRefNumber
     *
     * Specifies the given name number.
     *
     * @param integer $givenNameRefNumber
     * @return self
     */
    public function setGivenNameRefNumber($givenNameRefNumber)
    {
        $this->givenNameRefNumber = $givenNameRefNumber;

        return $this;
    }

    /**
     * Gets as rangePosition
     *
     * Specifies whether this is first or last passenger name number in a range.
     *
     * @return string
     */
    public function getRangePosition()
    {
        return $this->rangePosition;
    }

    /**
     * Sets a new rangePosition
     *
     * Specifies whether this is first or last passenger name number in a range.
     *
     * @param string $rangePosition
     * @return self
     */
    public function setRangePosition($rangePosition)
    {
        $this->rangePosition = $rangePosition;

        return $this;
    }

    /**
     * Gets as passengerTypeCode
     *
     * Used to identify the PTC code (passenger type code) for the passenger (e.g.
     * infant).
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
     * Used to identify the PTC code (passenger type code) for the passenger (e.g.
     * infant).
     *
     * @param string $passengerTypeCode
     * @return self
     */
    public function setPassengerTypeCode($passengerTypeCode)
    {
        $this->passengerTypeCode = $passengerTypeCode;

        return $this;
    }


}

