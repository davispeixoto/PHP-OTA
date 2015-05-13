<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType\StayDayRoomsAType;

/**
 * Class representing StayDayRoomAType
 */
class StayDayRoomAType
{

    /**
     * This is where a requester specifies the room type they wish to procure (e.g.
     * king, double, double double, accessible). This is NOT an OpenTravel Codelist due
     * to the infinite number of possible room types.
     *
     * @property string $roomTypeRequirement
     */
    private $roomTypeRequirement = null;

    /**
     * This is the required number of rooms for a particular day for a particular room
     * type.
     *
     * @property integer $numberOfUnits
     */
    private $numberOfUnits = null;

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * A monetary amount.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    private $comment = null;

    /**
     * Gets as roomTypeRequirement
     *
     * This is where a requester specifies the room type they wish to procure (e.g.
     * king, double, double double, accessible). This is NOT an OpenTravel Codelist due
     * to the infinite number of possible room types.
     *
     * @return string
     */
    public function getRoomTypeRequirement()
    {
        return $this->roomTypeRequirement;
    }

    /**
     * Sets a new roomTypeRequirement
     *
     * This is where a requester specifies the room type they wish to procure (e.g.
     * king, double, double double, accessible). This is NOT an OpenTravel Codelist due
     * to the infinite number of possible room types.
     *
     * @param string $roomTypeRequirement
     * @return self
     */
    public function setRoomTypeRequirement($roomTypeRequirement)
    {
        $this->roomTypeRequirement = $roomTypeRequirement;

        return $this;
    }

    /**
     * Gets as numberOfUnits
     *
     * This is the required number of rooms for a particular day for a particular room
     * type.
     *
     * @return integer
     */
    public function getNumberOfUnits()
    {
        return $this->numberOfUnits;
    }

    /**
     * Sets a new numberOfUnits
     *
     * This is the required number of rooms for a particular day for a particular room
     * type.
     *
     * @param integer $numberOfUnits
     * @return self
     */
    public function setNumberOfUnits($numberOfUnits)
    {
        $this->numberOfUnits = $numberOfUnits;

        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return integer
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param integer $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    /**
     * Gets as amount
     *
     * A monetary amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * A monetary amount.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Gets as comment
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     * @return self
     */
    public function setComment(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comment = $comment;

        return $this;
    }


}

