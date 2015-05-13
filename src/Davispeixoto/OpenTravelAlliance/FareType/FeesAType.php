<?php

namespace Davispeixoto\OpenTravelAlliance\FareType;

use Davispeixoto\OpenTravelAlliance\AirFeeType;

/**
 * Class representing FeesAType
 */
class FeesAType
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
     * Any additional fee incurred by the passenger but not shown on the ticket.
     *
     * @property AirFeeType[] $fee
     */
    private $fee = null;

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
     * Adds as fee
     *
     * Any additional fee incurred by the passenger but not shown on the ticket.
     *
     * @return self
     * @param AirFeeType $fee
     */
    public function addToFee(AirFeeType $fee)
    {
        $this->fee[] = $fee;

        return $this;
    }

    /**
     * isset fee
     *
     * Any additional fee incurred by the passenger but not shown on the ticket.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFee($index)
    {
        if (isset($index)) {
            return isset($this->fee[$index]);
        }

        return false;
    }

    /**
     * unset fee
     *
     * Any additional fee incurred by the passenger but not shown on the ticket.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFee($index)
    {
        if (isset($index)) {
            unset($this->fee[$index]);
        }
    }

    /**
     * Gets as fee
     *
     * Any additional fee incurred by the passenger but not shown on the ticket.
     *
     * @return AirFeeType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * Any additional fee incurred by the passenger but not shown on the ticket.
     *
     * @param AirFeeType[] $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;

        return $this;
    }


}

