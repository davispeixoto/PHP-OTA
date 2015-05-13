<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType;

/**
 * Class representing BestAvailableRateCandidateAType
 */
class BestAvailableRateCandidateAType
{

    /**
     * Boolean Flag indicating if length of stays are requested. Not including this
     * attribute or setting it to false impies there will be one best available rate
     * sent for all lengths of stay.
     *
     * @property boolean $sendLengthOfStayTime
     */
    private $sendLengthOfStayTime = null;

    /**
     * Boolean flag indicating the best available rate should be sent as a rate plan
     * code.
     *
     * @property boolean $sendRatePlanCode
     */
    private $sendRatePlanCode = null;

    /**
     * Boolean flag indicating the best available rate should be sent as a rate amount.
     * If this attrinbute is true, the currency code attributes may be included to
     * ensure the responder currency matches the sender currency.
     *
     * @property boolean $sendAmount
     */
    private $sendAmount = null;

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
     * Gets as sendLengthOfStayTime
     *
     * Boolean Flag indicating if length of stays are requested. Not including this
     * attribute or setting it to false impies there will be one best available rate
     * sent for all lengths of stay.
     *
     * @return boolean
     */
    public function getSendLengthOfStayTime()
    {
        return $this->sendLengthOfStayTime;
    }

    /**
     * Sets a new sendLengthOfStayTime
     *
     * Boolean Flag indicating if length of stays are requested. Not including this
     * attribute or setting it to false impies there will be one best available rate
     * sent for all lengths of stay.
     *
     * @param boolean $sendLengthOfStayTime
     * @return self
     */
    public function setSendLengthOfStayTime($sendLengthOfStayTime)
    {
        $this->sendLengthOfStayTime = $sendLengthOfStayTime;

        return $this;
    }

    /**
     * Gets as sendRatePlanCode
     *
     * Boolean flag indicating the best available rate should be sent as a rate plan
     * code.
     *
     * @return boolean
     */
    public function getSendRatePlanCode()
    {
        return $this->sendRatePlanCode;
    }

    /**
     * Sets a new sendRatePlanCode
     *
     * Boolean flag indicating the best available rate should be sent as a rate plan
     * code.
     *
     * @param boolean $sendRatePlanCode
     * @return self
     */
    public function setSendRatePlanCode($sendRatePlanCode)
    {
        $this->sendRatePlanCode = $sendRatePlanCode;

        return $this;
    }

    /**
     * Gets as sendAmount
     *
     * Boolean flag indicating the best available rate should be sent as a rate amount.
     * If this attrinbute is true, the currency code attributes may be included to
     * ensure the responder currency matches the sender currency.
     *
     * @return boolean
     */
    public function getSendAmount()
    {
        return $this->sendAmount;
    }

    /**
     * Sets a new sendAmount
     *
     * Boolean flag indicating the best available rate should be sent as a rate amount.
     * If this attrinbute is true, the currency code attributes may be included to
     * ensure the responder currency matches the sender currency.
     *
     * @param boolean $sendAmount
     * @return self
     */
    public function setSendAmount($sendAmount)
    {
        $this->sendAmount = $sendAmount;

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


}

