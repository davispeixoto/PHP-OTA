<?php

namespace Davispeixoto\OpenTravelAlliance\AlternateCurrencyType;

/**
 * Class representing ConversionAType
 */
class ConversionAType
{

    /**
     * Conversion ratio.Example: 1000Implementer: This is the ratio used to calculate
     * the quantity of loyalty currency to a monetary amount and unit. If not supplied,
     * it assumes a Ratio of 1:1000. For example, a base fare of $100 USD where Ratio
     * is 1000 requires 100,000 frequent flyer miles to pay for the full base fare (100
     * * 1000 = 100,000 miles.)
     *
     * @property integer $ratio
     */
    private $ratio = null;

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
     * Gets as ratio
     *
     * Conversion ratio.Example: 1000Implementer: This is the ratio used to calculate
     * the quantity of loyalty currency to a monetary amount and unit. If not supplied,
     * it assumes a Ratio of 1:1000. For example, a base fare of $100 USD where Ratio
     * is 1000 requires 100,000 frequent flyer miles to pay for the full base fare (100
     * * 1000 = 100,000 miles.)
     *
     * @return integer
     */
    public function getRatio()
    {
        return $this->ratio;
    }

    /**
     * Sets a new ratio
     *
     * Conversion ratio.Example: 1000Implementer: This is the ratio used to calculate
     * the quantity of loyalty currency to a monetary amount and unit. If not supplied,
     * it assumes a Ratio of 1:1000. For example, a base fare of $100 USD where Ratio
     * is 1000 requires 100,000 frequent flyer miles to pay for the full base fare (100
     * * 1000 = 100,000 miles.)
     *
     * @param integer $ratio
     * @return self
     */
    public function setRatio($ratio)
    {
        $this->ratio = $ratio;

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


}

