<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AirFeeType
 *
 * Defines the data fields available for the fees.
 * XSD Type: AirFeeType
 */
class AirFeeType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Identifies the code for the fee.
     *
     * @property string $feeCode
     */
    private $feeCode = null;

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
     * Indicates the tax percentage included in this fee (e.g., the Value Added Tax
     * (VAT) percentage).
     *
     * @property float $taxPercentage
     */
    private $taxPercentage = null;

    /**
     * Indicates the required modification to the element.
     *
     * @property string $operation
     */
    private $operation = null;

    /**
     * Used to indicate the type of fee (e.g. charge, refund or exempt).
     *
     * @property string $feeTransactionType
     */
    private $feeTransactionType = null;

    /**
     * A unique reference for the fee type (commonly used for modification.)
     *
     * @property string $rPH
     */
    private $rPH = null;

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
     * Gets as feeCode
     *
     * Identifies the code for the fee.
     *
     * @return string
     */
    public function getFeeCode()
    {
        return $this->feeCode;
    }

    /**
     * Sets a new feeCode
     *
     * Identifies the code for the fee.
     *
     * @param string $feeCode
     * @return self
     */
    public function setFeeCode($feeCode)
    {
        $this->feeCode = $feeCode;

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
     * Gets as taxPercentage
     *
     * Indicates the tax percentage included in this fee (e.g., the Value Added Tax
     * (VAT) percentage).
     *
     * @return float
     */
    public function getTaxPercentage()
    {
        return $this->taxPercentage;
    }

    /**
     * Sets a new taxPercentage
     *
     * Indicates the tax percentage included in this fee (e.g., the Value Added Tax
     * (VAT) percentage).
     *
     * @param float $taxPercentage
     * @return self
     */
    public function setTaxPercentage($taxPercentage)
    {
        $this->taxPercentage = $taxPercentage;

        return $this;
    }

    /**
     * Gets as operation
     *
     * Indicates the required modification to the element.
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Indicates the required modification to the element.
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * Gets as feeTransactionType
     *
     * Used to indicate the type of fee (e.g. charge, refund or exempt).
     *
     * @return string
     */
    public function getFeeTransactionType()
    {
        return $this->feeTransactionType;
    }

    /**
     * Sets a new feeTransactionType
     *
     * Used to indicate the type of fee (e.g. charge, refund or exempt).
     *
     * @param string $feeTransactionType
     * @return self
     */
    public function setFeeTransactionType($feeTransactionType)
    {
        $this->feeTransactionType = $feeTransactionType;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * A unique reference for the fee type (commonly used for modification.)
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique reference for the fee type (commonly used for modification.)
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }


}

