<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType;

/**
 * Class representing TravelAgencyServiceFeeAType
 */
class TravelAgencyServiceFeeAType
{

    /**
     * Specifies how the service fee has been determined, i.e., per person, total.
     *
     * @property string $type
     */
    private $type = null;

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
     * Remarks pertaining to the service fee.
     *
     * @property string $endorsementInfo
     */
    private $endorsementInfo = null;

    /**
     * The reason for the service fee.
     *
     * @property string $reason
     */
    private $reason = null;

    /**
     * The number identifying a document associated with the service fee.
     *
     * @property string $assocDocNumber
     */
    private $assocDocNumber = null;

    /**
     * Gets as type
     *
     * Specifies how the service fee has been determined, i.e., per person, total.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Specifies how the service fee has been determined, i.e., per person, total.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

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
     * Gets as endorsementInfo
     *
     * Remarks pertaining to the service fee.
     *
     * @return string
     */
    public function getEndorsementInfo()
    {
        return $this->endorsementInfo;
    }

    /**
     * Sets a new endorsementInfo
     *
     * Remarks pertaining to the service fee.
     *
     * @param string $endorsementInfo
     * @return self
     */
    public function setEndorsementInfo($endorsementInfo)
    {
        $this->endorsementInfo = $endorsementInfo;

        return $this;
    }

    /**
     * Gets as reason
     *
     * The reason for the service fee.
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * The reason for the service fee.
     *
     * @param string $reason
     * @return self
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Gets as assocDocNumber
     *
     * The number identifying a document associated with the service fee.
     *
     * @return string
     */
    public function getAssocDocNumber()
    {
        return $this->assocDocNumber;
    }

    /**
     * Sets a new assocDocNumber
     *
     * The number identifying a document associated with the service fee.
     *
     * @param string $assocDocNumber
     * @return self
     */
    public function setAssocDocNumber($assocDocNumber)
    {
        $this->assocDocNumber = $assocDocNumber;

        return $this;
    }


}

