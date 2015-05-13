<?php

namespace Davispeixoto\OpenTravelAlliance\RailFareType;

/**
 * Class representing BasicFareAType
 */
class BasicFareAType
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
     * A fare basis code.
     *
     * @property string $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * The rail fare in one or more alternate currency(s).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailFareType\BasicFareAType\AlternateCurrencyAType[]
     * $alternateCurrency
     */
    private $alternateCurrency = null;

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
     * Gets as fareBasisCode
     *
     * A fare basis code.
     *
     * @return string
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * A fare basis code.
     *
     * @param string $fareBasisCode
     * @return self
     */
    public function setFareBasisCode($fareBasisCode)
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }

    /**
     * Adds as alternateCurrency
     *
     * The rail fare in one or more alternate currency(s).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailFareType\BasicFareAType\AlternateCurrencyAType
     * $alternateCurrency
     */
    public function addToAlternateCurrency(
        \Davispeixoto\OpenTravelAlliance\RailFareType\BasicFareAType\AlternateCurrencyAType $alternateCurrency
    ) {
        $this->alternateCurrency[] = $alternateCurrency;

        return $this;
    }

    /**
     * isset alternateCurrency
     *
     * The rail fare in one or more alternate currency(s).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAlternateCurrency($index)
    {
        return isset($this->alternateCurrency[$index]);
    }

    /**
     * unset alternateCurrency
     *
     * The rail fare in one or more alternate currency(s).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAlternateCurrency($index)
    {
        unset($this->alternateCurrency[$index]);
    }

    /**
     * Gets as alternateCurrency
     *
     * The rail fare in one or more alternate currency(s).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailFareType\BasicFareAType\AlternateCurrencyAType[]
     */
    public function getAlternateCurrency()
    {
        return $this->alternateCurrency;
    }

    /**
     * Sets a new alternateCurrency
     *
     * The rail fare in one or more alternate currency(s).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailFareType\BasicFareAType\AlternateCurrencyAType[]
     * $alternateCurrency
     * @return self
     */
    public function setAlternateCurrency(array $alternateCurrency)
    {
        $this->alternateCurrency = $alternateCurrency;

        return $this;
    }


}

