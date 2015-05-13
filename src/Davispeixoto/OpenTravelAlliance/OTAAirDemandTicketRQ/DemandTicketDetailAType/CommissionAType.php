<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType;

/**
 * Class representing CommissionAType
 */
class CommissionAType
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
     * The percentage value of the commission.
     *
     * @property float $percent
     */
    private $percent = null;

    /**
     * The highest monetary value that may be paid when the commission is a percent.
     * For example, the commision may be 2 percent of the fare, but the monetary value
     * may not exceed 20.00 USD.
     *
     * @property float $capAmount
     */
    private $capAmount = null;

    /**
     * When true, this is an additional commission.
     *
     * @property boolean $additionalInd
     */
    private $additionalInd = null;

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
     * Gets as percent
     *
     * The percentage value of the commission.
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * The percentage value of the commission.
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Gets as capAmount
     *
     * The highest monetary value that may be paid when the commission is a percent.
     * For example, the commision may be 2 percent of the fare, but the monetary value
     * may not exceed 20.00 USD.
     *
     * @return float
     */
    public function getCapAmount()
    {
        return $this->capAmount;
    }

    /**
     * Sets a new capAmount
     *
     * The highest monetary value that may be paid when the commission is a percent.
     * For example, the commision may be 2 percent of the fare, but the monetary value
     * may not exceed 20.00 USD.
     *
     * @param float $capAmount
     * @return self
     */
    public function setCapAmount($capAmount)
    {
        $this->capAmount = $capAmount;

        return $this;
    }

    /**
     * Gets as additionalInd
     *
     * When true, this is an additional commission.
     *
     * @return boolean
     */
    public function getAdditionalInd()
    {
        return $this->additionalInd;
    }

    /**
     * Sets a new additionalInd
     *
     * When true, this is an additional commission.
     *
     * @param boolean $additionalInd
     * @return self
     */
    public function setAdditionalInd($additionalInd)
    {
        $this->additionalInd = $additionalInd;

        return $this;
    }


}

