<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType\RateAType;

/**
 * Class representing TotalAType
 */
class TotalAType
{

    /**
     * AmountBeforeTax MUST specify the room rate before taxes are applied.
     *
     * @property float $amountBeforeTax
     */
    private $amountBeforeTax = null;

    /**
     * AmountAfterTax MUST specify the room rate after taxes are applied.
     *
     * @property float $amountAfterTax
     */
    private $amountAfterTax = null;

    /**
     * The CurrencyCode MUST specify the code of the monetary unit in which the Amount
     * is expressed. CurrencyCode MUST conform to ISO 4217, 3 character codes
     *
     * .
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * Gets as amountBeforeTax
     *
     * AmountBeforeTax MUST specify the room rate before taxes are applied.
     *
     * @return float
     */
    public function getAmountBeforeTax()
    {
        return $this->amountBeforeTax;
    }

    /**
     * Sets a new amountBeforeTax
     *
     * AmountBeforeTax MUST specify the room rate before taxes are applied.
     *
     * @param float $amountBeforeTax
     * @return self
     */
    public function setAmountBeforeTax($amountBeforeTax)
    {
        $this->amountBeforeTax = $amountBeforeTax;

        return $this;
    }

    /**
     * Gets as amountAfterTax
     *
     * AmountAfterTax MUST specify the room rate after taxes are applied.
     *
     * @return float
     */
    public function getAmountAfterTax()
    {
        return $this->amountAfterTax;
    }

    /**
     * Sets a new amountAfterTax
     *
     * AmountAfterTax MUST specify the room rate after taxes are applied.
     *
     * @param float $amountAfterTax
     * @return self
     */
    public function setAmountAfterTax($amountAfterTax)
    {
        $this->amountAfterTax = $amountAfterTax;

        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * The CurrencyCode MUST specify the code of the monetary unit in which the Amount
     * is expressed. CurrencyCode MUST conform to ISO 4217, 3 character codes
     *
     * .
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
     * is expressed. CurrencyCode MUST conform to ISO 4217, 3 character codes
     *
     * .
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

