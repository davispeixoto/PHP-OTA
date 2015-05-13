<?php

namespace Davispeixoto\OpenTravelAlliance\RailFareType\BasicFareAType;

/**
 * Class representing AlternateCurrencyAType
 */
class AlternateCurrencyAType
{

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
     * The source currency code for a conversion in ISO 4217
     * endoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @property string $fromCurrency
     */
    private $fromCurrency = null;

    /**
     * The target currency for the conversion in ISO 4217
     * encoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @property string $toCurrency
     */
    private $toCurrency = null;

    /**
     * The rate used for conversion from the source currency to the target currency.
     *
     * @property float $rate
     */
    private $rate = null;

    /**
     * The date of the conversion rate.
     *
     * @property \DateTime $date
     */
    private $date = null;

    /**
     * The base neutral unit of construction amount.
     *
     * @property float $baseNUCAmount
     */
    private $baseNUCAmount = null;

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
     * Gets as fromCurrency
     *
     * The source currency code for a conversion in ISO 4217
     * endoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @return string
     */
    public function getFromCurrency()
    {
        return $this->fromCurrency;
    }

    /**
     * Sets a new fromCurrency
     *
     * The source currency code for a conversion in ISO 4217
     * endoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @param string $fromCurrency
     * @return self
     */
    public function setFromCurrency($fromCurrency)
    {
        $this->fromCurrency = $fromCurrency;

        return $this;
    }

    /**
     * Gets as toCurrency
     *
     * The target currency for the conversion in ISO 4217
     * encoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @return string
     */
    public function getToCurrency()
    {
        return $this->toCurrency;
    }

    /**
     * Sets a new toCurrency
     *
     * The target currency for the conversion in ISO 4217
     * encoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @param string $toCurrency
     * @return self
     */
    public function setToCurrency($toCurrency)
    {
        $this->toCurrency = $toCurrency;

        return $this;
    }

    /**
     * Gets as rate
     *
     * The rate used for conversion from the source currency to the target currency.
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * The rate used for conversion from the source currency to the target currency.
     *
     * @param float $rate
     * @return self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Gets as date
     *
     * The date of the conversion rate.
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
     * The date of the conversion rate.
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
     * Gets as baseNUCAmount
     *
     * The base neutral unit of construction amount.
     *
     * @return float
     */
    public function getBaseNUCAmount()
    {
        return $this->baseNUCAmount;
    }

    /**
     * Sets a new baseNUCAmount
     *
     * The base neutral unit of construction amount.
     *
     * @param float $baseNUCAmount
     * @return self
     */
    public function setBaseNUCAmount($baseNUCAmount)
    {
        $this->baseNUCAmount = $baseNUCAmount;

        return $this;
    }


}

