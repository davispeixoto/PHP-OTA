<?php

namespace Davispeixoto\OpenTravelAlliance\EventChargeType;

/**
 * Class representing EventChargeAType
 */
class EventChargeAType
{

    /**
     * This describes charges related to an event (e.g. set-up; room rental; break-out;
     * breakfast; lunch; dinner; miscellaneous). Refer to OpenTravel Code List Event
     * Charge (EVT).
     *
     * @property string $eventCharge
     */
    private $eventCharge = null;

    /**
     * This is used to indicate the basis of the charge (e.g. per person). Refer to
     * OpenTravel Code List Charge Type (CHG).
     *
     * @property string $primaryChargeType
     */
    private $primaryChargeType = null;

    /**
     * This is used in conjunction with the PrimaryChargeType to indicate the basis of
     * the charge (e.g. per person, per day, where per person is the PrimaryChargeType
     * and per day is the SecondaryChargeType). Refer to OpenTravel Code List Charge
     * Type (CHG).
     *
     * @property string $secondaryChargeType
     */
    private $secondaryChargeType = null;

    /**
     * This is used when MinChargeAmount and MaxChargeAmount are percentages and it
     * refers to what the percentage is applied. For example, the EventCharge may be
     * gratuity, the AppliedPercentageEventCharge is Food and Beverage, and the
     * MinChargeAmount is 15%, indicating the 15% gratutity applies to all Food and
     * Beverage charges. Refer to OpenTravel Code List Event Charge (EVT).
     *
     * @property string $appliedPercentageEventCharge
     */
    private $appliedPercentageEventCharge = null;

    /**
     * The minimum possible amount or percent as related to the EventCharge.
     *
     * @property float $minChargeAmount
     */
    private $minChargeAmount = null;

    /**
     * The maximum possible charge for the event in the requested date range.
     *
     * @property float $maxChargeAmount
     */
    private $maxChargeAmount = null;

    /**
     * @property float $averageChargeAmount
     */
    private $averageChargeAmount = null;

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
     * Taxes associated to this event charge.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TaxesType $taxes
     */
    private $taxes = null;

    /**
     * Gets as eventCharge
     *
     * This describes charges related to an event (e.g. set-up; room rental; break-out;
     * breakfast; lunch; dinner; miscellaneous). Refer to OpenTravel Code List Event
     * Charge (EVT).
     *
     * @return string
     */
    public function getEventCharge()
    {
        return $this->eventCharge;
    }

    /**
     * Sets a new eventCharge
     *
     * This describes charges related to an event (e.g. set-up; room rental; break-out;
     * breakfast; lunch; dinner; miscellaneous). Refer to OpenTravel Code List Event
     * Charge (EVT).
     *
     * @param string $eventCharge
     * @return self
     */
    public function setEventCharge($eventCharge)
    {
        $this->eventCharge = $eventCharge;

        return $this;
    }

    /**
     * Gets as primaryChargeType
     *
     * This is used to indicate the basis of the charge (e.g. per person). Refer to
     * OpenTravel Code List Charge Type (CHG).
     *
     * @return string
     */
    public function getPrimaryChargeType()
    {
        return $this->primaryChargeType;
    }

    /**
     * Sets a new primaryChargeType
     *
     * This is used to indicate the basis of the charge (e.g. per person). Refer to
     * OpenTravel Code List Charge Type (CHG).
     *
     * @param string $primaryChargeType
     * @return self
     */
    public function setPrimaryChargeType($primaryChargeType)
    {
        $this->primaryChargeType = $primaryChargeType;

        return $this;
    }

    /**
     * Gets as secondaryChargeType
     *
     * This is used in conjunction with the PrimaryChargeType to indicate the basis of
     * the charge (e.g. per person, per day, where per person is the PrimaryChargeType
     * and per day is the SecondaryChargeType). Refer to OpenTravel Code List Charge
     * Type (CHG).
     *
     * @return string
     */
    public function getSecondaryChargeType()
    {
        return $this->secondaryChargeType;
    }

