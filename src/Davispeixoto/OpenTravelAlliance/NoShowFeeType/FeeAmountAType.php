<?php

namespace Davispeixoto\OpenTravelAlliance\NoShowFeeType;

/**
 * Class representing FeeAmountAType
 */
class FeeAmountAType
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
     * When true indicates the amount was converted from another currency.
     *
     * @property boolean $rateConvertedInd
     */
    private $rateConvertedInd = null;

    /**
     * When true, a credit card is required when a reservation is booked or modified.
     *
     * @property boolean $guaranteeReqInd
     */
    private $guaranteeReqInd = null;

    /**
     * When true, an email address is required when a reservation is booked or
     * modified.
     *
     * @property boolean $emailRequiredInd
     */
    private $emailRequiredInd = null;

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
     * Gets as rateConvertedInd
     *
     * When true indicates the amount was converted from another currency.
     *
     * @return boolean
     */
    public function getRateConvertedInd()
    {
        return $this->rateConvertedInd;
    }

    /**
     * Sets a new rateConvertedInd
     *
     * When true indicates the amount was converted from another currency.
     *
     * @param boolean $rateConvertedInd
     * @return self
     */
    public function setRateConvertedInd($rateConvertedInd)
    {
        $this->rateConvertedInd = $rateConvertedInd;

        return $this;
    }

    /**
     * Gets as guaranteeReqInd
     *
     * When true, a credit card is required when a reservation is booked or modified.
     *
     * @return boolean
     */
    public function getGuaranteeReqInd()
    {
        return $this->guaranteeReqInd;
    }

    /**
     * Sets a new guaranteeReqInd
     *
     * When true, a credit card is required when a reservation is booked or modified.
     *
     * @param boolean $guaranteeReqInd
     * @return self
     */
    public function setGuaranteeReqInd($guaranteeReqInd)
    {
        $this->guaranteeReqInd = $guaranteeReqInd;

        return $this;
    }

    /**
     * Gets as emailRequiredInd
     *
     * When true, an email address is required when a reservation is booked or
     * modified.
     *
     * @return boolean
     */
    public function getEmailRequiredInd()
    {
        return $this->emailRequiredInd;
    }

    /**
     * Sets a new emailRequiredInd
     *
     * When true, an email address is required when a reservation is booked or
     * modified.
     *
     * @param boolean $emailRequiredInd
     * @return self
     */
    public function setEmailRequiredInd($emailRequiredInd)
    {
        $this->emailRequiredInd = $emailRequiredInd;

        return $this;
    }


}

