<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType\CancelPoliciesAType\CancelPenaltyAType;

/**
 * Class representing AmountPercentAType
 */
class AmountPercentAType
{

    /**
     * The Amount MUST specify the monetary amount of the cancellation penalty.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * The CurrencyCode MUST specify the code of the monetary unit in which the Amount
     * is expressed. CurrencyCode MUST conform to ISO 4217, 3 character codes.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * Gets as amount
     *
     * The Amount MUST specify the monetary amount of the cancellation penalty.
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
     * The Amount MUST specify the monetary amount of the cancellation penalty.
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
     * The CurrencyCode MUST specify the code of the monetary unit in which the Amount
     * is expressed. CurrencyCode MUST conform to ISO 4217, 3 character codes.
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
     * The CurrencyCode MUST specify the code of the monetary unit in which the Amount
     * is expressed. CurrencyCode MUST conform to ISO 4217, 3 character codes.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }


}

