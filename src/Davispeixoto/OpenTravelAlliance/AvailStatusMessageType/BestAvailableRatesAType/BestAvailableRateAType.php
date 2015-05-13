<?php

namespace Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\BestAvailableRatesAType;

/**
 * Class representing BestAvailableRateAType
 */
class BestAvailableRateAType
{

    /**
     * Used in conjunction with the TimeUnit to define the length of stay.
     *
     * @property integer $lengthOfStayTime
     */
    private $lengthOfStayTime = null;

    /**
     * A time unit used to apply this status message to other inventory, and with more
     * granularity than daily. Values: Year, Month, Week, Day, Hour, Minute, Second.
     *
     * @property string $lengthOfStayTimeUnit
     */
    private $lengthOfStayTimeUnit = null;

    /**
     * A string value used to specify the rate code as the best available rate.
     *
     * @property string $ratePlanCode
     */
    private $ratePlanCode = null;

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
     * When true indicates tax is included. When false tax is not included.
     *
     * @property boolean $taxInclusive
     */
    private $taxInclusive = null;

    /**
     * Gets as lengthOfStayTime
     *
     * Used in conjunction with the TimeUnit to define the length of stay.
     *
     * @return integer
     */
    public function getLengthOfStayTime()
    {
        return $this->lengthOfStayTime;
    }

    /**
     * Sets a new lengthOfStayTime
     *
     * Used in conjunction with the TimeUnit to define the length of stay.
     *
     * @param integer $lengthOfStayTime
     * @return self
     */
    public function setLengthOfStayTime($lengthOfStayTime)
    {
        $this->lengthOfStayTime = $lengthOfStayTime;

        return $this;
    }

    /**
     * Gets as lengthOfStayTimeUnit
     *
     * A time unit used to apply this status message to other inventory, and with more
     * granularity than daily. Values: Year, Month, Week, Day, Hour, Minute, Second.
     *
     * @return string
     */
    public function getLengthOfStayTimeUnit()
    {
        return $this->lengthOfStayTimeUnit;
    }

    /**
     * Sets a new lengthOfStayTimeUnit
     *
     * A time unit used to apply this status message to other inventory, and with more
     * granularity than daily. Values: Year, Month, Week, Day, Hour, Minute, Second.
     *
     * @param string $lengthOfStayTimeUnit
     * @return self
     */
    public function setLengthOfStayTimeUnit($lengthOfStayTimeUnit)
    {
        $this->lengthOfStayTimeUnit = $lengthOfStayTimeUnit;

        return $this;
    }

    /**
     * Gets as ratePlanCode
     *
     * A string value used to specify the rate code as the best available rate.
     *
     * @return string
     */
    public function getRatePlanCode()
    {
        return $this->ratePlanCode;
    }

    /**
     * Sets a new ratePlanCode
     *
     * A string value used to specify the rate code as the best available rate.
     *
     * @param string $ratePlanCode
     * @return self
     */
    public function setRatePlanCode($ratePlanCode)
    {
        $this->ratePlanCode = $ratePlanCode;

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
     * Gets as taxInclusive
     *
     * When true indicates tax is included. When false tax is not included.
     *
     * @return boolean
     */
    public function getTaxInclusive()
    {
        return $this->taxInclusive;
    }

    /**
     * Sets a new taxInclusive
     *
     * When true indicates tax is included. When false tax is not included.
     *
     * @param boolean $taxInclusive
     * @return self
     */
    public function setTaxInclusive($taxInclusive)
    {
        $this->taxInclusive = $taxInclusive;

        return $this;
    }


}

