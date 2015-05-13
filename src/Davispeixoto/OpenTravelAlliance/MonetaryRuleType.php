<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing MonetaryRuleType
 *
 * This defines the information pertaining to rules and amounts associated with
 * these rules.
 * XSD Type: MonetaryRuleType
 */
class MonetaryRuleType
{

    /**
     * @property string $__value
     */
    private $__value = null;

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
     * Refer to OpenTravel Code List Rule Type (RUL).
     *
     * @property string $ruleType
     */
    private $ruleType = null;

    /**
     * The percent applicable to the monetary rule.
     *
     * @property float $percent
     */
    private $percent = null;

    /**
     * The date and time applicable to this monetary rule.
     *
     * @property \DateTime $dateTime
     */
    private $dateTime = null;

    /**
     * Refer to OpenTravel Code List Payment Type (PMT).
     *
     * @property string $paymentType
     */
    private $paymentType = null;

    /**
     * When true, indicates the amount was converted from another currency.
     *
     * @property boolean $rateConvertedInd
     */
    private $rateConvertedInd = null;

    /**
     * Defines the absolute deadline. Either this or the offset attributes may be used.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $absoluteDeadline
     */
    private $absoluteDeadline = null;

    /**
     * The units of time, e.g.: days, hours, etc., that apply to the deadline.
     *
     * @property string $offsetTimeUnit
     */
    private $offsetTimeUnit = null;

    /**
     * The number of units of DeadlineTimeUnit.
     *
     * @property integer $offsetUnitMultiplier
     */
    private $offsetUnitMultiplier = null;

    /**
     * An enumerated type indicating when the deadline drop time goes into effect.
     *
     * @property string $offsetDropTime
     */
    private $offsetDropTime = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
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
     * Gets as ruleType
     *
     * Refer to OpenTravel Code List Rule Type (RUL).
     *
     * @return string
     */
    public function getRuleType()
    {
        return $this->ruleType;
    }

    /**
     * Sets a new ruleType
     *
     * Refer to OpenTravel Code List Rule Type (RUL).
     *
     * @param string $ruleType
     * @return self
     */
    public function setRuleType($ruleType)
    {
        $this->ruleType = $ruleType;

        return $this;
    }

    /**
     * Gets as percent
     *
     * The percent applicable to the monetary rule.
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * The percent applicable to the monetary rule.
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Gets as dateTime
     *
     * The date and time applicable to this monetary rule.
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Sets a new dateTime
     *
     * The date and time applicable to this monetary rule.
     *
     * @param \DateTime $dateTime
     * @return self
     */
    public function setDateTime(\DateTime $dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Gets as paymentType
     *
     * Refer to OpenTravel Code List Payment Type (PMT).
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Sets a new paymentType
     *
     * Refer to OpenTravel Code List Payment Type (PMT).
     *
     * @param string $paymentType
     * @return self
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Gets as rateConvertedInd
     *
     * When true, indicates the amount was converted from another currency.
     *
     * @return boolean
     */
    public function getRateConvertedInd()
    {
        return $this->rateConvertedInd;
    }

    /**
     * Sets a new rateConvertedInd
     *
     * When true, indicates the amount was converted from another currency.
     *
     * @param boolean $rateConvertedInd
     * @return self
     */
    public function setRateConvertedInd($rateConvertedInd)
    {
        $this->rateConvertedInd = $rateConvertedInd;

        return $this;
    }

    /**
     * Gets as absoluteDeadline
     *
     * Defines the absolute deadline. Either this or the offset attributes may be used.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType
     */
    public function getAbsoluteDeadline()
    {
        return $this->absoluteDeadline;
    }

    /**
     * Sets a new absoluteDeadline
     *
     * Defines the absolute deadline. Either this or the offset attributes may be used.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $absoluteDeadline
     * @return self
     */
    public function setAbsoluteDeadline(\Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $absoluteDeadline)
    {
        $this->absoluteDeadline = $absoluteDeadline;

        return $this;
    }

    /**
     * Gets as offsetTimeUnit
     *
     * The units of time, e.g.: days, hours, etc., that apply to the deadline.
     *
     * @return string
     */
    public function getOffsetTimeUnit()
    {
        return $this->offsetTimeUnit;
    }

    /**
     * Sets a new offsetTimeUnit
     *
     * The units of time, e.g.: days, hours, etc., that apply to the deadline.
     *
     * @param string $offsetTimeUnit
     * @return self
     */
    public function setOffsetTimeUnit($offsetTimeUnit)
    {
        $this->offsetTimeUnit = $offsetTimeUnit;

        return $this;
    }

    /**
     * Gets as offsetUnitMultiplier
     *
     * The number of units of DeadlineTimeUnit.
     *
     * @return integer
     */
    public function getOffsetUnitMultiplier()
    {
        return $this->offsetUnitMultiplier;
    }

    /**
     * Sets a new offsetUnitMultiplier
     *
     * The number of units of DeadlineTimeUnit.
     *
     * @param integer $offsetUnitMultiplier
     * @return self
     */
    public function setOffsetUnitMultiplier($offsetUnitMultiplier)
    {
        $this->offsetUnitMultiplier = $offsetUnitMultiplier;

        return $this;
    }

    /**
     * Gets as offsetDropTime
     *
     * An enumerated type indicating when the deadline drop time goes into effect.
     *
     * @return string
     */
    public function getOffsetDropTime()
    {
        return $this->offsetDropTime;
    }

    /**
     * Sets a new offsetDropTime
     *
     * An enumerated type indicating when the deadline drop time goes into effect.
     *
     * @param string $offsetDropTime
     * @return self
     */
    public function setOffsetDropTime($offsetDropTime)
    {
        $this->offsetDropTime = $offsetDropTime;

        return $this;
    }


}