    /**
     * Sets a new secondaryChargeType
     *
     * This is used in conjunction with the PrimaryChargeType to indicate the basis of
     * the charge (e.g. per person, per day, where per person is the PrimaryChargeType
     * and per day is the SecondaryChargeType). Refer to OpenTravel Code List Charge
     * Type (CHG).
     *
     * @param string $secondaryChargeType
     * @return self
     */
    public function setSecondaryChargeType($secondaryChargeType)
    {
        $this->secondaryChargeType = $secondaryChargeType;

        return $this;
    }

    /**
     * Gets as appliedPercentageEventCharge
     *
     * This is used when MinChargeAmount and MaxChargeAmount are percentages and it
     * refers to what the percentage is applied. For example, the EventCharge may be
     * gratuity, the AppliedPercentageEventCharge is Food and Beverage, and the
     * MinChargeAmount is 15%, indicating the 15% gratutity applies to all Food and
     * Beverage charges. Refer to OpenTravel Code List Event Charge (EVT).
     *
     * @return string
     */
    public function getAppliedPercentageEventCharge()
    {
        return $this->appliedPercentageEventCharge;
    }

    /**
     * Sets a new appliedPercentageEventCharge
     *
     * This is used when MinChargeAmount and MaxChargeAmount are percentages and it
     * refers to what the percentage is applied. For example, the EventCharge may be
     * gratuity, the AppliedPercentageEventCharge is Food and Beverage, and the
     * MinChargeAmount is 15%, indicating the 15% gratutity applies to all Food and
     * Beverage charges. Refer to OpenTravel Code List Event Charge (EVT).
     *
     * @param string $appliedPercentageEventCharge
     * @return self
     */
    public function setAppliedPercentageEventCharge($appliedPercentageEventCharge)
    {
        $this->appliedPercentageEventCharge = $appliedPercentageEventCharge;

        return $this;
    }

    /**
     * Gets as minChargeAmount
     *
     * The minimum possible amount or percent as related to the EventCharge.
     *
     * @return float
     */
    public function getMinChargeAmount()
    {
        return $this->minChargeAmount;
    }

    /**
     * Sets a new minChargeAmount
     *
     * The minimum possible amount or percent as related to the EventCharge.
     *
     * @param float $minChargeAmount
     * @return self
     */
    public function setMinChargeAmount($minChargeAmount)
    {
        $this->minChargeAmount = $minChargeAmount;

        return $this;
    }

    /**
     * Gets as maxChargeAmount
     *
     * The maximum possible charge for the event in the requested date range.
     *
     * @return float
     */
    public function getMaxChargeAmount()
    {
        return $this->maxChargeAmount;
    }

    /**
     * Sets a new maxChargeAmount
     *
     * The maximum possible charge for the event in the requested date range.
     *
     * @param float $maxChargeAmount
     * @return self
     */
    public function setMaxChargeAmount($maxChargeAmount)
    {
        $this->maxChargeAmount = $maxChargeAmount;

        return $this;
    }

    /**
     * Gets as averageChargeAmount
     *
     * @return float
     */
    public function getAverageChargeAmount()
    {
        return $this->averageChargeAmount;
    }

    /**
     * Sets a new averageChargeAmount
     *
     * @param float $averageChargeAmount
     * @return self
     */
    public function setAverageChargeAmount($averageChargeAmount)
    {
        $this->averageChargeAmount = $averageChargeAmount;

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
     * Gets as taxes
     *
     * Taxes associated to this event charge.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TaxesType
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * Taxes associated to this event charge.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TaxesType $taxes
     * @return self
     */
    public function setTaxes(\Davispeixoto\OpenTravelAlliance\TaxesType $taxes)
    {
        $this->taxes = $taxes;

        return $this;
    }


}

