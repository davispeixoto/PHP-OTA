<?php

namespace Davispeixoto\OpenTravelAlliance\CodeListFeeType\AmountAType;

/**
 * Class representing CurrencyAType
 */
class CurrencyAType
{

    /**
     * Fee or tax monetary amount.Example: 2500OpenTravel Best Practice for Money
     * Amount Designation: Unless otherwise noted, all money amounts will contain the
     * amount as a positive integer and currency designation. The decimal places (minor
     * unit) should contain the number of decimal places associated with the amount.
     * Example: 8500, USD, 2 represents $85.00USD.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * Currency code.Example: USDOpenTravel Best Practice for Currency Type
     * Designation: Unless otherwise noted, all currency code designations are three
     * alpha characters and WILL follow ISO 4217 prescribed format. Additionally, all
     * currency amounts SHOULD have an ISO 4217 standard decimal places (minor units)
     * specified.Reference: http://www.iso.org/iso/home.htm
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * Currency code decimal places.The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * Gets as amount
     *
     * Fee or tax monetary amount.Example: 2500OpenTravel Best Practice for Money
     * Amount Designation: Unless otherwise noted, all money amounts will contain the
     * amount as a positive integer and currency designation. The decimal places (minor
     * unit) should contain the number of decimal places associated with the amount.
     * Example: 8500, USD, 2 represents $85.00USD.
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
     * Fee or tax monetary amount.Example: 2500OpenTravel Best Practice for Money
     * Amount Designation: Unless otherwise noted, all money amounts will contain the
     * amount as a positive integer and currency designation. The decimal places (minor
     * unit) should contain the number of decimal places associated with the amount.
     * Example: 8500, USD, 2 represents $85.00USD.
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
     * Gets as currencyCode
     *
     * Currency code.Example: USDOpenTravel Best Practice for Currency Type
     * Designation: Unless otherwise noted, all currency code designations are three
     * alpha characters and WILL follow ISO 4217 prescribed format. Additionally, all
     * currency amounts SHOULD have an ISO 4217 standard decimal places (minor units)
     * specified.Reference: http://www.iso.org/iso/home.htm
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
     * Currency code.Example: USDOpenTravel Best Practice for Currency Type
     * Designation: Unless otherwise noted, all currency code designations are three
     * alpha characters and WILL follow ISO 4217 prescribed format. Additionally, all
     * currency amounts SHOULD have an ISO 4217 standard decimal places (minor units)
     * specified.Reference: http://www.iso.org/iso/home.htm
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
     * Currency code decimal places.The ISO 4217 standard "minor unit" is typically
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
     * Currency code decimal places.The ISO 4217 standard "minor unit" is typically
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


}

