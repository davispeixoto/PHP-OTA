<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SupplementChargesType
 *
 * A value representing a supplement for an item over the cost of the item on which
 * a package basic price is calculated; may be repeated for multiple currencies
 * e.g. GBP and Euros.
 * XSD Type: SupplementChargesType
 */
class SupplementChargesType
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
     * The charge element repeats to allow differential charging according to, for
     * example, age.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $charge
     */
    private $charge = null;

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
     * Adds as charge
     *
     * The charge element repeats to allow differential charging according to, for
     * example, age.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $charge
     */
    public function addToCharge(\Davispeixoto\OpenTravelAlliance\FeeType $charge)
    {
        $this->charge[] = $charge;

        return $this;
    }

    /**
     * isset charge
     *
     * The charge element repeats to allow differential charging according to, for
     * example, age.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCharge($index)
    {
        return isset($this->charge[$index]);
    }

    /**
     * unset charge
     *
     * The charge element repeats to allow differential charging according to, for
     * example, age.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCharge($index)
    {
        unset($this->charge[$index]);
    }

    /**
     * Gets as charge
     *
     * The charge element repeats to allow differential charging according to, for
     * example, age.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType[]
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * The charge element repeats to allow differential charging according to, for
     * example, age.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType[] $charge
     * @return self
     */
    public function setCharge(array $charge)
    {
        $this->charge = $charge;

        return $this;
    }


}

