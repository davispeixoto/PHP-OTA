<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType\DaySummariesAType;

/**
 * Class representing DaySummaryAType
 */
class DaySummaryAType
{

    /**
     * The number which indicates the day of the previous room requirements and/or
     * previous event (e.g. 1, 2, 3, etc).
     *
     * @property integer $dayNumber
     */
    private $dayNumber = null;

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
     * The number of people attending the previous event.
     *
     * @property integer $attendeeQuantity
     */
    private $attendeeQuantity = null;

    /**
     * The number of rooms previously requested.
     *
     * @property integer $roomBlockQuantity
     */
    private $roomBlockQuantity = null;

    /**
     * The number of rooms actualized by the previous event.
     *
     * @property integer $roomPickupQuantity
     */
    private $roomPickupQuantity = null;

    /**
     * The monetary value expended for the previous event on rooms.
     *
     * @property float $totalGuestRoomAmount
     */
    private $totalGuestRoomAmount = null;

    /**
     * The monetary value expended for the previous event on food and beverage, etc.
     *
     * @property float $totalFoodAndBevAmount
     */
    private $totalFoodAndBevAmount = null;

    /**
     * The monetary value expended for the previous event on meeting space.
     *
     * @property float $totalMeetingRoomRentalAmount
     */
    private $totalMeetingRoomRentalAmount = null;

    /**
     * The monetary value expended for the previous event on audio visual equipment
     * rental.
     *
     * @property float $totalAudioVisualRentalAmount
     */
    private $totalAudioVisualRentalAmount = null;

    /**
     * The monetary value expended for the previous event on all other goods and
     * services.
     *
     * @property float $totalMiscAmount
     */
    private $totalMiscAmount = null;

    /**
     * Gets as dayNumber
     *
     * The number which indicates the day of the previous room requirements and/or
     * previous event (e.g. 1, 2, 3, etc).
     *
     * @return integer
     */
    public function getDayNumber()
    {
        return $this->dayNumber;
    }

    /**
     * Sets a new dayNumber
     *
     * The number which indicates the day of the previous room requirements and/or
     * previous event (e.g. 1, 2, 3, etc).
     *
     * @param integer $dayNumber
     * @return self
     */
    public function setDayNumber($dayNumber)
    {
        $this->dayNumber = $dayNumber;

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
     * Gets as attendeeQuantity
     *
     * The number of people attending the previous event.
     *
     * @return integer
     */
    public function getAttendeeQuantity()
    {
        return $this->attendeeQuantity;
    }

    /**
     * Sets a new attendeeQuantity
     *
     * The number of people attending the previous event.
     *
     * @param integer $attendeeQuantity
     * @return self
     */
    public function setAttendeeQuantity($attendeeQuantity)
    {
        $this->attendeeQuantity = $attendeeQuantity;

        return $this;
    }

    /**
     * Gets as roomBlockQuantity
     *
     * The number of rooms previously requested.
     *
     * @return integer
     */
    public function getRoomBlockQuantity()
    {
        return $this->roomBlockQuantity;
    }

    /**
     * Sets a new roomBlockQuantity
     *
     * The number of rooms previously requested.
     *
     * @param integer $roomBlockQuantity
     * @return self
     */
    public function setRoomBlockQuantity($roomBlockQuantity)
    {
        $this->roomBlockQuantity = $roomBlockQuantity;

        return $this;
    }

    /**
     * Gets as roomPickupQuantity
     *
     * The number of rooms actualized by the previous event.
     *
     * @return integer
     */
    public function getRoomPickupQuantity()
    {
        return $this->roomPickupQuantity;
    }

    /**
     * Sets a new roomPickupQuantity
     *
     * The number of rooms actualized by the previous event.
     *
     * @param integer $roomPickupQuantity
     * @return self
     */
    public function setRoomPickupQuantity($roomPickupQuantity)
    {
        $this->roomPickupQuantity = $roomPickupQuantity;

        return $this;
    }

    /**
     * Gets as totalGuestRoomAmount
     *
     * The monetary value expended for the previous event on rooms.
     *
     * @return float
     */
    public function getTotalGuestRoomAmount()
    {
        return $this->totalGuestRoomAmount;
    }

    /**
     * Sets a new totalGuestRoomAmount
     *
     * The monetary value expended for the previous event on rooms.
     *
     * @param float $totalGuestRoomAmount
     * @return self
     */
    public function setTotalGuestRoomAmount($totalGuestRoomAmount)
    {
        $this->totalGuestRoomAmount = $totalGuestRoomAmount;

        return $this;
    }

    /**
     * Gets as totalFoodAndBevAmount
     *
     * The monetary value expended for the previous event on food and beverage, etc.
     *
     * @return float
     */
    public function getTotalFoodAndBevAmount()
    {
        return $this->totalFoodAndBevAmount;
    }

    /**
     * Sets a new totalFoodAndBevAmount
     *
     * The monetary value expended for the previous event on food and beverage, etc.
     *
     * @param float $totalFoodAndBevAmount
     * @return self
     */
    public function setTotalFoodAndBevAmount($totalFoodAndBevAmount)
    {
        $this->totalFoodAndBevAmount = $totalFoodAndBevAmount;

        return $this;
    }

    /**
     * Gets as totalMeetingRoomRentalAmount
     *
     * The monetary value expended for the previous event on meeting space.
     *
     * @return float
     */
    public function getTotalMeetingRoomRentalAmount()
    {
        return $this->totalMeetingRoomRentalAmount;
    }

    /**
     * Sets a new totalMeetingRoomRentalAmount
     *
     * The monetary value expended for the previous event on meeting space.
     *
     * @param float $totalMeetingRoomRentalAmount
     * @return self
     */
    public function setTotalMeetingRoomRentalAmount($totalMeetingRoomRentalAmount)
    {
        $this->totalMeetingRoomRentalAmount = $totalMeetingRoomRentalAmount;

        return $this;
    }

    /**
     * Gets as totalAudioVisualRentalAmount
     *
     * The monetary value expended for the previous event on audio visual equipment
     * rental.
     *
     * @return float
     */
    public function getTotalAudioVisualRentalAmount()
    {
        return $this->totalAudioVisualRentalAmount;
    }

    /**
     * Sets a new totalAudioVisualRentalAmount
     *
     * The monetary value expended for the previous event on audio visual equipment
     * rental.
     *
     * @param float $totalAudioVisualRentalAmount
     * @return self
     */
    public function setTotalAudioVisualRentalAmount($totalAudioVisualRentalAmount)
    {
        $this->totalAudioVisualRentalAmount = $totalAudioVisualRentalAmount;

        return $this;
    }

    /**
     * Gets as totalMiscAmount
     *
     * The monetary value expended for the previous event on all other goods and
     * services.
     *
     * @return float
     */
    public function getTotalMiscAmount()
    {
        return $this->totalMiscAmount;
    }

    /**
     * Sets a new totalMiscAmount
     *
     * The monetary value expended for the previous event on all other goods and
     * services.
     *
     * @param float $totalMiscAmount
     * @return self
     */
    public function setTotalMiscAmount($totalMiscAmount)
    {
        $this->totalMiscAmount = $totalMiscAmount;

        return $this;
    }


}

