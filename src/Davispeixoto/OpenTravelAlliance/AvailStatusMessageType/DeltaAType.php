<?php

namespace Davispeixoto\OpenTravelAlliance\AvailStatusMessageType;

/**
 * Class representing DeltaAType
 */
class DeltaAType
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
     * Upper limit on the number of Deltas that should be added to the Rate Hurdle for
     * each transient reservation.
     *
     * @property integer $ceiling
     */
    private $ceiling = null;

    /**
     * Upper limit on the number of transient reservations that should be accepted.
     *
     * @property integer $maxSold
     */
    private $maxSold = null;

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
     * Gets as ceiling
     *
     * Upper limit on the number of Deltas that should be added to the Rate Hurdle for
     * each transient reservation.
     *
     * @return integer
     */
    public function getCeiling()
    {
        return $this->ceiling;
    }

    /**
     * Sets a new ceiling
     *
     * Upper limit on the number of Deltas that should be added to the Rate Hurdle for
     * each transient reservation.
     *
     * @param integer $ceiling
     * @return self
     */
    public function setCeiling($ceiling)
    {
        $this->ceiling = $ceiling;

        return $this;
    }

    /**
     * Gets as maxSold
     *
     * Upper limit on the number of transient reservations that should be accepted.
     *
     * @return integer
     */
    public function getMaxSold()
    {
        return $this->maxSold;
    }

    /**
     * Sets a new maxSold
     *
     * Upper limit on the number of transient reservations that should be accepted.
     *
     * @param integer $maxSold
     * @return self
     */
    public function setMaxSold($maxSold)
    {
        $this->maxSold = $maxSold;

        return $this;
    }


}

