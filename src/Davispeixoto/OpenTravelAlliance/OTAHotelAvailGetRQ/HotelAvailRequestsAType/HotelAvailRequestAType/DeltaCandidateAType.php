<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType;

/**
 * Class representing DeltaCandidateAType
 */
class DeltaCandidateAType
{

    /**
     * Boolean flag indicating the best available rate delta is requested. If this
     * attrinbute is true, the currency code attributes may be included to ensure the
     * responder currency matches the sender currency.
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
     * Gets as sendAmount
     *
     * Boolean flag indicating the best available rate delta is requested. If this
     * attrinbute is true, the currency code attributes may be included to ensure the
     * responder currency matches the sender currency.
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
     * Boolean flag indicating the best available rate delta is requested. If this
     * attrinbute is true, the currency code attributes may be included to ensure the
     * responder currency matches the sender currency.
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

