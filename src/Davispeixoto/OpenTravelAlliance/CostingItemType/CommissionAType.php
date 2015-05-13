<?php

namespace Davispeixoto\OpenTravelAlliance\CostingItemType;

/**
 * Class representing CommissionAType
 */
class CommissionAType
{

    /**
     * A description for a commission item.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Value of commission as a percentage - present when Rate Code indicates a
     * percentage.
     *
     * @property float $rate
     */
    private $rate = null;

    /**
     * Indicates whether the Rate is a percentage (P) or a value (V).
     *
     * @property string $commissionType
     */
    private $commissionType = null;

    /**
     * A monetary amount.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.The ISO 4217 standard "minor unit" is typically used when
     * the amount provided includes the minor unit of currency without a decimal point
     * (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * Gets as description
     *
     * A description for a commission item.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description for a commission item.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as rate
     *
     * Value of commission as a percentage - present when Rate Code indicates a
     * percentage.
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
     * Value of commission as a percentage - present when Rate Code indicates a
     * percentage.
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
     * Gets as commissionType
     *
     * Indicates whether the Rate is a percentage (P) or a value (V).
     *
     * @return string
     */
    public function getCommissionType()
    {
        return $this->commissionType;
    }

    /**
     * Sets a new commissionType
     *
     * Indicates whether the Rate is a percentage (P) or a value (V).
     *
     * @param string $commissionType
     * @return self
     */
    public function setCommissionType($commissionType)
    {
        $this->commissionType = $commissionType;

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
     * particular currency.The ISO 4217 standard "minor unit" is typically used when
     * the amount provided includes the minor unit of currency without a decimal point
     * (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
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
     * particular currency.The ISO 4217 standard "minor unit" is typically used when
     * the amount provided includes the minor unit of currency without a decimal point
     * (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
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

