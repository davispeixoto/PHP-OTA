<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\PaymentScheduleAType;

/**
 * Class representing PaymentAType
 */
class PaymentAType
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
     * Specifies the Payment Number. Typically would be used to indicate the deposit as
     * well as the final payments as determined by the backend system.
     *
     * @property integer $paymentNumber
     */
    private $paymentNumber = null;

    /**
     * Specifies the Payment Due Date/Time.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dueDate
     */
    private $dueDate = null;

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
     * Gets as paymentNumber
     *
     * Specifies the Payment Number. Typically would be used to indicate the deposit as
     * well as the final payments as determined by the backend system.
     *
     * @return integer
     */
    public function getPaymentNumber()
    {
        return $this->paymentNumber;
    }

    /**
     * Sets a new paymentNumber
     *
     * Specifies the Payment Number. Typically would be used to indicate the deposit as
     * well as the final payments as determined by the backend system.
     *
     * @param integer $paymentNumber
     * @return self
     */
    public function setPaymentNumber($paymentNumber)
    {
        $this->paymentNumber = $paymentNumber;

        return $this;
    }

    /**
     * Gets as dueDate
     *
     * Specifies the Payment Due Date/Time.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Sets a new dueDate
     *
     * Specifies the Payment Due Date/Time.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dueDate
     * @return self
     */
    public function setDueDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }


}

